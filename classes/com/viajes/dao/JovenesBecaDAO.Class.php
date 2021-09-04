<?php

/**
 * DAO para Jovenes Beca
 *
 * @author Marcos
 * @since 06-05-2014
 */
class JovenesBecaDAO extends EntityDAO {

	public function getTableName(){
		return CYT_TABLE_JOVENES_BECA;
	}

	public function getEntityFactory(){
		return new JovenesBecaFactory();
	}
	
	public function getFieldsToAdd($entity){
		$fieldsValues = array();
		
		$fieldsValues["cd_solicitud"] = $this->formatIfNull( $entity->getSolicitud()->getOid(), 'null' );$fieldsValues["ds_tipobeca"] = $this->formatString( $entity->getDs_tipobeca() );
		$fieldsValues["bl_unlp"] = $this->formatIfNull( $entity->getBl_unlp(), '0' );
		$fieldsValues["bl_agregado"] = $this->formatIfNull( $entity->getBl_agregado(), '0' );
		$fieldsValues["dt_desde"] = $this->formatDate( $entity->getDt_desde() );
		$fieldsValues["dt_hasta"] = $this->formatDate( $entity->getDt_hasta() );
		
		
		return $fieldsValues;
		
	}
	
	public function getFromToSelect(){
		
		$tJovenesBeca = $this->getTableName();
		
		$tSolicitud = DAOFactory::getSolicitudDAO()->getTableName();
		
		
		
        $sql  = parent::getFromToSelect();
        $sql .= " LEFT JOIN " . $tSolicitud . " ON($tJovenesBeca.cd_solicitud = $tSolicitud.cd_solicitud)";
       
      
        
      
       
        return $sql;
	}
	
	public function getFieldsToSelect(){
		
		
		
		$fields = parent::getFieldsToSelect();
		
        
        $tSolicitud = DAOFactory::getSolicitudDAO()->getTableName();
        $fields[] = "$tSolicitud.cd_solicitud as " . $tSolicitud . "_oid ";
       
               
        return $fields;
	}	
	
	
	public function deleteJovenesBecaPorSolicitud($solicitud_oid, $idConn=0) {
    	
        $db = CdtDbManager::getConnection( $idConn );

        
        
        $tableName = $this->getTableName();

        $sql = "DELETE FROM $tableName WHERE cd_solicitud = $solicitud_oid ";

        CdtUtils::log($sql, __CLASS__,LoggerLevel::getLevelDebug());
        
        $result = $db->sql_query($sql);
        if (!$result)//hubo un error en la bbdd.
            throw new DBException($db->sql_error());
    }
}
?>