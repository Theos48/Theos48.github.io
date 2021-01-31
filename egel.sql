-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idArea` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idArea`, `nombre`) VALUES
(1, 'Ãrea 1'),
(2, 'Ãrea 2'),
(3, 'Ãrea 3'),
(4, 'Ãrea 4'),
(5, 'Ãrea 5'),
(6, 'Ãrea 6'),
(7, 'Ãrea 7'),
(8, 'Ãrea 8'),
(9, 'Ãrea 9'),
(10, 'Ãrea 10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirante`
--

CREATE TABLE `aspirante` (
  `idAspirante` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `paterno` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `materno` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fnacimiento` date DEFAULT NULL,
  `folio` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `presento` int(11) DEFAULT '0',
  `idInstitucion` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `aspirante`
--

INSERT INTO `aspirante` (`idAspirante`, `nombre`, `paterno`, `materno`, `fnacimiento`, `folio`, `password`, `correo`, `status`, `presento`, `idInstitucion`) VALUES
(1, 'Administrador', NULL, NULL, '1993-04-02', 'admin', 'fakepass', 'contacto@gmail.com', 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `idExamen` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `idInstitucion` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CCT` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`idInstitucion`, `nombre`, `direccion`, `CCT`, `telefono`) VALUES
(1, 'ITESCO', 'Carretera Antigua-Minatitlan, S/N, Coatzacoalcos, Estado de Veracruz', '96536', '9211683138');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `idPregunta` int(11) NOT NULL,
  `texto` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `respuesta1` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `valor1` int(11) DEFAULT NULL,
  `respuesta2` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `valor2` int(11) DEFAULT NULL,
  `respuesta3` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `valor3` int(11) DEFAULT NULL,
  `respuesta4` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `valor4` int(11) DEFAULT NULL,
  `idExamen` int(11) NOT NULL DEFAULT '1',
  `idArea` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `idResultado` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `totalRespuestas` int(11) NOT NULL,
  `resultadoA1` int(11) NOT NULL,
  `resultadoA2` int(11) NOT NULL,
  `resultadoA3` int(11) NOT NULL,
  `resultadoA4` int(11) NOT NULL,
  `resultadoA5` int(11) NOT NULL,
  `resultadoA6` int(11) NOT NULL,
  `resultadoA7` int(11) NOT NULL,
  `resultadoA8` int(11) NOT NULL,
  `resultadoA9` int(11) NOT NULL,
  `resultadoA10` int(11) NOT NULL,
  `idAspirante` int(11) NOT NULL,
  `idExamen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idArea`);

--
-- Indices de la tabla `aspirante`
--
ALTER TABLE `aspirante`
  ADD PRIMARY KEY (`idAspirante`,`idInstitucion`),
  ADD UNIQUE KEY `folio_UNIQUE` (`folio`),
  ADD KEY `fk_Aspirante_Institucion1_idx` (`idInstitucion`);

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`idExamen`,`idUsuario`),
  ADD KEY `fk_Examen_Usuario1_idx` (`idUsuario`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`idInstitucion`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`idPregunta`,`idExamen`,`idArea`),
  ADD KEY `fk_Pregunta_Examen1_idx` (`idExamen`),
  ADD KEY `fk_Pregunta_Area1_idx` (`idArea`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`idResultado`,`idAspirante`,`idExamen`),
  ADD KEY `fk_Resultado_Aspirante1_idx` (`idAspirante`),
  ADD KEY `fk_Resultado_Examen1_idx` (`idExamen`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `aspirante`
--
ALTER TABLE `aspirante`
  MODIFY `idAspirante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `examen`
--
ALTER TABLE `examen`
  MODIFY `idExamen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `idResultado` int(11) NOT NULL AUTO_INCREMENT;



-- Procedimientos
--
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizaPresento` (IN `x` INT)  BEGIN
update aspirante set presento=1 where idAspirante=x;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registraResultado` (IN `t` INT, IN `x1` INT, IN `x2` INT, IN `x3` INT, IN `x4` INT, IN `x5` INT, IN `x6` INT, IN `x7` INT, IN `x8` INT, IN `x9` INT, IN `x10` INT, IN `id` INT)  BEGIN
insert into resultado (fecha,totalRespuestas,resultadoA1,resultadoA2,resultadoA3,resultadoA4,resultadoA5,resultadoA6, resultadoA7 ,resultadoA8, resultadoA9, resultadoA10, idAspirante) 
values (NOW(), t, x1, x2, x3, x4, x5, x6, x7, x8, x9, x10, id);
END$$

--
-- Funciones
--
DELIMITER $$
CREATE DEFINER=`root`@`localhost` FUNCTION `cuentaErrores` (`x` INT, `y` INT) RETURNS INT(11) BEGIN
  DECLARE r INT;
  SET r = y - x;
  RETURN r;
END$$

DELIMITER $$
CREATE DEFINER=`root`@`localhost` FUNCTION `porcentaje` (`a` INT, `b` INT) RETURNS INT(11) BEGIN
	DECLARE x INT;
	DECLARE y INT;
 	SET x = a * 100;
	SET y = x / b;
 	RETURN y;
END$$
