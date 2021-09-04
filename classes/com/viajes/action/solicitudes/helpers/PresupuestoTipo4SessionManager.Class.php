<?php

/**
 * Helper manager para administrar en sesión los presupuestos tipo 4 de una solicitud
 *  
 * @author Marcos
 * @since 05-05-2014
 */
class PresupuestoTipo4SessionManager extends EntityManager{

	public function getDAO(){
		return new PresupuestoTipo4SessionDAO();
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
