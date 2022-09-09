API que provee trabajadores, vacaciones y licencias/permisos

BBDD: mysql

api routes:

http://127.0.0.1:8000/api/trabajador
http://127.0.0.1:8000/api/vacaciones
http://127.0.0.1:8000/api/licenciapermiso

hacer el siguiente insert:

Tabla trabajadores:

INSERT INTO `trabajador` (`empleado`, `empleadoRut`, `nombreCompleto`, `TrabajoCargo`, `TrabajoFamiliaCargo`, `departamento`, `centroCosto`, `lmyPermisos`, `vac`) VALUES ('SI', '43534663', 'Luis Alfredo Arce Contreras', 'Enfermero', 'Emergencias', 'Salud', '0', '2022-03-02', '2021-04-03'), ('NO', '54645778', 'Aladino Segundo Espinoza Saavedra', 'Recepcionista', 'Seguridad', 'Seguridad', '0', '2021-08-08', '2021-09-08'), ('SI', '546568565', 'Luis Rodriguez Alcina', 'Grua', 'Operaciones', 'Operaciones', '0', '2022-05-22', '2021-05-22'), ('SI', '78212354', 'Eduardo Javier Aracena Avalos', 'Limpiador', 'Aseo', 'Aseo', '0', '2002-08-16', '2019-05-05'), ('SI', '34568667', 'Ramon Velasquez Cayupe', 'Mata Jabalies', 'Caza', 'Ganaderia', '0', '2019-12-12', '2019-11-12'), ('SI', '435786778', 'Ximena Loreto Sanchez Figueroa', 'Tecnico informatico', 'Informatica', 'TI', '0', '2021-04-04', '2021-08-03'), ('SI', '34576867', 'Isabel Margarita Perez Moore', 'Mata moscas', 'Plagas', 'Control Plagas', '0', '2018-02-02', '2020-02-02'), ('SI', '1754822155', 'Jose Jorge Jimenez Jota', 'Mata Pulgas', 'Plagas', 'Control de plagas', '0', '2019-03-03', '2020-03-03'), ('SI', '95885412', 'Macarena De Las Mercedes Parrau Gallardo', 'RRHH', 'Administracion', 'Administracion', '0', '24-09-2022', 'NO'), ('SI', '54151231', 'Raul Manuel Santos Rojas', 'RRHH', 'Administracion', 'Administracion', '0', '24-09-2022', 'NO');

Tabla vacaciones:

INSERT INTO `vacaciones` (`nombre`, `apellido`, `segundoApellido`, `rut`, `diasHabiles`, `tipo`, `inicio`, `termino`, `estado`, `cargo`, `division`, `departamento`, `area`) VALUES ('Luis Alfredo ', 'Arce', 'Contreras', '43534663', '2', 'Progresivas', '2022-09-04', '2022-09-20', 'Aprobada', 'Enfermero', 'Emergencias', 'Salud', 'Salud'), ('Luis ', 'Rodriguez', 'Alcina', '546568565', '10', 'Progresivas', '2022-09-19', '2022-09-28', 'Aprobada', 'Grua', 'Operaciones', 'Operaciones', 'Operaciones');


Tabla licenciasPermisos

INSERT INTO `licencia_permiso` (`empleado`, `rut`, `empNombreCompleto`, `asistenciaTipo`, `asistenciaNombreTipo`, `asistenciaFechaInicio`, `asistenciaFechaTermino`, `asistenciaDiasTomados`) VALUES ('SI', '34568667', 'Ramon Velasquez Cayupe', 'Licencia', 'Licencia', '2022-09-09', '2022-09-12', '3'), ('SI', '435786778', 'Ximena Loreto Sanchez Figueroa', 'Licencia', 'Licencia', '2022-09-10', '2022-09-15', '6');