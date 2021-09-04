<?php 

/**
 * Acción para quitar una beca de solicitud.
 * Es sólo en sesión para ir armando la solicitud.
 * 
 * @author Marcos
 * @since 30-04-2014
 * 
 */
class DeleteBecaSessionAction extends EditEntityAction{

	protected function edit( $entity ){
		
		$beca = CdtUtils::getParam("item_oid");
		
		//el oid representa el dato "beca" ya que no hay entity relacionada
		$this->getEntityManager()->delete( $beca );

		
		//vamos a retornar por json los becas de la encomienda.
		
		//usamos el renderer para reutilizar lo que mostramos de los becas.
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
