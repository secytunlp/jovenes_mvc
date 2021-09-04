<?php

/**
 * Helper manager para administrar en sesión los presupuestos tipo 3 de una solicitud
 *  
 * @author Marcos
 * @since 05-05-2014
 */
class PresupuestoTipo3SessionManager extends EntityManager{

	public function getDAO(){
		return new PresupuestoTipo3SessionDAO();
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
