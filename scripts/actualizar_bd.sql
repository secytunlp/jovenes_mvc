CREATE TABLE IF NOT EXISTS cyt_registration (
  cd_registration int(11) NOT NULL AUTO_INCREMENT,
  ds_activationcode varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  dt_date varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  ds_username varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  ds_name varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_email varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_password varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  ds_phone varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_address varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  facultad_oid int(11) DEFAULT NULL,
  PRIMARY KEY (cd_registration)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS cyt_user (
  oid int(11) NOT NULL AUTO_INCREMENT,
  ds_username varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  ds_name varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_email varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_password varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_phone varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_address varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_ips varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  nu_attemps int(11) NOT NULL DEFAULT '0',
  facultad_oid int(11) DEFAULT NULL,
  PRIMARY KEY (oid),
  UNIQUE KEY ds_username (ds_username)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando estructura para tabla viajes.cdt_audit
CREATE TABLE IF NOT EXISTS cdt_audit (
  oid bigint(20) NOT NULL AUTO_INCREMENT,
  cd_user int(11) NOT NULL,
  ds_action varchar(255) NOT NULL,
  ds_host varchar(50) NOT NULL,
  dt_date datetime NOT NULL,
  PRIMARY KEY (oid),
  KEY ds_action (ds_action(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla viajes.cdt_audit: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE cdt_audit DISABLE KEYS */;
/*!40000 ALTER TABLE cdt_audit ENABLE KEYS */;


-- Volcando estructura para tabla viajes.cdt_function
CREATE TABLE IF NOT EXISTS cdt_function (
  cd_function int(11) NOT NULL AUTO_INCREMENT,
  ds_function varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (cd_function)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla viajes.cdt_function: ~61 rows (aproximadamente)
/*!40000 ALTER TABLE cdt_function DISABLE KEYS */;
INSERT INTO cdt_function (cd_function, ds_function) VALUES
	(1, 'Agregar Acción de la función'),
	(2, 'Eliminar Acción de la función'),
	(3, 'Ver Acción de la función'),
	(4, 'Modificar Acción de la función'),
	(5, 'Listar Acciones de la función'),
	(6, 'Agregar Función'),
	(7, 'Eliminar Función'),
	(8, 'Ver Función'),
	(9, 'Modificar Función'),
	(10, 'Listar Funciones'),
	(11, 'Agregar Grupo de menú'),
	(12, 'Eliminar Grupo de menú'),
	(13, 'Ver Grupo de menú'),
	(14, 'Modificar Grupo de menú'),
	(15, 'Listar Grupos de menú'),
	(16, 'Agregar Opción de menú'),
	(17, 'Eliminar Opción de menú'),
	(18, 'Ver Opción de menú'),
	(19, 'Modificar Opción de menú'),
	(20, 'Listar Opciones de menú'),
	(21, 'Agregar Registración'),
	(22, 'Eliminar Registración'),
	(23, 'Ver Registración'),
	(24, 'Modificar Registración'),
	(25, 'Listar Registraciones'),
	(26, 'Agregar Usuario'),
	(27, 'Eliminar Usuario'),
	(28, 'Ver Usuario'),
	(29, 'Modificar Usuario'),
	(30, 'Listar Usuarios'),
	(31, 'Agregar Grupo de usuario'),
	(32, 'Eliminar Grupo de usuario'),
	(33, 'Ver Grupo de usuario'),
	(34, 'Modificar Grupo de usuario'),
	(35, 'Listar Grupos de usuario'),
	(36, 'Agregar Función del grupo de usuario'),
	(37, 'Eliminar Función del grupo de usuario'),
	(38, 'Ver Función del grupo de usuario'),
	(39, 'Modificar Función del grupo de usuario'),
	(40, 'Listar Funciones del grupo de usuario'),
	(41, 'Editar Perfil'),
	(42, 'Listar unidades'),
	(43, 'Agregar unidad'),
	(44, 'Modificar unidad'),
	(45, 'Eliminar unidad'),
	(46, 'Ver unidad'),
	(47, 'Listar integrantes'),
	(48, 'Agregar integrante'),
	(49, 'Modificar integrante'),
	(50, 'Eliminar integrante'),
	(51, 'Ver integrante'),
	(52, 'Listar estados'),
	(53, 'Cambiar estado'),
	(54, 'Listar proyectos'),
	(55, 'Agregar proyecto'),
	(56, 'Modificar proyecto'),
	(57, 'Eliminar proyecto'),
	(58, 'Ver proyecto'),
	(59, 'Listar solicitudes'),
	(60, 'Agregar solicitud'),
	(61, 'Modificar solicitud'),
	(62, 'Eliminar solicitud'),
	(63, 'Ver solicitud'),
	(64, 'Listar estados'),
	(65, 'Cambiar estado'),
	(66, 'Ver puntaje/diferencia'),
	(67, 'Ver anteriores'),
	(68, 'Enviar solicitud'),
	(69, 'Admitir solicitud'),
	(70, 'Rechazar solicitud');
/*!40000 ALTER TABLE cdt_function ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS cdt_action_function (
  cd_actionfunction int(11) NOT NULL AUTO_INCREMENT,
  cd_function int(11) NOT NULL,
  ds_action varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (cd_actionfunction),
  UNIQUE KEY ds_action (ds_action),
  KEY fk_funtion (cd_function),
  CONSTRAINT cdt_action_function_ibfk_1 FOREIGN KEY (cd_function) REFERENCES cdt_function (cd_function)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla viajes.cdt_action_function: ~72 rows (aproximadamente)
/*!40000 ALTER TABLE cdt_action_function DISABLE KEYS */;
INSERT INTO cdt_action_function (cd_actionfunction, cd_function, ds_action) VALUES
	(1, 1, 'add_cdtactionfunction_init'),
	(2, 1, 'add_cdtactionfunction'),
	(3, 2, 'delete_cdtactionfunction'),
	(4, 3, 'view_cdtactionfunction'),
	(5, 4, 'update_cdtactionfunction'),
	(6, 4, 'update_cdtactionfunction_init'),
	(7, 5, 'list_cdtactionfunctions'),
	(8, 6, 'add_cdtfunction'),
	(9, 6, 'add_cdtfunction_init'),
	(10, 7, 'delete_cdtfunction'),
	(11, 8, 'view_cdtfunction'),
	(12, 9, 'update_cdtfunction'),
	(13, 9, 'update_cdtfunction_init'),
	(14, 10, 'list_cdtfunctions'),
	(15, 11, 'add_cdtmenugroup'),
	(16, 11, 'add_cdtmenugroup_init'),
	(17, 12, 'delete_cdtmenugroup'),
	(18, 13, 'view_cdtmenugroup'),
	(19, 14, 'update_cdtmenugroup'),
	(20, 14, 'update_cdtmenugroup_init'),
	(21, 15, 'list_cdtmenugroups'),
	(22, 16, 'add_cdtmenuoption'),
	(23, 16, 'add_cdtmenuoption_init'),
	(24, 17, 'delete_cdtmenuoption'),
	(25, 18, 'view_cdtmenuoption'),
	(26, 19, 'update_cdtmenuoption'),
	(27, 19, 'update_cdtmenuoption_init'),
	(28, 20, 'list_cdtmenuoptions'),
	(29, 21, 'add_cdtregistration'),
	(30, 21, 'add_cdtregistration_init'),
	(31, 22, 'delete _cdtregistration'),
	(32, 23, 'view_cdtregistration'),
	(33, 24, 'update_cdtregistration'),
	(34, 24, 'update_cdtregistration_init'),
	(35, 25, 'list_cdtregistrations'),
	(36, 26, 'add_cdtuser'),
	(37, 26, 'add_cdtuser_init'),
	(38, 27, 'delete _cdtuser'),
	(39, 28, 'view_cdtuser'),
	(40, 29, 'update_cdtuser'),
	(41, 29, 'update_cdtuser_init'),
	(49, 42, 'list_unidades'),
	(50, 43, 'add_unidad_init'),
	(51, 43, 'add_unidad'),
	(52, 44, 'update_unidad_init'),
	(53, 44, 'update_unidad'),
	(54, 45, 'delete_unidad'),
	(55, 46, 'view_unidad'),
	(56, 47, 'list_integrantes'),
	(57, 48, 'add_integrante_init'),
	(58, 48, 'add_integrante'),
	(59, 49, 'update_integrante_init'),
	(60, 49, 'update_integrante'),
	(61, 50, 'delete_integrante'),
	(62, 51, 'view_integrante'),
	(63, 52, 'list_unidadesTipoEstado'),
	(64, 53, 'cambiarEstadoUnidad_init'),
	(65, 53, 'cambiarEstadoUnidad'),
	(66, 54, 'list_proyectos'),
	(67, 55, 'add_proyecto_init'),
	(68, 55, 'add_proyecto'),
	(69, 56, 'update_proyecto_init'),
	(70, 56, 'update_proyecto'),
	(71, 57, 'delete_proyecto'),
	(72, 58, 'view_proyecto'),
	(73, 59, 'list_solicitudes'),
	(74, 60, 'add_solicitud_init'),
	(75, 60, 'add_solicitud'),
	(76, 61, 'update_solicitud_init'),
	(77, 61, 'update_solicitud'),
	(78, 62, 'delete_solicitud'),
	(79, 63, 'view_solicitud_pdf'),
	(80, 64, 'list_solicitudesEstado'),
	(81, 65, 'cambiarEstado_init'),
	(82, 65, 'cambiarEstado'),
	(83, 66, 'view_puntaje'),
	(84, 64, 'list_evaluacionEstado'),
	(85, 65, 'cambiarEstadoEvaluacion_init'),
	(86, 65, 'cambiarEstadoEvaluacion'),
	(87, 67, 'view_anteriores'),
	(88, 68, 'send_solicitud'),
	(89, 69, 'admit_solicitud'),
	(90, 70, 'deny_solicitud'),
	(91, 70, 'deny_solicitud_init');
/*!40000 ALTER TABLE cdt_action_function ENABLE KEYS */;





-- Volcando estructura para tabla viajes.cdt_menugroup
CREATE TABLE IF NOT EXISTS cdt_menugroup (
  cd_menugroup int(11) NOT NULL AUTO_INCREMENT,
  nu_order int(11) NOT NULL,
  nu_width int(11) NOT NULL,
  ds_name varchar(100) CHARACTER SET latin1 NOT NULL,
  ds_action varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  ds_cssclass varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (cd_menugroup)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla viajes.cdt_menugroup: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE cdt_menugroup DISABLE KEYS */;
INSERT INTO cdt_menugroup (cd_menugroup, nu_order, nu_width, ds_name, ds_action, ds_cssclass) VALUES
	(1, 1, 65, 'Acceso', 'panel_control&currentMenuGroup=1', 'accesos'),
	(9, 2, 80, 'Mantenimiento', 'panel_control&currentMenuGroup=9', 'config'),
	(10, 3, 80, 'Administración', 'panel_control&currentMenuGroup=10', 'desk');
/*!40000 ALTER TABLE cdt_menugroup ENABLE KEYS */;


-- Volcando estructura para tabla viajes.cdt_menuoption
CREATE TABLE IF NOT EXISTS cdt_menuoption (
  cd_menuoption int(11) NOT NULL AUTO_INCREMENT,
  ds_name varchar(100) CHARACTER SET latin1 NOT NULL,
  ds_href varchar(255) CHARACTER SET latin1 NOT NULL,
  cd_function int(11) DEFAULT NULL,
  nu_order int(11) DEFAULT NULL,
  cd_menugroup int(11) DEFAULT NULL,
  ds_cssclass varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  ds_description varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (cd_menuoption),
  KEY cd_function (cd_function),
  KEY fk_menuoption_menugroup1 (cd_menugroup),
  CONSTRAINT cdt_menuoption_ibfk_1 FOREIGN KEY (cd_function) REFERENCES cdt_function (cd_function),
  CONSTRAINT cdt_menuoption_ibfk_2 FOREIGN KEY (cd_menugroup) REFERENCES cdt_menugroup (cd_menugroup)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla viajes.cdt_menuoption: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE cdt_menuoption DISABLE KEYS */;
INSERT INTO cdt_menuoption (cd_menuoption, ds_name, ds_href, cd_function, nu_order, cd_menugroup, ds_cssclass, ds_description) VALUES
	(1, 'CdtActionFunctions', 'doAction?action=list_cdtactionfunctions', 5, 5, 1, 'cdtactionfunctions', 'Acciones de Función'),
	(2, 'CdtFunctions', 'doAction?action=list_cdtfunctions', 10, 5, 1, 'cdtfunctions', 'Funciones'),
	(3, 'CdtMenuGroups', 'doAction?action=list_cdtmenugroups', 15, 5, 1, 'cdtmenugroups', 'Grupos de Menú'),
	(4, 'CdtMenuOptions', 'doAction?action=list_cdtmenuoptions', 20, 5, 1, 'cdtmenuoptions', 'Opciones de Menú'),
	(5, 'Registrations', 'doAction?action=list_cdtregistrations', 25, 5, 1, 'cdtregistrations', 'Registraciones'),
	(6, 'Users', 'doAction?action=list_cdtusers', 30, 5, 1, 'cdtusers', 'Usuarios'),
	(7, 'Usergroups', 'doAction?action=list_cdtusergroups', 35, 5, 1, 'cdtusergroups', 'Grupos de usuario'),
	(8, 'CdtUserGroupFunctions', 'doAction?action=list_cdtusergroupfunctions', 40, 5, 1, 'cdtusergroupfunctions', 'Funciones de Grupos de Usuario'),
	(9, 'Unidades', 'doAction?action=list_unidades', 42, 1, 10, 'tiposTitulo', ''),
	(55, 'Proyectos', 'doAction?action=list_proyectos', 54, 1, 10, 'tiposTitulo', ''),
	(56, 'Solicitudes', 'doAction?action=list_solicitudes', 59, 2, 10, 'tiposTitulo', '');
/*!40000 ALTER TABLE cdt_menuoption ENABLE KEYS */;


-- Volcando estructura para tabla viajes.cdt_my_filter
CREATE TABLE IF NOT EXISTS cdt_my_filter (
  id int(11) NOT NULL AUTO_INCREMENT,
  cd_user int(11) NOT NULL,
  filter_name varchar(255) NOT NULL,
  filter_values varchar(255) NOT NULL,
  filter_id varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla viajes.cdt_my_filter: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE cdt_my_filter DISABLE KEYS */;
INSERT INTO cdt_my_filter (id, cd_user, filter_name, filter_values, filter_id) VALUES
	(1, 1, 'filter', 'nombre=\'Bernar\',sexos=F,M', 'filter');
/*!40000 ALTER TABLE cdt_my_filter ENABLE KEYS */;


-- Volcando estructura para tabla viajes.cdt_registration
CREATE TABLE IF NOT EXISTS cdt_registration (
  cd_registration int(11) NOT NULL AUTO_INCREMENT,
  ds_activationcode varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  dt_date varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  ds_username varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  ds_name varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_email varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_password varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  ds_phone varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_address varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (cd_registration)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla viajes.cdt_registration: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE cdt_registration DISABLE KEYS */;
/*!40000 ALTER TABLE cdt_registration ENABLE KEYS */;




-- Volcando estructura para tabla viajes.cdt_usergroup
CREATE TABLE IF NOT EXISTS cdt_usergroup (
  cd_usergroup int(11) NOT NULL AUTO_INCREMENT,
  ds_usergroup varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (cd_usergroup)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla viajes.cdt_usergroup: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE cdt_usergroup DISABLE KEYS */;
INSERT INTO cdt_usergroup (cd_usergroup, ds_usergroup) VALUES
	(1, 'Administrador'),
	(2, 'Director'),
	(3, 'SeCyT'),
	(4, 'Admin Viajes/Jovenes'),
	(5, 'Solicitante'),
	(6, 'SeCyT Viajes/Jovenes'),
	(9, 'SeCyT Viajes/Jovenes Facultad'),
	(10, 'Evaluador'),
	(11, 'Coordinador');
/*!40000 ALTER TABLE cdt_usergroup ENABLE KEYS */;


-- Volcando estructura para tabla viajes.cdt_usergroup_function
CREATE TABLE IF NOT EXISTS cdt_usergroup_function (
  cd_usergroup_function int(11) NOT NULL AUTO_INCREMENT,
  cd_usergroup int(11) NOT NULL,
  cd_function int(11) NOT NULL,
  PRIMARY KEY (cd_usergroup_function),
  KEY fk_usergroup (cd_usergroup),
  KEY fk_function (cd_function),
  CONSTRAINT cdt_usergroup_function_ibfk_1 FOREIGN KEY (cd_usergroup) REFERENCES cdt_usergroup (cd_usergroup),
  CONSTRAINT cdt_usergroup_function_ibfk_2 FOREIGN KEY (cd_function) REFERENCES cdt_function (cd_function)
) ENGINE=InnoDB AUTO_INCREMENT=3272 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla viajes.cdt_usergroup_function: ~126 rows (aproximadamente)
/*!40000 ALTER TABLE cdt_usergroup_function DISABLE KEYS */;
INSERT INTO cdt_usergroup_function (cd_usergroup_function, cd_usergroup, cd_function) VALUES
	(2681, 2, 42),
	(2682, 2, 43),
	(2683, 2, 44),
	(2684, 2, 45),
	(2685, 2, 46),
	(2686, 2, 47),
	(2687, 2, 48),
	(2688, 2, 49),
	(2689, 2, 50),
	(2690, 2, 51),
	(2997, 1, 1),
	(2998, 1, 2),
	(2999, 1, 3),
	(3000, 1, 4),
	(3001, 1, 5),
	(3002, 1, 6),
	(3003, 1, 7),
	(3004, 1, 8),
	(3005, 1, 9),
	(3006, 1, 10),
	(3007, 1, 11),
	(3008, 1, 12),
	(3009, 1, 13),
	(3010, 1, 14),
	(3011, 1, 15),
	(3012, 1, 16),
	(3013, 1, 17),
	(3014, 1, 18),
	(3015, 1, 19),
	(3016, 1, 20),
	(3017, 1, 21),
	(3018, 1, 22),
	(3019, 1, 23),
	(3020, 1, 24),
	(3021, 1, 25),
	(3022, 1, 26),
	(3023, 1, 27),
	(3024, 1, 28),
	(3025, 1, 29),
	(3026, 1, 30),
	(3027, 1, 31),
	(3028, 1, 32),
	(3029, 1, 33),
	(3030, 1, 34),
	(3031, 1, 35),
	(3032, 1, 36),
	(3033, 1, 37),
	(3034, 1, 38),
	(3035, 1, 39),
	(3036, 1, 40),
	(3037, 1, 41),
	(3038, 1, 42),
	(3039, 1, 43),
	(3040, 1, 44),
	(3041, 1, 45),
	(3042, 1, 46),
	(3043, 1, 47),
	(3044, 1, 48),
	(3045, 1, 49),
	(3046, 1, 50),
	(3047, 1, 51),
	(3048, 1, 52),
	(3049, 1, 53),
	(3050, 1, 54),
	(3051, 1, 55),
	(3052, 1, 56),
	(3053, 1, 57),
	(3054, 1, 58),
	(3113, 5, 59),
	(3114, 5, 60),
	(3115, 5, 61),
	(3116, 5, 62),
	(3117, 5, 63),
	(3118, 5, 68),
	(3220, 4, 1),
	(3221, 4, 2),
	(3222, 4, 3),
	(3223, 4, 4),
	(3224, 4, 5),
	(3225, 4, 6),
	(3226, 4, 7),
	(3227, 4, 8),
	(3228, 4, 9),
	(3229, 4, 10),
	(3230, 4, 11),
	(3231, 4, 12),
	(3232, 4, 13),
	(3233, 4, 14),
	(3234, 4, 15),
	(3235, 4, 16),
	(3236, 4, 17),
	(3237, 4, 18),
	(3238, 4, 19),
	(3239, 4, 20),
	(3240, 4, 21),
	(3241, 4, 22),
	(3242, 4, 23),
	(3243, 4, 24),
	(3244, 4, 25),
	(3245, 4, 26),
	(3246, 4, 27),
	(3247, 4, 28),
	(3248, 4, 29),
	(3249, 4, 30),
	(3250, 4, 31),
	(3251, 4, 32),
	(3252, 4, 33),
	(3253, 4, 34),
	(3254, 4, 35),
	(3255, 4, 36),
	(3256, 4, 37),
	(3257, 4, 38),
	(3258, 4, 39),
	(3259, 4, 40),
	(3260, 4, 41),
	(3261, 4, 59),
	(3262, 4, 60),
	(3263, 4, 61),
	(3264, 4, 62),
	(3265, 4, 63),
	(3266, 4, 64),
	(3267, 4, 65),
	(3268, 4, 66),
	(3269, 4, 67),
	(3270, 4, 69),
	(3271, 4, 70);
	
-- Volcando estructura para tabla viajes.cdt_user
CREATE TABLE IF NOT EXISTS cdt_user (
  cd_user int(11) NOT NULL AUTO_INCREMENT,
  ds_username varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  ds_name varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_email varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_password varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  cd_usergroup int(11) NOT NULL,
  ds_phone varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_address varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  ds_ips varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  nu_attemps int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (cd_user),
  KEY fk_usergroup (cd_usergroup),
  CONSTRAINT cdt_user_ibfk_1 FOREIGN KEY (cd_usergroup) REFERENCES cdt_usergroup (cd_usergroup)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla viajes.cdt_user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE cdt_user DISABLE KEYS */;
INSERT INTO cdt_user (cd_user, ds_username, ds_name, ds_email, ds_password, cd_usergroup, ds_phone, ds_address, ds_ips, nu_attemps) VALUES
	(1, '20-25174805-6', 'Marcos Piñero', 'info@codnet.com.ar', '202cb962ac59075b964b07152d234b70', 1, '', '', '', 0),
	(2, '27-27388858-1', '', 'mpinia@hotmail.com', '202cb962ac59075b964b07152d234b70', 2, '', '', '', 0);
/*!40000 ALTER TABLE cdt_user ENABLE KEYS */;
	

	
INSERT INTO cyt_user (oid, ds_username, ds_name, ds_email, ds_password, facultad_oid, ds_ips)
SELECT cd_usuario, CONCAT(nu_precuil,'-',nu_documento,'-',nu_postcuil) AS CUIL, ds_apynom,ds_mail,ds_password, cd_facultad, ''
FROM usuario
WHERE cd_usuario > 1;

INSERT INTO cdt_usergroup (cd_usergroup, ds_usergroup) VALUES
	(1, 'Administrador'),
	(2, 'Director'),
	(3, 'Solicitante'),
	(4, 'Admin Viajes/Jovenes'),
	(8, 'SeCyT Viajes/Jovenes'),
	(9, 'SeCyT Viajes/Jovenes Facultad'),
	(10, 'Evaluador'),
	(11, 'Coordinador');

CREATE TABLE IF NOT EXISTS cyt_user_usergroup (
  oid int(11) NOT NULL AUTO_INCREMENT,
  user_oid int(11) NOT NULL,
  usergroup_oid int(11) NOT NULL,
  PRIMARY KEY (oid),
  KEY user_oid (user_oid),
  KEY usergroup_oid (usergroup_oid),
  CONSTRAINT cyt_user_usergroup_ibfk_1 FOREIGN KEY (user_oid) REFERENCES cyt_user (oid),
  CONSTRAINT cyt_user_usergroup_ibfk_3 FOREIGN KEY (usergroup_oid) REFERENCES cdt_usergroup (cd_usergroup)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO cyt_user_usergroup (user_oid, usergroup_oid)
SELECT cd_usuario, cd_perfil
FROM usuarioperfil
WHERE cd_usuario >1 AND cd_usuario IN (SELECT oid FROM cyt_user);

INSERT INTO cdt_function VALUES (NULL, 'Listar solicitudes');
INSERT INTO cdt_function VALUES (NULL, 'Agregar solicitud');
INSERT INTO cdt_function VALUES (NULL, 'Modificar solicitud');
INSERT INTO cdt_function VALUES (NULL, 'Eliminar solicitud');
INSERT INTO cdt_function VALUES (NULL, 'Ver solicitud');

INSERT INTO cdt_menuoption VALUES (NULL, 'Solicitudes', 'doAction?action=list_solicitudes', 54, 2, 10, 'tiposTitulo', '');

INSERT INTO cdt_action_function VALUES (NULL, 54, 'list_solicitudes');
INSERT INTO cdt_action_function VALUES (NULL, 55, 'add_solicitud_init');
INSERT INTO cdt_action_function VALUES (NULL, 55, 'add_solicitud');
INSERT INTO cdt_action_function VALUES (NULL, 56, 'update_solicitud_init');
INSERT INTO cdt_action_function VALUES (NULL, 56, 'update_solicitud');
INSERT INTO cdt_action_function VALUES (NULL, 57, 'delete_solicitud');
INSERT INTO cdt_action_function VALUES (NULL, 58, 'view_solicitud_pdf');    

ALTER TABLE periodo
	ENGINE=InnoDB;

ALTER TABLE solicitudjovenes
	ENGINE=InnoDB;
	
ALTER TABLE estado
	ENGINE=InnoDB;
	
CREATE TABLE cyt_solicitudjovenes_estado (
  oid bigint(20) NOT NULL auto_increment,
  solicitud_oid int(11) default NULL,
  estado_oid int(11) default NULL,
  fechaDesde datetime default NULL,
  fechaHasta datetime default NULL,
  motivo text default NULL,
  user_oid int(11) NOT NULL,
  fechaUltModificacion timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (oid),
  KEY solicitud_oid (solicitud_oid),
  KEY estado_oid (estado_oid),
  KEY user_oid (user_oid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

ALTER TABLE cyt_solicitudjovenes_estado ADD FOREIGN KEY ( solicitud_oid ) REFERENCES solicitudjovenes (
cd_solicitud
);

ALTER TABLE cyt_solicitudjovenes_estado ADD FOREIGN KEY ( estado_oid ) REFERENCES estado (
cd_estado
);

ALTER TABLE cyt_solicitudjovenes_estado ADD FOREIGN KEY ( user_oid ) REFERENCES cyt_user (
oid
);

ALTER TABLE solicitudjovenes ADD cd_titulogrado INT(11) NULL DEFAULT NULL;

ALTER TABLE titulo
	ENGINE=InnoDB;

ALTER TABLE solicitudjovenes ADD FOREIGN KEY ( cd_titulogrado ) REFERENCES titulo (
cd_titulo
);

ALTER TABLE solicitudjovenes ADD cd_tituloposgrado INT(11) NULL DEFAULT NULL;

ALTER TABLE solicitudjovenes ADD FOREIGN KEY ( cd_tituloposgrado ) REFERENCES titulo (
cd_titulo
);

###### POSTERGADO ##################
ALTER TABLE docente
	ENGINE=InnoDB;

SET FOREIGN_KEY_CHECKS=0;
ALTER TABLE solicitudjovenes
	ADD CONSTRAINT FK_solicitudjovenes_docente FOREIGN KEY (cd_docente) REFERENCES docente (cd_docente);
SET FOREIGN_KEY_CHECKS=1;
###################################################

ALTER TABLE solicitudjovenes
	ADD CONSTRAINT FK_solicitudjovenes_periodo FOREIGN KEY (cd_periodo) REFERENCES periodo (cd_periodo);

###### POSTERGADO ##################
ALTER TABLE unidad
	ENGINE=InnoDB;
	
SET FOREIGN_KEY_CHECKS=0;	
ALTER TABLE solicitudjovenes
	ADD CONSTRAINT FK_solicitudjovenes_unidad FOREIGN KEY (cd_unidad) REFERENCES unidad (cd_unidad);
SET FOREIGN_KEY_CHECKS=1;
######################################

ALTER TABLE solicitudjovenesproyecto
	ENGINE=InnoDB;

###### POSTERGADO ##################
ALTER TABLE cargo
	ENGINE=InnoDB;

SET FOREIGN_KEY_CHECKS=0;	
ALTER TABLE solicitudjovenes
	ADD CONSTRAINT FK_solicitudjovenes_cargo FOREIGN KEY (cd_cargo) REFERENCES cargo (cd_cargo);
SET FOREIGN_KEY_CHECKS=1;

ALTER TABLE deddoc
	ENGINE=InnoDB;

ALTER TABLE solicitudjovenes
	ADD CONSTRAINT FK_solicitudjovenes_deddoc FOREIGN KEY (cd_deddoc) REFERENCES deddoc (cd_deddoc);
	
ALTER TABLE facultad
	ENGINE=InnoDB;

ALTER TABLE solicitudjovenes
	ADD CONSTRAINT FK_solicitudjovenes_facultad FOREIGN KEY (cd_facultad) REFERENCES facultad (cd_facultad);

ALTER TABLE solicitudjovenes
	ADD CONSTRAINT FK_solicitudjovenes_facultad_2 FOREIGN KEY (cd_facultadplanilla) REFERENCES facultad (cd_facultad);

ALTER TABLE carrerainv
	ENGINE=InnoDB;
	
ALTER TABLE organismo
	ENGINE=InnoDB;

SET FOREIGN_KEY_CHECKS=0;		
ALTER TABLE solicitudjovenes
	ADD CONSTRAINT FK_solicitudjovenes_unidad_2 FOREIGN KEY (cd_unidadbeca) REFERENCES unidad (cd_unidad);
	

ALTER TABLE solicitudjovenes
	ADD CONSTRAINT FK_solicitudjovenes_carrerainv FOREIGN KEY (cd_carrerainv) REFERENCES carrerainv (cd_carrerainv);
SET FOREIGN_KEY_CHECKS=1;

ALTER TABLE solicitudjovenes
	ADD CONSTRAINT FK_solicitudjovenes_organismo FOREIGN KEY (cd_organismo) REFERENCES organismo (cd_organismo);

SET FOREIGN_KEY_CHECKS=0;	
ALTER TABLE solicitudjovenes
	ADD CONSTRAINT FK_solicitudjovenes_unidad_3 FOREIGN KEY (cd_unidadcarrera) REFERENCES unidad (cd_unidad);
SET FOREIGN_KEY_CHECKS=1;
###########################################

ALTER TABLE solicitudjovenes
	ALTER cd_unidad DROP DEFAULT,
	ALTER cd_facultad DROP DEFAULT,
	ALTER cd_facultadplanilla DROP DEFAULT,
	ALTER cd_categoria DROP DEFAULT;
ALTER TABLE solicitudjovenes
	CHANGE COLUMN cd_unidad cd_unidad INT(11) NULL AFTER ds_tituloposgrado,
	CHANGE COLUMN cd_facultad cd_facultad INT(11) NULL AFTER cd_deddoc,
	CHANGE COLUMN cd_facultadplanilla cd_facultadplanilla INT(11) NULL AFTER cd_facultad,
	CHANGE COLUMN cd_categoria cd_categoria INT(11) NULL AFTER dt_egresoposgrado;

	
DELETE
FROM solicitudjovenesproyecto
WHERE not exists (SELECT solicitudjovenes.cd_solicitud FROM solicitudjovenes WHERE solicitudjovenes.cd_solicitud =  solicitudjovenesproyecto.cd_solicitud);


ALTER TABLE solicitudjovenesproyecto ADD FOREIGN KEY ( cd_solicitud ) REFERENCES solicitudjovenes (
cd_solicitud
);

SET FOREIGN_KEY_CHECKS=0;
ALTER TABLE solicitudjovenesproyecto ADD FOREIGN KEY ( cd_proyecto ) REFERENCES proyecto (
cd_proyecto
);
SET FOREIGN_KEY_CHECKS=1;

###### POSTERGADO ##################
ALTER TABLE provincia
	ENGINE=InnoDB;
	
ALTER TABLE categoria
	ENGINE=InnoDB;
	
ALTER TABLE universidad
	ENGINE=InnoDB;
	
SET FOREIGN_KEY_CHECKS=0;
ALTER TABLE docente
	ADD CONSTRAINT FK_docente_provincia FOREIGN KEY (cd_provincia) REFERENCES provincia (cd_provincia) ON UPDATE NO ACTION ON DELETE NO ACTION;

ALTER TABLE docente
	ADD CONSTRAINT FK_docente_categoria FOREIGN KEY (cd_categoria) REFERENCES categoria (cd_categoria) ON UPDATE NO ACTION ON DELETE NO ACTION;

ALTER TABLE docente
	ADD CONSTRAINT FK_docente_carrerainv FOREIGN KEY (cd_carrerainv) REFERENCES carrerainv (cd_carrerainv) ON UPDATE NO ACTION ON DELETE NO ACTION;

ALTER TABLE docente
	ADD CONSTRAINT FK_docente_organismo FOREIGN KEY (cd_organismo) REFERENCES organismo (cd_organismo) ON UPDATE NO ACTION ON DELETE NO ACTION;

ALTER TABLE docente
	ADD CONSTRAINT FK_docente_facultad FOREIGN KEY (cd_facultad) REFERENCES facultad (cd_facultad) ON UPDATE NO ACTION ON DELETE NO ACTION;

ALTER TABLE docente
	ADD CONSTRAINT FK_docente_cargo FOREIGN KEY (cd_cargo) REFERENCES cargo (cd_cargo) ON UPDATE NO ACTION ON DELETE NO ACTION;

ALTER TABLE docente
	ADD CONSTRAINT FK_docente_deddoc FOREIGN KEY (cd_deddoc) REFERENCES deddoc (cd_deddoc) ON UPDATE NO ACTION ON DELETE NO ACTION;

ALTER TABLE docente
	ADD CONSTRAINT FK_docente_universidad FOREIGN KEY (cd_universidad) REFERENCES universidad (cd_universidad) ON UPDATE NO ACTION ON DELETE NO ACTION;

ALTER TABLE docente
	ADD CONSTRAINT FK_docente_titulo FOREIGN KEY (cd_titulo) REFERENCES titulo (cd_titulo) ON UPDATE NO ACTION ON DELETE NO ACTION;

ALTER TABLE docente
	ADD CONSTRAINT FK_docente_tituloposgrado FOREIGN KEY (cd_titulopost) REFERENCES titulo (cd_titulo) ON UPDATE NO ACTION ON DELETE NO ACTION;

ALTER TABLE docente
	ADD CONSTRAINT FK_docente_unidad FOREIGN KEY (cd_unidad) REFERENCES unidad (cd_unidad) ON UPDATE NO ACTION ON DELETE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;
######################################################

ALTER TABLE solicitudjovenes
	ALTER cd_tipoinvestigador DROP DEFAULT;
ALTER TABLE solicitudjovenes
	CHANGE COLUMN cd_tipoinvestigador cd_tipoinvestigador INT(11) NULL AFTER cd_categoria;
ALTER TABLE solicitudjovenes
	ALTER nu_puntaje DROP DEFAULT,
	ALTER nu_diferencia DROP DEFAULT;
ALTER TABLE solicitudjovenes
	CHANGE COLUMN nu_puntaje nu_puntaje FLOAT NULL AFTER ds_curriculum,
	CHANGE COLUMN nu_diferencia nu_diferencia FLOAT NULL AFTER nu_puntaje;

	ALTER TABLE solicitudjovenes
	CHANGE COLUMN dt_fecha dt_fecha DATETIME NULL DEFAULT NULL AFTER nu_telefono;

ALTER TABLE evaluacionjovenes
	ENGINE=InnoDB;

CREATE TABLE cyt_evaluacionjovenes_estado (
  oid bigint(20) NOT NULL auto_increment,
  evaluacion_oid int(11) default NULL,
  estado_oid int(11) default NULL,
  fechaDesde datetime default NULL,
  fechaHasta datetime default NULL,
  motivo text default NULL,
  user_oid int(11) NOT NULL,
  fechaUltModificacion timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (oid),
  KEY evaluacion_oid (evaluacion_oid),
  KEY estado_oid (estado_oid),
  KEY user_oid (user_oid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

ALTER TABLE cyt_evaluacionjovenes_estado ADD FOREIGN KEY ( evaluacion_oid ) REFERENCES evaluacionjovenes (
cd_evaluacion
);

ALTER TABLE cyt_evaluacionjovenes_estado ADD FOREIGN KEY ( estado_oid ) REFERENCES estado (
cd_estado
);

ALTER TABLE cyt_evaluacionjovenes_estado ADD FOREIGN KEY ( user_oid ) REFERENCES cyt_user (
oid
);

ALTER TABLE cat
	ENGINE=InnoDB;

SET FOREIGN_KEY_CHECKS=0;	
ALTER TABLE facultad
	ADD CONSTRAINT FK_facultad_cat FOREIGN KEY (cd_cat) REFERENCES cat (cd_cat);
SET FOREIGN_KEY_CHECKS=1;	

############### POSTERGADO #######################
SET GLOBAL innodb_file_format=Barracuda; 
SET GLOBAL innodb_file_per_table=ON; 
ALTER TABLE proyecto
    ENGINE=InnoDB
    ROW_FORMAT=COMPRESSED 
    KEY_BLOCK_SIZE=8;
 ##################################
    
ALTER TABLE tipopresupuesto
	ENGINE=InnoDB;

ALTER TABLE presupuestojovenes
	ENGINE=InnoDB;
	
ALTER TABLE presupuestojovenes
	ADD CONSTRAINT FK_presupuestojovenes_tipopresupuesto FOREIGN KEY (cd_tipopresupuesto) REFERENCES tipopresupuesto (cd_tipopresupuesto);
	
ALTER TABLE presupuestojovenes
	ADD CONSTRAINT FK_presupuestojovenes_solicitudjovenes FOREIGN KEY (cd_solicitud) REFERENCES solicitudjovenes (cd_solicitud);
	
ALTER TABLE beca
	ENGINE=InnoDB;
	
ALTER TABLE solicitudjovenesbeca
	ENGINE=InnoDB;
	
DELETE
FROM solicitudjovenesbeca
WHERE not exists (SELECT solicitudjovenes.cd_solicitud FROM solicitudjovenes WHERE solicitudjovenes.cd_solicitud =  solicitudjovenesbeca.cd_solicitud);
	
ALTER TABLE solicitudjovenesbeca ADD FOREIGN KEY ( cd_solicitud ) REFERENCES solicitudjovenes (
cd_solicitud
);

############### POSTERGADO #######################
ALTER TABLE estadointegrante
	ENGINE=InnoDB;		
	
ALTER TABLE tipoinvestigador
	ENGINE=InnoDB;	
	
ALTER TABLE integrante
	ENGINE=InnoDB;
	
DELETE
FROM integrante
WHERE not exists (SELECT docente.cd_docente FROM docente WHERE docente.cd_docente =  integrante.cd_docente);

ALTER TABLE integrante
	ADD CONSTRAINT FK_integrante_docente FOREIGN KEY (cd_docente) REFERENCES docente (cd_docente);
	
DELETE
FROM integrante
WHERE not exists (SELECT proyecto.cd_proyecto FROM proyecto WHERE proyecto.cd_proyecto =  integrante.cd_proyecto);

ALTER TABLE integrante
	ADD CONSTRAINT FK_integrante_proyecto FOREIGN KEY (cd_proyecto) REFERENCES proyecto (cd_proyecto);
	
SET FOREIGN_KEY_CHECKS=0;	
ALTER TABLE integrante
	ADD CONSTRAINT FK_integrante_tipoinvestigador FOREIGN KEY (cd_tipoinvestigador) REFERENCES tipoinvestigador (cd_tipoinvestigador);
SET FOREIGN_KEY_CHECKS=1;	
	
ALTER TABLE integrante
	ADD CONSTRAINT FK_integrante_estadointegrante FOREIGN KEY (cd_estado) REFERENCES estadointegrante (cd_estado);
	
ALTER TABLE estadoproyecto
	ENGINE=InnoDB;	
	
DELETE
FROM proyecto
WHERE not exists (SELECT facultad.cd_facultad FROM facultad WHERE facultad.cd_facultad =  proyecto.cd_facultad);

ALTER TABLE proyecto
	ADD CONSTRAINT FK_proyecto_facultad FOREIGN KEY (cd_facultad) REFERENCES facultad (cd_facultad);
	
ALTER TABLE tipoacreditacion
	ENGINE=InnoDB;	
	


SET FOREIGN_KEY_CHECKS=0;	
ALTER TABLE proyecto
	ADD CONSTRAINT FK_proyecto_unidad FOREIGN KEY (cd_unidad) REFERENCES unidad (cd_unidad);
SET FOREIGN_KEY_CHECKS=1;

ALTER TABLE campo
	ENGINE=InnoDB;		

SET FOREIGN_KEY_CHECKS=0;	
ALTER TABLE proyecto
	ADD CONSTRAINT FK_proyecto_campo FOREIGN KEY (cd_campo) REFERENCES campo (cd_campo);
SET FOREIGN_KEY_CHECKS=1;	

ALTER TABLE especialidad
	ENGINE=InnoDB;	
	
ALTER TABLE especialidad
	ADD CONSTRAINT FK_especialidad_disciplina FOREIGN KEY (cd_disciplina) REFERENCES disciplina (cd_disciplina);
	
SET FOREIGN_KEY_CHECKS=0;	
ALTER TABLE proyecto
	ADD CONSTRAINT FK_proyecto_especialidad FOREIGN KEY (cd_especialidad) REFERENCES especialidad (cd_especialidad);
SET FOREIGN_KEY_CHECKS=1;	

ALTER TABLE disciplina
	ENGINE=InnoDB;	
	
SET FOREIGN_KEY_CHECKS=0;	
ALTER TABLE proyecto
	ADD CONSTRAINT FK_proyecto_disciplina FOREIGN KEY (cd_disciplina) REFERENCES disciplina (cd_disciplina);
SET FOREIGN_KEY_CHECKS=1;	

ALTER TABLE entidad
	ENGINE=InnoDB;	
	
SET FOREIGN_KEY_CHECKS=0;	
ALTER TABLE proyecto
	ADD CONSTRAINT FK_proyecto_entidad FOREIGN KEY (cd_entidad) REFERENCES entidad (cd_entidad);
SET FOREIGN_KEY_CHECKS=1;	

ALTER TABLE estadoproyecto
	ENGINE=InnoDB;	
	
ALTER TABLE proyecto
	ADD CONSTRAINT FK_proyecto_estado FOREIGN KEY (cd_estado) REFERENCES estadoproyecto (cd_estado);
	
	
DELETE
FROM proyecto
WHERE not exists (SELECT tipoacreditacion.cd_tipoacreditacion FROM tipoacreditacion WHERE tipoacreditacion.cd_tipoacreditacion =  proyecto.cd_tipoacreditacion);

ALTER TABLE proyecto
	ADD CONSTRAINT FK_proyecto_tipoacreditacion FOREIGN KEY (cd_tipoacreditacion) REFERENCES tipoacreditacion (cd_tipoacreditacion);
###########################################################
	
INSERT INTO cdt_function VALUES (NULL, 'Listar evaluación');
INSERT INTO cdt_function VALUES (NULL, 'Asignar evaluadores');
INSERT INTO cdt_function VALUES (NULL, 'Enviar evaluación a evaluadores');
INSERT INTO cdt_function VALUES (NULL, 'Evaluar solicitud');
INSERT INTO cdt_function VALUES (NULL, 'Enviar evaluación');
INSERT INTO cdt_function VALUES (NULL, 'Ver evaluación');

INSERT INTO cdt_menuoption VALUES (NULL, 'Evaluaciones', 'doAction?action=list_evaluaciones', 71, 2, 10, 'tiposTitulo', '');

INSERT INTO cdt_action_function VALUES (NULL, 71, 'list_evaluaciones');
INSERT INTO cdt_action_function VALUES (NULL, 72, 'assign_evaluadores_init');
INSERT INTO cdt_action_function VALUES (NULL, 72, 'assign_evaluadores');
INSERT INTO cdt_action_function VALUES (NULL, 73, 'send_evaluadores');
INSERT INTO cdt_action_function VALUES (NULL, 74, 'evaluar_solicitud_init');
INSERT INTO cdt_action_function VALUES (NULL, 74, 'evaluar_solicitud');
INSERT INTO cdt_action_function VALUES (NULL, 75, 'send_evaluacion');   
INSERT INTO cdt_action_function VALUES (NULL, 76, 'view_evaluacion_pdf');  

ALTER TABLE puntajegrupo
	ENGINE=InnoDB;	
	
ALTER TABLE modeloplanillajovenes
	ENGINE=InnoDB;	

ALTER TABLE modeloplanillajovenes
	ADD CONSTRAINT FK_modeloplanillajovenes_periodo FOREIGN KEY (cd_periodo) REFERENCES periodo (cd_periodo);

ALTER TABLE posgradoplanilla
	ENGINE=InnoDB;	

ALTER TABLE posgradomaximo
	ADD CONSTRAINT FK_posgradomaximo_modeloplanilla FOREIGN KEY (cd_modeloplanilla) REFERENCES modeloplanillajovenes (cd_modeloplanilla);
	
ALTER TABLE posgradomaximo
	ADD CONSTRAINT FK_posgradomaximo_posgradoplanilla FOREIGN KEY (cd_posgradoplanilla) REFERENCES posgradoplanilla (cd_posgradoplanilla);

ALTER TABLE posgradomaximo
	ADD CONSTRAINT FK_posgradomaximo_puntajegrupo FOREIGN KEY (cd_puntajegrupo) REFERENCES puntajegrupo (cd_puntajegrupo);


ALTER TABLE puntajeposgrado
	ENGINE=InnoDB;	
	
DELETE
FROM puntajeposgrado
WHERE not exists (SELECT evaluacionjovenes.cd_evaluacion FROM evaluacionjovenes WHERE evaluacionjovenes.cd_evaluacion =  puntajeposgrado.cd_evaluacion);

ALTER TABLE puntajeposgrado
	ADD CONSTRAINT FK_puntajeposgrado_evaluacionjovenes FOREIGN KEY (cd_evaluacion) REFERENCES evaluacionjovenes (cd_evaluacion);
	
ALTER TABLE puntajeposgrado
	ADD CONSTRAINT FK_puntajeposgrado_modeloplanillajovenes FOREIGN KEY (cd_modeloplanilla) REFERENCES modeloplanillajovenes (cd_modeloplanilla);	
	
SET FOREIGN_KEY_CHECKS=0;		
ALTER TABLE puntajeposgrado
	ADD CONSTRAINT FK_puntajeposgrado_posgradomaximo FOREIGN KEY (cd_posgradomaximo) REFERENCES posgradomaximo (cd_posgradomaximo);
SET FOREIGN_KEY_CHECKS=1;	

ALTER TABLE antacadplanilla
	ENGINE=InnoDB;	
	
ALTER TABLE antacadmaximo
	ENGINE=InnoDB;
	
ALTER TABLE antacadmaximo
	ADD CONSTRAINT FK_antacadmaximo_modeloplanillajovenes FOREIGN KEY (cd_modeloplanilla) REFERENCES modeloplanillajovenes (cd_modeloplanilla);

ALTER TABLE antacadmaximo
	ADD CONSTRAINT FK_antacadmaximo_antacadplanilla FOREIGN KEY (cd_antacadplanilla) REFERENCES antacadplanilla (cd_antacadplanilla);
	
ALTER TABLE antacadmaximo
	ADD CONSTRAINT FK_antacadmaximo_puntajegrupo FOREIGN KEY (cd_puntajegrupo) REFERENCES puntajegrupo (cd_puntajegrupo);
	
ALTER TABLE puntajeantacad
	ENGINE=InnoDB;
	
DELETE
FROM puntajeantacad
WHERE not exists (SELECT evaluacionjovenes.cd_evaluacion FROM evaluacionjovenes WHERE evaluacionjovenes.cd_evaluacion =  puntajeantacad.cd_evaluacion);
	
ALTER TABLE puntajeantacad
	ADD CONSTRAINT FK_puntajeantacad_evaluacionjovenes FOREIGN KEY (cd_evaluacion) REFERENCES evaluacionjovenes (cd_evaluacion);
	
ALTER TABLE puntajeantacad
	ADD CONSTRAINT FK_puntajeantacad_modeloplanillajovenes FOREIGN KEY (cd_modeloplanilla) REFERENCES modeloplanillajovenes (cd_modeloplanilla);
	
ALTER TABLE puntajeantacad
	ADD CONSTRAINT FK_puntajeantacad_antacadmaximo FOREIGN KEY (cd_antacadmaximo) REFERENCES antacadmaximo (cd_antacadmaximo);
	
ALTER TABLE antotrosplanilla
	ENGINE=InnoDB;	
	
ALTER TABLE antotrosmaximo
	ENGINE=InnoDB;
	
ALTER TABLE antotrosmaximo
	ADD CONSTRAINT FK_antotrosmaximo_modeloplanillajovenes FOREIGN KEY (cd_modeloplanilla) REFERENCES modeloplanillajovenes (cd_modeloplanilla);

ALTER TABLE antotrosmaximo
	ADD CONSTRAINT FK_antotrosmaximo_antotrosplanilla FOREIGN KEY (cd_antotrosplanilla) REFERENCES antotrosplanilla (cd_antotrosplanilla);
	
ALTER TABLE antotrosmaximo
	ADD CONSTRAINT FK_antotrosmaximo_puntajegrupo FOREIGN KEY (cd_puntajegrupo) REFERENCES puntajegrupo (cd_puntajegrupo);
	
ALTER TABLE puntajeantotros
	ENGINE=InnoDB;
	
DELETE
FROM puntajeantotros
WHERE not exists (SELECT evaluacionjovenes.cd_evaluacion FROM evaluacionjovenes WHERE evaluacionjovenes.cd_evaluacion =  puntajeantotros.cd_evaluacion);
	
ALTER TABLE puntajeantotros
	ADD CONSTRAINT FK_puntajeantotros_evaluacionjovenes FOREIGN KEY (cd_evaluacion) REFERENCES evaluacionjovenes (cd_evaluacion);
	
ALTER TABLE puntajeantotros
	ADD CONSTRAINT FK_puntajeantotros_modeloplanillajovenes FOREIGN KEY (cd_modeloplanilla) REFERENCES modeloplanillajovenes (cd_modeloplanilla);
	
ALTER TABLE puntajeantotros
	ADD CONSTRAINT FK_puntajeantotros_antotrosmaximo FOREIGN KEY (cd_antotrosmaximo) REFERENCES antotrosmaximo (cd_antotrosmaximo);
	
ALTER TABLE subgrupo
	ENGINE=InnoDB;
	
SET FOREIGN_KEY_CHECKS=0;
ALTER TABLE antotrosplanilla
	ADD CONSTRAINT FK_antotrosplanilla_subgrupo FOREIGN KEY (cd_subgrupo) REFERENCES subgrupo (cd_subgrupo);
SET FOREIGN_KEY_CHECKS=1;

ALTER TABLE antproduccionplanilla
	ENGINE=InnoDB;	
	
ALTER TABLE antproduccionmaximo
	ENGINE=InnoDB;
	
ALTER TABLE antproduccionmaximo
	ADD CONSTRAINT FK_antproduccionmaximo_modeloplanillajovenes FOREIGN KEY (cd_modeloplanilla) REFERENCES modeloplanillajovenes (cd_modeloplanilla);

ALTER TABLE antproduccionmaximo
	ADD CONSTRAINT FK_antproduccionmaximo_antproduccionplanilla FOREIGN KEY (cd_antproduccionplanilla) REFERENCES antproduccionplanilla (cd_antproduccionplanilla);
	
ALTER TABLE antproduccionmaximo
	ADD CONSTRAINT FK_antproduccionmaximo_puntajegrupo FOREIGN KEY (cd_puntajegrupo) REFERENCES puntajegrupo (cd_puntajegrupo);
	
ALTER TABLE puntajeantproduccion
	ENGINE=InnoDB;
	
DELETE
FROM puntajeantproduccion
WHERE not exists (SELECT evaluacionjovenes.cd_evaluacion FROM evaluacionjovenes WHERE evaluacionjovenes.cd_evaluacion =  puntajeantproduccion.cd_evaluacion);
	
ALTER TABLE puntajeantproduccion
	ADD CONSTRAINT FK_puntajeantproduccion_evaluacionjovenes FOREIGN KEY (cd_evaluacion) REFERENCES evaluacionjovenes (cd_evaluacion);
	
ALTER TABLE puntajeantproduccion
	ADD CONSTRAINT FK_puntajeantproduccion_modeloplanillajovenes FOREIGN KEY (cd_modeloplanilla) REFERENCES modeloplanillajovenes (cd_modeloplanilla);
	
ALTER TABLE puntajeantproduccion
	ADD CONSTRAINT FK_puntajeantproduccion_antproduccionmaximo FOREIGN KEY (cd_antproduccionmaximo) REFERENCES antproduccionmaximo (cd_antproduccionmaximo);
	
	
SET FOREIGN_KEY_CHECKS=0;
ALTER TABLE antproduccionplanilla
	ADD CONSTRAINT FK_antproduccionplanilla_subgrupo FOREIGN KEY (cd_subgrupo) REFERENCES subgrupo (cd_subgrupo);
SET FOREIGN_KEY_CHECKS=1;

ALTER TABLE antjustificacionplanilla
	ENGINE=InnoDB;	
	
ALTER TABLE antjustificacionmaximo
	ENGINE=InnoDB;
	
ALTER TABLE antjustificacionmaximo
	ADD CONSTRAINT FK_antjustificacionmaximo_modeloplanillajovenes FOREIGN KEY (cd_modeloplanilla) REFERENCES modeloplanillajovenes (cd_modeloplanilla);

ALTER TABLE antjustificacionmaximo
	ADD CONSTRAINT FK_antjustificacionmaximo_antjustificacionplanilla FOREIGN KEY (cd_antjustificacionplanilla) REFERENCES antjustificacionplanilla (cd_antjustificacionplanilla);
	
ALTER TABLE antjustificacionmaximo
	ADD CONSTRAINT FK_antjustificacionmaximo_puntajegrupo FOREIGN KEY (cd_puntajegrupo) REFERENCES puntajegrupo (cd_puntajegrupo);
	
ALTER TABLE puntajeantjustificacion
	ENGINE=InnoDB;
	
DELETE
FROM puntajeantjustificacion
WHERE not exists (SELECT evaluacionjovenes.cd_evaluacion FROM evaluacionjovenes WHERE evaluacionjovenes.cd_evaluacion =  puntajeantjustificacion.cd_evaluacion);
	
ALTER TABLE puntajeantjustificacion
	ADD CONSTRAINT FK_puntajeantjustificacion_evaluacionjovenes FOREIGN KEY (cd_evaluacion) REFERENCES evaluacionjovenes (cd_evaluacion);
	
ALTER TABLE puntajeantjustificacion
	ADD CONSTRAINT FK_puntajeantjustificacion_modeloplanillajovenes FOREIGN KEY (cd_modeloplanilla) REFERENCES modeloplanillajovenes (cd_modeloplanilla);
	
ALTER TABLE puntajeantjustificacion
	ADD CONSTRAINT FK_puntajeantjustificacion_antjustificacionmaximo FOREIGN KEY (cd_antjustificacionmaximo) REFERENCES antjustificacionmaximo (cd_antjustificacionmaximo);
	
ALTER TABLE unidadaprobada
	ENGINE=InnoDB;
	
ALTER TABLE unidadaprobada
	ADD CONSTRAINT FK_unidadaprobada_unidad FOREIGN KEY (cd_unidad) REFERENCES unidad (cd_unidad);
	
ALTER TABLE unidadaprobada
	ADD CONSTRAINT FK_unidadaprobada_periodo FOREIGN KEY (cd_periodo) REFERENCES periodo (cd_periodo);
	
INSERT INTO estado (ds_estado) VALUES ('Rendida');
INSERT INTO estado (ds_estado) VALUES ('Renunciada');

CREATE TABLE IF NOT EXISTS cyt_solicitudjovenes_no_rendidas (
  oid bigint(20) NOT NULL AUTO_INCREMENT,
  nu_documento int(11) NOT NULL,
  nu_year varchar(5) NOT NULL,
  PRIMARY KEY (oid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS=0;
ALTER TABLE `titulo`
	CHANGE COLUMN `cd_titulo` `cd_titulo` INT(11) NOT NULL AUTO_INCREMENT FIRST;
ALTER TABLE `universidad`
	CHANGE COLUMN `cd_universidad` `cd_universidad` INT(11) NOT NULL AUTO_INCREMENT FIRST;
SET FOREIGN_KEY_CHECKS=1;

################## Evaluación 2014 ################################
ALTER TABLE posgradomaximo
	ENGINE=InnoDB;
	
ALTER TABLE cargomaximojovenes
	ENGINE=InnoDB;
	
ALTER TABLE cargoplanillajovenes
	ENGINE=InnoDB;

 
INSERT INTO `unidadaprobada` (`cd_unidadaprobada`, `cd_unidad`, `cd_periodo`) VALUES
(260, 1874, 5),
(261, 1899, 5),
(262, 5380, 5),
(263, 5381, 5),
(264, 5383, 5),
(265, 5415, 5),
(266, 5416, 5),
(267, 5419, 5),
(268, 5420, 5),
(269, 5421, 5),
(270, 5422, 5),
(271, 5423, 5),
(272, 5424, 5),
(273, 5425, 5),
(274, 5426, 5),
(275, 5738, 5),
(276, 5739, 5),
(277, 6292, 5),
(278, 6302, 5),
(279, 6303, 5),
(280, 6325, 5),
(281, 6995, 5),
(282, 7790, 5),
(283, 7835, 5),
(284, 8017, 5),
(285, 8378, 5),
(286, 10311, 5),
(287, 11097, 5),
(288, 11992, 5),
(289, 12366, 5),
(290, 12706, 5),
(291, 12928, 5),
(292, 12992, 5),
(293, 13029, 5),
(294, 13074, 5),
(295, 13078, 5),
(296, 13086, 5),
(297, 13160, 5),
(298, 13170, 5),
(299, 13209, 5),
(300, 13865, 5),
(301, 13942, 5),
(302, 14050, 5),
(303, 14102, 5),
(304, 14122, 5),
(305, 14330, 5),
(306, 14536, 5),
(307, 20009, 5),
(308, 20010, 5),
(309, 20012, 5),
(310, 20013, 5),
(311, 20260, 5),
(312, 20408, 5),
(313, 20461, 5),
(314, 21075, 5),
(315, 21076, 5),
(316, 21594, 5),
(317, 22104, 5),
(318, 22126, 5),
(319, 22246, 5),
(320, 22262, 5),
(321, 22347, 5),
(322, 22514, 5),
(323, 22515, 5),
(324, 22516, 5),
(325, 22518, 5),
(326, 22519, 5),
(327, 110129, 5),
(328, 110130, 5),
(329, 110332, 5),
(330, 110334, 5),
(331, 110505, 5),
(332, 110524, 5),
(333, 110603, 5),
(334, 110620, 5),
(335, 110621, 5),
(336, 110633, 5),
(337, 110634, 5),
(338, 110635, 5),
(339, 110636, 5),
(340, 111012, 5),
(341, 111027, 5),
(342, 111108, 5),
(343, 111120, 5),
(344, 111122, 5),
(345, 111123, 5),
(346, 111124, 5),
(347, 111126, 5),
(348, 111128, 5),
(349, 111130, 5),
(350, 111228, 5),
(351, 111233, 5),
(352, 111234, 5),
(353, 111236, 5),
(354, 111237, 5),
(355, 111324, 5),
(356, 111414, 5),
(357, 111415, 5),
(358, 111611, 5),
(359, 111712, 5),
(360, 111720, 5),
(361, 111827, 5),
(362, 111839, 5),
(363, 111849, 5),
(364, 111850, 5),
(365, 111851, 5),
(366, 111852, 5),
(367, 111853, 5),
(368, 111862, 5),
(369, 900003, 5),
(370, 900007, 5),
(371, 900008, 5); 
 
INSERT INTO modeloplanillajovenes (
cd_modeloplanilla ,
ds_modelo ,
nu_max ,
cd_periodo
)
VALUES (
NULL , 'Planilla', '100', '5'
);


INSERT INTO posgradomaximo VALUES (4, NULL, 1, 31, 5);
INSERT INTO posgradomaximo VALUES (4, NULL, 2, 31, 3);
INSERT INTO posgradomaximo VALUES (4, NULL, 3, 31, 1);
INSERT INTO posgradomaximo VALUES (4, NULL, 4, 31, 0);

INSERT INTO `antacadplanilla` (`ds_antacadplanilla`, `ds_antacadpdf`) VALUES ('Otros antecedentes académicos (distinciones, premios, etc.)', 'Otros antecedentes académicos (distinciones, premios, etc.)');

INSERT INTO antacadmaximo VALUES (4, NULL, 1, 3, 31, 3, 12);
INSERT INTO antacadmaximo VALUES (4, NULL, 2, 1, 31, 1, 6);
INSERT INTO antacadmaximo VALUES (4, NULL, 3, 0, 31, 0, 0);
INSERT INTO antacadmaximo VALUES (4, NULL, 4, 2, 31, 2, 2);
INSERT INTO antacadmaximo VALUES (4, NULL, 6, 0, 31, 0, 2);

INSERT INTO cargomaximojovenes VALUES (4, NULL, 1, 10);
INSERT INTO cargomaximojovenes VALUES (4, NULL, 2, 7);
INSERT INTO cargomaximojovenes VALUES (4, NULL, 3, 9);
INSERT INTO cargomaximojovenes VALUES (4, NULL, 4, 6);
INSERT INTO cargomaximojovenes VALUES (4, NULL, 5, 8);
INSERT INTO cargomaximojovenes VALUES (4, NULL, 6, 5);
INSERT INTO cargomaximojovenes VALUES (4, NULL, 7, 6);
INSERT INTO cargomaximojovenes VALUES (4, NULL, 8, 4);
INSERT INTO cargomaximojovenes VALUES (4, NULL, 9, 4);
INSERT INTO cargomaximojovenes VALUES (4, NULL, 10, 2);

SET FOREIGN_KEY_CHECKS=0;
INSERT INTO `antotrosplanilla` (`cd_antotrosplanilla`,`ds_antotrosplanilla`, cd_subgrupo) VALUES (7,'Actividades de Gestión Universitaria',0);
SET FOREIGN_KEY_CHECKS=1;

INSERT INTO antotrosmaximo VALUES (4, NULL, 7, 0, 32, 0, 2);
INSERT INTO antotrosmaximo VALUES (4, NULL, 2, 3, 32, 3, 0);
INSERT INTO antotrosmaximo VALUES (4, NULL, 3, 2, 32, 2, 0);
INSERT INTO antotrosmaximo VALUES (4, NULL, 4, 1, 32, 1, 0);
INSERT INTO antotrosmaximo VALUES (4, NULL, 6, 2, 32, 2, 2);



INSERT INTO antproduccionmaximo VALUES (4, NULL, 18, 5, 35, 5, 0);
INSERT INTO antproduccionmaximo VALUES (4, NULL, 19, 7, 35, 7, 0);
INSERT INTO antproduccionmaximo VALUES (4, NULL, 20, 10, 35, 10, 0);
INSERT INTO antproduccionmaximo VALUES (4, NULL, 21, 20, 35, 20, 0);

INSERT INTO `subgrupo` VALUES (8,'Participación en reuniones científicas de la especialidad','Participación en reuniones científicas de la especialidad');

INSERT INTO `antproduccionplanilla` (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES
(24, 'presentaciones poster: #puntaje# cada una', 8),
(25, 'presentaciones orales: #puntaje# cada una', 8),
(26, 'conferencias: #puntaje# cada una', 8),
(27, 'colaboración en la organización: #puntaje# cada una', 8);

INSERT INTO antproduccionmaximo VALUES (4, NULL, 24, 0.5, 35, 0.5, 2);
INSERT INTO antproduccionmaximo VALUES (4, NULL, 25, 1, 35, 1, 5);
INSERT INTO antproduccionmaximo VALUES (4, NULL, 26, 3, 35, 3, 6);
INSERT INTO antproduccionmaximo VALUES (4, NULL, 27, 0.5, 35, 0.5, 1);

INSERT INTO `subgrupo` VALUES (9,'Publicaciones o Trabajos aceptados para su publicación (libros y capítulos de libros publicados por editoriales reconocidas, artículos en revistas científicas y en actas de congresos con comité editorial)', 'Publicaciones o Trabajos aceptados para su publicación (libros y capítulos de libros publicados por editoriales reconocidas, artículos en revistas científicas y en actas de congresos con comité editorial)');

INSERT INTO `antproduccionplanilla` (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES
(28, 'Autoría de libros publicados por editorial reconocida', 9),
(29, 'Capítulos de libros publicados por editorial reconocida (excluidos actas o proceedings)', 9),
(30, 'Artículos en revistas con referato', 9),
(31, 'Trabajos completos publicados en actas de congresos con referato', 9);

INSERT INTO antproduccionmaximo VALUES (4, NULL, 28, 20, 35, 20, 0);
INSERT INTO antproduccionmaximo VALUES (4, NULL, 29, 8, 35, 8, 0);
INSERT INTO antproduccionmaximo VALUES (4, NULL, 30, 10, 35, 10, 0);
INSERT INTO antproduccionmaximo VALUES (4, NULL, 31, 5, 35, 5, 0);


INSERT INTO antproduccionmaximo VALUES (4, NULL, 14, 10, 35, 10, 0);

INSERT INTO antproduccionmaximo VALUES (4, NULL, 15, 10, 35, 0, 0);

INSERT INTO `antproduccionplanilla` (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES
(32, 'transferencias o innovaciones tecnológicas documentadas', 6),
(33, 'actividades de extensión documentada', 6);

INSERT INTO antproduccionmaximo VALUES (4, NULL, 32, 6, 35, 0, 0);
INSERT INTO antproduccionmaximo VALUES (4, NULL, 33, 2, 35, 0, 0);

INSERT INTO `subgrupo` VALUES (10,'Otras actividades','Otras actividades');

INSERT INTO `antproduccionplanilla` (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES
(34, 'Otros', 10);


INSERT INTO antproduccionmaximo VALUES (4, NULL, 34, 0, 35, 0, 2);

INSERT INTO `subgrupo` VALUES (11,'Lugar de trabajo','Lugar de trabajo');

INSERT INTO `antproduccionplanilla` (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES
(35, 'U. de Inv. formalmente reconocida y aprob. por el C. Superior', 11);

INSERT INTO antproduccionmaximo VALUES (4, NULL, 35, 1, 35, 1, 1);


INSERT INTO `antjustificacionplanilla` (`cd_antjustificacionplanilla`, `ds_antjustificacionplanilla`, `cd_subgrupo`) VALUES
(2, 'Se evaluará la justificación de los fondos solicitados y su relación con las actividades de I+D planteadas en el marco del proyecto acreditado.', 0);

INSERT INTO antjustificacionmaximo VALUES (4, NULL, 2, 0, 36, 0, 15);

################################12/06/2015#####################################################3
	
ALTER TABLE `solicitudjovenes`
	ADD COLUMN `ds_disciplina` VARCHAR(255) NULL DEFAULT NULL AFTER `cd_tituloposgrado`;
	
################## Evaluación 2015 ################################
INSERT INTO `unidadaprobada` (`cd_unidad`, `cd_periodo`) VALUES
(1874, 6),
(1899, 6),
(5380, 6),
(5381, 6),
(5383, 6),
(5415, 6),
(5416, 6),
(5419, 6),
(5420, 6),
(5421, 6),
(5422, 6),
(5423, 6),
(5424, 6),
(5425, 6),
(5426, 6),
(5738, 6),
(5739, 6),
(6292, 6),
(6302, 6),
(6303, 6),
(6325, 6),
(6995, 6),
(7790, 6),
(7835, 6),
(8017, 6),
(8378, 6),
(10311, 6),
(11097, 6),
(11992, 6),
(12366, 6),
(12706, 6),
(12928, 6),
(12992, 6),
(13029, 6),
(13074, 6),
(13078, 6),
(13086, 6),
(13160, 6),
(13170, 6),
(13177, 6),
(13209, 6),
(13865, 6),
(13942, 6),
(14050, 6),
(14102, 6),
(14122, 6),
(14330, 6),
(14536, 6),
(20009, 6),
(20010, 6),
(20012, 6),
(20013, 6),
(20260, 6),
(20408, 6),
(20461, 6),
(21075, 6),
(21076, 6),
(21594, 6),
(22104, 6),
(22126, 6),
(22246, 6),
(22262, 6),
(22347, 6),
(22514, 6),
(22515, 6),
(22516, 6),
(22518, 6),
(22519, 6),
(110129, 6),
(110130, 6),
(110131, 6),
(110332, 6),
(110334, 6),
(110505, 6),
(110524, 6),
(110525, 6),
(110526, 6),
(110603, 6),
(110620, 6),
(110621, 6),
(110633, 6),
(110634, 6),
(110635, 6),
(110636, 6),
(111012, 6),
(111027, 6),
(111108, 6),
(111120, 6),
(111122, 6),
(111123, 6),
(111124, 6),
(111126, 6),
(111128, 6),
(111130, 6),
(111131, 6),
(111228, 6),
(111233, 6),
(111234, 6),
(111236, 6),
(111237, 6),
(111238, 6),
(111324, 6),
(111414, 6),
(111415, 6),
(111611, 6),
(111712, 6),
(111720, 6),
(111827, 6),
(111839, 6),
(111849, 6),
(111850, 6),
(111851, 6),
(111852, 6),
(111853, 6),
(111862, 6),
(900003, 6),
(900007, 6),
(900008, 6),
(900009, 6),
(900010, 6),
(900011, 6),
(900012, 6),
(900013, 6),
(900014, 6),
(900015, 6),
(900016, 6),
(900017, 6),
(900018, 6),
(900019, 6),
(900020, 6),
(900021, 6),
(900022, 6),
(900023, 6),
(900024, 6),
(900025, 6),
(900026, 6),
(900027, 6),
(900028, 6);

INSERT INTO modeloplanillajovenes (
cd_modeloplanilla ,
ds_modelo ,
nu_max ,
cd_periodo
)
VALUES (
NULL , 'Planilla', '100', '6'
);


INSERT INTO posgradomaximo VALUES (5, NULL, 1, 31, 5);
INSERT INTO posgradomaximo VALUES (5, NULL, 2, 31, 3);
INSERT INTO posgradomaximo VALUES (5, NULL, 3, 31, 1);
INSERT INTO posgradomaximo VALUES (5, NULL, 4, 31, 0);

INSERT INTO antacadmaximo VALUES (5, NULL, 1, 3, 31, 3, 12);
INSERT INTO antacadmaximo VALUES (5, NULL, 2, 1, 31, 1, 6);
INSERT INTO antacadmaximo VALUES (5, NULL, 3, 0, 31, 0, 0);
INSERT INTO antacadmaximo VALUES (5, NULL, 4, 2, 31, 2, 2);
INSERT INTO antacadmaximo VALUES (5, NULL, 6, 0, 31, 0, 2);

INSERT INTO cargomaximojovenes VALUES (5, NULL, 1, 10);
INSERT INTO cargomaximojovenes VALUES (5, NULL, 2, 7);
INSERT INTO cargomaximojovenes VALUES (5, NULL, 3, 9);
INSERT INTO cargomaximojovenes VALUES (5, NULL, 4, 6);
INSERT INTO cargomaximojovenes VALUES (5, NULL, 5, 8);
INSERT INTO cargomaximojovenes VALUES (5, NULL, 6, 5);
INSERT INTO cargomaximojovenes VALUES (5, NULL, 7, 6);
INSERT INTO cargomaximojovenes VALUES (5, NULL, 8, 4);
INSERT INTO cargomaximojovenes VALUES (5, NULL, 9, 4);
INSERT INTO cargomaximojovenes VALUES (5, NULL, 10, 2);

INSERT INTO antotrosmaximo VALUES (5, NULL, 7, 0, 32, 0, 2);
INSERT INTO antotrosmaximo VALUES (5, NULL, 2, 3, 32, 3, 0);
INSERT INTO antotrosmaximo VALUES (5, NULL, 3, 2, 32, 2, 0);
INSERT INTO antotrosmaximo VALUES (5, NULL, 4, 1, 32, 1, 0);
INSERT INTO antotrosmaximo VALUES (5, NULL, 6, 2, 32, 2, 2);

INSERT INTO antproduccionmaximo VALUES (5, NULL, 18, 5, 35, 5, 0);
INSERT INTO antproduccionmaximo VALUES (5, NULL, 19, 7, 35, 7, 0);
INSERT INTO antproduccionmaximo VALUES (5, NULL, 20, 10, 35, 10, 0);
INSERT INTO antproduccionmaximo VALUES (5, NULL, 21, 20, 35, 20, 0);

INSERT INTO antproduccionmaximo VALUES (5, NULL, 24, 0.5, 35, 0.5, 2);
INSERT INTO antproduccionmaximo VALUES (5, NULL, 25, 1, 35, 1, 5);
INSERT INTO antproduccionmaximo VALUES (5, NULL, 26, 3, 35, 3, 6);
INSERT INTO antproduccionmaximo VALUES (5, NULL, 27, 0.5, 35, 0.5, 1);

INSERT INTO antproduccionmaximo VALUES (5, NULL, 28, 20, 35, 20, 0);
INSERT INTO antproduccionmaximo VALUES (5, NULL, 29, 8, 35, 8, 0);
INSERT INTO antproduccionmaximo VALUES (5, NULL, 30, 10, 35, 10, 0);
INSERT INTO antproduccionmaximo VALUES (5, NULL, 31, 5, 35, 5, 0);


INSERT INTO antproduccionmaximo VALUES (5, NULL, 14, 10, 35, 10, 0);

INSERT INTO antproduccionmaximo VALUES (5, NULL, 15, 10, 35, 0, 0);

INSERT INTO antproduccionmaximo VALUES (5, NULL, 32, 6, 35, 0, 0);
INSERT INTO antproduccionmaximo VALUES (5, NULL, 33, 2, 35, 0, 0);

INSERT INTO antproduccionmaximo VALUES (5, NULL, 34, 0, 35, 0, 2);

INSERT INTO antproduccionmaximo VALUES (5, NULL, 35, 1, 35, 1, 1);

INSERT INTO antjustificacionmaximo VALUES (5, NULL, 2, 0, 36, 0, 15);

################## Evaluación 2016 ################################

INSERT INTO `unidadaprobada` (`cd_unidad`, `cd_periodo`) VALUES
(1874, 7),
(1899, 7),
(5380, 7),
(5381, 7),
(5383, 7),
(5415, 7),
(5416, 7),
(5419, 7),
(5420, 7),
(5421, 7),
(5422, 7),
(5423, 7),
(5424, 7),
(5425, 7),
(5426, 7),
(5738, 7),
(5739, 7),
(6292, 7),
(6302, 7),
(6303, 7),
(6325, 7),
(6995, 7),
(7790, 7),
(7835, 7),
(8017, 7),
(8378, 7),
(10311, 7),
(11097, 7),
(11992, 7),
(12366, 7),
(12706, 7),
(12928, 7),
(12992, 7),
(13029, 7),
(13074, 7),
(13078, 7),
(13086, 7),
(13160, 7),
(13170, 7),
(13177, 7),
(13209, 7),
(13865, 7),
(13942, 7),
(14050, 7),
(14102, 7),
(14122, 7),
(14330, 7),
(14536, 7),
(20009, 7),
(20010, 7),
(20012, 7),
(20013, 7),
(20260, 7),
(20408, 7),
(20461, 7),
(21075, 7),
(21076, 7),
(21594, 7),
(22104, 7),
(22126, 7),
(22246, 7),
(22262, 7),
(22347, 7),
(22514, 7),
(22515, 7),
(22516, 7),
(22518, 7),
(22519, 7),
(110129, 7),
(110130, 7),
(110131, 7),
(110332, 7),
(110334, 7),
(110505, 7),
(110524, 7),
(110525, 7),
(110526, 7),
(110603, 7),
(110620, 7),
(110621, 7),
(110633, 7),
(110634, 7),
(110635, 7),
(110636, 7),
(111012, 7),
(111027, 7),
(111108, 7),
(111120, 7),
(111122, 7),
(111123, 7),
(111124, 7),
(111126, 7),
(111128, 7),
(111130, 7),
(111131, 7),
(111228, 7),
(111233, 7),
(111234, 7),
(111236, 7),
(111237, 7),
(111238, 7),
(111324, 7),
(111414, 7),
(111415, 7),
(111611, 7),
(111712, 7),
(111720, 7),
(111827, 7),
(111839, 7),
(111849, 7),
(111850, 7),
(111851, 7),
(111852, 7),
(111853, 7),
(111862, 7),
(900003, 7),
(900007, 7),
(900008, 7),
(900009, 7),
(900010, 7),
(900011, 7),
(900012, 7),
(900013, 7),
(900014, 7),
(900015, 7),
(900016, 7),
(900017, 7),
(900018, 7),
(900019, 7),
(900020, 7),
(900021, 7),
(900022, 7),
(900023, 7),
(900024, 7),
(900025, 7),
(900026, 7),
(900027, 7),
(900028, 7),
(900029, 7),
(900030, 7),
(900031, 7),
(900032, 7),
(900033, 7),
(900034, 7),
(111863, 7),
(900035, 7),
(900036, 7),
(900037, 7),
(900038, 7),
(900039, 7),
(5384, 7),
(5372, 7),
(110335, 7),
(20216, 7),
(900040, 7);

INSERT INTO modeloplanillajovenes (
cd_modeloplanilla ,
ds_modelo ,
nu_max ,
cd_periodo
)
VALUES (
NULL , 'Planilla', '100', '7'
);


INSERT INTO posgradomaximo VALUES (6, NULL, 1, 31, 5);
INSERT INTO posgradomaximo VALUES (6, NULL, 2, 31, 3);
INSERT INTO posgradomaximo VALUES (6, NULL, 3, 31, 1);
INSERT INTO posgradomaximo VALUES (6, NULL, 4, 31, 0);

INSERT INTO antacadmaximo VALUES (6, NULL, 1, 3, 31, 3, 12);
INSERT INTO antacadmaximo VALUES (6, NULL, 2, 1, 31, 1, 6);
INSERT INTO antacadmaximo VALUES (6, NULL, 3, 0, 31, 0, 0);
INSERT INTO antacadmaximo VALUES (6, NULL, 4, 2, 31, 2, 2);
INSERT INTO antacadmaximo VALUES (6, NULL, 6, 0, 31, 0, 2);

INSERT INTO cargomaximojovenes VALUES (6, NULL, 1, 10);
INSERT INTO cargomaximojovenes VALUES (6, NULL, 2, 7);
INSERT INTO cargomaximojovenes VALUES (6, NULL, 3, 9);
INSERT INTO cargomaximojovenes VALUES (6, NULL, 4, 6);
INSERT INTO cargomaximojovenes VALUES (6, NULL, 5, 8);
INSERT INTO cargomaximojovenes VALUES (6, NULL, 6, 5);
INSERT INTO cargomaximojovenes VALUES (6, NULL, 7, 6);
INSERT INTO cargomaximojovenes VALUES (6, NULL, 8, 4);
INSERT INTO cargomaximojovenes VALUES (6, NULL, 9, 4);
INSERT INTO cargomaximojovenes VALUES (6, NULL, 10, 2);

INSERT INTO antotrosmaximo VALUES (6, NULL, 7, 0, 32, 0, 2);
INSERT INTO antotrosmaximo VALUES (6, NULL, 2, 3, 32, 3, 0);
INSERT INTO antotrosmaximo VALUES (6, NULL, 3, 2, 32, 2, 0);
INSERT INTO antotrosmaximo VALUES (6, NULL, 4, 1, 32, 1, 0);
INSERT INTO antotrosmaximo VALUES (6, NULL, 6, 2, 32, 2, 2);

INSERT INTO antproduccionmaximo VALUES (6, NULL, 18, 5, 35, 5, 0);
INSERT INTO antproduccionmaximo VALUES (6, NULL, 19, 7, 35, 7, 0);
INSERT INTO antproduccionmaximo VALUES (6, NULL, 20, 10, 35, 10, 0);
INSERT INTO antproduccionmaximo VALUES (6, NULL, 21, 20, 35, 20, 0);

INSERT INTO antproduccionmaximo VALUES (6, NULL, 24, 0.5, 35, 0.5, 2);
INSERT INTO antproduccionmaximo VALUES (6, NULL, 25, 1, 35, 1, 5);
INSERT INTO antproduccionmaximo VALUES (6, NULL, 26, 3, 35, 3, 6);
INSERT INTO antproduccionmaximo VALUES (6, NULL, 27, 0.5, 35, 0.5, 1);

INSERT INTO antproduccionmaximo VALUES (6, NULL, 28, 20, 35, 20, 0);
INSERT INTO antproduccionmaximo VALUES (6, NULL, 29, 8, 35, 8, 0);
INSERT INTO antproduccionmaximo VALUES (6, NULL, 30, 10, 35, 10, 0);
INSERT INTO antproduccionmaximo VALUES (6, NULL, 31, 5, 35, 5, 0);


INSERT INTO antproduccionmaximo VALUES (6, NULL, 14, 10, 35, 10, 0);

INSERT INTO antproduccionmaximo VALUES (6, NULL, 15, 10, 35, 0, 0);

INSERT INTO antproduccionmaximo VALUES (6, NULL, 32, 6, 35, 0, 0);
INSERT INTO antproduccionmaximo VALUES (6, NULL, 33, 2, 35, 0, 0);

INSERT INTO antproduccionmaximo VALUES (6, NULL, 34, 0, 35, 0, 2);

INSERT INTO antproduccionmaximo VALUES (6, NULL, 35, 1, 35, 1, 1);

INSERT INTO antjustificacionmaximo VALUES (6, NULL, 2, 0, 36, 0, 15);

################## Evaluacion 2017 ################################

INSERT INTO `unidadaprobada` (`cd_unidad`, `cd_periodo`) VALUES
(1874, 8),
(1899, 8),
(5372, 8),
(5380, 8),
(5381, 8),
(5383, 8),
(5384, 8),
(5415, 8),
(5416, 8),
(5419, 8),
(5420, 8),
(5421, 8),
(5422, 8),
(5423, 8),
(5424, 8),
(5425, 8),
(5426, 8),
(5738, 8),
(5739, 8),
(6292, 8),
(6302, 8),
(6303, 8),
(6325, 8),
(6995, 8),
(7790, 8),
(7835, 8),
(8017, 8),
(8378, 8),
(10311, 8),
(11097, 8),
(11992, 8),
(12366, 8),
(12706, 8),
(12928, 8),
(12992, 8),
(13029, 8),
(13074, 8),
(13078, 8),
(13086, 8),
(13160, 8),
(13170, 8),
(13177, 8),
(13209, 8),
(13865, 8),
(13942, 8),
(14050, 8),
(14102, 8),
(14122, 8),
(14330, 8),
(14536, 8),
(20009, 8),
(20010, 8),
(20012, 8),
(20013, 8),
(20216, 8),
(20260, 8),
(20408, 8),
(20461, 8),
(21075, 8),
(21076, 8),
(21594, 8),
(22104, 8),
(22126, 8),
(22246, 8),
(22262, 8),
(22347, 8),
(22514, 8),
(22515, 8),
(22516, 8),
(22518, 8),
(22519, 8),
(110129, 8),
(110130, 8),
(110131, 8),
(110332, 8),
(110334, 8),
(110335, 8),
(110505, 8),
(110524, 8),
(110525, 8),
(110526, 8),
(110603, 8),
(110620, 8),
(110621, 8),
(110633, 8),
(110634, 8),
(110635, 8),
(110636, 8),
(111012, 8),
(111027, 8),
(111108, 8),
(111120, 8),
(111122, 8),
(111123, 8),
(111124, 8),
(111126, 8),
(111128, 8),
(111130, 8),
(111131, 8),
(111228, 8),
(111233, 8),
(111234, 8),
(111236, 8),
(111237, 8),
(111238, 8),
(111324, 8),
(111414, 8),
(111415, 8),
(111611, 8),
(111712, 8),
(111720, 8),
(111827, 8),
(111839, 8),
(111849, 8),
(111850, 8),
(111851, 8),
(111852, 8),
(111853, 8),
(111862, 8),
(111863, 8),
(900003, 8),
(900007, 8),
(900008, 8),
(900009, 8),
(900010, 8),
(900011, 8),
(900012, 8),
(900013, 8),
(900014, 8),
(900015, 8),
(900016, 8),
(900017, 8),
(900018, 8),
(900019, 8),
(900020, 8),
(900021, 8),
(900022, 8),
(900023, 8),
(900024, 8),
(900025, 8),
(900026, 8),
(900027, 8),
(900028, 8),
(900029, 8),
(900030, 8),
(900031, 8),
(900032, 8),
(900033, 8),
(900034, 8),
(900035, 8),
(900036, 8),
(900037, 8),
(900038, 8),
(900039, 8),
(900040, 8),
(900041, 8),
(900042, 8),
(900043, 8),
(900044, 8),
(900045, 8);

INSERT INTO modeloplanillajovenes (
cd_modeloplanilla ,
ds_modelo ,
nu_max ,
cd_periodo
)
VALUES (
NULL , 'Planilla', '100', '8'
);

INSERT INTO posgradomaximo VALUES (7, NULL, 1, 31, 5);
INSERT INTO posgradomaximo VALUES (7, NULL, 2, 31, 3);
INSERT INTO posgradomaximo VALUES (7, NULL, 3, 31, 1);
INSERT INTO posgradomaximo VALUES (7, NULL, 4, 31, 0);

INSERT INTO `antacadplanilla` (
`cd_antacadplanilla` ,
`ds_antacadplanilla` ,
`ds_antacadpdf`
)
VALUES (
NULL , 'El solicitante obtuvo el grado acad�mico superior', 'Relaci�n entre la fecha de egreso del t�tulo de grado y su situaci�n acad�mica actual (a�os de egreso / avance en el Postgrado / avance como Becario)'
);

ALTER TABLE `puntajegrupo` ADD `cd_grupopadre` INT( 11 ) NULL; 

INSERT INTO `antacadplanilla` (`cd_antacadplanilla`, `ds_antacadplanilla`, `ds_antacadpdf`) VALUES (NULL, 'Otros antecedentes acad�micos (distinciones, premios, estancias y pasant�as)', 'Otros antecedentes acad�micos (distinciones, premios, estancias y pasant�as)');

INSERT INTO antacadmaximo VALUES (7, NULL, 1, 3, 31, 3, 12);
INSERT INTO antacadmaximo VALUES (7, NULL, 2, 1, 31, 1, 6);
INSERT INTO antacadmaximo VALUES (7, NULL, 7, 0, 31, 0, 0);
INSERT INTO antacadmaximo VALUES (7, NULL, 4, 2, 31, 2, 2);
INSERT INTO antacadmaximo VALUES (7, NULL, 8, 0, 31, 0, 2);

INSERT INTO cargomaximojovenes VALUES (7, NULL, 1, 8);
INSERT INTO cargomaximojovenes VALUES (7, NULL, 2, 8);
INSERT INTO cargomaximojovenes VALUES (7, NULL, 3, 8);
INSERT INTO cargomaximojovenes VALUES (7, NULL, 4, 8);
INSERT INTO cargomaximojovenes VALUES (7, NULL, 5, 8);
INSERT INTO cargomaximojovenes VALUES (7, NULL, 6, 8);
INSERT INTO cargomaximojovenes VALUES (7, NULL, 7, 6);
INSERT INTO cargomaximojovenes VALUES (7, NULL, 8, 4);
INSERT INTO cargomaximojovenes VALUES (7, NULL, 9, 4);
INSERT INTO cargomaximojovenes VALUES (7, NULL, 10, 2);

INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'C', '3', '32');

INSERT INTO `subgrupo` (`cd_subgrupo`, `ds_subgrupo`, `ds_pdf`) VALUES (NULL, 'Actividades de evaluaci�n', 'Actividades de evaluaci�n');

INSERT INTO `antotrosplanilla` (`cd_antotrosplanilla`, `ds_antotrosplanilla`, `cd_subgrupo`) VALUES (NULL, 'Evaluaci�n de tesis de maestr�a o doctorado', '12'), (NULL, 'Evaluaci�n de trabajo final o especializaci�n', '12');
INSERT INTO `antotrosplanilla` (`cd_antotrosplanilla`, `ds_antotrosplanilla`, `cd_subgrupo`) VALUES (NULL, 'Jurado de concursos', '12'), (NULL, 'Evaluaci�n de trabajos en revistas de CyT', '12');

INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'Sin Puntaje C', '0', '32');

INSERT INTO antotrosmaximo VALUES (7, NULL, 7, 0, 49, 0, 2);
INSERT INTO antotrosmaximo VALUES (7, NULL, 8, 3, 48, 3, 0);
INSERT INTO antotrosmaximo VALUES (7, NULL, 9, 2, 48, 2, 0);
INSERT INTO antotrosmaximo VALUES (7, NULL, 10, 1, 48, 1, 0);
INSERT INTO antotrosmaximo VALUES (7, NULL, 11, 1, 48, 1, 0);

INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Direcci�n de trabajos finales de grado aprobados', '7');
INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Direcci�n o codirecci�n de trabajos finales de especializaci�n o tesis de maestr�a aprobados', '7');
INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Direcci�n o codirecci�n de tesis de doctorado aprobadas', '7');
INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Direcci�n de Becas de grado (Entrenamiento CIC - Vocaciones Cient�ficas CIN)', '7');

INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'D1', '15','35');

INSERT INTO antproduccionmaximo VALUES (7, NULL, 36, 2, 50, 2, 0);
INSERT INTO antproduccionmaximo VALUES (7, NULL, 37, 7, 50, 7, 0);
INSERT INTO antproduccionmaximo VALUES (7, NULL, 38, 12, 50, 12, 0);
INSERT INTO antproduccionmaximo VALUES (7, NULL, 39, 4, 50, 4, 0);

INSERT INTO `subgrupo` (`cd_subgrupo`, `ds_subgrupo`, `ds_pdf`) VALUES (NULL, 'Participaci�n en reuniones cient�ficas de la especialidad y trabajos publicados en actas de congreso', 'Participaci�n en reuniones cient�ficas de la especialidad y trabajos publicados en actas de congreso');

INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Trabajos publicados en actas de congreso', '13');
INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Participaci�n u organizaci�n de eventos de CyT', '13');

INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'D2', '20','35');

INSERT INTO antproduccionmaximo VALUES (7, NULL, 40, 1, 51, 1, 0);
INSERT INTO antproduccionmaximo VALUES (7, NULL, 41, 1, 51, 1, 0);

INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'D3', '40','35');

INSERT INTO `subgrupo` (`cd_subgrupo`, `ds_subgrupo`, `ds_pdf`) VALUES (NULL, 'Publicaciones o Trabajos aceptados para su publicaci�n (libros y cap�tulos de libros publicados por editoriales reconocidas, art�culos en revistas cient�ficas)', 'Publicaciones o Trabajos aceptados para su publicaci�n (libros y cap�tulos de libros publicados por editoriales reconocidas, art�culos en revistas cient�ficas)');

INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Autor�a de libros publicados por editorial reconocida', '14');
INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Cap�tulos de libros publicados por editorial reconocida (excluidos actas o proceedings)', '14');
INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Art�culos en revistas con referato', '14');


INSERT INTO antproduccionmaximo VALUES (7, NULL, 42, 20, 52, 20, 0);
INSERT INTO antproduccionmaximo VALUES (7, NULL, 43, 8, 52, 8, 0);
INSERT INTO antproduccionmaximo VALUES (7, NULL, 44, 10, 52, 10, 0);

INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'Sin Puntaje D', '0','35');

INSERT INTO antproduccionmaximo VALUES (7, NULL, 14, 10, 53, 10, 40);

INSERT INTO `subgrupo` (`cd_subgrupo`, `ds_subgrupo`, `ds_pdf`) VALUES (NULL, 'Producci�n tecnol�gica', 'Producci�n tecnol�gica');

INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Patentes registradas', '15');
INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Otras producciones tecnol�gicas con titulo de propiedad intelectual (Modelo de utilidad -Derecho de obtentor (Variedades vegetales) -Derecho de autor de producciones tecnol�gicas -Modelo industrial -Dise�o industrial, Marca de servicios o producto)', '15');
INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Servicios cient�ficos tecnol�gicos e informes t�cnicos', '15');

INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'D5', '40','35');

INSERT INTO antproduccionmaximo VALUES (7, NULL, 45, 10, 54, 0, 0);
INSERT INTO antproduccionmaximo VALUES (7, NULL, 46, 5, 54, 0, 0);
INSERT INTO antproduccionmaximo VALUES (7, NULL, 47, 3, 54, 3, 15);

INSERT INTO `subgrupo` (`cd_subgrupo`, `ds_subgrupo`, `ds_pdf`) VALUES (NULL, 'Extensi�n', 'Extensi�n');


INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'actividades de extensi�n documentada', '16');
SET FOREIGN_KEY_CHECKS=0;
INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Otros actividades (Participaci�n en Proyectos de Investigaci�n, membres�as en asociaci�n de CyT y/o profesionales y participaci�n de redes tem�ticas)', '0');
SET FOREIGN_KEY_CHECKS=1;

INSERT INTO antproduccionmaximo VALUES (7, NULL, 48, 3, 53, 3, 9);
INSERT INTO antproduccionmaximo VALUES (7, NULL, 49, 0, 53, 0, 2);

INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'U. de Inv. formalmente reconocida y aprobada por el C. Superior (Ord. 284)', '11');

INSERT INTO antproduccionmaximo VALUES (7, NULL, 50, 1, 53, 1, 1);

INSERT INTO `subgrupo` (`cd_subgrupo`, `ds_subgrupo`, `ds_pdf`) VALUES (NULL, 'Per�odo anterior', 'Per�odo anterior');


CREATE TABLE IF NOT EXISTS `subanteriorplanilla` (
  `cd_subanteriorplanilla` int(11) NOT NULL AUTO_INCREMENT,
  `ds_subanteriorplanilla` varchar(255) DEFAULT NULL,
  `cd_subgrupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_subanteriorplanilla`),
  KEY `cd_subanteriorplanilla` (`cd_subgrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


INSERT INTO subanteriorplanilla (`cd_subanteriorplanilla`, `ds_subanteriorplanilla`, `cd_subgrupo`) VALUES (NULL, 'No obtuvo subsidio en el a�o anterior', '17');

CREATE TABLE IF NOT EXISTS `subanteriormaximo` (
  `cd_modeloplanilla` int(11) DEFAULT NULL,
  `cd_subanteriormaximo` int(11) NOT NULL AUTO_INCREMENT,
  `cd_subanteriorplanilla` int(11) DEFAULT NULL,
  `nu_max` float DEFAULT NULL,
  `cd_puntajegrupo` int(11) DEFAULT NULL,
  `nu_min` float DEFAULT NULL,
  `nu_tope` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_subanteriormaximo`),
  KEY `cd_modeloplanilla` (`cd_modeloplanilla`,`cd_subanteriorplanilla`,`cd_puntajegrupo`),
  KEY `FK_subanteriormaximo_subanteriorplanilla` (`cd_subanteriorplanilla`),
  KEY `FK_subanteriormaximo_puntajegrupo` (`cd_puntajegrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

INSERT INTO subanteriormaximo VALUES (7, NULL, 1, 2, 53, 2, 2);

CREATE TABLE IF NOT EXISTS `puntajesubanterior` (
  `cd_puntajesubanterior` int(11) NOT NULL AUTO_INCREMENT,
  `cd_evaluacion` int(11) DEFAULT NULL,
  `cd_modeloplanilla` int(11) DEFAULT NULL,
  `cd_subanteriormaximo` int(11) DEFAULT NULL,
  `nu_puntaje` float DEFAULT NULL,
  PRIMARY KEY (`cd_puntajesubanterior`),
  KEY `cd_evaluacion` (`cd_evaluacion`,`cd_modeloplanilla`,`cd_subanteriormaximo`),
  KEY `FK_puntajesubanterior_modeloplanillajovenes` (`cd_modeloplanilla`),
  KEY `FK_puntajesubanterior_subanteriormaximo` (`cd_subanteriormaximo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=782 ;

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `puntajesubanterior`
--
ALTER TABLE `puntajesubanterior`
  ADD CONSTRAINT `FK_puntajesubanterior_subanteriormaximo` FOREIGN KEY (`cd_subanteriormaximo`) REFERENCES `subanteriormaximo` (`cd_subanteriormaximo`),
  ADD CONSTRAINT `FK_puntajesubanterior_evaluacionjovenes` FOREIGN KEY (`cd_evaluacion`) REFERENCES `evaluacionjovenes` (`cd_evaluacion`),
  ADD CONSTRAINT `FK_puntajesubanterior_modeloplanillajovenes` FOREIGN KEY (`cd_modeloplanilla`) REFERENCES `modeloplanillajovenes` (`cd_modeloplanilla`);


INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`) VALUES (NULL, 'F', '15');

INSERT INTO antjustificacionmaximo VALUES (7, NULL, 2, 0, 55, 0, 15);

#######################################################07/09/2018########################################################################3
INSERT INTO `unidadaprobada` (`cd_unidad`, `cd_periodo`) VALUES
(1874, 9),
(1899, 9),
(5380, 9),
(5381, 9),
(5383, 9),
(5415, 9),
(5416, 9),
(5419, 9),
(5420, 9),
(5421, 9),
(5422, 9),
(5423, 9),
(5424, 9),
(5425, 9),
(5426, 9),
(5738, 9),
(5739, 9),
(6292, 9),
(6302, 9),
(6303, 9),
(6325, 9),
(6995, 9),
(7790, 9),
(7835, 9),
(8017, 9),
(8378, 9),
(10311, 9),
(11097, 9),
(11992, 9),
(12366, 9),
(12706, 9),
(12928, 9),
(12992, 9),
(13029, 9),
(13074, 9),
(13078, 9),
(13086, 9),
(13160, 9),
(13170, 9),
(13177, 9),
(13209, 9),
(13865, 9),
(13942, 9),
(14050, 9),
(14102, 9),
(14122, 9),
(14330, 9),
(14536, 9),
(20009, 9),
(20010, 9),
(20012, 9),
(20013, 9),
(20260, 9),
(20408, 9),
(20461, 9),
(21075, 9),
(21076, 9),
(21594, 9),
(22104, 9),
(22126, 9),
(22246, 9),
(22262, 9),
(22347, 9),
(22514, 9),
(22515, 9),
(22516, 9),
(22518, 9),
(22519, 9),
(110129, 9),
(110130, 9),
(110131, 9),
(110332, 9),
(110334, 9),
(110505, 9),
(110524, 9),
(110525, 9),
(110526, 9),
(110603, 9),
(110620, 9),
(110621, 9),
(110633, 9),
(110634, 9),
(110635, 9),
(110636, 9),
(111012, 9),
(111027, 9),
(111108, 9),
(111120, 9),
(111122, 9),
(111123, 9),
(111124, 9),
(111126, 9),
(111128, 9),
(111130, 9),
(111131, 9),
(111228, 9),
(111233, 9),
(111234, 9),
(111236, 9),
(111237, 9),
(111238, 9),
(111324, 9),
(111414, 9),
(111415, 9),
(111611, 9),
(111712, 9),
(111720, 9),
(111827, 9),
(111839, 9),
(111849, 9),
(111850, 9),
(111851, 9),
(111852, 9),
(111853, 9),
(111862, 9),
(900003, 9),
(900007, 9),
(900008, 9),
(900009, 9),
(900010, 9),
(900011, 9),
(900012, 9),
(900013, 9),
(900014, 9),
(900015, 9),
(900016, 9),
(900017, 9),
(900018, 9),
(900019, 9),
(900020, 9),
(900021, 9),
(900022, 9),
(900023, 9),
(900024, 9),
(900025, 9),
(900026, 9),
(900027, 9),
(900028, 9),
(900029, 9),
(900030, 9),
(900031, 9),
(900032, 9),
(900033, 9),
(900034, 9),
(111863, 9),
(900035, 9),
(900036, 9),
(900037, 9),
(900038, 9),
(900039, 9),
(5384, 9),
(5372, 9),
(110335, 9),
(20216, 9),
(900040, 9),
(900041, 9),
(900042, 9),
(900043, 9),
(900044, 9),
(900045, 9),
(900046, 9),
(900047, 9),
(900048, 9),
(900049, 9),
(900050, 9),
(900051, 9),
(9145, 9),
(110716, 9),
(110717, 9),
(900052, 9),
(900053, 9),
(111132, 9),
(111133, 9),
(110544, 9),
(111864, 9);

INSERT INTO modeloplanillajovenes (
cd_modeloplanilla ,
ds_modelo ,
nu_max ,
cd_periodo
)
VALUES (
NULL , 'Planilla', '100', '9'
);

INSERT INTO posgradomaximo VALUES (8, NULL, 1, 31, 5);
INSERT INTO posgradomaximo VALUES (8, NULL, 2, 31, 3);
INSERT INTO posgradomaximo VALUES (8, NULL, 3, 31, 1);
INSERT INTO posgradomaximo VALUES (8, NULL, 4, 31, 0);





INSERT INTO `antacadplanilla` (`cd_antacadplanilla`, `ds_antacadplanilla`, `ds_antacadpdf`) VALUES (NULL, 'Cursos: #puntaje# por c/curso de postgrado de m�s de 25 hs. aprobado.', 'Cursos');

INSERT INTO antacadmaximo VALUES (8, NULL, 1, 3, 31, 3, 12);
INSERT INTO antacadmaximo VALUES (8, NULL, 9, 1, 31, 1, 6);
INSERT INTO antacadmaximo VALUES (8, NULL, 7, 0, 31, 0, 0);
INSERT INTO antacadmaximo VALUES (8, NULL, 4, 2, 31, 2, 2);
INSERT INTO antacadmaximo VALUES (8, NULL, 8, 0, 31, 0, 2);

INSERT INTO cargomaximojovenes VALUES (8, NULL, 1, 8);
INSERT INTO cargomaximojovenes VALUES (8, NULL, 2, 8);
INSERT INTO cargomaximojovenes VALUES (8, NULL, 3, 8);
INSERT INTO cargomaximojovenes VALUES (8, NULL, 4, 8);
INSERT INTO cargomaximojovenes VALUES (8, NULL, 5, 8);
INSERT INTO cargomaximojovenes VALUES (8, NULL, 6, 8);
INSERT INTO cargomaximojovenes VALUES (8, NULL, 7, 6);
INSERT INTO cargomaximojovenes VALUES (8, NULL, 8, 4);
INSERT INTO cargomaximojovenes VALUES (8, NULL, 9, 4);
INSERT INTO cargomaximojovenes VALUES (8, NULL, 10, 2);

INSERT INTO antotrosmaximo VALUES (8, NULL, 7, 0, 49, 0, 2);
INSERT INTO antotrosmaximo VALUES (8, NULL, 8, 3, 48, 3, 0);
INSERT INTO antotrosmaximo VALUES (8, NULL, 9, 2, 48, 2, 0);
INSERT INTO antotrosmaximo VALUES (8, NULL, 10, 1, 48, 1, 0);
INSERT INTO antotrosmaximo VALUES (8, NULL, 11, 1, 48, 1, 0);

INSERT INTO antproduccionmaximo VALUES (8, NULL, 36, 2, 50, 2, 0);
INSERT INTO antproduccionmaximo VALUES (8, NULL, 37, 7, 50, 7, 0);
INSERT INTO antproduccionmaximo VALUES (8, NULL, 38, 12, 50, 12, 0);
INSERT INTO antproduccionmaximo VALUES (8, NULL, 39, 4, 50, 4, 0);

INSERT INTO `subgrupo` (`cd_subgrupo`, `ds_subgrupo`, `ds_pdf`) VALUES (NULL, 'Trabajos publicados en actas de congreso con referato', 'Trabajos publicados en actas de congreso con referato');

INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Trabajo completo', '18');
INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Resumen', '18');

#####################OJO!!! distintos codigos entre producci�n y test ####################################

INSERT INTO antproduccionmaximo VALUES (8, NULL, 51, 2, 51, 2, 0);
INSERT INTO antproduccionmaximo VALUES (8, NULL, 52, 0.5, 51, 0.5, 0);

INSERT INTO antproduccionmaximo VALUES (8, NULL, 42, 20, 52, 20, 0);
INSERT INTO antproduccionmaximo VALUES (8, NULL, 43, 8, 52, 8, 0);
INSERT INTO antproduccionmaximo VALUES (8, NULL, 44, 10, 52, 10, 0);

INSERT INTO antproduccionmaximo VALUES (8, NULL, 14, 10, 53, 10, 40);

INSERT INTO antproduccionmaximo VALUES (8, NULL, 45, 10, 54, 0, 0);
INSERT INTO antproduccionmaximo VALUES (8, NULL, 46, 5, 54, 0, 0);
INSERT INTO antproduccionmaximo VALUES (8, NULL, 47, 3, 54, 0, 15);


SET FOREIGN_KEY_CHECKS=0;
INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Participaci�n de redes tem�ticas o institucionales)', '0');
SET FOREIGN_KEY_CHECKS=1;

INSERT INTO antproduccionmaximo VALUES (8, NULL, 48, 3, 53, 0, 9);
INSERT INTO antproduccionmaximo VALUES (8, NULL, 53, 0, 53, 0, 1);

INSERT INTO antproduccionmaximo VALUES (8, NULL, 50, 2, 53, 2, 2);



INSERT INTO subanteriormaximo VALUES (8, NULL, 1, 2, 53, 2, 2);



INSERT INTO antjustificacionmaximo VALUES (8, NULL, 2, 0, 55, 0, 15);


#######################################################20/08/2019########################################################################

CREATE TABLE `predefinidoevaluacion` (
	`cd_predefinido` INT(11) NOT NULL AUTO_INCREMENT,
	`ds_predefinido` VARCHAR(30) NOT NULL,
	PRIMARY KEY (`cd_predefinido`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;


INSERT INTO `predefinidoevaluacion` (`ds_predefinido`) VALUES ('Faltan evaluadores');
INSERT INTO `predefinidoevaluacion` (`ds_predefinido`) VALUES ('Sin actualizar puntaje');


INSERT INTO `unidadaprobada` (`cd_unidad`, `cd_periodo`) VALUES
(1874, 10),
(1899, 10),
(5380, 10),
(5381, 10),
(5383, 10),
(5415, 10),
(5416, 10),
(5419, 10),
(5420, 10),
(5421, 10),
(5422, 10),
(5423, 10),
(5424, 10),
(5425, 10),
(5426, 10),
(5738, 10),
(5739, 10),
(6292, 10),
(6302, 10),
(6303, 10),
(6325, 10),
(6995, 10),
(7790, 10),
(7835, 10),
(8017, 10),
(8378, 10),
(10311, 10),
(11097, 10),
(11992, 10),
(12366, 10),
(12706, 10),
(12928, 10),
(12992, 10),
(13029, 10),
(13074, 10),
(13078, 10),
(13086, 10),
(13160, 10),
(13170, 10),
(13177, 10),
(13209, 10),
(13865, 10),
(13942, 10),
(14050, 10),
(14102, 10),
(14122, 10),
(14330, 10),
(14536, 10),
(20009, 10),
(20010, 10),
(20012, 10),
(20013, 10),
(20260, 10),
(20408, 10),
(20461, 10),
(21075, 10),
(21076, 10),
(21594, 10),
(22104, 10),
(22126, 10),
(22246, 10),
(22262, 10),
(22347, 10),
(22514, 10),
(22515, 10),
(22516, 10),
(22518, 10),
(22519, 10),
(110129, 10),
(110130, 10),
(110131, 10),
(110332, 10),
(110334, 10),
(110505, 10),
(110524, 10),
(110525, 10),
(110526, 10),
(110603, 10),
(110620, 10),
(110621, 10),
(110633, 10),
(110634, 10),
(110635, 10),
(110636, 10),
(111012, 10),
(111027, 10),
(111108, 10),
(111120, 10),
(111122, 10),
(111123, 10),
(111124, 10),
(111126, 10),
(111128, 10),
(111130, 10),
(111131, 10),
(111228, 10),
(111233, 10),
(111234, 10),
(111236, 10),
(111237, 10),
(111238, 10),
(111324, 10),
(111414, 10),
(111415, 10),
(111611, 10),
(111712, 10),
(111720, 10),
(111827, 10),
(111839, 10),
(111849, 10),
(111850, 10),
(111851, 10),
(111852, 10),
(111853, 10),
(111862, 10),
(900003, 10),
(900007, 10),
(900008, 10),
(900009, 10),
(900010, 10),
(900011, 10),
(900012, 10),
(900013, 10),
(900014, 10),
(900015, 10),
(900016, 10),
(900017, 10),
(900018, 10),
(900019, 10),
(900020, 10),
(900021, 10),
(900022, 10),
(900023, 10),
(900024, 10),
(900025, 10),
(900026, 10),
(900027, 10),
(900028, 10),
(900029, 10),
(900030, 10),
(900031, 10),
(900032, 10),
(900033, 10),
(900034, 10),
(111863, 10),
(900035, 10),
(900036, 10),
(900037, 10),
(900038, 10),
(900039, 10),
(5384, 10),
(5372, 10),
(110335, 10),
(20216, 10),
(900040, 10),
(900041, 10),
(900042, 10),
(900043, 10),
(900044, 10),
(900045, 10),
(900046, 10),
(900047, 10),
(900048, 10),
(900049, 10),
(900050, 10),
(900051, 10),
(9145, 10),
(110716, 10),
(110717, 10),
(900052, 10),
(900053, 10),
(111132, 10),
(111133, 10),
(110544, 10),
(111240, 10),
(111134, 10),
(111864, 10),
(900054, 10);



INSERT INTO modeloplanillajovenes (
cd_modeloplanilla ,
ds_modelo ,
nu_max ,
cd_periodo
)
VALUES (
NULL , 'Planilla', '100', '10'
);

INSERT INTO posgradomaximo VALUES (9, NULL, 1, 31, 5);
INSERT INTO posgradomaximo VALUES (9, NULL, 2, 31, 3);
INSERT INTO posgradomaximo VALUES (9, NULL, 3, 31, 1);
INSERT INTO posgradomaximo VALUES (9, NULL, 4, 31, 0);



INSERT INTO antacadmaximo VALUES (9, NULL, 1, 3, 31, 3, 12);
INSERT INTO antacadmaximo VALUES (9, NULL, 9, 1, 31, 1, 6);
INSERT INTO antacadmaximo VALUES (9, NULL, 7, 0, 31, 0, 0);
INSERT INTO antacadmaximo VALUES (9, NULL, 4, 2, 31, 2, 2);
INSERT INTO antacadmaximo VALUES (9, NULL, 8, 0, 31, 0, 2);

INSERT INTO cargomaximojovenes VALUES (9, NULL, 1, 8);
INSERT INTO cargomaximojovenes VALUES (9, NULL, 2, 8);
INSERT INTO cargomaximojovenes VALUES (9, NULL, 3, 8);
INSERT INTO cargomaximojovenes VALUES (9, NULL, 4, 8);
INSERT INTO cargomaximojovenes VALUES (9, NULL, 5, 8);
INSERT INTO cargomaximojovenes VALUES (9, NULL, 6, 8);
INSERT INTO cargomaximojovenes VALUES (9, NULL, 7, 6);
INSERT INTO cargomaximojovenes VALUES (9, NULL, 8, 4);
INSERT INTO cargomaximojovenes VALUES (9, NULL, 9, 4);
INSERT INTO cargomaximojovenes VALUES (9, NULL, 10, 2);

INSERT INTO antotrosmaximo VALUES (9, NULL, 7, 0, 49, 0, 2);
INSERT INTO antotrosmaximo VALUES (9, NULL, 8, 3, 48, 3, 0);
INSERT INTO antotrosmaximo VALUES (9, NULL, 9, 2, 48, 2, 0);
INSERT INTO antotrosmaximo VALUES (9, NULL, 10, 1, 48, 1, 0);
INSERT INTO antotrosmaximo VALUES (9, NULL, 11, 1, 48, 1, 0);

INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`) VALUES (NULL, 'D', '45');

INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'D1', '15', '80');
INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'D2', '20', '80');
INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'D3', '40', '80');
INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'Sin Puntaje D', '0', '80');
INSERT INTO `puntajegrupo` (`cd_puntajegrupo`, `ds_puntajegrupo`, `nu_max`, cd_grupopadre) VALUES (NULL, 'D5', '40', '80');

INSERT INTO antproduccionmaximo VALUES (9, NULL, 36, 2, 81, 2, 0);
INSERT INTO antproduccionmaximo VALUES (9, NULL, 37, 7, 81, 7, 0);
INSERT INTO antproduccionmaximo VALUES (9, NULL, 38, 12, 81, 12, 0);
INSERT INTO antproduccionmaximo VALUES (9, NULL, 39, 2, 81, 2, 0);

INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Artículo completo - Artículo breve', '18');


#####################OJO!!! distintos codigos entre producci�n y test ####################################

INSERT INTO antproduccionmaximo VALUES (9, NULL, 54, 2, 82, 2, 0);
INSERT INTO antproduccionmaximo VALUES (9, NULL, 52, 0.5, 82, 0.5, 0);

INSERT INTO antproduccionmaximo VALUES (9, NULL, 42, 20, 83, 20, 0);
INSERT INTO antproduccionmaximo VALUES (9, NULL, 43, 8, 83, 8, 0);
INSERT INTO antproduccionmaximo VALUES (9, NULL, 44, 10, 83, 10, 0);

INSERT INTO antproduccionmaximo VALUES (9, NULL, 14, 10, 84, 10, 40);

INSERT INTO `subgrupo` (ds_subgrupo, ds_pdf) VALUES ('Desarrollos tecnológicos, organizacionales y socio-comunitarios','Desarrollos tecnológicos, organizacionales y socio-comunitarios');


INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Patentes registradas', '20');

INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Otras producciones tecnológicas con título de propiedad intelectual (Modelo de utilidad -Derecho de obtentor (Variedades vegetales) -Derechos de autor de software, multimedia y páginas web -Modelo o diseño industrial -Esquemas de circuitos integrados -Marca de servicio o producto -Derechos de autor en obras inéditas y publicadas)', '20');

INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Servicios científicos tecnológicos e informes técnicos', '20');

INSERT INTO antproduccionmaximo VALUES (9, NULL, 55, 10, 85, 0, 0);
INSERT INTO antproduccionmaximo VALUES (9, NULL, 56, 5, 85, 0, 0);
INSERT INTO antproduccionmaximo VALUES (9, NULL, 57, 3, 85, 0, 15);

INSERT INTO `subgrupo` (ds_subgrupo, ds_pdf) VALUES ('Otros antecedentes','Otros antecedentes');

INSERT INTO antproduccionplanilla (`cd_antproduccionplanilla`, `ds_antproduccionplanilla`, `cd_subgrupo`) VALUES (NULL, 'Participación de redes temáticas o institucionales', '19');


INSERT INTO antproduccionmaximo VALUES (9, NULL, 48, 3, 84, 0, 9);
INSERT INTO antproduccionmaximo VALUES (9, NULL, 58, 0, 84, 0, 1);

INSERT INTO antproduccionmaximo VALUES (9, NULL, 50, 2, 84, 2, 2);



INSERT INTO subanteriormaximo VALUES (9, NULL, 1, 5, 84, 5, 5);



INSERT INTO antjustificacionmaximo VALUES (9, NULL, 2, 0, 55, 0, 15);


#######################################################11/05/2021########################################################################
INSERT INTO `unidadaprobada` (`cd_unidad`, `cd_periodo`) VALUES
(1874, 12),
(1899, 12),
(5380, 12),
(5381, 12),
(5383, 12),
(5415, 12),
(5416, 12),
(5419, 12),
(5420, 12),
(5421, 12),
(5422, 12),
(5423, 12),
(5424, 12),
(5425, 12),
(5426, 12),
(5738, 12),
(5739, 12),
(6292, 12),
(6302, 12),
(6303, 12),
(6325, 12),
(6995, 12),
(7790, 12),
(7835, 12),
(8017, 12),
(8378, 12),
(10311, 12),
(11097, 12),
(11992, 12),
(12366, 12),
(12706, 12),
(12928, 12),
(12992, 12),
(13029, 12),
(13074, 12),
(13078, 12),
(13086, 12),
(13160, 12),
(13170, 12),
(13177, 12),
(13209, 12),
(13865, 12),
(13942, 12),
(14050, 12),
(14102, 12),
(14122, 12),
(14330, 12),
(14536, 12),
(20009, 12),
(20010, 12),
(20012, 12),
(20013, 12),
(20260, 12),
(20408, 12),
(20461, 12),
(21075, 12),
(21076, 12),
(21594, 12),
(22104, 12),
(22126, 12),
(22246, 12),
(22262, 12),
(22347, 12),
(22514, 12),
(22515, 12),
(22516, 12),
(22518, 12),
(22519, 12),
(110129, 12),
(110130, 12),
(110131, 12),
(110332, 12),
(110334, 12),
(110505, 12),
(110524, 12),
(110525, 12),
(110526, 12),
(110603, 12),
(110620, 12),
(110621, 12),
(110633, 12),
(110634, 12),
(110635, 12),
(110636, 12),
(111012, 12),
(111027, 12),
(111108, 12),
(111120, 12),
(111122, 12),
(111123, 12),
(111124, 12),
(111126, 12),
(111128, 12),
(111130, 12),
(111131, 12),
(111228, 12),
(111233, 12),
(111234, 12),
(111236, 12),
(111237, 12),
(111238, 12),
(111324, 12),
(111414, 12),
(111415, 12),
(111611, 12),
(111712, 12),
(111720, 12),
(111827, 12),
(111839, 12),
(111849, 12),
(111850, 12),
(111851, 12),
(111852, 12),
(111853, 12),
(111862, 12),
(900003, 12),
(900007, 12),
(900008, 12),
(900009, 12),
(900010, 12),
(900011, 12),
(900012, 12),
(900013, 12),
(900014, 12),
(900015, 12),
(900016, 12),
(900017, 12),
(900018, 12),
(900019, 12),
(900020, 12),
(900021, 12),
(900022, 12),
(900023, 12),
(900024, 12),
(900025, 12),
(900026, 12),
(900027, 12),
(900028, 12),
(900029, 12),
(900030, 12),
(900031, 12),
(900032, 12),
(900033, 12),
(900034, 12),
(111863, 12),
(900035, 12),
(900036, 12),
(900037, 12),
(900038, 12),
(900039, 12),
(5384, 12),
(5372, 12),
(110335, 12),
(20216, 12),
(900040, 12),
(900041, 12),
(900042, 12),
(900043, 12),
(900044, 12),
(900045, 12),
(900046, 12),
(900047, 12),
(900048, 12),
(900049, 12),
(900050, 12),
(900051, 12),
(9145, 12),
(110716, 12),
(110717, 12),
(900052, 12),
(900053, 12),
(111132, 12),
(111133, 12),
(110544, 12),
(111240, 12),
(111134, 12),
(111864, 12),
(900054, 12),
(900055, 12),
(900056, 12),
(900057, 12),
(900058, 12),
(900059, 12),
(900060, 12),
(900061, 12),
(900062, 12),
(5378, 12),
(5382, 12),
(900066, 12),
(900067, 12);


INSERT INTO modeloplanillajovenes (
cd_modeloplanilla ,
ds_modelo ,
nu_max ,
cd_periodo
)
VALUES (
NULL , 'Planilla', '100', '12'
);

INSERT INTO posgradomaximo VALUES (10, NULL, 1, 31, 5);
INSERT INTO posgradomaximo VALUES (10, NULL, 2, 31, 3);
INSERT INTO posgradomaximo VALUES (10, NULL, 3, 31, 1);
INSERT INTO posgradomaximo VALUES (10, NULL, 4, 31, 0);



INSERT INTO antacadmaximo VALUES (10, NULL, 1, 3, 31, 3, 12);
INSERT INTO antacadmaximo VALUES (10, NULL, 9, 1, 31, 1, 6);
INSERT INTO antacadmaximo VALUES (10, NULL, 7, 0, 31, 0, 0);
INSERT INTO antacadmaximo VALUES (10, NULL, 4, 2, 31, 2, 2);
INSERT INTO antacadmaximo VALUES (10, NULL, 8, 0, 31, 0, 2);

INSERT INTO cargomaximojovenes VALUES (10, NULL, 1, 8);
INSERT INTO cargomaximojovenes VALUES (10, NULL, 2, 8);
INSERT INTO cargomaximojovenes VALUES (10, NULL, 3, 8);
INSERT INTO cargomaximojovenes VALUES (10, NULL, 4, 8);
INSERT INTO cargomaximojovenes VALUES (10, NULL, 5, 8);
INSERT INTO cargomaximojovenes VALUES (10, NULL, 6, 8);
INSERT INTO cargomaximojovenes VALUES (10, NULL, 7, 6);
INSERT INTO cargomaximojovenes VALUES (10, NULL, 8, 4);
INSERT INTO cargomaximojovenes VALUES (10, NULL, 9, 4);
INSERT INTO cargomaximojovenes VALUES (10, NULL, 10, 2);

INSERT INTO antotrosmaximo VALUES (10, NULL, 7, 0, 49, 0, 2);
INSERT INTO antotrosmaximo VALUES (10, NULL, 8, 3, 48, 3, 0);
INSERT INTO antotrosmaximo VALUES (10, NULL, 9, 2, 48, 2, 0);
INSERT INTO antotrosmaximo VALUES (10, NULL, 10, 1, 48, 1, 0);
INSERT INTO antotrosmaximo VALUES (10, NULL, 11, 1, 48, 1, 0);



INSERT INTO antproduccionmaximo VALUES (10, NULL, 36, 2, 81, 2, 0);
INSERT INTO antproduccionmaximo VALUES (10, NULL, 37, 7, 81, 7, 0);
INSERT INTO antproduccionmaximo VALUES (10, NULL, 38, 12, 81, 12, 0);
INSERT INTO antproduccionmaximo VALUES (10, NULL, 39, 2, 81, 2, 0);



INSERT INTO antproduccionmaximo VALUES (10, NULL, 54, 2, 82, 2, 0);
INSERT INTO antproduccionmaximo VALUES (10, NULL, 52, 0.5, 82, 0.5, 0);

INSERT INTO antproduccionmaximo VALUES (10, NULL, 42, 20, 83, 20, 0);
INSERT INTO antproduccionmaximo VALUES (10, NULL, 43, 8, 83, 8, 0);
INSERT INTO antproduccionmaximo VALUES (10, NULL, 44, 10, 83, 10, 0);

INSERT INTO antproduccionmaximo VALUES (10, NULL, 14, 10, 84, 10, 40);



INSERT INTO antproduccionmaximo VALUES (10, NULL, 55, 10, 85, 0, 0);
INSERT INTO antproduccionmaximo VALUES (10, NULL, 56, 5, 85, 0, 0);
INSERT INTO antproduccionmaximo VALUES (10, NULL, 57, 3, 85, 0, 15);



INSERT INTO antproduccionmaximo VALUES (10, NULL, 48, 3, 84, 0, 9);
INSERT INTO antproduccionmaximo VALUES (10, NULL, 58, 0, 84, 0, 1);

INSERT INTO antproduccionmaximo VALUES (10, NULL, 50, 2, 84, 2, 2);



INSERT INTO subanteriormaximo VALUES (10, NULL, 1, 5, 84, 5, 5);



INSERT INTO antjustificacionmaximo VALUES (10, NULL, 2, 0, 55, 0, 15);

#######################################################20/09/2022########################################################################
INSERT INTO `unidadaprobada` (`cd_unidad`, `cd_periodo`) VALUES
(1874, 13),
(1899, 13),
(5380, 13),
(5381, 13),
(5383, 13),
(5415, 13),
(5416, 13),
(5419, 13),
(5420, 13),
(5421, 13),
(5422, 13),
(5423, 13),
(5424, 13),
(5425, 13),
(5426, 13),
(5738, 13),
(5739, 13),
(6292, 13),
(6302, 13),
(6303, 13),
(6325, 13),
(6995, 13),
(7790, 13),
(7835, 13),
(8017, 13),
(8378, 13),
(10311, 13),
(11097, 13),
(11992, 13),
(12366, 13),
(12706, 13),
(12928, 13),
(12992, 13),
(13029, 13),
(13074, 13),
(13078, 13),
(13086, 13),
(13160, 13),
(13170, 13),
(13177, 13),
(13209, 13),
(13865, 13),
(13942, 13),
(14050, 13),
(14102, 13),
(14122, 13),
(14330, 13),
(14536, 13),
(20009, 13),
(20010, 13),
(20012, 13),
(20013, 13),
(20260, 13),
(20408, 13),
(20461, 13),
(21075, 13),
(21076, 13),
(21594, 13),
(22104, 13),
(22126, 13),
(22246, 13),
(22262, 13),
(22347, 13),
(22514, 13),
(22515, 13),
(22516, 13),
(22518, 13),
(22519, 13),
(110129, 13),
(110130, 13),
(110131, 13),
(110332, 13),
(110334, 13),
(110505, 13),
(110524, 13),
(110525, 13),
(110526, 13),
(110603, 13),
(110620, 13),
(110621, 13),
(110633, 13),
(110634, 13),
(110635, 13),
(110636, 13),
(111012, 13),
(111027, 13),
(111108, 13),
(111120, 13),
(111122, 13),
(111123, 13),
(111124, 13),
(111126, 13),
(111128, 13),
(111130, 13),
(111131, 13),
(111228, 13),
(111233, 13),
(111234, 13),
(111236, 13),
(111237, 13),
(111238, 13),
(111324, 13),
(111414, 13),
(111415, 13),
(111611, 13),
(111712, 13),
(111720, 13),
(111827, 13),
(111839, 13),
(111849, 13),
(111850, 13),
(111851, 13),
(111852, 13),
(111853, 13),
(111862, 13),
(900003, 13),
(900007, 13),
(900008, 13),
(900009, 13),
(900010, 13),
(900011, 13),
(900012, 13),
(900013, 13),
(900014, 13),
(900015, 13),
(900016, 13),
(900017, 13),
(900018, 13),
(900019, 13),
(900020, 13),
(900021, 13),
(900022, 13),
(900023, 13),
(900024, 13),
(900025, 13),
(900026, 13),
(900027, 13),
(900028, 13),
(900029, 13),
(900030, 13),
(900031, 13),
(900032, 13),
(900033, 13),
(900034, 13),
(111863, 13),
(900035, 13),
(900036, 13),
(900037, 13),
(900038, 13),
(900039, 13),
(5384, 13),
(5372, 13),
(110335, 13),
(20216, 13),
(900040, 13),
(900041, 13),
(900042, 13),
(900043, 13),
(900044, 13),
(900045, 13),
(900046, 13),
(900047, 13),
(900048, 13),
(900049, 13),
(900050, 13),
(900051, 13),
(9145, 13),
(110716, 13),
(110717, 13),
(900052, 13),
(900053, 13),
(111132, 13),
(111133, 13),
(110544, 13),
(111240, 13),
(111134, 13),
(111864, 13),
(900054, 13),
(900055, 13),
(900056, 13),
(900057, 13),
(900058, 13),
(900059, 13),
(900060, 13),
(900061, 13),
(900062, 13),
(5378, 13),
(5382, 13),
(900066, 13),
(900067, 13);

INSERT INTO modeloplanillajovenes (
cd_modeloplanilla ,
ds_modelo ,
nu_max ,
cd_periodo
)
VALUES (
NULL , 'Planilla', '100', '13'
);

INSERT INTO posgradomaximo VALUES (11, NULL, 1, 31, 5);
INSERT INTO posgradomaximo VALUES (11, NULL, 2, 31, 3);
INSERT INTO posgradomaximo VALUES (11, NULL, 3, 31, 1);
INSERT INTO posgradomaximo VALUES (11, NULL, 4, 31, 0);



INSERT INTO antacadmaximo VALUES (11, NULL, 1, 3, 31, 3, 12);
INSERT INTO antacadmaximo VALUES (11, NULL, 9, 1, 31, 1, 6);
INSERT INTO antacadmaximo VALUES (11, NULL, 7, 0, 31, 0, 0);
INSERT INTO antacadmaximo VALUES (11, NULL, 4, 2, 31, 2, 2);
INSERT INTO antacadmaximo VALUES (11, NULL, 8, 0, 31, 0, 2);

INSERT INTO cargomaximojovenes VALUES (11, NULL, 1, 8);
INSERT INTO cargomaximojovenes VALUES (11, NULL, 2, 8);
INSERT INTO cargomaximojovenes VALUES (11, NULL, 3, 8);
INSERT INTO cargomaximojovenes VALUES (11, NULL, 4, 8);
INSERT INTO cargomaximojovenes VALUES (11, NULL, 5, 8);
INSERT INTO cargomaximojovenes VALUES (11, NULL, 6, 8);
INSERT INTO cargomaximojovenes VALUES (11, NULL, 7, 6);
INSERT INTO cargomaximojovenes VALUES (11, NULL, 8, 4);
INSERT INTO cargomaximojovenes VALUES (11, NULL, 9, 4);
INSERT INTO cargomaximojovenes VALUES (11, NULL, 10, 2);

INSERT INTO antotrosmaximo VALUES (11, NULL, 7, 0, 49, 0, 2);
INSERT INTO antotrosmaximo VALUES (11, NULL, 8, 3, 48, 3, 0);
INSERT INTO antotrosmaximo VALUES (11, NULL, 9, 2, 48, 2, 0);
INSERT INTO antotrosmaximo VALUES (11, NULL, 10, 1, 48, 1, 0);
INSERT INTO antotrosmaximo VALUES (11, NULL, 11, 1, 48, 1, 0);



INSERT INTO antproduccionmaximo VALUES (11, NULL, 36, 2, 81, 2, 0);
INSERT INTO antproduccionmaximo VALUES (11, NULL, 37, 7, 81, 7, 0);
INSERT INTO antproduccionmaximo VALUES (11, NULL, 38, 12, 81, 12, 0);
INSERT INTO antproduccionmaximo VALUES (11, NULL, 39, 2, 81, 2, 0);



INSERT INTO antproduccionmaximo VALUES (11, NULL, 54, 2, 82, 2, 0);
INSERT INTO antproduccionmaximo VALUES (11, NULL, 52, 0.5, 82, 0.5, 0);

INSERT INTO antproduccionmaximo VALUES (11, NULL, 42, 20, 83, 20, 0);
INSERT INTO antproduccionmaximo VALUES (11, NULL, 43, 8, 83, 8, 0);
INSERT INTO antproduccionmaximo VALUES (11, NULL, 44, 10, 83, 10, 0);

INSERT INTO antproduccionmaximo VALUES (11, NULL, 14, 10, 84, 10, 40);



INSERT INTO antproduccionmaximo VALUES (11, NULL, 55, 10, 85, 0, 0);
INSERT INTO antproduccionmaximo VALUES (11, NULL, 56, 5, 85, 0, 0);
INSERT INTO antproduccionmaximo VALUES (11, NULL, 57, 3, 85, 0, 15);



INSERT INTO antproduccionmaximo VALUES (11, NULL, 48, 3, 84, 0, 9);
INSERT INTO antproduccionmaximo VALUES (11, NULL, 58, 0, 84, 0, 1);

INSERT INTO antproduccionmaximo VALUES (11, NULL, 50, 2, 84, 2, 2);



INSERT INTO subanteriormaximo VALUES (11, NULL, 1, 5, 84, 5, 5);



INSERT INTO antjustificacionmaximo VALUES (11, NULL, 2, 0, 55, 0, 15);

#######################################################05/05/2023########################################################################
INSERT INTO `unidadaprobada` (`cd_unidad`, `cd_periodo`) VALUES
(1874, 14),
(1899, 14),
(5380, 14),
(5381, 14),
(5383, 14),
(5415, 14),
(5416, 14),
(5419, 14),
(5420, 14),
(5421, 14),
(5422, 14),
(5423, 14),
(5424, 14),
(5425, 14),
(5426, 14),
(5738, 14),
(5739, 14),
(6292, 14),
(6302, 14),
(6303, 14),
(6325, 14),
(6995, 14),
(7790, 14),
(7835, 14),
(8017, 14),
(8378, 14),
(10311, 14),
(11097, 14),
(11992, 14),
(12366, 14),
(12706, 14),
(12928, 14),
(12992, 14),
(13029, 14),
(13074, 14),
(13078, 14),
(13086, 14),
(13160, 14),
(13170, 14),
(13177, 14),
(13209, 14),
(13865, 14),
(13942, 14),
(14050, 14),
(14102, 14),
(14122, 14),
(14330, 14),
(14536, 14),
(20009, 14),
(20010, 14),
(20012, 14),
(20013, 14),
(20260, 14),
(20408, 14),
(20461, 14),
(21075, 14),
(21076, 14),
(21594, 14),
(22104, 14),
(22126, 14),
(22246, 14),
(22262, 14),
(22347, 14),
(22514, 14),
(22515, 14),
(22516, 14),
(22518, 14),
(22519, 14),
(110129, 14),
(110130, 14),
(110131, 14),
(110332, 14),
(110334, 14),
(110505, 14),
(110524, 14),
(110525, 14),
(110526, 14),
(110603, 14),
(110620, 14),
(110621, 14),
(110633, 14),
(110634, 14),
(110635, 14),
(110636, 14),
(111012, 14),
(111027, 14),
(111108, 14),
(111120, 14),
(111122, 14),
(111123, 14),
(111124, 14),
(111126, 14),
(111128, 14),
(111130, 14),
(111131, 14),
(111228, 14),
(111233, 14),
(111234, 14),
(111236, 14),
(111237, 14),
(111238, 14),
(111324, 14),
(111414, 14),
(111415, 14),
(111611, 14),
(111712, 14),
(111720, 14),
(111827, 14),
(111839, 14),
(111849, 14),
(111850, 14),
(111851, 14),
(111852, 14),
(111853, 14),
(111862, 14),
(900003, 14),
(900007, 14),
(900008, 14),
(900009, 14),
(900010, 14),
(900011, 14),
(900012, 14),
(900013, 14),
(900014, 14),
(900015, 14),
(900016, 14),
(900017, 14),
(900018, 14),
(900019, 14),
(900020, 14),
(900021, 14),
(900022, 14),
(900023, 14),
(900024, 14),
(900025, 14),
(900026, 14),
(900027, 14),
(900028, 14),
(900029, 14),
(900030, 14),
(900031, 14),
(900032, 14),
(900033, 14),
(900034, 14),
(111863, 14),
(900035, 14),
(900036, 14),
(900037, 14),
(900038, 14),
(900039, 14),
(5384, 14),
(5372, 14),
(110335, 14),
(20216, 14),
(900040, 14),
(900041, 14),
(900042, 14),
(900043, 14),
(900044, 14),
(900045, 14),
(900046, 14),
(900047, 14),
(900048, 14),
(900049, 14),
(900050, 14),
(900051, 14),
(9145, 14),
(110716, 14),
(110717, 14),
(900052, 14),
(900053, 14),
(111132, 14),
(111133, 14),
(110544, 14),
(111240, 14),
(111134, 14),
(111864, 14),
(900054, 14),
(900055, 14),
(900056, 14),
(900057, 14),
(900058, 14),
(900059, 14),
(900060, 14),
(900061, 14),
(900062, 14),
(5378, 14),
(5382, 14),
(900066, 14),
(900067, 14),
    (900068, 14);

#######################################################15/05/2023########################################################################
INSERT INTO modeloplanillajovenes (
    cd_modeloplanilla ,
    ds_modelo ,
    nu_max ,
    cd_periodo
)
VALUES (
           NULL , 'Planilla', '100', '14'
       );

INSERT INTO posgradomaximo VALUES (12, NULL, 1, 31, 5);
INSERT INTO posgradomaximo VALUES (12, NULL, 2, 31, 3);
INSERT INTO posgradomaximo VALUES (12, NULL, 3, 31, 1);
INSERT INTO posgradomaximo VALUES (12, NULL, 4, 31, 0);



INSERT INTO antacadmaximo VALUES (12, NULL, 1, 3, 31, 3, 12);
INSERT INTO antacadmaximo VALUES (12, NULL, 9, 1, 31, 1, 6);
INSERT INTO antacadmaximo VALUES (12, NULL, 7, 0, 31, 0, 0);
INSERT INTO antacadmaximo VALUES (12, NULL, 4, 2, 31, 2, 2);
INSERT INTO antacadmaximo VALUES (12, NULL, 8, 0, 31, 0, 2);

INSERT INTO cargomaximojovenes VALUES (12, NULL, 1, 8);
INSERT INTO cargomaximojovenes VALUES (12, NULL, 2, 8);
INSERT INTO cargomaximojovenes VALUES (12, NULL, 3, 8);
INSERT INTO cargomaximojovenes VALUES (12, NULL, 4, 8);
INSERT INTO cargomaximojovenes VALUES (12, NULL, 5, 8);
INSERT INTO cargomaximojovenes VALUES (12, NULL, 6, 8);
INSERT INTO cargomaximojovenes VALUES (12, NULL, 7, 6);
INSERT INTO cargomaximojovenes VALUES (12, NULL, 8, 4);
INSERT INTO cargomaximojovenes VALUES (12, NULL, 9, 4);
INSERT INTO cargomaximojovenes VALUES (12, NULL, 10, 2);

INSERT INTO antotrosmaximo VALUES (12, NULL, 7, 0, 49, 0, 2);
INSERT INTO antotrosmaximo VALUES (12, NULL, 8, 3, 48, 3, 0);
INSERT INTO antotrosmaximo VALUES (12, NULL, 9, 2, 48, 2, 0);
INSERT INTO antotrosmaximo VALUES (12, NULL, 10, 1, 48, 1, 0);
INSERT INTO antotrosmaximo VALUES (12, NULL, 11, 1, 48, 1, 0);



INSERT INTO antproduccionmaximo VALUES (12, NULL, 36, 2, 81, 2, 0);
INSERT INTO antproduccionmaximo VALUES (12, NULL, 37, 7, 81, 7, 0);
INSERT INTO antproduccionmaximo VALUES (12, NULL, 38, 12, 81, 12, 0);
INSERT INTO antproduccionmaximo VALUES (12, NULL, 39, 2, 81, 2, 0);



INSERT INTO antproduccionmaximo VALUES (12, NULL, 54, 2, 82, 2, 0);
INSERT INTO antproduccionmaximo VALUES (12, NULL, 52, 0.5, 82, 0.5, 0);

INSERT INTO antproduccionmaximo VALUES (12, NULL, 42, 20, 83, 20, 0);
INSERT INTO antproduccionmaximo VALUES (12, NULL, 43, 8, 83, 8, 0);
INSERT INTO antproduccionmaximo VALUES (12, NULL, 44, 10, 83, 10, 0);

INSERT INTO antproduccionmaximo VALUES (12, NULL, 14, 10, 84, 10, 40);



INSERT INTO antproduccionmaximo VALUES (12, NULL, 55, 10, 85, 0, 0);
INSERT INTO antproduccionmaximo VALUES (12, NULL, 56, 5, 85, 0, 0);
INSERT INTO antproduccionmaximo VALUES (12, NULL, 57, 3, 85, 0, 15);



INSERT INTO antproduccionmaximo VALUES (12, NULL, 48, 3, 84, 0, 9);
INSERT INTO antproduccionmaximo VALUES (12, NULL, 58, 0, 84, 0, 1);

INSERT INTO antproduccionmaximo VALUES (12, NULL, 50, 2, 84, 2, 2);



INSERT INTO subanteriormaximo VALUES (12, NULL, 1, 5, 84, 5, 5);



INSERT INTO antjustificacionmaximo VALUES (12, NULL, 2, 0, 55, 0, 15);