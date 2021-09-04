<?php

/**
 * Acción para inicializar el contexto
 * para editar una solicitud.
 *
 * @author Marcos
 * @since 10-01-2014
 *
 */

class UpdateSolicitudInitAction extends UpdateEntityInitAction {

	
	protected function getEntity(){
		if (date('Y-m-d')>CYT_FECHA_CIERRE) {
			throw new GenericException( CYT_MSG_FIN_PERIODO );
		}
		$entity = parent::getEntity();

		$oCriteria = new CdtSearchCriteria();
		$oCriteria->addFilter('solicitud_oid', $entity->getOid(), '=');
		$oCriteria->addNull('fechaHasta');
		$managerSolicitudEstado =  CYTSecureManagerFactory::getSolicitudEstadoManager();
		$oSolicitudEstado = $managerSolicitudEstado->getEntity($oCriteria);
		if (($oSolicitudEstado->getEstado()->getOid()!=CYT_ESTADO_SOLICITUD_CREADA)) {
			
			throw new GenericException( CYT_MSG_SOLICITUD_MODIFICAR_PROHIBIDO);
		}
			
		$oPeriodoManager = CYTSecureManagerFactory::getPeriodoManager();
		$oPerioActual = $oPeriodoManager->getPeriodoActual(CYT_PERIODO_YEAR);
		
		if (($entity->getPeriodo()->getOid()!=$oPerioActual->getOid())) {
			
			throw new GenericException( CYT_MSG_SOLICITUD_MODIFICAR_PROHIBIDO_1);
		}
		
		$oCriteria = new CdtSearchCriteria();
		$oCriteria->addFilter('cd_solicitud', $entity->getOid(), '=');
		
		//becas.
		$becasManager = ManagerFactory::getJovenesBecaManager();
		$entity->setBecas( $becasManager->getEntities($oCriteria) );
		
		//presupuestos.
		$presupuestosManager = new PresupuestoManager();
		$entity->setPresupuestos( $presupuestosManager->getEntities($oCriteria) );
				
		//proyectos.
		$oCriteria = new CdtSearchCriteria();
		$oCriteria->addFilter('cd_solicitud', $entity->getOid(), '=');
		$filter = new CdtSimpleExpression("(dt_hasta > '".date('Y-m-d')."' OR dt_hasta IS NULL OR dt_hasta = '0000-00-00')");
		$oCriteria->setExpresion($filter);
		$proyectosActualesManager = ManagerFactory::getJovenesProyectoManager();
		$proyectosActuales = $proyectosActualesManager->getEntities($oCriteria);
		$proyectos = new ItemCollection();
		foreach ($proyectosActuales as $oProyectoJovenes) {
			
			$oProyecto = new Proyecto();
			$oProyecto->setOid($oProyectoJovenes->getProyecto()->getoid());
			$oProyecto->setDs_titulo($oProyectoJovenes->getDs_titulo());
			$oProyecto->setDs_codigo($oProyectoJovenes->getDs_codigo());
			$oDirector = new Docente();
			$oDirector->setDs_apellido($oProyectoJovenes->getDs_director());
			$oProyecto->setDirector($oDirector);
			$oProyecto->setDt_ini($oProyectoJovenes->getDt_desdeproyecto());
			$oProyecto->setDt_fin($oProyectoJovenes->getDt_hastaproyecto());
		
			
			
			$proyectos->addItem($oProyecto);
		}
		
		$entity->setProyectos( $proyectos );
		
		$oCriteria = new CdtSearchCriteria();
		$oCriteria->addFilter('cd_solicitud', $entity->getOid(), '=');
		$filter = new CdtSimpleExpression("(dt_hasta <= '".date('Y-m-d')."')");
		$oCriteria->setExpresion($filter);
		$proyectosAnterioresManager = ManagerFactory::getJovenesProyectoManager();
		$entity->setJovenesProyectos( $proyectosAnterioresManager->getEntities($oCriteria) );
		
		
		
		$oDocenteManager =  CYTSecureManagerFactory::getDocenteManager();
		$oDocente = $oDocenteManager->getObjectByCode($entity->getDocente()->getOid());
		
		$entity->setDs_investigador($oDocente->getDs_apellido().', '.$oDocente->getDs_nombre());
        
		$oUser = CdtSecureUtils::getUserLogged();
		$entity->setNu_cuil($oUser->getDs_username());
		
		return $entity;
	}
	
	protected function parseEntity($entity, XTemplate $xtpl) {

		$manager = new JovenesBecaSessionManager();
		$manager->setEntities( $entity->getBecas() );
		
		$manager = new JovenesProyectoSessionManager();
		$manager->setEntities( $entity->getJovenesProyectos() );		
		
		$manager = new SolicitudProyectoSessionManager();
		$manager->setEntities( $entity->getProyectos());
		
		$managerTipo1 = new PresupuestoTipo1SessionManager();
		$managerTipo2 = new PresupuestoTipo2SessionManager();
		$managerTipo3 = new PresupuestoTipo3SessionManager();
		$managerTipo4 = new PresupuestoTipo4SessionManager();
		$managerTipo5 = new PresupuestoTipo5SessionManager();
		$presupuestosTipo1 = new ItemCollection();
		$presupuestosTipo2 = new ItemCollection();
		$presupuestosTipo3 = new ItemCollection();
		$presupuestosTipo4 = new ItemCollection();
		$presupuestosTipo5 = new ItemCollection();
		$presupuestos = $entity->getPresupuestos();
		foreach ($presupuestos as $oPresupuesto) {
			
			switch ($oPresupuesto->getTipoPresupuesto()->getOid()) {
				case CYT_CD_PRESUPUESTO_TIPO_1:
					$oPresupuestoTipo1 = new PresupuestoTipo1();
					$oPresupuestoTipo1->setSolicitud($oPresupuesto->getSolicitud());
					$oPresupuestoTipo1->setTipoPresupuesto($oPresupuesto->getTipoPresupuesto());
					$oPresupuestoTipo1->setDs_presupuesto($oPresupuesto->getDs_presupuesto());
					$oPresupuestoTipo1->setNu_montopresupuesto($oPresupuesto->getNu_montopresupuesto());
					$oPresupuestoTipo1->setDt_fecha_tipo1($oPresupuesto->getDt_fecha());
					$presupuestosTipo1->addItem($oPresupuestoTipo1);
				break;
				case CYT_CD_PRESUPUESTO_TIPO_2:
					$oPresupuestoTipo2 = new PresupuestoTipo2();
					$oPresupuestoTipo2->setSolicitud($oPresupuesto->getSolicitud());
					$oPresupuestoTipo2->setTipoPresupuesto($oPresupuesto->getTipoPresupuesto());
					$oPresupuestoTipo2->setDs_presupuesto($oPresupuesto->getDs_presupuesto());
					$oPresupuestoTipo2->setNu_montopresupuesto($oPresupuesto->getNu_montopresupuesto());
					$oPresupuestoTipo2->setDt_fecha_tipo2($oPresupuesto->getDt_fecha());
					$oPresupuestoTipo2->setDs_dias($oPresupuesto->getDs_dias());
					$oPresupuestoTipo2->setDs_lugar($oPresupuesto->getDs_lugar());
					$oPresupuestoTipo2->setDs_pasajes($oPresupuesto->getDs_pasajes());
					$oPresupuestoTipo2->setDs_destino($oPresupuesto->getDs_destino());
					$oPresupuestoTipo2->setDs_inscripcion($oPresupuesto->getDs_inscripcion());
					$oPresupuestoTipo2->setDs_otros($oPresupuesto->getDs_otros());
					$presupuestosTipo2->addItem($oPresupuestoTipo2);
				break;
				case CYT_CD_PRESUPUESTO_TIPO_3:
					$oPresupuestoTipo3 = new PresupuestoTipo3();
					$oPresupuestoTipo3->setSolicitud($oPresupuesto->getSolicitud());
					$oPresupuestoTipo3->setTipoPresupuesto($oPresupuesto->getTipoPresupuesto());
					$oPresupuestoTipo3->setDs_presupuesto($oPresupuesto->getDs_presupuesto());
					$oPresupuestoTipo3->setNu_montopresupuesto($oPresupuesto->getNu_montopresupuesto());
					$oPresupuestoTipo3->setDt_fecha_tipo3($oPresupuesto->getDt_fecha());
					$presupuestosTipo3->addItem($oPresupuestoTipo3);
				break;
				case CYT_CD_PRESUPUESTO_TIPO_4:
					$oPresupuestoTipo4 = new PresupuestoTipo4();
					$oPresupuestoTipo4->setSolicitud($oPresupuesto->getSolicitud());
					$oPresupuestoTipo4->setTipoPresupuesto($oPresupuesto->getTipoPresupuesto());
					$oPresupuestoTipo4->setDs_presupuesto($oPresupuesto->getDs_presupuesto());
					$oPresupuestoTipo4->setNu_montopresupuesto($oPresupuesto->getNu_montopresupuesto());
					$oPresupuestoTipo4->setDt_fecha_tipo4($oPresupuesto->getDt_fecha());
					$presupuestosTipo4->addItem($oPresupuestoTipo4);
				break;
				case CYT_CD_PRESUPUESTO_TIPO_5:
					$oPresupuestoTipo5 = new PresupuestoTipo5();
					$oPresupuestoTipo5->setSolicitud($oPresupuesto->getSolicitud());
					$oPresupuestoTipo5->setTipoPresupuesto($oPresupuesto->getTipoPresupuesto());
					$oPresupuestoTipo5->setDs_presupuesto($oPresupuesto->getDs_presupuesto());
					$oPresupuestoTipo5->setNu_montopresupuesto($oPresupuesto->getNu_montopresupuesto());
					$oPresupuestoTipo5->setDt_fecha_tipo5($oPresupuesto->getDt_fecha());
					$presupuestosTipo5->addItem($oPresupuestoTipo5);
				break;
				
			}
		}
		$managerTipo1->setEntities( $presupuestosTipo1 );
		$managerTipo2->setEntities($presupuestosTipo2  );
		$managerTipo3->setEntities($presupuestosTipo3  );
		$managerTipo4->setEntities( $presupuestosTipo4 );
		$managerTipo5->setEntities( $presupuestosTipo5 );
		
		
		parent::parseEntity($entity, $xtpl);
		
	}
	
	protected function getEntityManager(){
		return ManagerFactory::getSolicitudManager();
	}

	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityInitAction::getNewFormInstance()
	 */
	public function getNewFormInstance($action){
		$form = new CMPSolicitudForm($action);
		
		return $form;
	}

	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityInitAction::getNewEntityInstance()
	 */
	public function getNewEntityInstance(){
		$oSolicitud = new Solicitud();
		
		
		
		return $oSolicitud;
	}


	/**
	 * (non-PHPdoc)
	 * @see CdtEditAction::getOutputTitle();
	 */
	protected function getOutputTitle(){
		return CYT_MSG_SOLICITUD_TITLE_UPDATE;
	}

	/**
	 * retorna el action para el submit.
	 * @return string
	 */
	protected function getSubmitAction(){
		return "update_solicitud";
	}


}