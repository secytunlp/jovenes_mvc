<?php 

/**
 * Acción para dar de alta un presupuesto tipo 4 de solicitud.
 * El alta es sólo en sesión para ir armando la solicitud.
 * 
 * @author Marcos
 * @since 05-05-2014
 * 
 */
class AddPresupuestoTipo4SessionAction extends AddEntityAction{

	protected function edit( $entity ){
		
		parent::edit( $entity );
		
		//vamos a retornar por json los presupuestos de la solicitud.
		
		//usamos el renderer para reutilizar lo que mostramos de los presupuestos.
		$renderer = new CMPSolicitudFormRenderer();
		$presupuestos = array();
		$total=0;
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