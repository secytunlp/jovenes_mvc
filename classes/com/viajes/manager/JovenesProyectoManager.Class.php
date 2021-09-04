<?php

/**
 * Manager para Jovenes Proyecto
 *  
 * @author Marcos
 * @since 06-05-2014
 */
class JovenesProyectoManager extends EntityManager{

	public function getDAO(){
		return DAOFactory::getJovenesProyectoDAO();
	}

	public function add(Entity $entity) {
    	
		parent::add($entity);
		
    }	
    
     public function update(Entity $entity) {
     	
     	
		parent::update($entity);
     }

    
    
    
	/**
     * se elimina la entity
     * @param int identificador de la entity a eliminar.
     */
    public function delete($id) {
        
		parent::delete( $id );
		
    	
    }
	
	
	
	
}
?>
