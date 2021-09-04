<?php

/**
 * Helper DAO para administrar en sesión las becas de una 
 * solicitud.
 *  
 * @author Marcos
 * @since 29-04-2014
 */
class JovenesBecaSessionDAO extends EntityDAO {

	public function getFieldsToAdd($entity){}
	
	public function getFieldsToUpdate($entity){}
	
	public function getId($entity){}
		
	public function getIdFieldName(){}
	
	public function setId($entity, $id){}
	
	public function getTableName(){}
	
	public function getEntityFactory(){}
	
	public function getVariableSessionName(){
		return "becas";
	}
	
    /**
     * se persiste la nueva entity
     * @param $entity entity a persistir.
     */
    public function addEntity( $entity, $idConn=0 ) {
    	
    	$becas = unserialize( $_SESSION[ $this->getVariableSessionName() ] );
    	
    	if( empty($becas) )
    		$becas = new ItemCollection();
    	$entity->setBl_agregado(1);
    	$this->validateOnAdd($entity);
    	$becas->addItem($entity);
        
        $_SESSION[$this->getVariableSessionName()] = serialize($becas);
        
    }
    
    /**
     */
    public function setEntities( $entities, $idConn=0 ) {
    	
        $_SESSION[$this->getVariableSessionName()] = serialize($entities);
        
    }
    
    /**
     * se modifica la entity
     * @param $entity entity a modificar.
     */
    public function updateEntity($entity, $idConn=0) {
        //TODO
    }

    /**
     * se elimina la entity
     * @param $id identificador de la entity a eliminar.
     */
    public function deleteEntity($oid, $idConn=0) {
    	
    	$oid = urldecode($oid);
    	
    	$becas = unserialize( $_SESSION[$this->getVariableSessionName()] );
    	
    	
    	$nuevosBecas = new ItemCollection();
    	foreach ($becas as $oBeca) {
    		
    		if( $oBeca->getDs_tipobeca() != $oid ){
    			$nuevosBecas->addItem($oBeca);
    		}
    	}
    	
        $_SESSION[$this->getVariableSessionName()] = serialize($nuevosBecas);
    	
    }

    /**
     * quitamos todos los becas de sesión
     */
    public function deleteAll() {
    	unset( $_SESSION[$this->getVariableSessionName()] ) ;
    	
    }
    /**
     * se obtiene una colección de entities dado el filtro de búsqueda
     * @param CdtSearchCriteria $oCriteria filtro de búsqueda.
     * @return ItemCollection
     */
    public function getEntities(CdtSearchCriteria $oCriteria, $idConn=0) {

    	if(isset($_SESSION[$this->getVariableSessionName()]))
			$becas = unserialize( $_SESSION[$this->getVariableSessionName()] );
		else 
			$becas = new ItemCollection();	

		return $becas;
    }

    /**
     * se obtiene la cantidad de entities dado el filtro de búsqueda
     * @param CdtSearchCriteria $oCriteria filtro de búsqueda.
     * @return int
     */
    public function getEntitiesCount(CdtSearchCriteria $oCriteria, $idConn=0) {
        
    	$becas = unserialize($this->getVariableSessionName() );

        return $becas->size();
    }

    /**
     * se obtiene un entity dado el filtro de búsqueda
     * @param CdtSearchCriteria $oCriteria filtro de búsqueda.
     * @return Entity
     */
    public function getEntity(CdtSearchCriteria $oCriteria, $idConn=0) {
		//TODO
    }
	
	public function getEntityById($id) {
		//TODO
    }
    
/**
	 * (non-PHPdoc)
	 * @see classes/com/entities/manager/EntityManager::validateOnAdd()
	 */
    protected function validateOnAdd(Entity $entity){
    	
    	$error = '';
    	if(CYTSecureUtils::formatDateToPersist($entity->getDt_desde())>CYTSecureUtils::formatDateToPersist($entity->getDt_hasta())){
    		$error .= CYT_MSG_BECA_DESDE_MAYOR.'<br>';
    			
    	}
    	
    	if(($entity->getBl_unlp())&&(CYTSecureUtils::formatDateToPersist($entity->getDt_desde())>CYTSecureUtils::formatDateToPersist(CYT_BECA_RANGO_FIN))){
    			$error .= CYT_MSG_BECA_FUERA_RANGO.'<br>';
    			
    		}
    	
    	if ($error) {
    		throw new GenericException( $error );
    	}
    	
    }
		
}
?>