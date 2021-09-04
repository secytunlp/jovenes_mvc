<?php

/**
 * Formulario para beca de solicitud
 *  
 * @author Marcos
 * @since 29-04-2014
 */
class CMPBecaForm extends CMPForm{


	public function getLegend(){
		return '<div style="color:#A43B3B; font-weight:bold">'.CYT_MSG_ASIGNAR_AVISO.'</div>';
	}
	
	/**
	 * se construye el formulario para editar un detalle de venta
	 */
	public function __construct($action="add_beca_session",$id="edit_beca") {

		parent::__construct($id, CYT_MSG_ASIGNAR);
		
		$this->setCancelLabel( null );
		
		//properties del form.
    	$this->addProperty("method", "POST");
		$this->setAction("doAction?action=$action");
		$this->addHidden( FieldBuilder::buildInputHidden ( "oid", "") );
		
		$this->setUseAjaxSubmit( true );
		
		$this->getRenderer()->setTemplateName( CDT_CMP_TEMPLATE_FORM_INLINE );
		
		$this->setOnSuccessCallback("add_beca");
		$this->setBeforeSubmit("before_submit_beca");
		

		$fieldset = new FormFieldset( $this->getLegend() );
		$fieldset->addField( FieldBuilder::buildFieldText ( CYT_LBL_SOLICITUD_BECA_NIVEL, "ds_tipobeca", CYT_MSG_BECA_TIPO_REQUIRED,"",25) );
		$fieldset->addField( FieldBuilder::buildFieldCheckbox ( CYT_LBL_SOLICITUD_BECARIO_UNLP, "bl_unlp", "bl_unlp") );
		$fieldset->addField( FieldBuilder::buildFieldDate ( CYT_LBL_SOLICITUD_BECA_DESDE, "dt_desde", CYT_MSG_BECA_DESDE_REQUIRED) );
		$fieldset->addField( FieldBuilder::buildFieldDate ( CYT_LBL_SOLICITUD_BECA_HASTA, "dt_hasta", CYT_MSG_BECA_HASTA_REQUIRED) );
		
		$this->addFieldset($fieldset);
		
    }
    
}
?>
