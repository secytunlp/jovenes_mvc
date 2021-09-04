<?php

/**
 * Helper manager para administrar en sesión los presupuestos tipo 2 de una solicitud
 *  
 * @author Marcos
 * @since 01-05-2014
 */
class PresupuestoTipo2SessionManager extends EntityManager{

	public function getDAO(){
		return new PresupuestoTipo2SessionDAO();
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
