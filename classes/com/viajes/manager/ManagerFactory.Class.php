<?php

/**
 * Factory para Managers
 *  
 * @author Marcos
 * @since 13-11-2013
 */
class ManagerFactory{

	public static function getMotivoManager(){
		return new MotivoManager();
	}
	
	public static function getSolicitudManager(){
		return new SolicitudManager();
	}
	
	public static function getJovenesProyectoManager(){
		return new JovenesProyectoManager();
	}
	
	
	public static function getPresupuestoManager(){
		return new PresupuestoManager();
	}
	
	
	public static function getModeloPlanillaManager(){
		return new ModeloPlanillaManager();
	}
	
	
	public static function getCargoMaximoManager(){
		return new CargoMaximoManager();
	}
	
	public static function getPuntajeCargoManager(){
		return new PuntajeCargoManager();
	}
	
	public static function getPuntajeGrupoManager(){
		return new PuntajeGrupoManager();
	}
	
	public static function getPosgradoPlanillaManager(){
		return new PosgradoPlanillaManager();
	}
	
	public static function getPosgradoMaximoManager(){
		return new PosgradoMaximoManager();
	}
	
	public static function getPuntajePosgradoManager(){
		return new PuntajePosgradoManager();
	}

	public static function getAntacadPlanillaManager(){
		return new AntacadPlanillaManager();
	}
	
	public static function getAntacadMaximoManager(){
		return new AntacadMaximoManager();
	}
	
	public static function getPuntajeAntacadManager(){
		return new PuntajeAntacadManager();
	}
	
	public static function getJovenesBecaManager(){
		return new JovenesBecaManager();
	}
	
	public static function getEvaluacionManager(){
		return new EvaluacionManager();
	}
	
	public static function getAntotrosPlanillaManager(){
		return new AntotrosPlanillaManager();
	}
	
	public static function getAntotrosMaximoManager(){
		return new AntotrosMaximoManager();
	}
	
	public static function getPuntajeAntotrosManager(){
		return new PuntajeAntotrosManager();
	}
	
	public static function getAntjustificacionPlanillaManager(){
		return new AntjustificacionPlanillaManager();
	}
	
	public static function getAntjustificacionMaximoManager(){
		return new AntjustificacionMaximoManager();
	}
	
	public static function getPuntajeAntjustificacionManager(){
		return new PuntajeAntjustificacionManager();
	}
	
	public static function getAntproduccionPlanillaManager(){
		return new AntproduccionPlanillaManager();
	}
	
	public static function getAntproduccionMaximoManager(){
		return new AntproduccionMaximoManager();
	}
	
	public static function getPuntajeAntproduccionManager(){
		return new PuntajeAntproduccionManager();
	}
	
	public static function getSubanteriorPlanillaManager(){
		return new SubanteriorPlanillaManager();
	}
	
	public static function getSubanteriorMaximoManager(){
		return new SubanteriorMaximoManager();
	}
	
	public static function getPuntajeSubanteriorManager(){
		return new PuntajeSubanteriorManager();
	}
	
	
}

?>