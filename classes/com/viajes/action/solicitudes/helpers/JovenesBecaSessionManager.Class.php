<?php

/**
 * Helper manager para administrar en sesión las becas de una solicitud
 *  
 * @author Marcos
 * @since 29-04-2014
 */
class JovenesBecaSessionManager extends EntityManager{

	public function getDAO(){
		return new JovenesBecaSessionDAO();
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
