<?php 

/**
 * Acción para dar de alta un proyecto anterior de solicitud.
 * El alta es sólo en sesión para ir armando la solicitud.
 * 
 * @author Marcos
 * @since 30-04-2014
 * 
 */
class AddJovenesProyectoSessionAction extends AddEntityAction{

	protected function edit( $entity ){
		
		parent::edit( $entity );
		
		//vamos a retornar por json las jovenesProyectos de la solicitud.
		
		//usamos el renderer para reutilizar lo que mostramos de las jovenesProyectos.
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