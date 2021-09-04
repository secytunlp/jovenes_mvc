<?php 

/**
 * Acción para dar de alta una beca anterior de solicitud.
 * El alta es sólo en sesión para ir armando la solicitud.
 * 
 * @author Marcos
 * @since 29-04-2014
 * 
 */
class AddBecaSessionAction extends AddEntityAction{

	protected function edit( $entity ){
		
		parent::edit( $entity );
		
		//vamos a retornar por json las becas de la solicitud.
		
		//usamos el renderer para reutilizar lo que mostramos de las becas.
		$renderer = new CMPSolicitudFormRenderer();
		$becas = array();
		foreach ($this->getEntityManager()->getEntities(new CdtSearchCriteria()) as $beca) {
			$beca->setDt_desde(CYTSecureUtils::formatDateToPersist($beca->getDt_desde()));
			$beca->setDt_hasta(CYTSecureUtils::formatDateToPersist($beca->getDt_hasta()));
			$becas[] = $renderer->buildArrayBeca($beca);
		}		
		
		return array("becas" => $becas, 
						"becaColumns" => $renderer->getBecaColumns(),
						"becaColumnsAlign" => $renderer->getBecaColumnsAlign(),
						"becaColumnsLabels" => $renderer->getBecaColumnsLabels());

	}


	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewFormInstance()
	 */
	public function getNewFormInstance(){
		return new CMPBecaForm();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityAction::getNewEntityInstance()
	 */
	public function getNewEntityInstance(){
		return new JovenesBeca();
	}
	
	protected function getEntityManager(){
		return new JovenesBecaSessionManager();
	}
	
}