
CREATE TABLE ActividadTipo
(
	ActividadTipoID	INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Nombre				VARCHAR(250) NOT NULL,
	FlagActivo			INT(1) NOT NULL DEFAULT 1
);

CREATE TABLE Actividad
(
	ActividadID			INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Nombre				VARCHAR(250) NOT NULL,
	Descripcion			VARCHAR(400) NOT NULL,
	FlagActivo			INT(1) NOT NULL DEFAULT 1,
	ActividadTipoID	INT(11) NOT NULL,
	FOREIGN KEY (ActividadTipoID) REFERENCES ActividadTipo(ActividadTipoID)
);

CREATE TABLE Entidad
(
	EntidadID		INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	FlagActivo		INT(1) NOT NULL DEFAULT 1
);

CREATE TABLE Persona
(
	EntidadID		INT(11) NOT NULL PRIMARY KEY,
	DNI				INT(8) NOT NULL,
	Nombre			VARCHAR(250) NOT NULL,
	Apellido			VARCHAR(250) NOT NULL,
	Telefono			INT(12) NOT NULL,
	Direccion		VARCHAR(400) NOT NULL,
	FOREIGN KEY (EntidadID) REFERENCES Entidad(EntidadID)
);

CREATE TABLE Representante
(
	EntidadID			INT(11) NOT NULL PRIMARY KEY,
	RUC					INT(10) NOT NULL,
	CorreoEmpresarial	VARCHAR(250) NOT NULL,
	FOREIGN KEY (EntidadID) REFERENCES Entidad(EntidadID)
);

CREATE TABLE Establecimiento
(
	EstablecimientoID		INT(11) NOT NULL PRIMARY KEY,
	Nombre					VARCHAR(250) NOT NULL,
	Telefono					INT(12) NOT NULL,
	WhatsappURL				VARCHAR(250) NOT NULL,
	Delivery					INT(1) NOT NULL,
	Permiso					INT(1) NOT NULL,
	RUC						INT(10) NOT NULL,
	CoordenadaX				VARCHAR(250) NOT NULL,
	CoordenadaY				VARCHAR(250) NOT NULL,
	FlagActivo				INT(1) NOT NULL DEFAULT 1,
	ActividadID				INT(11) NOT NULL,
	EntidadID				INT(11) NOT NULL,
	FOREIGN KEY (EntidadID) REFERENCES Representante(EntidadID),
	FOREIGN KEY (ActividadID) REFERENCES Actividad(ActividadID)
);


CREATE TABLE Calificacion
(
	CalificacionID		INT(11) NOT NULL PRIMARY KEY,
	NumeroEstrellas	INT(2) NOT NULL,
	Comentario			VARCHAR(400) NOT NULL,
	EstablecimientoID	INT(11) NOT NULL,
	FOREIGN KEY (EstablecimientoID) REFERENCES Establecimiento(EstablecimientoID)
);


CREATE TABLE Rol
(
	RolID				INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Nombre			VARCHAR(250) NOT NULL,
	Descripcion		VARCHAR(400) NOT NULL	
);

CREATE TABLE RolUsuario
(
	RolID					INT(11) NOT NULL PRIMARY KEY,
	GestionaUsuario	INT(1) NOT NULL DEFAULT 0,
	DesactivaUsuario	INT(1) NOT NULL DEFAULT 0,
	FOREIGN KEY (RolID) REFERENCES Rol(RolID)
);

CREATE TABLE RolPersona
(
	RolID							INT(11) NOT NULL PRIMARY KEY,
	GestionaPersona			INT(1) NOT NULL DEFAULT 0,
	GestionaRepresentante	INT(1) NOT NULL DEFAULT 0,
	FOREIGN KEY (RolID) REFERENCES Rol(RolID)
);

CREATE TABLE RolActividad
(
	RolID							INT(11) NOT NULL PRIMARY KEY,
	GestionarActividad		INT(1) NOT NULL DEFAULT 0,
	DesactivarActividad		INT(1) NOT NULL DEFAULT 0,
	GestionarActividadTipo	INT(1) NOT NULL DEFAULT 0,
	DesactivarActividadTipo	INT(1) NOT NULL DEFAULT 0,	
	FOREIGN KEY (RolID) REFERENCES Rol(RolID)
);

CREATE TABLE RolEstablecimiento
(
	RolID									INT(11) NOT NULL PRIMARY KEY,
	GestionarEstablecimiento		INT(1) NOT NULL DEFAULT 0,
	GestionarUbicacion				INT(1) NOT NULL DEFAULT 0,
	DesactivarEstablecimiento		INT(1) NOT NULL DEFAULT 0,
	FOREIGN KEY (RolID) REFERENCES Rol(RolID)
);

CREATE TABLE RolCalificacion
(
	RolID									INT(11) NOT NULL PRIMARY KEY,
	GestionarCalificacion			INT(1) NOT NULL DEFAULT 0,
	FOREIGN KEY (RolID) REFERENCES Rol(RolID)
);

CREATE TABLE Usuario
(
	EntidadID		INT(11) NOT NULL PRIMARY KEY,	
	Usuario			VARCHAR(20) NOT NULL,
	Secret			VARCHAR(20) NOT NULL,
	RolID				INT(11) NOT NULL,
	FOREIGN KEY (RolID) REFERENCES Rol(RolID),
	FOREIGN KEY (EntidadID) REFERENCES Entidad(EntidadID)
);


