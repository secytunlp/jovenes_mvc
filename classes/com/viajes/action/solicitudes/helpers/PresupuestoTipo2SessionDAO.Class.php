<?php

/**
 * Helper DAO para administrar en sesión los presupuestos tipo 2 de una 
 * solicitud.
 *  
 * @author Marcos
 * @since 01-05-2014
 */
class PresupuestoTipo2SessionDAO extends EntityDAO {

	public function getFieldsToAdd($entity){}
	
	public function getFieldsToUpdate($entity){}
	
	public function getId($entity){}
		
	public function getIdFieldName(){}
	
	public function setId($entity, $id){}
	
	public function getTableName(){}
	
	public function getEntityFactory(){}
	
	public function getVariableSessionName(){
		return "presupuestosTipo2";
	}
	
    /**
     * se persiste la nueva entity
     * @param $entity entity a persistir.
     */
    public function addEntity( $entity, $idConn=0 ) {
    	
    	$presupuestosTipo2 = unserialize( $_SESSION[ $this->getVariableSessionName() ] );
    	
    	if( empty($presupuestosTipo2) )
    		$presupuestosTipo2 = new ItemCollection();
    	$this->validateOnAdd($entity);
    	$presupuestosTipo2->addItem($entity);
        
        $_SESSION[$this->getVariableSessionName()] = serialize($presupuestosTipo2);
        
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
    	
    	$presupuestosTipo2 = unserialize( $_SESSION[$this->getVariableSessionName()] );
    	$nuevosPresupuestosTipo2 = new ItemCollection();
    	foreach ($presupuestosTipo2 as $oPresupuesto) {
	    	$ds_presupuesto = $oPresupuesto->getDs_presupuesto().' - ';
	    	
			switch ($oPresupuesto->getDs_presupuesto()) {
					case CYT_CD_VIATICO:
					
					$ds_presupuesto .= CYT_LBL_PRESUPUESTO_DIAS.': '.$oPresupuesto->getDs_dias().' - '.CYT_LBL_PRESUPUESTO_LUGAR.': '.$oPresupuesto->getDs_lugar();
					break;
					
					case CYT_DS_PASAJE:
					
					$ds_presupuesto .= $oPresupuesto->getDs_pasajes().' - '.CYT_LBL_PRESUPUESTO_DESTINO.': '.$oPresupuesto->getDs_destino();
					break;
					
					case CYT_CD_INSCRIPCION:
					$ds_presupuesto .= CYT_LBL_PRESUPUESTO_DESCRIPCION.': '.$oPresupuesto->getDs_inscripcion();
					break;
					
					case CYT_CD_OTROS:
					$ds_presupuesto .= CYT_LBL_PRESUPUESTO_DESCRIPCION.': '.$oPresupuesto->getDs_otros();
					break;
				}
			
    		if( $ds_presupuesto != $oid ){
    			$nuevosPresupuestosTipo2->addItem($oPresupuesto);
    		}
    	}
    	
        $_SESSION[$this->getVariableSessionName()] = serialize($nuevosPresupuestosTipo2);
    	
    }

    /**
     * quitamos todos los presupuestosTipo2 de sesión
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
			$presupuestosTipo2 = unserialize( $_SESSION[$this->getVariableSessionName()] );
		else 
			$presupuestosTipo2 = new ItemCollection();	

		return $presupuestosTipo2;
    }

    /**
     * se obtiene la cantidad de entities dado el filtro de búsqueda
     * @param CdtSearchCriteria $oCriteria filtro de búsqueda.
     * @return int
     */
    public function getEntitiesCount(CdtSearchCriteria $oCriteria, $idConn=0) {
        
    	$presupuestosTipo2 = unserialize($this->getVariableSessionName() );

        return $presupuestosTipo2->size();
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
    		
    	/*if((CYTSecureUtils::formatDateToPersist($entity->getDt_fecha_tipo2())<CYTSecureUtils::formatDateToPersist(CYT_RANGO_INI.CYT_PERIODO_YEAR))||(CYTSecureUtils::formatDateToPersist($entity->getDt_fecha_tipo2())>CYTSecureUtils::formatDateToPersist(CYT_RANGO_FIN.((int)CYT_PERIODO_YEAR+1)))){
    			$error .= CYT_MSG_PRESUPUESTO_FECHA_FUERA_RANGO.'<br>';
    			
    		}*/
    	
    	if((CYTSecureUtils::formatDateToPersist($entity->getDt_fecha_tipo2())<CYTSecureUtils::formatDateToPersist(CYT_RANGO_INI.CYT_PERIODO_YEAR))){
    			$error .= CYT_MSG_PRESUPUESTO_FECHA_MENOR.CYT_RANGO_INI.CYT_PERIODO_YEAR.'<br>';
    			
    		}	
    		
    		
    		
    	
    	if ($error) {
    		throw new GenericException( $error );
    	}
    }
		
}
?>