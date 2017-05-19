create table tipousuario
(
id bigserial not null,
nombre text,

PRIMARY KEY(id)
);

create table usuarios 
(
id bigserial not null,
nombre text not null,
paterno text not null,
materno text,
genero text,
direccion text,
telefono text,
estado text,
ciudad text,
email text,
nu_usuario bigint REFERENCES tipousuario(id),

PRIMARY KEY(id),
FOREIGN KEY (nu_usuario) REFERENCES tipo_usuario(id)
);

create table semestre
(
id bigserial not null,
nombre_semestre text not null,

PRIMARY KEY(id)
);

create table carrera
(
id bigserial not null,
nombre_carrera text,
nu_semestre bigint REFERENCES semestre(id),

PRIMARY KEY(id),
FOREIGN KEY (nu_semestre) REFERENCES semestre(id)
);

create table situacion
(
id bigserial not null,
nombre text,


PRIMARY KEY(id)
);

create table estudiantes
(
id bigserial not null,
nombre_alumno text,
nu_situacion bigint REFERENCES situacion(id),

PRIMARY KEY(id),
FOREIGN KEY (nu_situacion) REFERENCES situacion(id)
);
create table actividades
(
id bigserial not null,
descripcion text,
nu_estudiantes bigint REFERENCES estudiantes(id),

PRIMARY KEY(id),
FOREIGN KEY (nu_estudiantes) REFERENCES estudiantes(id)
);

create table diagnostico
(
id bigserial not null,
descripcion text not null,
nu_actividades bigint REFERENCES actividades(id),

PRIMARY KEY(id),
FOREIGN KEY (nu_actividades) REFERENCES actividades(id)
);

