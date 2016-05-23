-- Base de datos: `PSeguridad`
CREATE USER PSeguridad@localhost IDENTIFIED BY 'EXCELesdeldiablo';
CREATE DATABASE PSeguridad;
USE PSeguridad;
REVOKE ALL PRIVILEGES ON *.* FROM 'PSeguridad'@'localhost'; GRANT ALL PRIVILEGES ON *.* TO 'PSeguridad'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

-- Estructura de tabla para la tabla `users`
CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `PASSWORD` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Indices de la tabla `users`
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
