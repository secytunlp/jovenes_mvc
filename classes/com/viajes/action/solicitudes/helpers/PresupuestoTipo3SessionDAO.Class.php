<?php

/**
 * Helper DAO para administrar en sesión los presupuestos tipo 3 de una 
 * solicitud.
 *  
 * @author Marcos
 * @since 05-05-2014
 */
class PresupuestoTipo3SessionDAO extends EntityDAO {

	public function getFieldsToAdd($entity){}
	
	public function getFieldsToUpdate($entity){}
	
	public function getId($entity){}
		
	public function getIdFieldName(){}
	
	public function setId($entity, $id){}
	
	public function getTableName(){}
	
	public function getEntityFactory(){}
	
	public function getVariableSessionName(){
		return "presupuestosTipo3";
	}
	
    /**
     * se persiste la nueva entity
     * @param $entity entity a persistir.
     */
    public function addEntity( $entity, $idConn=0 ) {
    	
    	$presupuestosTipo3 = unserialize( $_SESSION[ $this->getVariableSessionName() ] );
    	
    	if( empty($presupuestosTipo3) )
    		$presupuestosTipo3 = new ItemCollection();
    	$this->validateOnAdd($entity);
    	$presupuestosTipo3->addItem($entity);
        
        $_SESSION[$this->getVariableSessionName()] = serialize($presupuestosTipo3);
        
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
    	
    	$presupuestosTipo3 = unserialize( $_SESSION[$this->getVariableSessionName()] );
    	$nuevosPresupuestosTipo3 = new ItemCollection();
    	foreach ($presupuestosTipo3 as $oPresupuesto) {
	    	$ds_presupuesto = $oPresupuesto->getDs_presupuesto();
	    	
			
			CdtUtils::log('Presu: '.$ds_presupuesto);
			
    		if( $ds_presupuesto != $oid ){
    			$nuevosPresupuestosTipo3->addItem($oPresupuesto);
    		}
    	}
    	
        $_SESSION[$this->getVariableSessionName()] = serialize($nuevosPresupuestosTipo3);
    	
    }

    /**
     * quitamos todos los presupuestosTipo3 de sesión
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
			$presupuestosTipo3 = unserialize( $_SESSION[$this->getVariableSessionName()] );
		else 
			$presupuestosTipo3 = new ItemCollection();	

		return $presupuestosTipo3;
    }

    /**
     * se obtiene la cantidad de entities dado el filtro de búsqueda
     * @param CdtSearchCriteria $oCriteria filtro de búsqueda.
     * @return int
     */
    public function getEntitiesCount(CdtSearchCriteria $oCriteria, $idConn=0) {
        
    	$presupuestosTipo3 = unserialize($this->getVariableSessionName() );

        return $presupuestosTipo3->size();
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
    		
    	/*if((CYTSecureUtils::formatDateToPersist($entity->getDt_fecha_tipo3())<CYTSecureUtils::formatDateToPersist(CYT_RANGO_INI.CYT_PERIODO_YEAR))||(CYTSecureUtils::formatDateToPersist($entity->getDt_fecha_tipo3())>CYTSecureUtils::formatDateToPersist(CYT_RANGO_FIN.((int)CYT_PERIODO_YEAR+1)))){
    			$error .= CYT_MSG_PRESUPUESTO_FECHA_FUERA_RANGO.'<br>';
    			
    		}*/
    		
    	if((CYTSecureUtils::formatDateToPersist($entity->getDt_fecha_tipo3())<CYTSecureUtils::formatDateToPersist(CYT_RANGO_INI.CYT_PERIODO_YEAR))){
    			$error .= CYT_MSG_PRESUPUESTO_FECHA_MENOR.CYT_RANGO_INI.CYT_PERIODO_YEAR.'<br>';
    			
    		}		
    		
    	
    	if ($error) {
    		throw new GenericException( $error );
    	}
    }
		
}
?>