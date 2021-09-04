<?php

/**
 * Presupuesto tipo 5
 *
 * @author Marcos
 * @since 05-05-2014
 */

class PresupuestoTipo5 extends Presupuesto{

	
	
	
	private $dt_fecha_tipo5;
	
	public function __construct(){
		 $this->dt_fecha_tipo5 = "";
	}




	public function getDt_fecha_tipo5()
	{
	    return $this->dt_fecha_tipo5;
	}

	public function setDt_fecha_tipo5($dt_fecha_tipo5)
	{
	    $this->dt_fecha_tipo5 = $dt_fecha_tipo5;
	}
}
?>