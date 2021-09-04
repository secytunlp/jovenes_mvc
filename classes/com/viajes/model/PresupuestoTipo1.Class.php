<?php

/**
 * Presupuesto tipo 1
 *
 * @author Marcos
 * @since 05-05-2014
 */

class PresupuestoTipo1 extends Presupuesto{

	
	
	
	private $dt_fecha_tipo1;
	
	public function __construct(){
		 $this->dt_fecha_tipo1 = "";
	}




	public function getDt_fecha_tipo1()
	{
	    return $this->dt_fecha_tipo1;
	}

	public function setDt_fecha_tipo1($dt_fecha_tipo1)
	{
	    $this->dt_fecha_tipo1 = $dt_fecha_tipo1;
	}
}
?>