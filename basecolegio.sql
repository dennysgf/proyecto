# Host: localhost  (Version 5.5.5-10.4.27-MariaDB)
# Date: 2023-02-28 23:48:34
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "canton"
#

DROP TABLE IF EXISTS `canton`;
CREATE TABLE `canton` (
  `IdCanton` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCanton` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdCanton`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "canton"
#

INSERT INTO `canton` VALUES (1,'Arenillas'),(2,'Atahualpa'),(3,'Balsas'),(4,'Chilla'),(5,'El guabo'),(6,'Huaquillas'),(7,'Las Lajas'),(8,'Machala'),(9,'Marcabelí'),(10,'Pasaje'),(11,'Piñas'),(12,'Portovelo'),(13,'Santa Rosa'),(14,'Zaruma'),(15,'Otro');

#
# Structure for table "documento"
#

DROP TABLE IF EXISTS `documento`;
CREATE TABLE `documento` (
  `IdDocumento` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`IdDocumento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "documento"
#

INSERT INTO `documento` VALUES (1,'cedula'),(2,'pasaporte'),(3,'carnet de refugiado');

#
# Structure for table "especialidades"
#

DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE `especialidades` (
  `IdEspecialidad` int(11) NOT NULL AUTO_INCREMENT,
  `especialidad` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`IdEspecialidad`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "especialidades"
#

INSERT INTO `especialidades` VALUES (1,'informatica'),(2,'contabilidad'),(3,'mecanica'),(4,'ninguna');

#
# Structure for table "niveles"
#

DROP TABLE IF EXISTS `niveles`;
CREATE TABLE `niveles` (
  `Idnivel` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Idnivel`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "niveles"
#

INSERT INTO `niveles` VALUES (7,'3er. Año de Bachillerato'),(8,'2do. Año de Bachillerato'),(9,'1er. Año de Bachillerato'),(10,'8vo. Año de Básica'),(11,'9no. Año de Básica'),(12,'10mo. Año de Básica'),(14,'B.G.U.');

#
# Structure for table "nocturna"
#

DROP TABLE IF EXISTS `nocturna`;
CREATE TABLE `nocturna` (
  `IdNocturna` int(11) NOT NULL AUTO_INCREMENT,
  `requisitos` text DEFAULT NULL,
  `documento` varchar(35) DEFAULT NULL,
  `cedula` varchar(13) NOT NULL DEFAULT '',
  `nombres_noc` varchar(50) NOT NULL DEFAULT '',
  `fecha` date DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `lugar` varchar(255) DEFAULT '0',
  `genero` varchar(60) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `actividad` varchar(255) DEFAULT NULL,
  `laboral` varchar(35) DEFAULT NULL,
  `nacionalidad` varchar(55) DEFAULT NULL,
  `definicion` varchar(55) DEFAULT NULL,
  `familia` varchar(10) DEFAULT NULL,
  `hijos` text DEFAULT NULL,
  `discapacidad` varchar(3) DEFAULT NULL,
  `tipodisca` varchar(35) DEFAULT '0',
  `porcentaje` varchar(20) DEFAULT '0',
  `bono` varchar(3) DEFAULT '0',
  `celular` varchar(10) DEFAULT '0',
  `convencional` varchar(13) DEFAULT '0',
  `correo` varchar(35) DEFAULT '0',
  `codigo` varchar(55) DEFAULT '0',
  `rezago` text DEFAULT NULL,
  `zona` varchar(55) DEFAULT '0',
  `provincia` varchar(255) DEFAULT NULL,
  `canton` varchar(255) DEFAULT '0',
  `parroquia` varchar(255) DEFAULT '0',
  `sector` varchar(20) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `aprobado` varchar(255) DEFAULT NULL,
  `oferta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdNocturna`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "nocturna"
#

INSERT INTO `nocturna` VALUES (1,'opcion 3','pasaporte','0987987878784','HEYDI NAOMI RAMON CURIPOMA','2023-02-22',15,'MACHALA','Femenino','Casado','Ninguna','Sin empleo','Ecuatoriana','Mestizo','si','Tiene 18 años en adelante','no','0','0','no','0984818919','0','heidy@gmail.com','EXA0987884','3 - 5 años fuera del sistema educativo','7','El Oro','MACHALA','0','urbana','0','10mo. EGB','semipresencial intensiva PCEI');

#
# Structure for table "paralelos"
#

DROP TABLE IF EXISTS `paralelos`;
CREATE TABLE `paralelos` (
  `IdParalelo` int(11) NOT NULL AUTO_INCREMENT,
  `paralelo` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`IdParalelo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "paralelos"
#

INSERT INTO `paralelos` VALUES (1,'A'),(2,'B'),(3,'C'),(4,'D'),(5,'E'),(6,'F'),(7,'G'),(8,'H'),(9,'I'),(10,'J'),(11,'K');

#
# Structure for table "periodos"
#

DROP TABLE IF EXISTS `periodos`;
CREATE TABLE `periodos` (
  `IdPeriodo` int(11) NOT NULL AUTO_INCREMENT,
  `periodo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`IdPeriodo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "periodos"
#

INSERT INTO `periodos` VALUES (1,'2023-2024'),(3,'2022-2023');

#
# Structure for table "provincia"
#

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE `provincia` (
  `IdProvincia` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProvincia` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`IdProvincia`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "provincia"
#

INSERT INTO `provincia` VALUES (1,'Azuay'),(2,'Bolivar'),(3,'Cañar'),(4,'Carchi'),(5,'Chimborazo'),(6,'Cotopaxi'),(7,'El Oro'),(8,'Esmeraldas'),(9,'Galápagos'),(10,'Guayas'),(11,'Imbabura'),(12,'Loja'),(13,'Los Ríos'),(14,'Manabí'),(15,'Morona Santiago'),(16,'Napo'),(17,'Sucumbíos'),(18,'Pastaza'),(19,'Pichincha'),(20,'Santa Elena'),(21,'Santo Domingo'),(22,'Orellana'),(23,'Tungurahua'),(24,'Zamora Chinchipe');

#
# Structure for table "secciones"
#

DROP TABLE IF EXISTS `secciones`;
CREATE TABLE `secciones` (
  `IdSeccion` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`IdSeccion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "secciones"
#

INSERT INTO `secciones` VALUES (1,'Vespertina'),(2,'Matutina'),(3,'nocturna');

#
# Structure for table "telefono"
#

DROP TABLE IF EXISTS `telefono`;
CREATE TABLE `telefono` (
  `IdTelefono` int(11) NOT NULL AUTO_INCREMENT,
  `tipoTelefono` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdTelefono`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "telefono"
#

INSERT INTO `telefono` VALUES (1,'celular'),(2,'convencional');

#
# Structure for table "representante"
#

DROP TABLE IF EXISTS `representante`;
CREATE TABLE `representante` (
  `IdRepresentante` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) DEFAULT NULL,
  `identificacion` varchar(12) NOT NULL DEFAULT '',
  `apellidos` varchar(50) NOT NULL DEFAULT '',
  `nombres` varchar(50) NOT NULL DEFAULT '',
  `nacionalidad` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(50) DEFAULT 'NA',
  `instruccion` varchar(50) NOT NULL DEFAULT '',
  `ocupacion` varchar(50) NOT NULL DEFAULT '',
  `sexo` varchar(20) NOT NULL DEFAULT '',
  `parentezco` varchar(50) NOT NULL DEFAULT '',
  `n_telefono` varchar(12) NOT NULL DEFAULT '',
  `calle_principal` varchar(50) DEFAULT 'NA',
  `calle_secundaria` varchar(50) DEFAULT 'NA',
  `n_casa` int(11) DEFAULT 0,
  `barrio` varchar(50) DEFAULT 'NA',
  `referencia` varchar(255) DEFAULT 'NA',
  `id_provincia` int(11) DEFAULT NULL,
  `id_canton` int(11) DEFAULT NULL,
  `id_telefono` int(11) DEFAULT NULL,
  `parroquia` varchar(50) DEFAULT '0',
  PRIMARY KEY (`IdRepresentante`),
  KEY `id_provinciaFK` (`id_provincia`),
  KEY `id_cantonFK` (`id_canton`),
  KEY `id_telefonoFK` (`id_telefono`),
  KEY `id_documentoFK` (`id_tipo`),
  CONSTRAINT `id_cantonFK` FOREIGN KEY (`id_canton`) REFERENCES `canton` (`IdCanton`) ON UPDATE CASCADE,
  CONSTRAINT `id_documentoFK` FOREIGN KEY (`id_tipo`) REFERENCES `documento` (`IdDocumento`) ON UPDATE CASCADE,
  CONSTRAINT `id_provinciaFK` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`IdProvincia`) ON UPDATE CASCADE,
  CONSTRAINT `id_telefonoFK` FOREIGN KEY (`id_telefono`) REFERENCES `telefono` (`IdTelefono`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "representante"
#

INSERT INTO `representante` VALUES (1,1,'07098712','soto','cristhian','ecuatoriana','NA','secundaria','docente','masculino','padre','0987124','NA','NA',0,'NA','NA',7,8,1,'0'),(2,1,'0705709814','VARELES','JUAN','ecuatoriana','juan@gmail.com','tecnologo','desarrollador de software','masculino','padre','098711','na','na',0,'24 de septiembre','0',7,8,1,'0'),(13,1,'089798','corozo','flabio','ecuatoriana','corozo@gmail.com','tecnologo','desarrollador de software','masculino','padre','09987','0','0',0,'0','0',1,2,1,'0'),(19,2,'0705709814','ramon curipoma','gilda kira','ecuatoriana','gildi@gmail.com','universitario','ingeniera civil','femenino','madre','04504','0','0',0,'0','0',5,1,1,'0'),(20,1,'0705709553','váreles campos','juan ignacio','Ecuatoriana','juan@gmail.com','0','0','masculino','padre','0987413874','0','0',0,'0','0',7,8,1,'0');

#
# Structure for table "estudiante"
#

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE `estudiante` (
  `IdEsudiante` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) DEFAULT NULL,
  `identificacion_e` varchar(12) NOT NULL DEFAULT '',
  `apellido` varchar(50) NOT NULL DEFAULT '',
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `fech_naci` date DEFAULT NULL,
  `edad` int(11) DEFAULT 0,
  `lugar_naci` varchar(50) DEFAULT '0',
  `nacionalidad_e` varchar(40) NOT NULL DEFAULT '',
  `discapacidad` varchar(50) DEFAULT '0',
  `tipo_discap` varchar(50) DEFAULT '0',
  `porcentaje` int(11) DEFAULT 0,
  `email_e` varchar(50) DEFAULT '0',
  `etnia` varchar(50) NOT NULL DEFAULT '',
  `sexo_e` varchar(20) NOT NULL DEFAULT '',
  `n_telefono_e` varchar(12) NOT NULL DEFAULT '',
  `calle_principal_e` varchar(50) DEFAULT NULL,
  `calle_secundaria_e` varchar(50) DEFAULT NULL,
  `n_casa_e` int(11) DEFAULT 0,
  `barrio_e` varchar(50) DEFAULT '0',
  `referencia_e` varchar(255) DEFAULT '0',
  `id_provincia` int(11) DEFAULT NULL,
  `id_canton` int(11) DEFAULT NULL,
  `id_telefono` int(11) DEFAULT NULL,
  `id_representante` int(11) DEFAULT NULL,
  `transporte` varchar(50) DEFAULT 'NA',
  `tipo_sangre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IdEsudiante`),
  UNIQUE KEY `identificacion_e` (`identificacion_e`),
  KEY `estudiante_tipoFK` (`id_tipo`),
  KEY `estudiante_provinciaFK` (`id_provincia`),
  KEY `estudiante_cantonFK` (`id_canton`),
  KEY `estudiante_telefonoFK` (`id_telefono`),
  KEY `estudiante_representanteFK` (`id_representante`),
  CONSTRAINT `estudiante_cantonFK` FOREIGN KEY (`id_canton`) REFERENCES `canton` (`IdCanton`) ON UPDATE CASCADE,
  CONSTRAINT `estudiante_provinciaFK` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`IdProvincia`) ON UPDATE CASCADE,
  CONSTRAINT `estudiante_representanteFK` FOREIGN KEY (`id_representante`) REFERENCES `representante` (`IdRepresentante`) ON UPDATE CASCADE,
  CONSTRAINT `estudiante_telefonoFK` FOREIGN KEY (`id_telefono`) REFERENCES `telefono` (`IdTelefono`) ON UPDATE CASCADE,
  CONSTRAINT `estudiante_tipoFK` FOREIGN KEY (`id_tipo`) REFERENCES `documento` (`IdDocumento`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "estudiante"
#

INSERT INTO `estudiante` VALUES (1,1,'0705709812','carchipulla','daniela','2002-07-21',23,'Machala','ecuatoriana','0','0',0,'dani@gmail.com','mestizo','femenino','0987891','NA','NA',24,'NA','NA',7,8,1,1,'NA','OH+'),(2,2,'0705709814','Belduma','Dennys','2023-01-19',24,'MACHALA','ecuatoriano','NA','NA',0,'dennysbelduma98@gmail.com','mestizo','masculino','03939862784','NA','NA',216,'NA','NA',7,8,1,1,'NA','OH+'),(11,3,'0987','belduma ramon','sofia isabell','2023-02-13',24,'MACHALA','Ecuatoriana','0','0',0,'sofi@gmail.com','mestizo','femenino','09879','na','na',0,'0','0',4,1,1,19,'0','OH+'),(12,1,'0708989879','Beltrán Baltazar','Manuel Enrique','1998-06-19',25,'machala','Ecuatoriana','0','0',0,'manuel@gmail.com','mestizo','masculino','0987998','0','0',0,'0','0',7,8,1,20,'0','OH+');

#
# Structure for table "padres"
#

DROP TABLE IF EXISTS `padres`;
CREATE TABLE `padres` (
  `IdPadre` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion_p` varchar(12) NOT NULL DEFAULT '0',
  `apellidos_p` varchar(50) NOT NULL DEFAULT '0',
  `nombres_p` varchar(50) DEFAULT '0',
  `nacionalidad_p` varchar(40) NOT NULL DEFAULT '0',
  `email_p` varchar(50) DEFAULT '0',
  `instruccion_p` varchar(50) NOT NULL DEFAULT '0',
  `ocupacion_p` varchar(50) NOT NULL DEFAULT '0',
  `n_telefono_p` varchar(12) DEFAULT '0',
  `calle_principal_p` varchar(50) DEFAULT '0',
  `calle_secundaria_p` varchar(50) DEFAULT '0',
  `n_casa_p` int(11) DEFAULT 0,
  `barrio_p` varchar(50) DEFAULT '0',
  `referencia_p` varchar(255) DEFAULT '0',
  `convencional_p` varchar(20) DEFAULT '0',
  `parroquia_p` varchar(50) DEFAULT '0',
  `id_estudiante` int(11) DEFAULT NULL,
  `provincia_p` varchar(60) DEFAULT '0',
  `canton_p` varchar(60) DEFAULT '0',
  PRIMARY KEY (`IdPadre`),
  KEY `est_fk` (`id_estudiante`),
  CONSTRAINT `est_fk` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`IdEsudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "padres"
#

INSERT INTO `padres` VALUES (12,'0','0','0','0','denn@gmail.com','0','0','0','0','0',0,'0','0','0','0',2,'0','0'),(13,'07057','cabrera','justiin','ecuatoriano','denn@gmail.com','primaria','albañil','0','0','0',0,'0','0','El oro','MACHALA',1,'0','0'),(19,'089798','belduma morocho','dennys steward','Colombiana','denn@gmail.com','tercer nivel','desarrollo de software','098987','0','0',0,'0','0','el oro','machala',11,'Azuay','CUENCA'),(20,'0987897987','ronquillo baltazar','julio andres','Ecuatoriana','julio@gmail.com','primaria','0','0','0','0',0,'0','0','El Oro','machala',12,'0','0');

#
# Structure for table "madres"
#

DROP TABLE IF EXISTS `madres`;
CREATE TABLE `madres` (
  `IdMadre` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion_m` varchar(12) NOT NULL DEFAULT '0',
  `apellidos_m` varchar(50) NOT NULL DEFAULT '0',
  `nombres_m` varchar(50) DEFAULT '0',
  `nacionalidad_m` varchar(40) NOT NULL DEFAULT '0',
  `email_m` varchar(50) DEFAULT '0',
  `instruccion_m` varchar(50) NOT NULL DEFAULT '0',
  `ocupacion_m` varchar(50) NOT NULL DEFAULT '0',
  `n_telefono_m` varchar(12) DEFAULT '0',
  `calle_principal_m` varchar(50) DEFAULT '0',
  `calle_secundaria_m` varchar(50) DEFAULT '0',
  `n_casa_m` int(11) DEFAULT 0,
  `barrio_m` varchar(50) DEFAULT '0',
  `referencia_m` varchar(255) DEFAULT '0',
  `convencional_m` varchar(20) DEFAULT '0',
  `parroquia_m` varchar(50) DEFAULT '0',
  `id_estudiante` int(11) DEFAULT NULL,
  `provincia_m` varchar(60) DEFAULT '0',
  `canton_m` varchar(60) DEFAULT '0',
  PRIMARY KEY (`IdMadre`),
  KEY `madres_ibfk_1` (`id_estudiante`),
  CONSTRAINT `madres_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`IdEsudiante`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "madres"
#

INSERT INTO `madres` VALUES (18,'0','0','0','0','denn@gmail.com','0','0','0','0','0',0,'0','0','0','0',2,'0','0'),(19,'098798','cabrera','joselyn','ecuatoriana','denn@gmail.com','primaria','ama de casa','0','0','0',0,'0','0','El oro','machala',1,'0','0'),(23,'098798','RAMON CURIPOMA','GILDA KIRA','Ecuatoriana','gildi @gmail.com','universitaria','ing civil','09879','0','2',0,'0','0','el oro','machala',11,'Chimborazo','Riobamba'),(24,'07079874','ajila tocto','sofia camila','Colombiana','sofi@gmail.com','0','0','0','0','0',0,'0','0','El Oro','machala',12,'Chimborazo','Riobamba');

#
# Structure for table "tutor"
#

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE `tutor` (
  `IdTutor` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IdTutor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "tutor"
#

INSERT INTO `tutor` VALUES (1,'Ing. Nixon Paladinez'),(3,'Lic. Silvio Quezada');

#
# Structure for table "matriculanoc"
#

DROP TABLE IF EXISTS `matriculanoc`;
CREATE TABLE `matriculanoc` (
  `IdMatriculanoc` int(11) NOT NULL AUTO_INCREMENT,
  `id_nocturna` int(11) DEFAULT NULL,
  `tipo_matricula` varchar(50) DEFAULT NULL,
  `tipo_asig` varchar(30) DEFAULT NULL,
  `fecha_inscrip` date DEFAULT NULL,
  `registro` varchar(40) DEFAULT 'matriculado',
  `nivel_id` int(255) DEFAULT NULL,
  `seccion_id` int(255) DEFAULT NULL,
  `paralelo_id` int(255) DEFAULT NULL,
  `especialidad_id` int(255) DEFAULT NULL,
  `periodo_id` int(255) DEFAULT NULL,
  `tutor_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`IdMatriculanoc`),
  KEY `matriculanoc_ibfk_1` (`id_nocturna`),
  KEY `matriculanoc_ibfk_2` (`nivel_id`),
  KEY `seccion_id` (`seccion_id`),
  KEY `paralelo_id` (`paralelo_id`),
  KEY `especialidad_id` (`especialidad_id`),
  KEY `periodo_id` (`periodo_id`),
  KEY `tutor_id` (`tutor_id`),
  CONSTRAINT `matriculanoc_ibfk_1` FOREIGN KEY (`id_nocturna`) REFERENCES `nocturna` (`IdNocturna`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matriculanoc_ibfk_2` FOREIGN KEY (`nivel_id`) REFERENCES `niveles` (`Idnivel`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matriculanoc_ibfk_3` FOREIGN KEY (`seccion_id`) REFERENCES `secciones` (`IdSeccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matriculanoc_ibfk_4` FOREIGN KEY (`paralelo_id`) REFERENCES `paralelos` (`IdParalelo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matriculanoc_ibfk_5` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidades` (`IdEspecialidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matriculanoc_ibfk_6` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`IdPeriodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matriculanoc_ibfk_7` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`IdTutor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "matriculanoc"
#

INSERT INTO `matriculanoc` VALUES (1,1,'ordinaria','nuevo','2023-02-21','matriculado',9,3,3,4,1,3);

#
# Structure for table "matricula"
#

DROP TABLE IF EXISTS `matricula`;
CREATE TABLE `matricula` (
  `IdMatricula` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(11) DEFAULT NULL,
  `tipo_matricula` varchar(30) DEFAULT NULL,
  `tipo_asig` varchar(40) DEFAULT NULL,
  `fecha_inscrip` date DEFAULT NULL,
  `registro` varchar(50) DEFAULT 'matriculado',
  `nivel_id` int(11) DEFAULT NULL,
  `seccion_id` int(11) DEFAULT NULL,
  `paralelo_id` int(11) DEFAULT NULL,
  `especialidad_id` int(11) DEFAULT NULL,
  `periodo_id` int(11) DEFAULT NULL,
  `tutor_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`IdMatricula`),
  KEY `nivel_fk` (`nivel_id`),
  KEY `seccion_fk` (`seccion_id`),
  KEY `paralelo_fk` (`paralelo_id`),
  KEY `especial_fk` (`especialidad_id`),
  KEY `periodo_fk` (`periodo_id`),
  KEY `tutor_fk` (`tutor_id`),
  CONSTRAINT `especial_fk` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidades` (`IdEspecialidad`) ON UPDATE CASCADE,
  CONSTRAINT `nivel_fk` FOREIGN KEY (`nivel_id`) REFERENCES `niveles` (`Idnivel`) ON UPDATE CASCADE,
  CONSTRAINT `paralelo_fk` FOREIGN KEY (`paralelo_id`) REFERENCES `paralelos` (`IdParalelo`) ON UPDATE CASCADE,
  CONSTRAINT `periodo_fk` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`IdPeriodo`) ON UPDATE CASCADE,
  CONSTRAINT `seccion_fk` FOREIGN KEY (`seccion_id`) REFERENCES `secciones` (`IdSeccion`) ON UPDATE CASCADE,
  CONSTRAINT `tutor_fk` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`IdTutor`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "matricula"
#

INSERT INTO `matricula` VALUES (9,2,'especial','antiguo','2023-02-21','matriculado',8,2,4,4,1,3),(10,5,'ordinaria','nuevo','2023-02-19','matriculado',11,2,7,4,1,1),(23,1,'ordinaria','nuevo','2023-02-22','baja',7,1,4,1,1,3),(24,12,'ordinaria','nuevo','2023-02-28','matriculado',8,2,4,4,1,3),(25,11,'ordinaria','nuevo','2023-02-23','matriculado',10,1,4,4,1,1);

#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (1,'admin','123');
