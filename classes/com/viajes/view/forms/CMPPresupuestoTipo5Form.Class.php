<?php

/**
 * Formulario para presupuesto tipo 5 de solicitud
 *  
 * @author Marcos
 * @since 05-05-2014
 */
class CMPPresupuestoTipo5Form extends CMPForm{


	public function getRenderer(){
		return new CMPPresupuestoFormRenderer();
	}
	
	public function getLegend(){
		return '<div style="color:#A43B3B; font-weight:bold">'.CYT_MSG_ASIGNAR_AVISO.'</div>';
	}
	
	/**
	 * se construye el formulario para editar un detalle de venta
	 */
	public function __construct($action="add_presupuesto_tipo5_session",$id="edit_presupuesto_tipo5") {

		parent::__construct($id, CYT_MSG_ASIGNAR);
		
		$this->setCancelLabel( null );
		
		//properties del form.
    	$this->addProperty("method", "POST");
		$this->setAction("doAction?action=$action");
		$this->addHidden( FieldBuilder::buildInputHidden ( "oid", "") );
		
		$this->setUseAjaxSubmit( true );
		
		$this->getRenderer()->setTemplateName( CDT_CMP_TEMPLATE_FORM_INLINE );
		
		$this->setOnSuccessCallback("add_presupuesto_tipo5");
		$this->setBeforeSubmit("before_submit_presupuesto_tipo5");
		

		$fieldset = new FormFieldset( $this->getLegend() );
		
		
		$fieldset->addField( FieldBuilder::buildFieldDate ( CYT_LBL_PRESUPUESTO_DATE, "dt_fecha_tipo5", CYT_MSG_PRESUPUESTO_FECHA_REQUIRED) );
				
		$field = FieldBuilder::buildFieldText ( CYT_LBL_PRESUPUESTO_CONCEPTO, "ds_presupuesto",CYT_MSG_PRESUPUESTO_CONCEPTO_REQUIRED,"",50) ;
		$fieldset->addField( $field );
		
		$fieldset->addField( FieldBuilder::buildFieldNumber ( CYT_LBL_MONTO_IMPORTE, "nu_montopresupuesto", CYT_MSG_MONTO_IMPORTE_REQUIRED,"",10) );
		
		
		$this->addFieldset($fieldset);
		
		
		
    }
    
}
?>
