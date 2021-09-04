<?php

/**
 * Presupuesto tipo 2
 *
 * @author Marcos
 * @since 05-05-2014
 */

class PresupuestoTipo2 extends Presupuesto{

	
	
	
	private $dt_fecha_tipo2;


	public function __construct(){
		 
		
			
		$this->dt_fecha_tipo2 = "";
	}



	

	

	public function getDt_fecha_tipo2()
	{
	    return $this->dt_fecha_tipo2;
	}

	public function setDt_fecha_tipo2($dt_fecha_tipo2)
	{
	    $this->dt_fecha_tipo2 = $dt_fecha_tipo2;
	}
}
?>