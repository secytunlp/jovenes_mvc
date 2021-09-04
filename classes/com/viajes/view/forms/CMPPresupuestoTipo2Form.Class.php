<?php

/**
 * Formulario para presupuesto tipo 2 de solicitud
 *  
 * @author Marcos
 * @since 01-05-2014
 */
class CMPPresupuestoTipo2Form extends CMPForm{


	public function getRenderer(){
		return new CMPPresupuestoTipo2FormRenderer();
	}
	
	public function getLegend(){
		return '<div style="color:#A43B3B; font-weight:bold">'.CYT_MSG_ASIGNAR_AVISO.'</div>';
	}
	
	/**
	 * se construye el formulario para editar un detalle de venta
	 */
	public function __construct($action="add_presupuesto_tipo2_session",$id="edit_presupuesto_tipo2") {

		parent::__construct($id, CYT_MSG_ASIGNAR);
		
		$this->setCancelLabel( null );
		
		//properties del form.
    	$this->addProperty("method", "POST");
		$this->setAction("doAction?action=$action");
		$this->addHidden( FieldBuilder::buildInputHidden ( "oid", "") );
		
		$this->setUseAjaxSubmit( true );
		
		$this->getRenderer()->setTemplateName( CYT_CMP_TEMPLATE_FORM_INLINE_TIPO2 );
		
		$this->setOnSuccessCallback("add_presupuesto_tipo2");
		$this->setBeforeSubmit("before_submit_presupuesto_tipo2");
		

		$fieldset = new FormFieldset( $this->getLegend() );
		
		
		$fieldset->addField( FieldBuilder::buildFieldDate ( CYT_LBL_PRESUPUESTO_DATE, "dt_fecha_tipo2", CYT_MSG_PRESUPUESTO_FECHA_REQUIRED) );
		
		
		
		$field = FieldBuilder::buildFieldSelect (CYT_LBL_PRESUPUESTO_CONCEPTO, "ds_presupuesto", Concepto::getItems(), CYT_MSG_PRESUPUESTO_CONCEPTO_REQUIRED, null, null, "--seleccionar--" );
		$field->getInput()->addProperty( 'onChange', 'seleccionarConcepto(this)' );
		$fieldset->addField( $field );
		
		$field = FieldBuilder::buildFieldText ( CYT_LBL_PRESUPUESTO_DIAS, "ds_dias",CYT_MSG_PRESUPUESTO_DIAS_REQUIRED,"",10) ;
		$field->getInput()->setIsVisible(false);
		$fieldset->addField( $field );
		
		$field = FieldBuilder::buildFieldText ( CYT_LBL_PRESUPUESTO_LUGAR, "ds_lugar",CYT_MSG_PRESUPUESTO_LUGAR_REQUIRED) ;
		$field->getInput()->setIsVisible(false);
		$fieldset->addField( $field );
		
		$field = FieldBuilder::buildFieldSelect (CYT_LBL_PRESUPUESTO_PASAJES, "ds_pasajes", Pasaje::getItems(), CYT_MSG_PRESUPUESTO_PASAJES_REQUIRED, null, null, "--seleccionar--" );
		$field->getInput()->setIsVisible(false);
		$fieldset->addField( $field );
		
		$field = FieldBuilder::buildFieldText ( CYT_LBL_PRESUPUESTO_DESTINO, "ds_destino",CYT_MSG_PRESUPUESTO_DESTINO_REQUIRED) ;
		$field->getInput()->setIsVisible(false);
		$fieldset->addField( $field );
		
		$field = FieldBuilder::buildFieldText ( CYT_LBL_PRESUPUESTO_DESCRIPCION, "ds_inscripcion",CYT_MSG_PRESUPUESTO_DESCRIPCION_REQUIRED) ;
		$field->getInput()->setIsVisible(false);
		$fieldset->addField( $field );
		
		$field = FieldBuilder::buildFieldText ( CYT_LBL_PRESUPUESTO_DESCRIPCION, "ds_otros",CYT_MSG_PRESUPUESTO_DESCRIPCION_REQUIRED) ;
		$field->getInput()->setIsVisible(false);
		$fieldset->addField( $field );
		
		$fieldset->addField( FieldBuilder::buildFieldNumber ( CYT_LBL_MONTO_IMPORTE, "nu_montopresupuesto", CYT_MSG_MONTO_IMPORTE_REQUIRED,"",10) );
		
		
		$this->addFieldset($fieldset);
		
		$this->setCustomHTML('<script> $(function() {$("#concepto_oid").change();});</script>');
		
    }
    
}
?>
