<?php 

/**
 * Acción para dar de alta un presupuesto tipo 2 de solicitud.
 * El alta es sólo en sesión para ir armando la solicitud.
 * 
 * @author Marcos
 * @since 01-05-2014
 * 
 */
class AddPresupuestoTipo2SessionAction extends AddEntityAction{

	protected function edit( $entity ){
		
		parent::edit( $entity );
		
		//vamos a retornar por json los presupuestos de la solicitud.
		
		//usamos el renderer para reutilizar lo que mostramos de los presupuestos.
		$renderer = new CMPSolicitudFormRenderer();
		$presupuestos = array();
		$total=0;
		foreach ($this->getEntityManager()->getEntities(new CdtSearchCriteria()) as $presupuesto) {
			$presupuesto->setDt_fecha_tipo2(CYTSecureUtils::formatDateToPersist($presupuesto->getDt_fecha_tipo2()));
			$total += $presupuesto->getNu_montopresupuesto();
			$presupuestos[] = $renderer->buildArrayPresupuestoTipo2($presupuesto);
		}		
		
		return array("presupuestos_tipo2" => $presupuestos, 
						"total_tipo2" => CYTSecureUtils::formatMontoToView($total), 	
						"presupuesto_tipo2Columns" => $renderer->getPresupuestoTipo2Columns(),
						"presupuesto_tipo2ColumnsAlign" => $renderer->getPresupuestoTipo2ColumnsAlign(),
						"presupuesto_tipo2ColumnsLabels" => $renderer->getPresupuestoTipo2ColumnsLabels());

	}


	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewFormInstance()
	 */
	public function getNewFormInstance(){
		return new CMPPresupuestoTipo2Form();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewEntityInstance()
	 */
	public function getNewEntityInstance(){
		return new PresupuestoTipo2();
	}
	
	protected function getEntityManager(){
		return new PresupuestoTipo2SessionManager();
	}
	
}