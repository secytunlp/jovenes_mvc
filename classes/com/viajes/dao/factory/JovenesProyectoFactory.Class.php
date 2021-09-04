<?php

/**
 * Factory para Jovenes Proyecto
 *  
 * @author Marcos
 * @since 06-05-2014
 */
class JovenesProyectoFactory extends CdtGenericFactory {

    public function build($next) {
		
        $this->setClassName('JovenesProyecto');
        $solicitudProyecto = parent::build($next);
    	if(array_key_exists('dt_desde',$next)){
        	$solicitudProyecto->setDt_desdeproyecto( $next["dt_desde"] );
        }
    	if(array_key_exists('dt_hasta',$next)){
        	$solicitudProyecto->setDt_hastaproyecto( $next["dt_hasta"] );
        }

        $factory = new SolicitudFactory();
        $factory->setAlias( CYT_TABLE_SOLICITUD . "_" );
        $solicitudProyecto->setSolicitud( $factory->build($next) );
        
   		$factory = new ProyectoFactory();
        $factory->setAlias( CYT_TABLE_PROYECTO . "_" );
        $solicitudProyecto->setProyecto( $factory->build($next) );
        
        
      
        
   		
        
        return $solicitudProyecto;
    }
}
?>
