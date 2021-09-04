<?php 

/**
 * Acción para quitar un presupuesto tipo 1 de solicitud.
 * Es sólo en sesión para ir armando la solicitud.
 * 
 * @author Marcos
 * @since 05-05-2014
 * 
 */
class DeletePresupuestoTipo1SessionAction extends EditEntityAction{

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
			$presupuesto->setDt_fecha_tipo1(CYTSecureUtils::formatDateToPersist($presupuesto->getDt_fecha_tipo1()));
			$total += $presupuesto->getNu_montopresupuesto();
			$presupuestos[] = $renderer->buildArrayPresupuestoTipo1($presupuesto);
		}		
		
		return array("presupuestos_tipo1" => $presupuestos, 
						"total_tipo1" => CYTSecureUtils::formatMontoToView($total), 	
						"presupuesto_tipo1Columns" => $renderer->getPresupuestoTipo1Columns(),
						"presupuesto_tipo1ColumnsAlign" => $renderer->getPresupuestoTipo1ColumnsAlign(),
						"presupuesto_tipo1ColumnsLabels" => $renderer->getPresupuestoTipo1ColumnsLabels());
	}


	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewFormInstance()
	 */
	public function getNewFormInstance(){
		return new CMPPresupuestoTipo1Form();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewEntityInstance()
	 */
	public function getNewEntityInstance(){
		return new PresupuestoTipo1();
	}
	
	protected function getEntityManager(){
		return new PresupuestoTipo1SessionManager();
	}

}
