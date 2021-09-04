<?php

/**
 * Presupuesto tipo 3
 *
 * @author Marcos
 * @since 05-05-2014
 */

class PresupuestoTipo3 extends Presupuesto{

	
	
	
	private $dt_fecha_tipo3;
	
	public function __construct(){
		 $this->dt_fecha_tipo3 = "";
	}




	public function getDt_fecha_tipo3()
	{
	    return $this->dt_fecha_tipo3;
	}

	public function setDt_fecha_tipo3($dt_fecha_tipo3)
	{
	    $this->dt_fecha_tipo3 = $dt_fecha_tipo3;
	}
}
?>