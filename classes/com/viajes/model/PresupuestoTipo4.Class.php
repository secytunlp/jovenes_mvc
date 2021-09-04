<?php

/**
 * Presupuesto tipo 4
 *
 * @author Marcos
 * @since 05-05-2014
 */

class PresupuestoTipo4 extends Presupuesto{

	
	
	
	private $dt_fecha_tipo4;
	
	public function __construct(){
		 $this->dt_fecha_tipo4 = "";
	}




	public function getDt_fecha_tipo4()
	{
	    return $this->dt_fecha_tipo4;
	}

	public function setDt_fecha_tipo4($dt_fecha_tipo4)
	{
	    $this->dt_fecha_tipo4 = $dt_fecha_tipo4;
	}
}
?>