<?php 

/**
 * Acción para quitar un proyecto de solicitud.
 * Es sólo en sesión para ir armando la solicitud.
 * 
 * @author Marcos
 * @since 30-04-2014
 * 
 */
class DeleteJovenesProyectoSessionAction extends EditEntityAction{

	protected function edit( $entity ){
		
		$jovenesProyecto = CdtUtils::getParam("item_oid");
		
		//el oid representa el dato "jovenesProyecto" ya que no hay entity relacionada
		$this->getEntityManager()->delete( $jovenesProyecto );

		
		//vamos a retornar por json los jovenesProyectos de la encomienda.
		
		//usamos el renderer para reutilizar lo que mostramos de los jovenesProyectos.
		$renderer = new CMPSolicitudFormRenderer();
		$jovenesProyectos = array();
		foreach ($this->getEntityManager()->getEntities(new CdtSearchCriteria()) as $jovenesProyecto) {
			$jovenesProyecto->setDt_desdeproyecto(CYTSecureUtils::formatDateToPersist($jovenesProyecto->getDt_desdeproyecto()));
			$jovenesProyecto->setDt_hastaproyecto(CYTSecureUtils::formatDateToPersist($jovenesProyecto->getDt_hastaproyecto()));
			$jovenesProyectos[] = $renderer->buildArrayJovenesProyecto($jovenesProyecto);
		}		
		
		return array("jovenesProyectos" => $jovenesProyectos, 
						"jovenesProyectoColumns" => $renderer->getJovenesProyectoColumns(),
						"jovenesProyectoColumnsAlign" => $renderer->getJovenesProyectoColumnsAlign(),
						"jovenesProyectoColumnsLabels" => $renderer->getJovenesProyectoColumnsLabels());
	}


	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewFormInstance()
	 */
	public function getNewFormInstance(){
		return new CMPJovenesProyectoForm();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewEntityInstance()
	 */
	public function getNewEntityInstance(){
		return new JovenesProyecto();
	}
	
	protected function getEntityManager(){
		return new JovenesProyectoSessionManager();
	}

}
