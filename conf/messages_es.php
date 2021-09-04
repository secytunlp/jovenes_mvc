<?php

/**
 * se definen los mensajes del sistema en espaÃ±ol.
 *
 * @author modelBuilder
 *
 */


include_once('messages_labels_es.php');

/* SOLICITUDES */

define('CYT_MSG_SOLICITUD_TITLE_LIST', 'Solicitudes', true);
define('CYT_MSG_SOLICITUD_TITLE_ADD', 'Agregar ' . CYT_LBL_SOLICITUD, true);
define('CYT_MSG_SOLICITUD_TITLE_UPDATE', 'Modificar ' . CYT_LBL_SOLICITUD , true);
define('CYT_MSG_SOLICITUD_TITLE_VIEW', 'Visualizar ' . CYT_LBL_SOLICITUD , true);
define('CYT_MSG_SOLICITUD_TITLE_DELETE', 'Borrar ' . CYT_LBL_SOLICITUD , true);
define('CYT_MSG_SOLICITUD_TITLE_EVALUAR', 'Evaluar ' . CYT_LBL_SOLICITUD, true);

define('CYT_MSG_SOLICITUD_CALLE_REQUIRED', CYT_LBL_SOLICITUD_CALLE . ' es requerido', true);
define('CYT_MSG_SOLICITUD_CALLE_NRO_REQUIRED', CYT_LBL_SOLICITUD_CALLE_NRO . ' es requerido', true);
define('CYT_MSG_SOLICITUD_CP_REQUIRED', CYT_LBL_SOLICITUD_CP . ' es requerido', true);
define('CYT_MSG_SOLICITUD_MAIL_REQUIRED', CYT_LBL_SOLICITUD_MAIL . ' es requerido', true);
define('CYT_MSG_SOLICITUD_TITULO_REQUIRED', CYT_LBL_SOLICITUD_TITULO . ' es requerido', true);
define('CYT_MSG_SOLICITUD_LUGAR_TRABAJO_REQUIRED', CYT_LBL_SOLICITUD_LUGAR_TRABAJO . ' es requerido', true);
define('CYT_MSG_SOLICITUD_CARGO_REQUIRED', CYT_LBL_SOLICITUD_CARGO . ' es requerido', true);
define('CYT_MSG_SOLICITUD_DEDICACION_REQUIRED', CYT_LBL_SOLICITUD_DEDICACION . ' es requerido', true);
define('CYT_MSG_SOLICITUD_FACULTAD_REQUIRED', CYT_LBL_SOLICITUD_FACULTAD . ' es requerido', true);

define('CYT_MSG_SOLICITUD_RESUMEN_PALABRAS_REQUIRED', 'El texto del resumen en la pestaÃ±a motivo debe tener al menos', true);
define('CYT_MSG_SOLICITUD_RESUMEN_PALABRAS', 'Palabras', true);


define('CYT_MSG_SOLICITUD_TAB_DOMICILIO', "Personales", true);
define('CYT_MSG_SOLICITUD_DOMICILIO_TITULO', "Domicilio de notificaciÃ³n (Dentro del Radio Urbano de La Plata, Art. 20 Ord. 101)", true);
define('CYT_MSG_SOLICITUD_TAB_UNIVERSIDAD', "Universidad", true);
define('CYT_MSG_SOLICITUD_TAB_BECARIO', "Becario", true);
define('CYT_MSG_SOLICITUD_TAB_CARRERAINV', "Carrera Inv.", true);
define('CYT_MSG_SOLICITUD_TAB_PROYECTOS', "Proy. Actuales", true);
define('CYT_MSG_SOLICITUD_TAB_DESCRIPCION', "DescripciÃ³n", true);
define('CYT_MSG_SOLICITUD_TIPO_INVESTIGADOR_TITULO', "Debe seleccionar la Unidad Académica donde Ud. realiza la actividad de I+D", true);

define('CYT_MSG_SOLICITUD_BECAS_TAB', "Becas Anteriores", true);

define('CYT_MSG_SOLICITUD_TAB_PROYECTOS_ANTERIORES', "Proy. Anteriores", true);
define('CYT_MSG_SOLICITUD_PROYECTOS_ANTERIORES_TITULO', "PROYECTO/S ACREDITADO/S EN EL/LOS QUE PARTICIPÃ“ ANTERIORMENTE (Si formÃ³ parte de un proyecto que finalizÃ³ antes del 31/12/2009 debe ingresarlo) ", true);

define('CYT_MSG_SOLICITUD_TAB_PRESUPUESTOS', "Presupuesto", true);
define('CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_1_TITULO', "BIENES DE CONSUMO", true);
define('CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_2_TITULO', "SERVICIOS NO PERSONALES", true);
define('CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_3_TITULO', "EQUIPAMIENTO Y BIBLIOGRAFIA", true);
define('CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_4_TITULO', "EQUIPAMIENTO CIENTIFICO ESPECIFICO", true);
define('CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_5_TITULO', "EQUIPO DE COMPUTACIÃ“N ", true);


define('CYT_MSG_SOLICITUD_SIN_YEAR_PROYECTO', 'Debe contar al menos con un aÃ±o de antigÃ¼edad en proyectos en ejecuciÃ³n o ser becario UNLP.', true);
define('CYT_MSG_SOLICITUD_SIN_PROYECTO_ACTUAL', 'Debe contar al menos con un proyecto en ejecuciÃ³n o ser becario UNLP.', true);
define('CYT_MSG_SOLICITUD_FUE_DIRCODIR', 'No se pueden presentar los Directores y/o Codirectores de Proyectos de AcreditaciÃ³n.', true);


define('CYT_MSG_SOLICITUD_CREADA', 'SÃ³lo se puede crear una solicitud por perÃ­odo', true);
define('CYT_MSG_SOLICITUD_LUGAR_TRABAJO_BECA_NO_UNLP', 'Si tiene dedicaciÃ³n simple el lugar de trabajo de la beca debe ser en la U.N.L.P..', true);
define('CYT_MSG_SOLICITUD_LUGAR_TRABAJO_CARRERA_NO_UNLP', 'Si tiene dedicaciÃ³n simple el lugar de trabajo de la carrera de investigador debe ser en la U.N.L.P..', true);
define('CYT_MSG_SOLICITUD_DOCTORADO_ANTERIOR', 'Doctorado anterior al ', true);
define('CYT_MSG_SOLICITUD_INGRESO_A_LA_CARRERA_ANTERIOR', 'Ingreso a la carrera anterior al ', true);
define('CYT_MSG_SOLICITUD_INGRESO_A_LA_CARRERA', 'Ingreso a la carrera posterior a la fecha de cierre de la convocatoria', true);
define('CYT_MSG_SOLICITUD_EDAD_MAYOR', 'Solicitante no menor a $1 aÃ±os al $2 y no Becario U.N.L.P.', true);
define('CYT_MSG_SOLICITUD_MENOR_YEAR', 'Menos de $1 aÃ±os de participaciÃ³n en proyectos UNLP / Beca UNLP', true);
define('CYT_MSG_SOLICITUD_MONTO_MAXIMO', 'El monto mÃ¡ximo es de', true);
define('CYT_MSG_SOLICITUD_MONTO_DECLARAR', 'El total de la pestaÃ±a presupuesto debe ser mayor que 0 (cero) y no superar los ', true);
define('CYT_MSG_SOLICITUD_TAB_CAMPOS_REQUERIDOS', "Complete todos los campos de la pestaÃ±a", true);

/* BECAS*/
define('CYT_MSG_BECA_TIPO_REQUIRED', CYT_LBL_SOLICITUD_TIPO_BECA . ' es requerido', true);


define('CYT_MSG_BECA_DESDE_REQUIRED', CYT_LBL_SOLICITUD_BECA_DESDE . ' es requerido', true);
define('CYT_MSG_BECA_HASTA_REQUIRED', CYT_LBL_SOLICITUD_BECA_HASTA . ' es requerido', true);


define('CYT_MSG_BECA_ASIGNAR', 'Asignar Beca', true);
define('CYT_MSG_BECAS', "Indique las becas", true);

define('CYT_MSG_BECA_DESDE_MAYOR', CYT_LBL_SOLICITUD_BECA_DESDE . ' es mayor que '.CYT_LBL_SOLICITUD_BECA_HASTA, true);
define('CYT_MSG_BECA_NO_VIGENTE', 'Beca no vigente', true);
define('CYT_MSG_BECA_FUERA_RANGO', 'Solo se pueden agregar becas U.N.L.P. que comenzaron antes del '.CYT_BECA_RANGO_FIN, true);


/* PROYECTOS*/
define('CYT_MSG_PROYECTO_CODIGO_REQUIRED', CYT_LBL_SOLICITUD_PROYECTOS_CODIGO . ' es requerido', true);
define('CYT_MSG_PROYECTO_TITULO_REQUIRED', CYT_LBL_SOLICITUD_PROYECTOS_TITULO . ' es requerido', true);
define('CYT_MSG_PROYECTO_DIRECTOR_REQUIRED', CYT_LBL_SOLICITUD_PROYECTOS_DIRECTOR . ' es requerido', true);
define('CYT_MSG_PROYECTO_INICIO_REQUIRED', CYT_LBL_SOLICITUD_PROYECTOS_INICIO . ' es requerido', true);
define('CYT_MSG_PROYECTO_FIN_REQUIRED', CYT_LBL_SOLICITUD_PROYECTOS_FIN . ' es requerido', true);


define('CYT_MSG_PROYECTO_ASIGNAR', 'Asignar Proyecto', true);
define('CYT_MSG_PROYECTOS', "Indique los proyectos anteriores", true);

define('CYT_MSG_PROYECTO_DESDE_MAYOR', CYT_LBL_SOLICITUD_PROYECTOS_INICIO . ' es mayor que '.CYT_LBL_SOLICITUD_PROYECTOS_FIN, true);
define('CYT_MSG_PROYECTOS_FUERA_RANGO', 'Solo se pueden agregar proyectos que finalizaron antes del '.CYT_PROYECTO_RANGO_FIN, true);

/* PRESUPUESTOS*/
define('CYT_MSG_MONTO_IMPORTE_REQUIRED', CYT_LBL_MONTO_IMPORTE . ' es requerido', true);
define('CYT_MSG_PRESUPUESTO_FECHA_REQUIRED', CYT_LBL_PRESUPUESTO_DATE . ' es requerido', true);
define('CYT_MSG_PRESUPUESTO_CONCEPTO_REQUIRED', CYT_LBL_PRESUPUESTO_CONCEPTO . ' es requerido', true);
define('CYT_MSG_PRESUPUESTO_IMPORTE_REQUIRED', CYT_LBL_PRESUPUESTO_IMPORTE . ' es requerido', true);
define('CYT_MSG_PRESUPUESTO_DIAS_REQUIRED', CYT_LBL_PRESUPUESTO_DIAS . ' es requerido', true);
define('CYT_MSG_PRESUPUESTO_LUGAR_REQUIRED', CYT_LBL_PRESUPUESTO_LUGAR . ' es requerido', true);
define('CYT_MSG_PRESUPUESTO_PASAJES_REQUIRED', CYT_LBL_PRESUPUESTO_PASAJES . ' es requerido', true);
define('CYT_MSG_PRESUPUESTO_DESTINO_REQUIRED', CYT_LBL_PRESUPUESTO_DESTINO . ' es requerido', true);
define('CYT_MSG_PRESUPUESTO_DESCRIPCION_REQUIRED', CYT_LBL_PRESUPUESTO_DESCRIPCION . ' es requerido', true);
define('CYT_MSG_PRESUPUESTO_OTROS_REQUIRED', CYT_LBL_PRESUPUESTO_OTROS . ' es requerido', true);
define('CYT_MSG_PRESUPUESTOS_REQUIRED', 'Debe asignar al menos un monto', true);

define('CYT_MSG_PRESUPUESTO_TIPO1_ASIGNAR', 'Asignar Bien De Consumo', true);
define('CYT_MSG_PRESUPUESTOS_TIPO1', "Indique los bienes de consumo", true);

define('CYT_MSG_PRESUPUESTO_TIPO2_ASIGNAR', 'Asignar Servicio No Personal', true);
define('CYT_MSG_PRESUPUESTOS_TIPO2', "Indique los servicios no personales", true);

define('CYT_MSG_PRESUPUESTO_TIPO3_ASIGNAR', 'Asignar Equipamiento y BibliografÃ­a', true);
define('CYT_MSG_PRESUPUESTOS_TIPO3', "Indique los Equipamientos y BibliografÃ­as", true);

define('CYT_MSG_PRESUPUESTO_TIPO4_ASIGNAR', 'Asignar Equipamiento CientÃ­fico EspecÃ­fico', true);
define('CYT_MSG_PRESUPUESTOS_TIPO4', "Indique los Equipamientos CientÃ­ficos EspecÃ­ficos", true);

define('CYT_MSG_PRESUPUESTO_TIPO5_ASIGNAR', 'Asignar Equipo De ComputaciÃ³n', true);
define('CYT_MSG_PRESUPUESTOS_TIPO5', "Indique los Equipos De ComputaciÃ³n", true);

define('CYT_MSG_PRESUPUESTO_FECHA_FUERA_RANGO', CYT_LBL_PRESUPUESTO_DATE . ' fuera de rango', true);
define('CYT_MSG_PRESUPUESTO_FECHA_MENOR', CYT_LBL_PRESUPUESTO_DATE . ' menor a ', true);

//PDF

define('CYT_MSG_SOLICITUD_PDF_HEADER_TITLE', 'SOLICITUD DE SUBSIDIOS', true);
define('CYT_MSG_SOLICITUD_PDF_HEADER_TITLE_2', 'JÃ³venes Investigadores de la UNLP', true);

define('CYT_MSG_SOLICITUD_PDF_MES_1', 'Junio', true);
define('CYT_MSG_SOLICITUD_PDF_MES_2', 'Julio', true);
define('CYT_MSG_SOLICITUD_SEPARADOR_DOMICILIO', 'Domicilio de notificaciÃ³n (Dentro del Radio Urbano de La Plata, Art. 20 Ord. 101)', true);
define('CYT_MSG_SOLICITUD_PROYECTOS_ACTUALES', 'PROYECTO/S ACREDITADO/S EN EL/LOS QUE PARTICIPA ACTUALMENTE', true);
define('CYT_MSG_SOLICITUD_PROYECTOS_ANTERIORES', 'PROYECTO/S ACREDITADO/S EN EL/LOS QUE PARTICIPO ANTERIORMENTE', true);
define('CYT_MSG_SOLICITUD_BECAS_ANTERIORES', 'BECAS ANTERIORES', true);
define('CYT_MSG_SOLICITUD_PDF_LUGAR', 'Lugar', true);
define('CYT_MSG_SOLICITUD_PDF_FECHA', 'Fecha', true);
define('CYT_MSG_SOLICITUD_DECLARACION_JURADA', 'La presente tiene carÃ¡cter de declaraciÃ³n jurada.', true);
define('CYT_MSG_SOLICITUD_DECLARACION_JURADA_2', 'DeclaraciÃ³n Jurada', true);
define('CYT_MSG_SOLICITUD_FIRMA_DIRECTOR_BECA', 'Aval del Dir. de Proy. Acred. o Beca', true);
define('CYT_MSG_SOLICITUD_DECLARACION_JURADA_3', '(SÃ³lo en caso de haber sido adjudicatario de subsidios anteriores)', true);
define('CYT_MSG_SOLICITUD_DECLARACION_JURADA_4', 'Declaro que al momento de la presentaciÃ³n de la solicitud de subsidios $1, he entregado en la SecretarÃ­a de Ciencia y TÃ©cnica de la Universidad Nacional de La Plata el informe y constancia de la rendiciÃ³n efectuada en mi Unidad AcadÃ©mica correspondiente al subsidio OTORGADO EN EL PERIODO 2004 al $2 inclusive. Tomo conocimiento que el no cumplimiento de lo mencionado precedentemente es motivo de exclusiÃ³n de esta presentaciÃ³n.', true);
define('CYT_MSG_SOLICITUD_FIRMA_LUGAR', 'Lugar y Fecha', true);
define('CYT_MSG_SOLICITUD_FIRMA_ACLARACION', 'Firma y AclaraciÃ³n', true);
define('CYT_MSG_SOLICITUD_FIRMA_AVAL', 'AVAL DEL DECANO', true);
define('CYT_MSG_SOLICITUD_FIRMA', 'Firma', true);
define('CYT_MSG_SOLICITUD_UNIVERSIDAD', 'UNIVERSIDAD', true);
define('CYT_MSG_SOLICITUD_SEPARADOR_DESCRIPCION', 'Indicar y describir la aplicaciÃ³n del subsidio en caso que le sea otorgado. La descripcion deberÃ¡ ser lo mas detallada y precisa posible.', true);
define('CYT_MSG_SOLICITUD_SEPARADOR_PRESUPUESTO', 'PRESUPUESTO ESTIMADO PRELIMINAR', true);
define('CYT_MSG_SOLICITUD_SUBTOTAL', 'SUBTOTAL', true);
define('CYT_MSG_SOLICITUD_TOTAL', 'TOTAL', true);




//PDF evaluaciÃ³n

define('CYT_MSG_EVALUACION_PDF_HEADER_TITLE', 'PLANILLA DE EVALUACION', true);
define('CYT_MSG_EVALUACION_ANTEDENTES_ACADEMICOS', 'ANTECEDENTES ACADÃ‰MICOS DEL SOLICITANTE', true);
define('CYT_MSG_EVALUACION_SEPARADOR_NEGRO_1_1', 'P. Max/ITEM', true);
define('CYT_MSG_EVALUACION_SEPARADOR_NEGRO_1_2', 'DETALLE Y PUNTAJE', true);
define('CYT_MSG_EVALUACION_SEPARADOR_NEGRO_1_3', 'P. OTORGADO', true);
define('CYT_MSG_EVALUACION_PLAN_TRABAJO', 'PLAN DE TRABAJO', true);
define('CYT_MSG_EVALUACION_MAX', 'Max.', true);
define('CYT_MSG_EVALUACION_PT', 'pt.', true);
define('CYT_MSG_EVALUACION_CV_VISITANTE', 'Y CV DEL VISITANTE', true);
define('CYT_MSG_EVALUACION_CATEGORIA', 'CATEGORIA', true);
define('CYT_MSG_EVALUACION_CARGO', 'CARGO DOCENTE', true);
define('CYT_MSG_EVALUACION_CARGO_ACTUAL', 'ACTUAL EN LA UNLP', true);
define('CYT_MSG_EVALUACION_CANT', 'Cant.', true);
define('CYT_MSG_EVALUACION_CV_SOLICITANTE', 'DEL SOLIC.', true);
define('CYT_MSG_EVALUACION_5_YEARS', '5 AÃ‘OS', true);
define('CYT_MSG_EVALUACION_SUBTOTAL', 'Subtotal', true);
define('CYT_MSG_EVALUACION_PROD_ULTIMOS', 'PROD. ULTIMOS', true);
define('CYT_MSG_EVALUACION_HASTA', 'Hasta', true);
define('CYT_MSG_EVALUACION_C_U', 'c/u', true);
define('CYT_MSG_EVALUACION_FORMACION', 'FORMACION', true);
define('CYT_MSG_EVALUACION_RR_HH', 'RECURSOS HUMANOS', true);
define('CYT_MSG_EVALUACION_TOTAL', 'TOTAL', true);
define('CYT_MSG_EVALUACION_OBSERVACIONES', 'Observaciones', true);
define('CYT_MSG_EVALUACION_FIRMA', 'Firma Evaluador', true);
define('CYT_MSG_EVALUACION_ACLARACION', 'AclaraciÃ³n', true);
define('CYT_MSG_EVALUACION_ANTEDENTES_DOCENTES', 'ANTECEDENTES DOCENTES', true);
define('CYT_MSG_EVALUACION_ANTEDENTES_DOCENTES_DESCRIPCION', 'Se asignarÃ¡ el puntaje correspondiente a la mÃ¡xima categorÃ­a alcanzada.', true);
define('CYT_MSG_EVALUACION_OTROS_ANTEDENTES', 'OTROS ANTECEDENTES', true);
define('CYT_MSG_EVALUACION_PRODUCCION_CIENTIFICA', 'FORMACIÃ“N DE RR.HH. Y PRODUCCIÃ“N CIENTÃ�FICA EN LOS ULTIMOS 5 AÑOS', true);
define('CYT_MSG_EVALUACION_JUSTIFICACION', 'JUSTIFICACIÃ“N TÃ‰CNICA DEL SUBSIDIO SOLICITADO ', true);
define('CYT_MSG_EVALUACION_FACTOR_DESCRIPCION_1', 'Se aplicarÃ¡ un "factor de eficiencia" F que multiplicarÃ¡ al resultado de la suma de los puntajes correspondientes a A.1), A.2) y A.3): Llamando G al nÃºmero de aÃ±os transcurridos desde la obtenciÃ³n del tÃ­tulo de grado.', true);
define('CYT_MSG_EVALUACION_FACTOR_DESCRIPCION_2', 'Si ya obtuvo el grado acadÃ©mico superior de la especialidad, o G<6 entonces F=1', true);
define('CYT_MSG_EVALUACION_FACTOR_DESCRIPCION_3', 'Si aÃºn no obtuvo el grado acadÃ©mico superior de la especialidad y G>=6 entonces: SI 6=< G <7 entonces F=0.9 -- SI 7=< G <8 entonces F=0.8 -- SI 8=< G <9 entonces F=0.7 -- SI 9=< G <10 entonces F=0.6 -- SI G>=10 entonces F=0.5', true);
define('CYT_MSG_EVALUACION_POSGRADO_PDF', 'PG. Sup.', true);

define('CYT_MSG_INTEGRANTE_CV_PROBLEMA', 'Hubo un error al subir el Curriculum, intente nuevamente, si el problema persiste envíenos un mail a proyectos.secyt@presi.unlp.edu.ar', true);
?>