
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