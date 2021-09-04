<?php

/**
 * JovenesBeca
 *
 * @author Marcos
 * @since 29-04-2014
 */

class JovenesBeca extends Entity{

	//variables de instancia.
	
	private $solicitud;
	
	
	private $dt_desde;
	
	private $dt_hasta;
	
	private $ds_tipobeca;
	
	
	
	private $bl_unlp;
	private $bl_agregado;
	


	public function __construct(){
		 
		$this->solicitud = new Solicitud();
		
		
			
		$this->dt_desde = "";
		
		$this->dt_hasta = "";
		
		$this->ds_tipobeca = "";
		
		
		
		$this->bl_agregado = 0;
		
		$this->bl_unlp = 0;
	}




	

	 

	

	


	public function getSolicitud()
	{
	    return $this->solicitud;
	}

	public function setSolicitud($solicitud)
	{
	    $this->solicitud = $solicitud;
	}

	public function getDt_desde()
	{
	    return $this->dt_desde;
	}

	public function setDt_desde($dt_desde)
	{
	    $this->dt_desde = $dt_desde;
	}

	public function getDt_hasta()
	{
	    return $this->dt_hasta;
	}

	public function setDt_hasta($dt_hasta)
	{
	    $this->dt_hasta = $dt_hasta;
	}

	public function getDs_tipobeca()
	{
	    return $this->ds_tipobeca;
	}

	public function setDs_tipobeca($ds_tipobeca)
	{
	    $this->ds_tipobeca = $ds_tipobeca;
	}

	public function getBl_unlp()
	{
	    return $this->bl_unlp;
	}

	public function setBl_unlp($bl_unlp)
	{
	    $this->bl_unlp = $bl_unlp;
	}

	public function getBl_agregado()
	{
	    return $this->bl_agregado;
	}

	public function setBl_agregado($bl_agregado)
	{
	    $this->bl_agregado = $bl_agregado;
	}
}
?>