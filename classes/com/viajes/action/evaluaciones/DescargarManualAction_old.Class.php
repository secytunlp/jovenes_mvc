<?php

/**
 * Se chequea el motivo
 * 
 * @author Marcos
 * @since 17-05-2023
 *
 */
class DescargarManualAction_old extends CdtAction{


	/**
	 * (non-PHPdoc)
	 * @see CdtAction::execute();
	 */
	public function execute(){

		
		$result = "";
		
		try{

            echo '<script type="text/javascript"> 
    window.open(\'https://secyt.presi.unlp.edu.ar/cyt_htm/manual_jovenes_investigadores_evaluador2023.pdf\', \'_blank\');
</script>';

            exit();


        }catch(Exception $ex){
			
			$result['error'] = $ex->getMessage();
			
		}


		return null;
	}
	
	
	
}