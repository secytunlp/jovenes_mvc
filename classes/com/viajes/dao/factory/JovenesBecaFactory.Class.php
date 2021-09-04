<?php

/**
 * Factory para Jovenes Beca
 *  
 * @author Marcos
 * @since 06-05-2014
 */
class JovenesBecaFactory extends CdtGenericFactory {

    public function build($next) {

        $this->setClassName('JovenesBeca');
        $solicitudBeca = parent::build($next);

        $factory = new SolicitudFactory();
        $factory->setAlias( CPIQ_TABLE_SOLICITUD . "_" );
        $solicitudBeca->setSolicitud( $factory->build($next) );
        
        return $solicitudBeca;
    }
}
?>
