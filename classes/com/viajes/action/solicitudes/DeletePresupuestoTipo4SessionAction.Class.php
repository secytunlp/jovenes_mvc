<?php 

/**
 * Acción para quitar un presupuesto tipo 4 de solicitud.
 * Es sólo en sesión para ir armando la solicitud.
 * 
 * @author Marcos
 * @since 05-05-2014
 * 
 */
class DeletePresupuestoTipo4SessionAction extends EditEntityAction{

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
			$presupuesto->setDt_fecha_tipo4(CYTSecureUtils::formatDateToPersist($presupuesto->getDt_fecha_tipo4()));
			$total += $presupuesto->getNu_montopresupuesto();
			$presupuestos[] = $renderer->buildArrayPresupuestoTipo4($presupuesto);
		}		
		
		return array("presupuestos_tipo4" => $presupuestos, 
						"total_tipo4" => CYTSecureUtils::formatMontoToView($total), 	
						"presupuesto_tipo4Columns" => $renderer->getPresupuestoTipo4Columns(),
						"presupuesto_tipo4ColumnsAlign" => $renderer->getPresupuestoTipo4ColumnsAlign(),
						"presupuesto_tipo4ColumnsLabels" => $renderer->getPresupuestoTipo4ColumnsLabels());
	}


	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewFormInstance()
	 */
	public function getNewFormInstance(){
		return new CMPPresupuestoTipo4Form();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewEntityInstance()
	 */
	public function getNewEntityInstance(){
		return new PresupuestoTipo4();
	}
	
	protected function getEntityManager(){
		return new PresupuestoTipo4SessionManager();
	}

}
