<?php 

/**
 * Acción para quitar un presupuesto tipo 5 de solicitud.
 * Es sólo en sesión para ir armando la solicitud.
 * 
 * @author Marcos
 * @since 05-05-2014
 * 
 */
class DeletePresupuestoTipo5SessionAction extends EditEntityAction{

	protected function edit( $entity ){
		
		$presupuesto = CdtUtils::getParam("item_oid");
		
		//el oid representa el dato "presupuesto" ya que no hay entity relacionada
		$this->getEntityManager()->delete( $presupuesto );

		
		//vamos a retornar por json los presupuestos de la encomienda.
		
		//usamos el renderer para reutilizar lo que mostramos de los presupuestos.
		$renderer = new CMPSolicitudFormRenderer();
		$presupuestos = array();
		$total = 0;
		foreach ($this->getEntityManager()->getEntities(new CdtSearchCriteria()) as $presupuesto) {
			$presupuesto->setDt_fecha_tipo5(CYTSecureUtils::formatDateToPersist($presupuesto->getDt_fecha_tipo5()));
			$total += $presupuesto->getNu_montopresupuesto();
			$presupuestos[] = $renderer->buildArrayPresupuestoTipo5($presupuesto);
		}		
		
		return array("presupuestos_tipo5" => $presupuestos, 
						"total_tipo5" => CYTSecureUtils::formatMontoToView($total), 	
						"presupuesto_tipo5Columns" => $renderer->getPresupuestoTipo5Columns(),
						"presupuesto_tipo5ColumnsAlign" => $renderer->getPresupuestoTipo5ColumnsAlign(),
						"presupuesto_tipo5ColumnsLabels" => $renderer->getPresupuestoTipo5ColumnsLabels());
	}


	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewFormInstance()
	 */
	public function getNewFormInstance(){
		return new CMPPresupuestoTipo5Form();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewEntityInstance()
	 */
	public function getNewEntityInstance(){
		return new PresupuestoTipo5();
	}
	
	protected function getEntityManager(){
		return new PresupuestoTipo5SessionManager();
	}

}
