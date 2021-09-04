<?php

/**
 * Helper manager para administrar en sesión los presupuestos tipo 12 de una solicitud
 *  
 * @author Marcos
 * @since 05-05-2014
 */
class PresupuestoTipo1SessionManager extends EntityManager{

	public function getDAO(){
		return new PresupuestoTipo1SessionDAO();
	}
	
	public function deleteAll() {
    	$this->getDAO()->deleteAll();
    }
    
    public function setEntities( $entities ) {
    	$this->getDAO()->setEntities($entities);
    }
    
    protected function validateOnAdd(Entity $entity){
    	
    	//TODO validaciones	
    }
    
	protected function validateOnUpdate(Entity $entity){
		//TODO validaciones
	}

	protected function validateOnDelete($id){
		//TODO validaciones
	}	
}

?>
