######################### Pasar solicitudes desde viajes a incentivos ##################################3
SET FOREIGN_KEY_CHECKS=0;


DELETE FROM cyt_solicitudjovenes_estado WHERE EXISTS (
SELECT cd_solicitud
FROM solicitudjovenes
WHERE solicitudjovenes.cd_solicitud = cyt_solicitudjovenes_estado.solicitud_oid AND cd_periodo = 12
);

DELETE FROM presupuestojovenes  WHERE EXISTS (
SELECT cd_solicitud
FROM solicitudjovenes
WHERE solicitudjovenes.cd_solicitud = presupuestojovenes .cd_solicitud AND cd_periodo = 12
);


DELETE FROM solicitudjovenesproyecto  WHERE EXISTS (
SELECT cd_solicitud
FROM solicitudjovenes
WHERE solicitudjovenes.cd_solicitud = solicitudjovenesproyecto .cd_solicitud AND cd_periodo = 12
);

DELETE FROM solicitudjovenesbeca  WHERE EXISTS (
SELECT cd_solicitud
FROM solicitudjovenes
WHERE solicitudjovenes.cd_solicitud = solicitudjovenesbeca .cd_solicitud AND cd_periodo = 12
);

SET FOREIGN_KEY_CHECKS=0;


DELETE FROM cyt_solicitudjovenes_estado WHERE EXISTS (
SELECT cd_solicitud
FROM solicitudjovenes
WHERE solicitudjovenes.cd_solicitud = cyt_solicitudjovenes_estado.solicitud_oid AND cd_periodo = 12
);

DELETE FROM presupuestojovenes  WHERE EXISTS (
SELECT cd_solicitud
FROM solicitudjovenes
WHERE solicitudjovenes.cd_solicitud = presupuestojovenes .cd_solicitud AND cd_periodo = 12
);


DELETE FROM solicitudjovenesproyecto  WHERE EXISTS (
SELECT cd_solicitud
FROM solicitudjovenes
WHERE solicitudjovenes.cd_solicitud = solicitudjovenesproyecto .cd_solicitud AND cd_periodo = 12
);

DELETE FROM cyt_evaluacionjovenes_estado WHERE EXISTS (
SELECT solicitudjovenes.cd_solicitud
FROM solicitudjovenes INNER JOIN evaluacionjovenes ON solicitudjovenes.cd_solicitud = evaluacionjovenes.cd_solicitud
WHERE evaluacionjovenes.cd_evaluacion = cyt_evaluacionjovenes_estado.evaluacion_oid AND solicitudjovenes.cd_periodo = 12
);

DELETE FROM evaluacionjovenes  WHERE EXISTS (
SELECT cd_solicitud
FROM solicitudjovenes
WHERE solicitudjovenes.cd_solicitud = evaluacionjovenes .cd_solicitud AND cd_periodo = 12
);

DELETE FROM solicitudjovenes WHERE cd_periodo = 12;
SET FOREIGN_KEY_CHECKS=1;



### Insertas todas las solicitudes a incentivos desde viajes
SET FOREIGN_KEY_CHECKS=0;
INSERT INTO incentivos.solicitudjovenes
SELECT viajes.solicitudjovenes.* FROM viajes.solicitudjovenes WHERE NOT EXISTS (SELECT incentivos.solicitudjovenes.cd_solicitud FROM incentivos.solicitudjovenes WHERE incentivos.solicitudjovenes.cd_solicitud = viajes.solicitudjovenes.cd_solicitud);
SET FOREIGN_KEY_CHECKS=1;

### Insertas todas las cyt_solicitudjovenes_estado a incentivos desde viajes
SET FOREIGN_KEY_CHECKS=0;
INSERT INTO incentivos.cyt_solicitudjovenes_estado
SELECT viajes.cyt_solicitudjovenes_estado.*
FROM viajes.cyt_solicitudjovenes_estado
WHERE NOT EXISTS (SELECT incentivos.cyt_solicitudjovenes_estado.oid FROM incentivos.cyt_solicitudjovenes_estado WHERE incentivos.cyt_solicitudjovenes_estado.oid = viajes.cyt_solicitudjovenes_estado.oid);
SET FOREIGN_KEY_CHECKS=1;

### Insertas todas los presupuestojovenes  a incentivos desde viajes
SET FOREIGN_KEY_CHECKS=0;
INSERT INTO incentivos.presupuestojovenes
SELECT viajes.presupuestojovenes.* FROM viajes.presupuestojovenes WHERE NOT EXISTS (SELECT incentivos.presupuestojovenes.cd_solicitud FROM incentivos.presupuestojovenes WHERE incentivos.presupuestojovenes.cd_solicitud = viajes.presupuestojovenes.cd_solicitud);
SET FOREIGN_KEY_CHECKS=1;

### Insertas todas las solicitudjovenesbeca a incentivos desde viajes
SET FOREIGN_KEY_CHECKS=0;
INSERT INTO incentivos.solicitudjovenesbeca
SELECT viajes.solicitudjovenesbeca.* FROM viajes.solicitudjovenesbeca WHERE NOT EXISTS (SELECT incentivos.solicitudjovenesbeca.cd_solicitud FROM incentivos.solicitudjovenesbeca WHERE incentivos.solicitudjovenesbeca.cd_solicitud = viajes.solicitudjovenesbeca.cd_solicitud);
SET FOREIGN_KEY_CHECKS=1;

### Insertas todas las solicitudjovenesproyecto a incentivos desde viajes
SET FOREIGN_KEY_CHECKS=0;
INSERT INTO incentivos.solicitudjovenesproyecto
SELECT viajes.solicitudjovenesproyecto.* FROM viajes.solicitudjovenesproyecto WHERE NOT EXISTS (SELECT incentivos.solicitudjovenesproyecto.cd_solicitud FROM incentivos.solicitudjovenesproyecto WHERE incentivos.solicitudjovenesproyecto.cd_solicitud = viajes.solicitudjovenesproyecto.cd_solicitud);
SET FOREIGN_KEY_CHECKS=1;

################################## Solicitantes que pidieron Bienes Personales ##############################################
SELECT F.ds_facultad AS Facultad, CONCAT(D.ds_apellido,', ',D.ds_nombre) AS Solicitante, GROUP_CONCAT(CONCAT(P.ds_presupuesto,' $',P.nu_monto) SEPARATOR "|") AS Bienes,Sum(P.nu_monto) AS Total,S.ds_justificacion AS Justificacion 
FROM `solicitudjovenes` S INNER JOIN presupuestojovenes P ON S.cd_solicitud = P.cd_solicitud 
INNER JOIN facultad F ON S.cd_facultadplanilla = F.cd_facultad 
INNER JOIN docente D ON S.cd_docente = D.cd_docente 
INNER JOIN cyt_solicitudjovenes_estado SE ON S.cd_solicitud = SE.solicitud_oid 
WHERE S.cd_periodo=8 AND P.cd_tipopresupuesto = 1 AND SE.fechaHasta IS NULL and SE.estado_oid = 2
GROUP BY S.cd_solicitud
ORDER BY F.ds_facultad, D.ds_apellido,D.ds_nombre


################################### El evaluador tildó que obtuvo el doctorado pero no tildo el doctorado ####################################
SELECT *  
FROM `puntajeantacad` PA INNER JOIN puntajeposgrado PP ON PA.cd_evaluacion = PP.cd_evaluacion 
WHERE PA.`cd_modeloplanilla` = 6 AND PA.`cd_antacadmaximo` = 28 AND PA.`nu_puntaje` = 2 AND PP.cd_posgradomaximo != 21 

##############################Solicitudes con estado "En evaluacion" con 2 o más evaluaciones en estado "Evaluada"###########################
SELECT S.cd_solicitud, count(S.cd_solicitud) AS Evaluaciones 
FROM `solicitudjovenes` S 
INNER JOIN evaluacionjovenes E ON S.cd_solicitud = E.cd_solicitud

INNER JOIN cyt_evaluacionjovenes_estado EE ON E.cd_evaluacion = EE.evaluacion_oid
INNER JOIN cyt_solicitudjovenes_estado SE ON S.cd_solicitud = SE.solicitud_oid
WHERE S.`cd_periodo` = 9 AND EE.fechaHasta is NULL AND EE.estado_oid = 8 AND SE.fechaHasta is NULL AND SE.estado_oid = 6 AND SE.fechaHasta is NULL
GROUP BY S.cd_solicitud
HAVING (count(S.cd_solicitud)>1)

##############################Solicitudes con estado "En evaluacion" con 2 o más evaluaciones en estado "Recibida"############################
SELECT CONCAT(D.ds_apellido,', ', D.ds_nombre) as Solicitante, F.ds_facultad, UE.ds_name AS Evaluador , UE.ds_email 
FROM `solicitudjovenes` S INNER JOIN docente D ON S.cd_docente = D.cd_docente
INNER JOIN evaluacionjovenes E ON S.cd_solicitud = E.cd_solicitud
INNER JOIN facultad F ON S.cd_facultadPlanilla = F.cd_facultad
INNER JOIN cyt_user UE ON E.cd_usuario = UE.oid
INNER JOIN cyt_evaluacionjovenes_estado EE ON E.cd_evaluacion = EE.evaluacion_oid

WHERE EE.fechaHasta is NULL AND EE.estado_oid = 2 AND EXISTS  (
SELECT S1.cd_solicitud
FROM `solicitudjovenes` S1
INNER JOIN evaluacionjovenes E1 ON S1.cd_solicitud = E1.cd_solicitud

INNER JOIN cyt_evaluacionjovenes_estado EE1 ON E1.cd_evaluacion = EE1.evaluacion_oid
INNER JOIN cyt_solicitudjovenes_estado SE1 ON S1.cd_solicitud = SE1.solicitud_oid
WHERE S1.cd_solicitud = S.cd_solicitud AND S1.`cd_periodo` = 9 AND EE1.fechaHasta is NULL AND EE1.estado_oid = 2 AND SE1.fechaHasta is NULL AND SE1.estado_oid = 6 AND SE1.fechaHasta is NULL
GROUP BY S1.cd_solicitud
HAVING (count(S1.cd_solicitud)>1))
ORDER BY  F.ds_facultad, D.ds_apellido, D.ds_nombre


#######################################Actualizar becarios UNLP####################################################################
SELECT *
FROM `becas_unlp_nuevas`
WHERE NOT EXISTS (SELECT docente.cd_docente FROM docente WHERE becas_unlp_nuevas.nu_documento = docente.nu_documento)


SELECT null, docente.cd_docente, 1, becas_unlp_nuevas.ds_tipobeca, becas_unlp_nuevas.dt_desde, becas_unlp_nuevas.dt_hasta 
FROM `becas_unlp_nuevas` INNER JOIN docente ON becas_unlp_nuevas.nu_documento = docente.nu_documento
WHERE NOT EXISTS (SELECT B.cd_beca FROM beca B INNER JOIN docente D2 ON B.cd_docente = D2.cd_docente WHERE bl_unlp = 1 AND becas_unlp_nuevas.nu_documento = D2.nu_documento)

INSERT INTO beca 
SELECT null, docente.cd_docente, 1, becas_unlp_nuevas.ds_tipobeca, becas_unlp_nuevas.dt_desde, becas_unlp_nuevas.dt_hasta, null 
FROM `becas_unlp_nuevas` INNER JOIN docente ON becas_unlp_nuevas.nu_documento = docente.nu_documento
WHERE NOT EXISTS (SELECT B.cd_beca FROM beca B INNER JOIN docente D2 ON B.cd_docente = D2.cd_docente WHERE bl_unlp = 1 AND becas_unlp_nuevas.nu_documento = D2.nu_documento)

INSERT INTO beca 
SELECT null, docente.cd_docente, 1, becas_unlp_nuevas.ds_tipobeca, becas_unlp_nuevas.dt_desde, becas_unlp_nuevas.dt_hasta, null 
FROM `becas_unlp_nuevas` INNER JOIN docente ON becas_unlp_nuevas.nu_documento = docente.nu_documento
WHERE becas_unlp_nuevas.dt_desde>'2019-01-01' AND NOT EXISTS (SELECT B.cd_beca FROM beca B INNER JOIN docente D2 ON B.cd_docente = D2.cd_docente WHERE bl_unlp = 1 AND becas_unlp_nuevas.nu_documento = D2.nu_documento AND becas_unlp_nuevas.ds_tipobeca = B.ds_tipobeca)

####################################### * 2018-2019 Maestría, 2019-2020 Doctorado (OJO!!! con la fecha desde) ########################
INSERT INTO beca 
SELECT null, docente.cd_docente, 1, 'Tipo B (Doctorado)', '2019-04-01', becas_unlp_nuevas.dt_hasta, null 
FROM `becas_unlp_nuevas` INNER JOIN docente ON becas_unlp_nuevas.nu_documento = docente.nu_documento
WHERE becas_unlp_nuevas.ds_tipobeca like '%*%' AND NOT EXISTS (SELECT B.cd_beca FROM beca B INNER JOIN docente D2 ON B.cd_docente = D2.cd_docente WHERE bl_unlp = 1 AND becas_unlp_nuevas.nu_documento = D2.nu_documento AND becas_unlp_nuevas.ds_tipobeca = B.ds_tipobeca)

############# becarios en ejecución #############-
SELECT cd_beca,CONCAT(D.ds_apellido,', ',D.ds_nombre) AS Docente, CONCAT(D.nu_precuil,'-',D.nu_documento,'-',D.nu_postcuil) AS CUIL, 
B.ds_tipobeca,dt_desde,dt_hasta, bl_unlp, ds_resumen 
FROM beca B INNER JOIN docente D ON B.cd_docente = D.cd_docente 
WHERE dt_hasta >= '2020-01-01'
ORDER BY ds_apellido, ds_nombre

##############################Actualizar resumen de beca #######################################3
UPDATE `beca` INNER JOIN docente ON beca.cd_docente = docente.cd_docente
INNER JOIN beca_sigeva ON beca_sigeva.dni = docente.nu_documento AND beca.dt_hasta >= '2020-03-01' 
SET beca.ds_resumen = beca_sigeva.resumen

##############################Control de evaluadores #################################################

CREATE TABLE `aux_evaluadores` (
  `nu_precuil` int(11) NULL,
  `nu_documento` int(11) NULL,
  `nu_postcuil` int(11) NULL,
  `ds_investigador` varchar(255) NULL,
  `cd_categoria` int(11) NULL,
  `cd_facultad` int(11) NULL,
`ds_mail` varchar(255) NULL,
`ds_disciplina` varchar(255) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;


################################### Evaluadores que no est�n con ese perfil ##################################

SELECT * 
FROM `aux_evaluadores` 
WHERE NOT EXISTS (
	SELECT U.ds_username
	FROM cyt_user U
	INNER JOIN cyt_user_usergroup UG ON U.oid = UG.user_oid AND usergroup_oid = 10
	WHERE U.ds_username = CONCAT (aux_evaluadores.nu_precuil,'-',LPAD(aux_evaluadores.nu_documento,8,'0'),'-',aux_evaluadores.nu_postcuil)
)

############################### Distinta facultad en el usuario ################################################
SELECT * 
FROM `aux_evaluadores` 
LEFT JOIN cyt_user ON cyt_user.ds_username = CONCAT (aux_evaluadores.nu_precuil,'-',LPAD(aux_evaluadores.nu_documento,8,'0'),'-',aux_evaluadores.nu_postcuil)
WHERE `aux_evaluadores`.cd_facultad <> cyt_user.facultad_oid