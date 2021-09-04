<?php 

/**
 * Acción para dar de alta un presupuesto tipo 3 de solicitud.
 * El alta es sólo en sesión para ir armando la solicitud.
 * 
 * @author Marcos
 * @since 05-05-2014
 * 
 */
class AddPresupuestoTipo3SessionAction extends AddEntityAction{

	protected function edit( $entity ){
		
		parent::edit( $entity );
		
		//vamos a retornar por json los presupuestos de la solicitud.
		
		//usamos el renderer para reutilizar lo que mostramos de los presupuestos.
		$renderer = new CMPSolicitudFormRenderer();
		$presupuestos = array();
		$total=0;
		foreach ($this->getEntityManager()->getEntities(new CdtSearchCriteria()) as $presupuesto) {
			$presupuesto->setDt_fecha_tipo3(CYTSecureUtils::formatDateToPersist($presupuesto->getDt_fecha_tipo3()));
			$total += $presupuesto->getNu_montopresupuesto();
			$presupuestos[] = $renderer->buildArrayPresupuestoTipo3($presupuesto);
		}		
		
		return array("presupuestos_tipo3" => $presupuestos, 
						"total_tipo3" => CYTSecureUtils::formatMontoToView($total), 	
						"presupuesto_tipo3Columns" => $renderer->getPresupuestoTipo3Columns(),
						"presupuesto_tipo3ColumnsAlign" => $renderer->getPresupuestoTipo3ColumnsAlign(),
						"presupuesto_tipo3ColumnsLabels" => $renderer->getPresupuestoTipo3ColumnsLabels());

	}


	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewFormInstance()
	 */
	public function getNewFormInstance(){
		return new CMPPresupuestoTipo3Form();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewEntityInstance()
	 */
	public function getNewEntityInstance(){
		return new PresupuestoTipo3();
	}
	
	protected function getEntityManager(){
		return new PresupuestoTipo3SessionManager();
	}
	
}