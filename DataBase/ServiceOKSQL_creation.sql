
CREATE TABLE ActividadTipo
(
	ActividadTipoID		INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	Nombre				VARCHAR(250) NOT NULL,
	FlagActivo			INT NOT NULL DEFAULT 1
);

CREATE TABLE Actividad
(
	ActividadID			INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	Nombre				VARCHAR(250) NOT NULL,
	Descripcion			VARCHAR(400) NOT NULL,
	FlagActivo			INT NOT NULL DEFAULT 1,
	ActividadTipoID		INT NOT NULL,
	FOREIGN KEY (ActividadTipoID) REFERENCES ActividadTipo(ActividadTipoID)
);

CREATE TABLE Entidad
(
	EntidadID		INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	FlagActivo		INT NOT NULL DEFAULT 1
);

CREATE TABLE Persona
(
	EntidadID		INT NOT NULL PRIMARY KEY,
	DNI				INT NOT NULL,
	Nombre			VARCHAR(250) NOT NULL,
	Apellido		VARCHAR(250) NOT NULL,
	Telefono		INT NOT NULL,
	Direccion		VARCHAR(400) NOT NULL,
	FOREIGN KEY (EntidadID) REFERENCES Entidad(EntidadID)
);

CREATE TABLE Representante
(
	RepresentanteID		INT NOT NULL PRIMARY KEY,
	RUC					INT NOT NULL,
	CorreoEmpresarial	VARCHAR(250) NOT NULL,
	FOREIGN KEY (RepresentanteID) REFERENCES Entidad(EntidadID)
);

CREATE TABLE Establecimiento
(
	EstablecimientoID		INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	Nombre					VARCHAR(250) NOT NULL,
	Telefono				INT NOT NULL,
	WhatsappURL				VARCHAR(250) NOT NULL,
	Delivery				INT NOT NULL,
	Permiso					INT NOT NULL,
	RUC						INT NOT NULL,
	CoordenadaX				VARCHAR(250) NOT NULL,
	CoordenadaY				VARCHAR(250) NOT NULL,
	FlagActivo				INT NOT NULL DEFAULT 1,
	ActividadID				INT NOT NULL,
	RepresentanteID			INT NOT NULL,
	FOREIGN KEY (RepresentanteID) REFERENCES Representante(RepresentanteID),
	FOREIGN KEY (ActividadID) REFERENCES Actividad(ActividadID)
);

CREATE TABLE Calificacion
(
	CalificacionID		INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	NumeroEstrellas		INT NOT NULL,
	Comentario			VARCHAR(400) NOT NULL,
	EstablecimientoID	INT NOT NULL,
	FOREIGN KEY (EstablecimientoID) REFERENCES Establecimiento(EstablecimientoID)
);

CREATE TABLE Rol
(
	RolID			INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	Nombre			VARCHAR(250) NOT NULL,
	Descripcion		VARCHAR(400) NOT NULL	
);

CREATE TABLE RolUsuario
(
	RolID				INT NOT NULL PRIMARY KEY,
	GestionaUsuario		INT NOT NULL DEFAULT 0,
	DesactivaUsuario	INT NOT NULL DEFAULT 0,
	FOREIGN KEY (RolID) REFERENCES Rol(RolID)
);

CREATE TABLE RolPersona
(
	RolID					INT NOT NULL PRIMARY KEY,
	GestionaPersona			INT NOT NULL DEFAULT 0,
	GestionaRepresentante	INT NOT NULL DEFAULT 0,
	FOREIGN KEY (RolID) REFERENCES Rol(RolID)
);

CREATE TABLE RolActividad
(
	RolID					INT NOT NULL PRIMARY KEY,
	GestionarActividad		INT NOT NULL DEFAULT 0,
	DesactivarActividad		INT NOT NULL DEFAULT 0,
	GestionarActividadTipo	INT NOT NULL DEFAULT 0,
	DesactivarActividadTipo	INT NOT NULL DEFAULT 0,	
	FOREIGN KEY (RolID) REFERENCES Rol(RolID)
);

CREATE TABLE RolEstablecimiento
(
	RolID							INT NOT NULL PRIMARY KEY,
	GestionarEstablecimiento		INT NOT NULL DEFAULT 0,
	GestionarUbicacion				INT NOT NULL DEFAULT 0,
	DesactivarEstablecimiento		INT NOT NULL DEFAULT 0,
	FOREIGN KEY (RolID) REFERENCES Rol(RolID)
);

CREATE TABLE RolCalificacion
(
	RolID						INT NOT NULL PRIMARY KEY,
	GestionarCalificacion		INT NOT NULL DEFAULT 0,
	FOREIGN KEY (RolID) REFERENCES Rol(RolID)
);

CREATE TABLE Usuario
(
	EntidadID		INT NOT NULL PRIMARY KEY,	
	Usuario			VARCHAR(20) NOT NULL,
	SecretPass		VARCHAR(20) NOT NULL,
	RolID			INT NOT NULL,
	FOREIGN KEY (RolID) REFERENCES Rol(RolID),
	FOREIGN KEY (EntidadID) REFERENCES Entidad(EntidadID)
);
