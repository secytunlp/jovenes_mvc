<?php

/**
 * Implementación para renderizar un formulario de solicitud 
 *
 * @author Marcos
 * @since 11-12-2013
 *
 */
class CMPSolicitudFormRenderer extends DefaultFormRenderer {

	 protected function getXTemplate() {
    	return new XTemplate( CYT_TEMPLATE_SOLICITUD_FORM );
    }
	
	
	protected function renderFieldset(CMPForm $form, XTemplate $xtpl){
		$xtpl->assign("titulo_domicilio", CYT_MSG_SOLICITUD_DOMICILIO_TITULO);
		$xtpl->assign("titulo_tipo_investigador", CYT_MSG_SOLICITUD_TIPO_INVESTIGADOR_TITULO);
		foreach ($form->getFieldsets() as $fieldset) {
			
			//legend
			$legend = $fieldset->getLegend();
			if(!empty($legend)){
				$xtpl->assign("value", $legend);
				$xtpl->parse("main.fieldset.legend");
			}
			
			
			$fields = $fieldset->getFields();
			$fieldInvestigador = $fields['ds_investigador'];		
			$input = $fieldInvestigador->getInput();
			$label = $fieldInvestigador->getLabel();	
			$this->renderLabel( $label, $input, $xtpl );
			$this->renderInput( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldInvestigador->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.fieldset.column.ds_investigador");
			
			$fieldCUIL = $fields['nu_cuil'];		
			$input = $fieldCUIL->getInput();
			$label = $fieldCUIL->getLabel();	
			$this->renderLabel( $label, $input, $xtpl );
			$this->renderInput( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldCUIL->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.fieldset.column.nu_cuil");
			
			
			
			$xtpl->parse("main.fieldset.column");
			
			
			$xtpl->parse("main.fieldset");
			$xtpl->assign("domicilio_tab", CYT_MSG_SOLICITUD_TAB_DOMICILIO);
			$fieldCalle = $fields['ds_calle'];		
			$input = $fieldCalle->getInput();
			$label = $fieldCalle->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldCalle->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.ds_calle");
			
			$fieldNro = $fields['nu_nro'];		
			$input = $fieldNro->getInput();
			$label = $fieldNro->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldNro->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.nu_nro");
			
			$fieldPiso = $fields['nu_piso'];		
			$input = $fieldPiso->getInput();
			$label = $fieldPiso->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldPiso->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.nu_piso");
			
			$fieldDepto = $fields['ds_depto'];		
			$input = $fieldDepto->getInput();
			$label = $fieldDepto->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldDepto->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.ds_depto");
			
			$fieldCP = $fields['nu_cp'];		
			$input = $fieldCP->getInput();
			$label = $fieldCP->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldCP->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.nu_cp");
			$fieldMail = $fields['ds_mail'];		
			$input = $fieldMail->getInput();
			$label = $fieldMail->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldMail->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.ds_mail");
			$fieldNotificacion = $fields['bl_notificacion'];		
			$input = $fieldNotificacion->getInput();
			$label = $fieldNotificacion->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldNotificacion->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.bl_notificacion");
			$fieldTelefono = $fields['nu_telefono'];		
			$input = $fieldTelefono->getInput();
			$label = $fieldTelefono->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldTelefono->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.nu_telefono");
			
			$fieldNacimiento = $fields['dt_nacimiento'];		
			$input = $fieldNacimiento->getInput();
			$label = $fieldNacimiento->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldNacimiento->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.dt_nacimiento");
			
			$xtpl->assign("universidad_tab", CYT_MSG_SOLICITUD_TAB_UNIVERSIDAD);
			
			
			$field = $fields['solicitud_filter_titulo_oid'];		
			$input = $field->getInput();
			$label = $field->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $field->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.solicitud_filter_titulo_oid");
			$field = $fields['dt_egresogrado'];		
			$input = $field->getInput();
			$label = $field->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $field->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.dt_egresogrado");
			
			$field = $fields['solicitud_filter_tituloposgrado_oid'];		
			$input = $field->getInput();
			$label = $field->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $field->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.solicitud_filter_tituloposgrado_oid");
			$field = $fields['dt_egresoposgrado'];		
			$input = $field->getInput();
			$label = $field->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $field->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.dt_egresoposgrado");
			$field = $fields['bl_doctorado'];		
			$input = $field->getInput();
			$label = $field->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $field->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.bl_doctorado");
			
			$fieldLugarTrabajo = $fields['solicitud_filter_lugarTrabajo_oid'];		
			$input = $fieldLugarTrabajo->getInput();
			$label = $fieldLugarTrabajo->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldLugarTrabajo->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.solicitud_filter_lugarTrabajo_oid");
			
						
			$fieldCargo = $fields['cargo_oid'];		
			$input = $fieldCargo->getInput();
			$label = $fieldCargo->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldCargo->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.cargo_oid");
			
			$fieldDedDoc = $fields['deddoc_oid'];		
			$input = $fieldDedDoc->getInput();
			$label = $fieldDedDoc->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldDedDoc->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.deddoc_oid");
			
			$fieldFacultad = $fields['facultad_oid'];		
			$input = $fieldFacultad->getInput();
			$label = $fieldFacultad->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldFacultad->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.facultad_oid");
			
			$fieldDisciplina = $fields['ds_disciplina'];		
			$input = $fieldDisciplina->getInput();
			$label = $fieldDisciplina->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldDisciplina->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.ds_disciplina");
			
			
			
			$xtpl->assign("becario_tab", CYT_MSG_SOLICITUD_TAB_BECARIO);
			
			
			$fieldOrgBeca = $fields['ds_orgbeca'];		
			$input = $fieldOrgBeca->getInput();
			$label = $fieldOrgBeca->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldOrgBeca->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.ds_orgbeca");
			
			$fieldTipoBeca = $fields['ds_tipobeca'];		
			$input = $fieldTipoBeca->getInput();
			$label = $fieldTipoBeca->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldTipoBeca->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.ds_tipobeca");
			
			$field = $fields['dt_becadesde'];		
			$input = $field->getInput();
			$label = $field->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $field->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.dt_becadesde");
			
			$field = $fields['dt_becahasta'];		
			$input = $field->getInput();
			$label = $field->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $field->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.dt_becahasta");
			
			$fieldLugarTrabajoBeca = $fields['solicitud_filter_lugarTrabajoBeca_oid'];		
			$input = $fieldLugarTrabajoBeca->getInput();
			$label = $fieldLugarTrabajoBeca->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldLugarTrabajoBeca->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.solicitud_filter_lugarTrabajoBeca_oid");
			
			$xtpl->assign("carrerainv_tab", CYT_MSG_SOLICITUD_TAB_CARRERAINV);
			
			$fieldInstitucion = $fields['organismo_oid'];		
			$input = $fieldInstitucion->getInput();
			$label = $fieldInstitucion->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldInstitucion->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.organismo_oid");
			
			$fieldCarreraInv = $fields['carrerainv_oid'];		
			$input = $fieldCarreraInv->getInput();
			$label = $fieldCarreraInv->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldCarreraInv->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.carrerainv_oid");
			
			$fieldIngreso = $fields['dt_ingreso'];		
			$input = $fieldIngreso->getInput();
			$label = $fieldIngreso->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldIngreso->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.dt_ingreso");
			
			$fieldLugarTrabajoCarrerainv = $fields['solicitud_filter_lugarTrabajoCarrerainv_oid'];		
			$input = $fieldLugarTrabajoCarrerainv->getInput();
			$label = $fieldLugarTrabajoCarrerainv->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldLugarTrabajoCarrerainv->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.solicitud_filter_lugarTrabajoCarrerainv_oid");
			
			$xtpl->assign("proyectos_tab", CYT_MSG_SOLICITUD_TAB_PROYECTOS);
			$field = $fields['bl_director'];		
			$input = $field->getInput();
			$label = $field->getLabel();	
	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $field->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.bl_director");
			$HTMLProyectos = $this->getHTMLProyectos($xtpl);
			$xtpl->assign("HTMLProyectos", $HTMLProyectos);
			
			$xtpl->assign("descripcion_tab", CYT_MSG_SOLICITUD_TAB_DESCRIPCION);
			$fieldFacultadplanilla = $fields['facultadplanilla_oid'];		
			$input = $fieldFacultadplanilla->getInput();
			$label = $fieldFacultadplanilla->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldFacultadplanilla->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.facultadplanilla_oid");
			
			
			
			$fieldObjetivo = $fields['ds_objetivo'];		
			$input = $fieldObjetivo->getInput();
			$label = $fieldObjetivo->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $fieldObjetivo->getMinWidth());
			
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');
				
			}
			else $xtpl->assign("display", 'none');
			
			$xtpl->parse("main.ds_objetivo");
			
			//$xtpl->assign("minWidth", $fieldObjetivo->getMinWidth());
			
			
			
			
			
			$field = $fields['ds_justificacion'];		
			$input = $field->getInput();
			$label = $field->getLabel();	
			$this->renderLabelTab( $label, $input, $xtpl );
			$this->renderInputTab( $input, $xtpl );
			$xtpl->assign("minWidth", $field->getMinWidth());					
			if( $input->getIsVisible() ){
				$xtpl->assign("display", 'block');	
			}
			else $xtpl->assign("display", 'none');
			$xtpl->parse("main.ds_justificacion");
			
			$xtpl->assign("value", CYT_LBL_SOLICITUD_A_CURRICULUM );
			$xtpl->assign("required", "*" );
			$xtpl->parse("main.ds_curriculum.label");
			$xtpl->assign("actionFile", "doAction?action=add_file_session" );
			$xtpl->parse("main.ds_curriculum.input");
			$xtpl->assign("display", 'block');
			$xtpl->assign("label_curriculum", CYT_LBL_SOLICITUD_A_CURRICULUM_SIGEVA);
			$hiddens = $form->getHiddens();
			$hiddenDs_curriculum = $hiddens['ds_curriculum'];	
				
			if ($hiddenDs_curriculum->getInputValue()) {
				$xtpl->assign("ds_curriculum_cargado", '<span style="color:#009900; font-weight:bold">'.CYT_MSG_FILE_UPLOAD_EXITO.$hiddenDs_curriculum->getInputValue().'</span>');
			}
			$xtpl->parse("main.ds_curriculum");
			
			
		} 
	}

	
	
	
	/**
	 * renderizamos en el formulario de solicitud los proyectos que tiene en ejecucion.
	 
	 *
	 * @param CMPForm $form
	 * @param XTemplate $xtpl
	 */
	protected function getHTMLProyectos(XTemplate $xtpl){
	
		$xtpl_proyectos = new XTemplate( CYT_TEMPLATE_SOLICITUD_EDIT_PROYECTOS );
	
		//mostrar las proyectos actuales.
		//$xtpl_proyectos->assign('proyectos_title', CYT_MSG_UNIDAD_FACULTAD );
	
		//TODO parsear labels.
		$this->parseProyectosLabels($xtpl_proyectos);
		 
		//recuperamos las proyectos de la unidad desde la sesión.
		$manager = new SolicitudProyectoSessionManager();
		$proyectos = $manager->getEntities( new CdtSearchCriteria() );
		 
		//parseamos los proyectos.
		$this->parseProyectos($proyectos, $xtpl_proyectos);
		 
		
		$xtpl_proyectos->parse("main");
	
		return $xtpl_proyectos->text("main");
	
	}
	
/**
	 * renderizamos en el formulario de solicitud las becas anteriores.
	 
	 *
	 * @param CMPForm $form
	 * @param XTemplate $xtpl
	 */
	protected function getHTMLBecas(CMPForm $form){	

		$xtpl_becas = new XTemplate( CYT_TEMPLATE_SOLICITUD_EDIT_BECAS );
		
		//mostrar las becas actuales.
		//$xtpl_becas->assign('becas_title', CYT_MSG_SOLICITUD_BECAS_TITULO );
		
    	//TODO parsear labels.
    	$this->parseBecasLabels($xtpl_becas);
    	
		//recuperamos las becas de la solicitud desde la sesión.
		$manager = new JovenesBecaSessionManager();
    	$becas = $manager->getEntities( new CdtSearchCriteria() );
    	
    	//parseamos los becas.
    	$this->parseBecas($becas, $form, $xtpl_becas);
    	
    	//formulario para agregar un nuevo beca a la solicitud.
    	if( $form->getIsEditable() ){
    		$becaForm = new CMPBecaForm();
			$xtpl_becas->assign('formulario', $becaForm->show() );
    	}
		$xtpl_becas->parse("main");
		
		return $xtpl_becas->text("main") ;

	}
	
/**
	 * renderizamos en el formulario de solicitud los proyectos anteriores.
	 
	 *
	 * @param CMPForm $form
	 * @param XTemplate $xtpl
	 */
	protected function getHTMLJovenesProyectos(CMPForm $form){	

		$xtpl = new XTemplate( CYT_TEMPLATE_SOLICITUD_EDIT_JOVENESPROYECTOS );
		
		//mostrar las becas actuales.
		$xtpl->assign('jovenesProyectos_title', CYT_MSG_SOLICITUD_PROYECTOS_ANTERIORES_TITULO );
		
    	//TODO parsear labels.
    	$this->parseJovenesProyectosLabels($xtpl);
    	
		//recuperamos los proyectos de la solicitud desde la sesión.
		$manager = new JovenesProyectoSessionManager();
    	$proyectos = $manager->getEntities( new CdtSearchCriteria() );
    	
    	//parseamos los proyectos.
    	$this->parseJovenesProyectos($proyectos, $form, $xtpl);
    	
    	//formulario para agregar un nuevo beca a la solicitud.
    	if( $form->getIsEditable() ){
    		$form = new CMPJovenesProyectoForm();
			$xtpl->assign('formulario', $form->show() );
    	}
		$xtpl->parse("main");
		
		return $xtpl->text("main") ;

	}
	
	
/**
	 * renderizamos en el formulario de solicitud los presupuestos.
	 
	 *
	 * @param CMPForm $form
	 * @param XTemplate $xtpl
	 */
	protected function getHTMLPresupuesto(CMPForm $form){	

		$xtpl_presupuestos = new XTemplate( CYT_TEMPLATE_SOLICITUD_EDIT_PRESUPUESTOS );
		
		//presupuestos tipo 1
		$presupuestos_tipo1HTML = $this->getHTMLPresupuestoTipo1($form);
		$xtpl_presupuestos->assign('tipo_1', $presupuestos_tipo1HTML );
		
		//presupuestos tipo 2
		$presupuestos_tipo2HTML = $this->getHTMLPresupuestoTipo2($form);
		$xtpl_presupuestos->assign('tipo_2', $presupuestos_tipo2HTML );
		
		//presupuestos tipo 3
		$presupuestos_tipo3HTML = $this->getHTMLPresupuestoTipo3($form);
		$xtpl_presupuestos->assign('tipo_3', $presupuestos_tipo3HTML );
		
		//presupuestos tipo 4
		$presupuestos_tipo4HTML = $this->getHTMLPresupuestoTipo4($form);
		$xtpl_presupuestos->assign('tipo_4', $presupuestos_tipo4HTML );
		
		//presupuestos tipo 5
		$presupuestos_tipo5HTML = $this->getHTMLPresupuestoTipo5($form);
		$xtpl_presupuestos->assign('tipo_5', $presupuestos_tipo5HTML );
		
		$xtpl_presupuestos->assign('total_gral_lbl', CYT_LBL_PRESUPUESTO_TOTAL );
		
		$xtpl_presupuestos->parse("main");
		
		return $xtpl_presupuestos->text("main") ;

	}
	
/**
	 * renderizamos en el formulario de solicitud los presupuestos tipo 1.
	 
	 *
	 * @param CMPForm $form
	 * @param XTemplate $xtpl
	 */
	protected function getHTMLPresupuestoTipo1(CMPForm $form){	

		$xtpl_presupuestos_tipo1 = new XTemplate( CYT_TEMPLATE_SOLICITUD_EDIT_PRESUPUESTOS_TIPO1 );
		
		//mostrar los presupuestos_tipo1 actuales.
		$xtpl_presupuestos_tipo1->assign('presupuestos_tipo1_title', CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_1_TITULO );
		
    	//TODO parsear labels.
    	$this->parsePresupuestosTipo1Labels($xtpl_presupuestos_tipo1);
    	
		//recuperamos los presupuestos_tipo1 de la solicitud desde la sesión.
		$manager = new PresupuestoTipo1SessionManager();
    	$presupuestos = $manager->getEntities( new CdtSearchCriteria() );
    	
    	//parseamos los presupuestos.
    	$this->parsePresupuestosTipo1($presupuestos, $form, $xtpl_presupuestos_tipo1);
    	
    	//formulario para agregar un nuevo presupuesto a la solicitud.
    	if( $form->getIsEditable() ){
    		$presupuestoForm = new CMPPresupuestoTipo1Form();
			$xtpl_presupuestos_tipo1->assign('formulario', $presupuestoForm->show() );
    	}
		$xtpl_presupuestos_tipo1->parse("main");
		
		return $xtpl_presupuestos_tipo1->text("main") ;

	}
	
/**
	 * renderizamos en el formulario de solicitud los presupuestos tipo 2.
	 
	 *
	 * @param CMPForm $form
	 * @param XTemplate $xtpl
	 */
	protected function getHTMLPresupuestoTipo2(CMPForm $form){	

		$xtpl_presupuestos_tipo2 = new XTemplate( CYT_TEMPLATE_SOLICITUD_EDIT_PRESUPUESTOS_TIPO2 );
		
		//mostrar los presupuestos_tipo2 actuales.
		$xtpl_presupuestos_tipo2->assign('presupuestos_tipo2_title', CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_2_TITULO );
		
    	//TODO parsear labels.
    	$this->parsePresupuestosTipo2Labels($xtpl_presupuestos_tipo2);
    	
		//recuperamos los presupuestos_tipo2 de la solicitud desde la sesión.
		$manager = new PresupuestoTipo2SessionManager();
    	$presupuestos = $manager->getEntities( new CdtSearchCriteria() );
    	
    	
    	//parseamos los presupuestos.
    	$this->parsePresupuestosTipo2($presupuestos, $form, $xtpl_presupuestos_tipo2);
    	
    	//formulario para agregar un nuevo presupuesto a la solicitud.
    	if( $form->getIsEditable() ){
    		$presupuestoForm = new CMPPresupuestoTipo2Form();
			$xtpl_presupuestos_tipo2->assign('formulario', $presupuestoForm->show() );
    	}
		$xtpl_presupuestos_tipo2->parse("main");
		
		return $xtpl_presupuestos_tipo2->text("main") ;

	}
	
/**
	 * renderizamos en el formulario de solicitud los presupuestos tipo 3.
	 
	 *
	 * @param CMPForm $form
	 * @param XTemplate $xtpl
	 */
	protected function getHTMLPresupuestoTipo3(CMPForm $form){	

		$xtpl_presupuestos_tipo3 = new XTemplate( CYT_TEMPLATE_SOLICITUD_EDIT_PRESUPUESTOS_TIPO3 );
		
		//mostrar los presupuestos_tipo3 actuales.
		$xtpl_presupuestos_tipo3->assign('presupuestos_tipo3_title', CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_3_TITULO );
		
    	//TODO parsear labels.
    	$this->parsePresupuestosTipo3Labels($xtpl_presupuestos_tipo3);
    	
		//recuperamos los presupuestos_tipo3 de la solicitud desde la sesión.
		$manager = new PresupuestoTipo3SessionManager();
    	$presupuestos = $manager->getEntities( new CdtSearchCriteria() );
    	
    	//parseamos los presupuestos.
    	$this->parsePresupuestosTipo3($presupuestos, $form, $xtpl_presupuestos_tipo3);
    	
    	//formulario para agregar un nuevo presupuesto a la solicitud.
    	if( $form->getIsEditable() ){
    		$presupuestoForm = new CMPPresupuestoTipo3Form();
			$xtpl_presupuestos_tipo3->assign('formulario', $presupuestoForm->show() );
    	}
		$xtpl_presupuestos_tipo3->parse("main");
		
		return $xtpl_presupuestos_tipo3->text("main") ;

	}
	
/**
	 * renderizamos en el formulario de solicitud los presupuestos tipo 4.
	 
	 *
	 * @param CMPForm $form
	 * @param XTemplate $xtpl
	 */
	protected function getHTMLPresupuestoTipo4(CMPForm $form){	

		$xtpl_presupuestos_tipo4 = new XTemplate( CYT_TEMPLATE_SOLICITUD_EDIT_PRESUPUESTOS_TIPO4 );
		
		//mostrar los presupuestos_tipo4 actuales.
		$xtpl_presupuestos_tipo4->assign('presupuestos_tipo4_title', CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_4_TITULO );
		
    	//TODO parsear labels.
    	$this->parsePresupuestosTipo4Labels($xtpl_presupuestos_tipo4);
    	
		//recuperamos los presupuestos_tipo4 de la solicitud desde la sesión.
		$manager = new PresupuestoTipo4SessionManager();
    	$presupuestos = $manager->getEntities( new CdtSearchCriteria() );
    	
    	//parseamos los presupuestos.
    	$this->parsePresupuestosTipo4($presupuestos, $form, $xtpl_presupuestos_tipo4);
    	
    	//formulario para agregar un nuevo presupuesto a la solicitud.
    	if( $form->getIsEditable() ){
    		$presupuestoForm = new CMPPresupuestoTipo4Form();
			$xtpl_presupuestos_tipo4->assign('formulario', $presupuestoForm->show() );
    	}
		$xtpl_presupuestos_tipo4->parse("main");
		
		return $xtpl_presupuestos_tipo4->text("main") ;

	}
	
/**
	 * renderizamos en el formulario de solicitud los presupuestos tipo 5.
	 
	 *
	 * @param CMPForm $form
	 * @param XTemplate $xtpl
	 */
	protected function getHTMLPresupuestoTipo5(CMPForm $form){	

		$xtpl_presupuestos_tipo5 = new XTemplate( CYT_TEMPLATE_SOLICITUD_EDIT_PRESUPUESTOS_TIPO5 );
		
		//mostrar los presupuestos_tipo5 actuales.
		$xtpl_presupuestos_tipo5->assign('presupuestos_tipo5_title', CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_5_TITULO );
		
    	//TODO parsear labels.
    	$this->parsePresupuestosTipo5Labels($xtpl_presupuestos_tipo5);
    	
		//recuperamos los presupuestos_tipo5 de la solicitud desde la sesión.
		$manager = new PresupuestoTipo5SessionManager();
    	$presupuestos = $manager->getEntities( new CdtSearchCriteria() );
    	
    	//parseamos los presupuestos.
    	$this->parsePresupuestosTipo5($presupuestos, $form, $xtpl_presupuestos_tipo5);
    	
    	//formulario para agregar un nuevo presupuesto a la solicitud.
    	if( $form->getIsEditable() ){
    		$presupuestoForm = new CMPPresupuestoTipo5Form();
			$xtpl_presupuestos_tipo5->assign('formulario', $presupuestoForm->show() );
    	}
		$xtpl_presupuestos_tipo5->parse("main");
		
		return $xtpl_presupuestos_tipo5->text("main") ;

	}
	
	
	protected function renderLabel( $label, CMPFormInput $input, XTemplate $xtpl ){
		
		$xtpl->assign("value", $label );
		
		if( $input->getIsRequired() && $input->getIsEditable() ){
			$xtpl->assign("required", $input->getRequiredLabel() );
		}else{
			$xtpl->assign("required", "" );
		}
		
		$xtpl->assign("input_name", $input->getId() );
		$xtpl->parse("main.fieldset.column.".$input->getId().".label");
	}
	
	protected function renderInput( CMPFormInput $input, XTemplate $xtpl ){
		
		$xtpl->assign("input", $input->show() );
		
		$xtpl->parse("main.fieldset.column.".$input->getId().".input");
		
	}
	
	protected function renderLabelTab( $label, CMPFormInput $input, XTemplate $xtpl ){
		
		$xtpl->assign("value", $label );
		
		if( $input->getIsRequired() && $input->getIsEditable() ){
			$xtpl->assign("required", $input->getRequiredLabel() );
		}else{
			$xtpl->assign("required", "" );
		}
		
		$xtpl->assign("input_name", $input->getId() );
		$xtpl->parse("main.".$input->getId().".label");
	}
	
	protected function renderInputTab( CMPFormInput $input, XTemplate $xtpl ){
		
		$xtpl->assign("input", $input->show() );
		
		$xtpl->parse("main.".$input->getId().".input");
		
	}
	
	protected function renderCustom(CMPForm $form, XTemplate $xtpl){
		
		//renderizamos las relaciones con sus formularios de alta
		
		$xtpl_relaciones = new XTemplate( CYT_TEMPLATE_SOLICITUD_EDIT_SOLICITUD_RELACIONES );
		
		//becas anteriores
		$becasHTML = $this->getHTMLBecas($form);
		$xtpl_relaciones->assign( "becas_tab", CYT_MSG_SOLICITUD_BECAS_TAB );
		$xtpl_relaciones->assign( "becas", $becasHTML );
		
		//proyectos anteriores
		$jovenesProyectosHTML = $this->getHTMLJovenesProyectos($form);
		$xtpl_relaciones->assign( "proyectos_tab", CYT_MSG_SOLICITUD_TAB_PROYECTOS_ANTERIORES );
		$xtpl_relaciones->assign( "proyectos", $jovenesProyectosHTML );
		
		//presupuestos
		$presupuestosHTML = $this->getHTMLPresupuesto($form);
		$xtpl_relaciones->assign( "presupuestos_tab", CYT_MSG_SOLICITUD_TAB_PRESUPUESTOS );
		$xtpl_relaciones->assign( "presupuestos", $presupuestosHTML );
		
		$xtpl_relaciones->parse("main");
		
		
		
		$xtpl->assign( "customHTML", $xtpl_relaciones->text("main").$form->getCustomHTML());
	}	
	
	
	
	/**
	 * armamos un array con los datos del proyecto.
	 * @param Proyecto $solicitudProyecto
	 */
	public function buildArrayProyecto(Proyecto $solicitudProyecto){
	
		$array_proyecto = array();
	
		$array_proyecto["item_oid"] = $solicitudProyecto->getOid();
		
		/*$oCriteria = new CdtSearchCriteria();
		$oCriteria->addFilter('cd_proyecto', $solicitudProyecto->getOid(), '=');
		$oCriteria->addFilter('DIR.cd_tipoinvestigador', CYT_INTEGRANTE_DIRECTOR, '=');
		$managerProyecto =  CYTSecureManagerFactory::getProyectoManager();
		$oProyecto = $managerProyecto->getEntity($oCriteria);*/
		
		$array_proyecto["ds_codigo"] = $solicitudProyecto->getDs_codigo();
		$array_proyecto["ds_director"] = $solicitudProyecto->getDirector()->getDs_apellido().', '.$solicitudProyecto->getDirector()->getDs_nombre();
		$array_proyecto["ds_titulo"] = $solicitudProyecto->getDs_titulo();
		$array_proyecto["dt_inicio"] = CYTSecureUtils::formatDateToView($solicitudProyecto->getDt_ini());
		$array_proyecto["dt_fin"] = CYTSecureUtils::formatDateToView($solicitudProyecto->getDt_fin());
		$array_proyecto["ds_estado"] = $solicitudProyecto->getTipoEstadoProyecto()->getDs_estado();
	
		return $array_proyecto;
	
	}
	/**
	 * columnas para el listado de proyectos
	 * @return multitype:string
	 */
	public function getProyectoColumns(){
		return array( "ds_codigo","ds_titulo","ds_director","dt_inicio","dt_fin","ds_estado");
	}
	
	/**
	 * labels para el listado de proyectos
	 * @return multitype:string
	 */
	public function getProyectoColumnsLabels(){
		return array( CYT_LBL_SOLICITUD_PROYECTOS_CODIGO,CYT_LBL_SOLICITUD_PROYECTOS_TITULO,CYT_LBL_SOLICITUD_PROYECTOS_DIRECTOR,CYT_LBL_SOLICITUD_PROYECTOS_INICIO,CYT_LBL_SOLICITUD_PROYECTOS_FIN,CYT_LBL_SOLICITUD_PROYECTOS_ESTADO);
	}
	
	/**
	 * aligns para las columnas del listado de facultades.
	 * @return multitype:string
	 */
	public function getProyectoColumnsAlign(){
		return array( "center","left","left","center","center","left");
	}
		
	/**
	 * parseamos los labels para el listado de proyectos.
	 * @param XTemplate $xtpl_facultades
	 */
	protected function parseProyectosLabels(XTemplate $xtpl_proyectos){
	
		$aligns = $this->getProyectoColumnsAlign();
	
		$index=0;
		foreach ( $this->getProyectoColumnsLabels() as $label) {
	
			$xtpl_proyectos->assign('proyecto_label', $label );
			$xtpl_proyectos->assign('align', $aligns[$index]);
			$xtpl_proyectos->parse('main.proyecto_th');
	
			$index++;
		}
	}
	
	
	/**
	 * parseamos el listado de proyectos.
	 * @param ItemCollection $proyectos
	 * @param CMPForm $form
	 * @param XTemplate $xtpl_proyectos
	 */
	protected function parseProyectos(ItemCollection $proyectos=null, XTemplate $xtpl_proyectos){
	
		if( $proyectos!= null ){
			foreach ($proyectos as $proyecto) {
				 
				$this->parseProyecto($proyecto, $xtpl_proyectos);
				 
				/*if( $form->getIsEditable() ){
					$xtpl_proyectos->assign('item_oid', $proyecto->getFacultad()->getOid() );
					$xtpl_proyectos->parse("main.proyecto.editar_proyecto");
				}*/
				 
				$xtpl_proyectos->parse("main.proyecto");
			}
		}
	}
	
	/**
	 * parseamos un proyecto.
	 * @param UnidadFacultad $proyecto
	 * @param XTemplate $xtpl_proyectos
	 */
	protected function parseProyecto(Proyecto $solicitudProyecto, XTemplate $xtpl_proyectos){
	
		$columns = $this->getProyectoColumns();
		$aligns = $this->getProyectoColumnsAlign();
		$array_proyecto = $this->buildArrayProyecto($solicitudProyecto);
	
		$index=0;
		foreach ($columns as $column) {
	
			$xtpl_proyectos->assign('data', $array_proyecto[$column] );
			$xtpl_proyectos->assign('align', $aligns[$index]);
			$xtpl_proyectos->parse('main.proyecto.proyecto_data');
	
			$index++;
		}
	
	}
	
/**
	 * armamos un array con los datos de la beca.
	 * @param JovenesBeca $beca
	 */
	public function buildArrayBeca(JovenesBeca $beca){

		$array_beca = array();
		
		$array_beca["item_oid"] = $beca->getDs_tipobeca();
		$array_beca["ds_tipobeca"] = $beca->getDs_tipobeca();
		$array_beca["bl_unlp"] = ($beca->getBl_unlp())?CDT_UI_LBL_YES:CDT_UI_LBL_NO;
		$array_beca["dt_desde"] = CYTSecureUtils::formatDateToView($beca->getDt_desde());
		$array_beca["dt_hasta"] = CYTSecureUtils::formatDateToView($beca->getDt_hasta());
		$array_beca["bl_agregado"] = $beca->getBl_agregado();
		
		return $array_beca;
		
	}
	

	/**
	 * columnas para el listado de becas
	 * @return multitype:string
	 */	
	public function getBecaColumns(){
		return array( "ds_tipobeca","bl_unlp","dt_desde","dt_hasta");
	}
	
	/**
	 * labels para el listado de becas
	 * @return multitype:string
	 */
	public function getBecaColumnsLabels(){
		return array( CYT_LBL_SOLICITUD_BECA_NIVEL, CYT_LBL_SOLICITUD_BECARIO_UNLP,CYT_LBL_SOLICITUD_BECA_DESDE,CYT_LBL_SOLICITUD_BECA_HASTA);
	}
	
	/**
	 * aligns para las columnas del listado de becas.
	 * @return multitype:string
	 */
	public function getBecaColumnsAlign(){
		return array( "left", "center","left","left");
	}

	/**
	 * parseamos los labels para el listado de becas.
	 * @param XTemplate $xtpl_becas
	 */
	protected function parseBecasLabels(XTemplate $xtpl_becas){
	
		$aligns = $this->getBecaColumnsAlign();
	
		$index=0;
		foreach ( $this->getBecaColumnsLabels() as $label) {
				
			$xtpl_becas->assign('beca_label', $label );
			$xtpl_becas->assign('align', $aligns[$index]);
			$xtpl_becas->parse('main.beca_th');
				
			$index++;
		}
	}
	
/**
	 * armamos un array con los datos del proyecto.
	 * @param JovenesProyecto $proyecto
	 */
	public function buildArrayJovenesProyecto(JovenesProyecto $proyecto){

		$array_proyecto = array();
		
		$array_proyecto["item_oid"] = $proyecto->getDs_codigo();
		$array_proyecto["cd_proyecto"] = $proyecto->getProyecto()->getOid();
		$array_proyecto["ds_codigo"] = $proyecto->getDs_codigo();
		$array_proyecto["ds_titulo"] = $proyecto->getDs_titulo();
		$array_proyecto["ds_director"] = $proyecto->getDs_director();
		$array_proyecto["dt_desdeproyecto"] = CYTSecureUtils::formatDateToView($proyecto->getDt_desdeproyecto());
		$array_proyecto["dt_hastaproyecto"] = CYTSecureUtils::formatDateToView($proyecto->getDt_hastaproyecto());
		$array_proyecto["bl_agregado"] = $proyecto->getBl_agregado();
		
		return $array_proyecto;
		
	}
	/**
	 * columnas para el listado de proyectos
	 * @return multitype:string
	 */	
	public function getJovenesProyectoColumns(){
		return array( "ds_codigo","ds_titulo","ds_director","dt_desdeproyecto","dt_hastaproyecto");
	}
	
	/**
	 * labels para el listado de proyectos anteriores
	 * @return multitype:string
	 */
	public function getJovenesProyectoColumnsLabels(){
		return array( CYT_LBL_SOLICITUD_PROYECTOS_CODIGO, CYT_LBL_SOLICITUD_PROYECTOS_TITULO,CYT_LBL_SOLICITUD_PROYECTOS_DIRECTOR,CYT_LBL_SOLICITUD_PROYECTOS_INICIO,CYT_LBL_SOLICITUD_PROYECTOS_FIN);
	}
	
	/**
	 * aligns para las columnas del listado de proyectos anteriores.
	 * @return multitype:string
	 */
	public function getJovenesProyectoColumnsAlign(){
		return array( "left", "Left","left","left","left");
	}

	/**
	 * parseamos los labels para el listado de proyectos anteriores.
	 * @param XTemplate $xtpl_becas
	 */
	protected function parseJovenesProyectosLabels(XTemplate $xtpl_jovenesProyectos){
	
		$aligns = $this->getJovenesProyectoColumnsAlign();
	
		$index=0;
		foreach ( $this->getJovenesProyectoColumnsLabels() as $label) {
				
			$xtpl_jovenesProyectos->assign('jovenesProyecto_label', $label );
			$xtpl_jovenesProyectos->assign('align', $aligns[$index]);
			$xtpl_jovenesProyectos->parse('main.jovenesProyecto_th');
				
			$index++;
		}
	}
	
/**
	 * armamos un array con los datos del presupuesto tipo 1.
	 * @param PresupuestoTipo1 $presupuesto
	 */
	public function buildArrayPresupuestoTipo1(PresupuestoTipo1 $presupuesto){

		$array_presupuesto = array();
		
		
		$array_presupuesto["dt_fecha"] = CYTSecureUtils::formatDateToView($presupuesto->getDt_fecha_tipo1());
		
		$array_presupuesto["ds_presupuesto"] = $presupuesto->getDs_presupuesto();
		$array_presupuesto["item_oid"] =$presupuesto->getDs_presupuesto();
		$array_presupuesto["nu_montopresupuesto"] = CYTSecureUtils::formatMontoToView($presupuesto->getNu_montopresupuesto());
		
		
		return $array_presupuesto;
		
	}
	
/**
	 * columnas para el listado de presupuestos
	 * @return multitype:string
	 */	
	public function getPresupuestoTipo1Columns(){
		return array( "dt_fecha","ds_presupuesto", "nu_montopresupuesto");
	}
	
/**
	 * labels para el listado de presupuestos
	 * @return multitype:string
	 */
	public function getPresupuestoTipo1ColumnsLabels(){
		return array( CYT_LBL_PRESUPUESTO_FECHA, CYT_LBL_PRESUPUESTO_DESCRIPCION_CONCEPTO, CYT_LBL_PRESUPUESTO_IMPORTE);
	}
	
	/**
	 * aligns para las columnas del listado de presupuestos.
	 * @return multitype:string
	 */
	public function getPresupuestoTipo1ColumnsAlign(){
		return array( "left", "left", "right");
	}
	
	
/**
	 * parseamos los labels para el listado de presupuestos.
	 * @param XTemplate $xtpl_presupuestos
	 */
	protected function parsePresupuestosTipo1Labels(XTemplate $xtpl_presupuestos){
	
		$aligns = $this->getPresupuestoTipo1ColumnsAlign();
	
		$index=0;
		foreach ( $this->getPresupuestoTipo1ColumnsLabels() as $label) {
				
			$xtpl_presupuestos->assign('presupuesto_tipo1_label', $label );
			$xtpl_presupuestos->assign('align', $aligns[$index]);
			$xtpl_presupuestos->parse('main.presupuesto_tipo1_th');
				
			$index++;
		}
	}
	
/**
	 * armamos un array con los datos del presupuesto tipo 2.
	 * @param PresupuestoTipo2 $presupuesto
	 */
	public function buildArrayPresupuestoTipo2(PresupuestoTipo2 $presupuesto){

		$array_presupuesto = array();
		
		$array_presupuesto["dt_fecha"] = CYTSecureUtils::formatDateToView($presupuesto->getDt_fecha_tipo2());
		$ds_presupuesto = $presupuesto->getDs_presupuesto().' - ';
		switch ($presupuesto->getDs_presupuesto()) {
				case CYT_CD_VIATICO:
				
				$ds_presupuesto .= CYT_LBL_PRESUPUESTO_DIAS.': '.$presupuesto->getDs_dias().' - '.CYT_LBL_PRESUPUESTO_LUGAR.': '.$presupuesto->getDs_lugar();
				break;
				
				case CYT_DS_PASAJE:
				
				$ds_presupuesto .= $presupuesto->getDs_pasajes().' - '.CYT_LBL_PRESUPUESTO_DESTINO.': '.$presupuesto->getDs_destino();
				break;
				
				case CYT_CD_INSCRIPCION:
				$ds_presupuesto .= CYT_LBL_PRESUPUESTO_DESCRIPCION.': '.$presupuesto->getDs_inscripcion();
				break;
				
				case CYT_CD_OTROS:
				$ds_presupuesto .= CYT_LBL_PRESUPUESTO_DESCRIPCION.': '.$presupuesto->getDs_otros();
				break;
			}
		$array_presupuesto["ds_presupuesto"] = $ds_presupuesto;
		$array_presupuesto["item_oid"] =$ds_presupuesto;
		$array_presupuesto["nu_montopresupuesto"] = CYTSecureUtils::formatMontoToView($presupuesto->getNu_montopresupuesto());
		
		
		return $array_presupuesto;
		
	}
	
/**
	 * columnas para el listado de presupuestos
	 * @return multitype:string
	 */	
	public function getPresupuestoTipo2Columns(){
		return array( "dt_fecha","ds_presupuesto", "nu_montopresupuesto");
	}
	
/**
	 * labels para el listado de presupuestos
	 * @return multitype:string
	 */
	public function getPresupuestoTipo2ColumnsLabels(){
		return array( CYT_LBL_PRESUPUESTO_FECHA, CYT_LBL_PRESUPUESTO_DESCRIPCION_CONCEPTO, CYT_LBL_PRESUPUESTO_IMPORTE);
	}
	
	/**
	 * aligns para las columnas del listado de presupuestos.
	 * @return multitype:string
	 */
	public function getPresupuestoTipo2ColumnsAlign(){
		return array( "left", "left", "right");
	}
	
	
/**
	 * parseamos los labels para el listado de presupuestos.
	 * @param XTemplate $xtpl_presupuestos
	 */
	protected function parsePresupuestosTipo2Labels(XTemplate $xtpl_presupuestos){
	
		$aligns = $this->getPresupuestoTipo2ColumnsAlign();
	
		$index=0;
		foreach ( $this->getPresupuestoTipo2ColumnsLabels() as $label) {
				
			$xtpl_presupuestos->assign('presupuesto_tipo2_label', $label );
			$xtpl_presupuestos->assign('align', $aligns[$index]);
			$xtpl_presupuestos->parse('main.presupuesto_tipo2_th');
				
			$index++;
		}
	}
	
/**
	 * armamos un array con los datos del presupuesto tipo 3.
	 * @param PresupuestoTipo3 $presupuesto
	 */
	public function buildArrayPresupuestoTipo3(PresupuestoTipo3 $presupuesto){

		$array_presupuesto = array();
		
		
		$array_presupuesto["dt_fecha"] = CYTSecureUtils::formatDateToView($presupuesto->getDt_fecha_tipo3());
		
		$array_presupuesto["ds_presupuesto"] = $presupuesto->getDs_presupuesto();
		$array_presupuesto["item_oid"] =$presupuesto->getDs_presupuesto();
		$array_presupuesto["nu_montopresupuesto"] = CYTSecureUtils::formatMontoToView($presupuesto->getNu_montopresupuesto());
		
		
		return $array_presupuesto;
		
	}
	
/**
	 * columnas para el listado de presupuestos
	 * @return multitype:string
	 */	
	public function getPresupuestoTipo3Columns(){
		return array( "dt_fecha","ds_presupuesto", "nu_montopresupuesto");
	}
	
/**
	 * labels para el listado de presupuestos
	 * @return multitype:string
	 */
	public function getPresupuestoTipo3ColumnsLabels(){
		return array( CYT_LBL_PRESUPUESTO_FECHA, CYT_LBL_PRESUPUESTO_DESCRIPCION_CONCEPTO, CYT_LBL_PRESUPUESTO_IMPORTE);
	}
	
	/**
	 * aligns para las columnas del listado de presupuestos.
	 * @return multitype:string
	 */
	public function getPresupuestoTipo3ColumnsAlign(){
		return array( "left", "left", "right");
	}
	
	
/**
	 * parseamos los labels para el listado de presupuestos.
	 * @param XTemplate $xtpl_presupuestos
	 */
	protected function parsePresupuestosTipo3Labels(XTemplate $xtpl_presupuestos){
	
		$aligns = $this->getPresupuestoTipo3ColumnsAlign();
	
		$index=0;
		foreach ( $this->getPresupuestoTipo3ColumnsLabels() as $label) {
				
			$xtpl_presupuestos->assign('presupuesto_tipo3_label', $label );
			$xtpl_presupuestos->assign('align', $aligns[$index]);
			$xtpl_presupuestos->parse('main.presupuesto_tipo3_th');
				
			$index++;
		}
	}
	
/**
	 * armamos un array con los datos del presupuesto tipo 4.
	 * @param PresupuestoTipo4 $presupuesto
	 */
	public function buildArrayPresupuestoTipo4(PresupuestoTipo4 $presupuesto){

		$array_presupuesto = array();
		
		
		$array_presupuesto["dt_fecha"] = CYTSecureUtils::formatDateToView($presupuesto->getDt_fecha_tipo4());
		
		$array_presupuesto["ds_presupuesto"] = $presupuesto->getDs_presupuesto();
		$array_presupuesto["item_oid"] =$presupuesto->getDs_presupuesto();
		$array_presupuesto["nu_montopresupuesto"] = CYTSecureUtils::formatMontoToView($presupuesto->getNu_montopresupuesto());
		
		
		return $array_presupuesto;
		
	}
	
/**
	 * columnas para el listado de presupuestos
	 * @return multitype:string
	 */	
	public function getPresupuestoTipo4Columns(){
		return array( "dt_fecha","ds_presupuesto", "nu_montopresupuesto");
	}
	
/**
	 * labels para el listado de presupuestos
	 * @return multitype:string
	 */
	public function getPresupuestoTipo4ColumnsLabels(){
		return array( CYT_LBL_PRESUPUESTO_FECHA, CYT_LBL_PRESUPUESTO_DESCRIPCION_CONCEPTO, CYT_LBL_PRESUPUESTO_IMPORTE);
	}
	
	/**
	 * aligns para las columnas del listado de presupuestos.
	 * @return multitype:string
	 */
	public function getPresupuestoTipo4ColumnsAlign(){
		return array( "left", "left", "right");
	}
	
	
/**
	 * parseamos los labels para el listado de presupuestos.
	 * @param XTemplate $xtpl_presupuestos
	 */
	protected function parsePresupuestosTipo4Labels(XTemplate $xtpl_presupuestos){
	
		$aligns = $this->getPresupuestoTipo4ColumnsAlign();
	
		$index=0;
		foreach ( $this->getPresupuestoTipo4ColumnsLabels() as $label) {
				
			$xtpl_presupuestos->assign('presupuesto_tipo4_label', $label );
			$xtpl_presupuestos->assign('align', $aligns[$index]);
			$xtpl_presupuestos->parse('main.presupuesto_tipo4_th');
				
			$index++;
		}
	}
	
/**
	 * armamos un array con los datos del presupuesto tipo 5.
	 * @param PresupuestoTipo5 $presupuesto
	 */
	public function buildArrayPresupuestoTipo5(PresupuestoTipo5 $presupuesto){

		$array_presupuesto = array();
		
		
		$array_presupuesto["dt_fecha"] = CYTSecureUtils::formatDateToView($presupuesto->getDt_fecha_tipo5());
		
		$array_presupuesto["ds_presupuesto"] = $presupuesto->getDs_presupuesto();
		$array_presupuesto["item_oid"] =$presupuesto->getDs_presupuesto();
		$array_presupuesto["nu_montopresupuesto"] = CYTSecureUtils::formatMontoToView($presupuesto->getNu_montopresupuesto());
		
		
		return $array_presupuesto;
		
	}
	
/**
	 * columnas para el listado de presupuestos
	 * @return multitype:string
	 */	
	public function getPresupuestoTipo5Columns(){
		return array( "dt_fecha","ds_presupuesto", "nu_montopresupuesto");
	}
	
/**
	 * labels para el listado de presupuestos
	 * @return multitype:string
	 */
	public function getPresupuestoTipo5ColumnsLabels(){
		return array( CYT_LBL_PRESUPUESTO_FECHA, CYT_LBL_PRESUPUESTO_DESCRIPCION_CONCEPTO, CYT_LBL_PRESUPUESTO_IMPORTE);
	}
	
	/**
	 * aligns para las columnas del listado de presupuestos.
	 * @return multitype:string
	 */
	public function getPresupuestoTipo5ColumnsAlign(){
		return array( "left", "left", "right");
	}
	
	
/**
	 * parseamos los labels para el listado de presupuestos.
	 * @param XTemplate $xtpl_presupuestos
	 */
	protected function parsePresupuestosTipo5Labels(XTemplate $xtpl_presupuestos){
	
		$aligns = $this->getPresupuestoTipo5ColumnsAlign();
	
		$index=0;
		foreach ( $this->getPresupuestoTipo5ColumnsLabels() as $label) {
				
			$xtpl_presupuestos->assign('presupuesto_tipo5_label', $label );
			$xtpl_presupuestos->assign('align', $aligns[$index]);
			$xtpl_presupuestos->parse('main.presupuesto_tipo5_th');
				
			$index++;
		}
	}
/**
	 * parseamos el listado de becas.
	 * @param ItemCollection $becas
	 * @param CMPForm $form
	 * @param XTemplate $xtpl_becas
	 */
	protected function parseBecas(ItemCollection $becas=null, CMPForm $form, XTemplate $xtpl_becas){
	
		if( $becas!= null ){
			foreach ($becas as $beca) {
		  
				$this->parseBeca($beca, $xtpl_becas);
		   
				if( $form->getIsEditable()&& ($beca->getBl_agregado()) ){
					$xtpl_becas->assign('item_oid',$beca->getDs_tipobeca());
					$xtpl_becas->parse("main.beca.editar_beca");
				}
		   
				$xtpl_becas->parse("main.beca");
			}
		}
	}
	
	/**
	 * parseamos un beca.
	 * @param JovenesBeca $beca
	 * @param XTemplate $xtpl_becas
	 */
	protected function parseBeca(JovenesBeca $beca, XTemplate $xtpl_becas){
	
		$columns = $this->getBecaColumns();
		$aligns = $this->getBecaColumnsAlign();
		$array_beca = $this->buildArrayBeca($beca);
	
		$index=0;
		foreach ($columns as $column) {
	
			$xtpl_becas->assign('data', $array_beca[$column] );
			$xtpl_becas->assign('align', $aligns[$index]);
			$xtpl_becas->parse('main.beca.beca_data');
	
			$index++;
		}
	
	}
	
/**
	 * parseamos el listado de jovenesProyectos.
	 * @param ItemCollection $jovenesProyectos
	 * @param CMPForm $form
	 * @param XTemplate $xtpl_jovenesProyectos
	 */
	protected function parseJovenesProyectos(ItemCollection $jovenesProyectos=null, CMPForm $form, XTemplate $xtpl_jovenesProyectos){
	
		if( $jovenesProyectos!= null ){
			foreach ($jovenesProyectos as $jovenesProyecto) {
		  
				$this->parseJovenesProyecto($jovenesProyecto, $xtpl_jovenesProyectos);
		   
				if( $form->getIsEditable()&& ($jovenesProyecto->getBl_agregado()) ){
					$xtpl_jovenesProyectos->assign('item_oid',$jovenesProyecto->getDs_codigo());
					$xtpl_jovenesProyectos->parse("main.jovenesProyecto.editar_jovenesProyecto");
				}
		   
				$xtpl_jovenesProyectos->parse("main.jovenesProyecto");
			}
		}
	}
	
	/**
	 * parseamos un proyecto.
	 * @param JovenesProyecto $jovenesProyecto
	 * @param XTemplate $xtpl_jovenesProyectos
	 */
	protected function parseJovenesProyecto(JovenesProyecto $jovenesProyecto, XTemplate $xtpl_jovenesProyectos){
	
		$columns = $this->getJovenesProyectoColumns();
		$aligns = $this->getJovenesProyectoColumnsAlign();
		$array_jovenesProyecto = $this->buildArrayJovenesProyecto($jovenesProyecto);
	
		$index=0;
		foreach ($columns as $column) {
	
			$xtpl_jovenesProyectos->assign('data', $array_jovenesProyecto[$column] );
			$xtpl_jovenesProyectos->assign('align', $aligns[$index]);
			$xtpl_jovenesProyectos->parse('main.jovenesProyecto.jovenesProyecto_data');
	
			$index++;
		}
	
	}
	
/**
	 * parseamos el listado de presupuestosTipo1.
	 * @param ItemCollection $presupuestosTipo1
	 * @param CMPForm $form
	 * @param XTemplate $xtpl_presupuestosTipo1
	 */
	protected function parsePresupuestosTipo1(ItemCollection $presupuestosTipo1=null, CMPForm $form, XTemplate $xtpl_presupuestosTipo1){
		$total = 0;
		if( $presupuestosTipo1!= null ){
			foreach ($presupuestosTipo1 as $presupuesto) {
		   
				$this->parsePresupuestoTipo1($presupuesto, $xtpl_presupuestosTipo1);
		   		$total +=$presupuesto->getNu_montopresupuesto();
				if( $form->getIsEditable() ){
					$xtpl_presupuestosTipo1->assign('item_oid',$presupuesto->getDs_presupuesto());
					$xtpl_presupuestosTipo1->parse("main.presupuesto_tipo1.editar_presupuesto_tipo1");
				}
		   
				$xtpl_presupuestosTipo1->parse("main.presupuesto_tipo1");
			}
		}
		$xtpl_presupuestosTipo1->assign('total_tipo1_lbl',CYT_LBL_PRESUPUESTO_SUBTOTAL);
		$xtpl_presupuestosTipo1->assign('total_tipo1',CYTSecureUtils::formatMontoToView($total));
		
	}
	
	/**
	 * parseamos un presupuesto.
	 * @param PresupuestoTipo1 $presupuesto
	 * @param XTemplate $xtpl_presupuestosTipo1
	 */
	protected function parsePresupuestoTipo1(PresupuestoTipo1 $presupuesto, XTemplate $xtpl_presupuestosTipo1){
	
		$columns = $this->getPresupuestoTipo1Columns();
		$aligns = $this->getPresupuestoTipo1ColumnsAlign();
		$array_presupuesto = $this->buildArrayPresupuestoTipo1($presupuesto);
	
		$index=0;
		foreach ($columns as $column) {
	
			$xtpl_presupuestosTipo1->assign('data', $array_presupuesto[$column] );
			$xtpl_presupuestosTipo1->assign('align', $aligns[$index]);
			$xtpl_presupuestosTipo1->parse('main.presupuesto_tipo1.presupuesto_tipo1_data');
	
			$index++;
		}
	
	}
	

/**
	 * parseamos el listado de presupuestosTipo2.
	 * @param ItemCollection $presupuestosTipo2
	 * @param CMPForm $form
	 * @param XTemplate $xtpl_presupuestosTipo2
	 */
	protected function parsePresupuestosTipo2(ItemCollection $presupuestosTipo2=null, CMPForm $form, XTemplate $xtpl_presupuestosTipo2){
		$total = 0;
		if( $presupuestosTipo2!= null ){
			foreach ($presupuestosTipo2 as $presupuesto) {
				$this->parsePresupuestoTipo2($presupuesto, $xtpl_presupuestosTipo2);
		   		$total +=$presupuesto->getNu_montopresupuesto();
				if( $form->getIsEditable() ){
					$xtpl_presupuestosTipo2->assign('item_oid',$presupuesto->getDs_presupuesto());
					$xtpl_presupuestosTipo2->parse("main.presupuesto_tipo2.editar_presupuesto_tipo2");
				}
		   
				$xtpl_presupuestosTipo2->parse("main.presupuesto_tipo2");
			}
		}
		$xtpl_presupuestosTipo2->assign('total_tipo2_lbl',CYT_LBL_PRESUPUESTO_SUBTOTAL);
		$xtpl_presupuestosTipo2->assign('total_tipo2',CYTSecureUtils::formatMontoToView($total));
		
	}
	
	/**
	 * parseamos un presupuesto.
	 * @param PresupuestoTipo2 $presupuesto
	 * @param XTemplate $xtpl_presupuestosTipo2
	 */
	protected function parsePresupuestoTipo2(PresupuestoTipo2 $presupuesto, XTemplate $xtpl_presupuestosTipo2){
	
		$columns = $this->getPresupuestoTipo2Columns();
		$aligns = $this->getPresupuestoTipo2ColumnsAlign();
		$array_presupuesto = $this->buildArrayPresupuestoTipo2($presupuesto);
	
		$index=0;
		foreach ($columns as $column) {
	
			$xtpl_presupuestosTipo2->assign('data', $array_presupuesto[$column] );
			$xtpl_presupuestosTipo2->assign('align', $aligns[$index]);
			$xtpl_presupuestosTipo2->parse('main.presupuesto_tipo2.presupuesto_tipo2_data');
	
			$index++;
		}
	
	}
	
/**
	 * parseamos el listado de presupuestosTipo3.
	 * @param ItemCollection $presupuestosTipo3
	 * @param CMPForm $form
	 * @param XTemplate $xtpl_presupuestosTipo3
	 */
	protected function parsePresupuestosTipo3(ItemCollection $presupuestosTipo3=null, CMPForm $form, XTemplate $xtpl_presupuestosTipo3){
		$total = 0;
		if( $presupuestosTipo3!= null ){
			foreach ($presupuestosTipo3 as $presupuesto) {
		   
				$this->parsePresupuestoTipo3($presupuesto, $xtpl_presupuestosTipo3);
		   		$total +=$presupuesto->getNu_montopresupuesto();
				if( $form->getIsEditable() ){
					$xtpl_presupuestosTipo3->assign('item_oid',$presupuesto->getDs_presupuesto());
					$xtpl_presupuestosTipo3->parse("main.presupuesto_tipo3.editar_presupuesto_tipo3");
				}
		   
				$xtpl_presupuestosTipo3->parse("main.presupuesto_tipo3");
			}
		}
		$xtpl_presupuestosTipo3->assign('total_tipo3_lbl',CYT_LBL_PRESUPUESTO_SUBTOTAL);
		$xtpl_presupuestosTipo3->assign('total_tipo3',CYTSecureUtils::formatMontoToView($total));
		
	}
	
	/**
	 * parseamos un presupuesto.
	 * @param PresupuestoTipo3 $presupuesto
	 * @param XTemplate $xtpl_presupuestosTipo3
	 */
	protected function parsePresupuestoTipo3(PresupuestoTipo3 $presupuesto, XTemplate $xtpl_presupuestosTipo3){
	
		$columns = $this->getPresupuestoTipo3Columns();
		$aligns = $this->getPresupuestoTipo3ColumnsAlign();
		$array_presupuesto = $this->buildArrayPresupuestoTipo3($presupuesto);
	
		$index=0;
		foreach ($columns as $column) {
	
			$xtpl_presupuestosTipo3->assign('data', $array_presupuesto[$column] );
			$xtpl_presupuestosTipo3->assign('align', $aligns[$index]);
			$xtpl_presupuestosTipo3->parse('main.presupuesto_tipo3.presupuesto_tipo3_data');
	
			$index++;
		}
	
	}
	
/**
	 * parseamos el listado de presupuestosTipo4.
	 * @param ItemCollection $presupuestosTipo4
	 * @param CMPForm $form
	 * @param XTemplate $xtpl_presupuestosTipo4
	 */
	protected function parsePresupuestosTipo4(ItemCollection $presupuestosTipo4=null, CMPForm $form, XTemplate $xtpl_presupuestosTipo4){
		$total = 0;
		if( $presupuestosTipo4!= null ){
			foreach ($presupuestosTipo4 as $presupuesto) {
		   
				$this->parsePresupuestoTipo4($presupuesto, $xtpl_presupuestosTipo4);
		   		$total +=$presupuesto->getNu_montopresupuesto();
				if( $form->getIsEditable() ){
					$xtpl_presupuestosTipo4->assign('item_oid',$presupuesto->getDs_presupuesto());
					$xtpl_presupuestosTipo4->parse("main.presupuesto_tipo4.editar_presupuesto_tipo4");
				}
		   
				$xtpl_presupuestosTipo4->parse("main.presupuesto_tipo4");
			}
		}
		$xtpl_presupuestosTipo4->assign('total_tipo4_lbl',CYT_LBL_PRESUPUESTO_SUBTOTAL);
		$xtpl_presupuestosTipo4->assign('total_tipo4',CYTSecureUtils::formatMontoToView($total));
		
	}
	
	/**
	 * parseamos un presupuesto.
	 * @param PresupuestoTipo4 $presupuesto
	 * @param XTemplate $xtpl_presupuestosTipo4
	 */
	protected function parsePresupuestoTipo4(PresupuestoTipo4 $presupuesto, XTemplate $xtpl_presupuestosTipo4){
	
		$columns = $this->getPresupuestoTipo4Columns();
		$aligns = $this->getPresupuestoTipo4ColumnsAlign();
		$array_presupuesto = $this->buildArrayPresupuestoTipo4($presupuesto);
	
		$index=0;
		foreach ($columns as $column) {
	
			$xtpl_presupuestosTipo4->assign('data', $array_presupuesto[$column] );
			$xtpl_presupuestosTipo4->assign('align', $aligns[$index]);
			$xtpl_presupuestosTipo4->parse('main.presupuesto_tipo4.presupuesto_tipo4_data');
	
			$index++;
		}
	
	}
	
/**
	 * parseamos el listado de presupuestosTipo5.
	 * @param ItemCollection $presupuestosTipo5
	 * @param CMPForm $form
	 * @param XTemplate $xtpl_presupuestosTipo5
	 */
	protected function parsePresupuestosTipo5(ItemCollection $presupuestosTipo5=null, CMPForm $form, XTemplate $xtpl_presupuestosTipo5){
		$total = 0;
		if( $presupuestosTipo5!= null ){
			foreach ($presupuestosTipo5 as $presupuesto) {
		   
				$this->parsePresupuestoTipo5($presupuesto, $xtpl_presupuestosTipo5);
		   		$total +=$presupuesto->getNu_montopresupuesto();
				if( $form->getIsEditable() ){
					$xtpl_presupuestosTipo5->assign('item_oid',$presupuesto->getDs_presupuesto());
					$xtpl_presupuestosTipo5->parse("main.presupuesto_tipo5.editar_presupuesto_tipo5");
				}
		   
				$xtpl_presupuestosTipo5->parse("main.presupuesto_tipo5");
			}
		}
		$xtpl_presupuestosTipo5->assign('total_tipo5_lbl',CYT_LBL_PRESUPUESTO_SUBTOTAL);
		$xtpl_presupuestosTipo5->assign('total_tipo5',CYTSecureUtils::formatMontoToView($total));
		
	}
	
	/**
	 * parseamos un presupuesto.
	 * @param PresupuestoTipo5 $presupuesto
	 * @param XTemplate $xtpl_presupuestosTipo5
	 */
	protected function parsePresupuestoTipo5(PresupuestoTipo5 $presupuesto, XTemplate $xtpl_presupuestosTipo5){
	
		$columns = $this->getPresupuestoTipo5Columns();
		$aligns = $this->getPresupuestoTipo5ColumnsAlign();
		$array_presupuesto = $this->buildArrayPresupuestoTipo5($presupuesto);
	
		$index=0;
		foreach ($columns as $column) {
	
			$xtpl_presupuestosTipo5->assign('data', $array_presupuesto[$column] );
			$xtpl_presupuestosTipo5->assign('align', $aligns[$index]);
			$xtpl_presupuestosTipo5->parse('main.presupuesto_tipo5.presupuesto_tipo5_data');
	
			$index++;
		}
	
	}
	
	
}