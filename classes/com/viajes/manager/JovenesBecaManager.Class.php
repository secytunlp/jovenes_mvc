<?php

/**
 * Manager para Jovenes Beca
 *  
 * @author Marcos
 * @since 06-05-2014
 */
class JovenesBecaManager extends EntityManager{

	public function getDAO(){
		return DAOFactory::getJovenesBecaDAO();
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
