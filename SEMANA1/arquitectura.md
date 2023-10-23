4. Definir la arquitectura del sistema:
Determinar si se utilizará un framework específico, cómo se gestionará
la base de datos, qué tecnologías se utilizarán en el frontend y backend,
etc.

- Usaremos HTML y CSS para la parte del frontend de nuestra web dinámica.
- Para gestionar nuestra base de datos haremos uso de mySQL.
- Finalmente para gestionar el backend de la web usaremos javascript y php.
- Usaremos el Visual Studio Code para hacer tanto el frontend como el backend.



Codigo picado base de datos: 

CREATE TABLE Usuarios (
    ID INT PRIMARY KEY,
    NombreUsuario VARCHAR(255),
    Contraseña VARCHAR(255),
    Rol VARCHAR(50)
);

CREATE TABLE Articulos (
    ID INT PRIMARY KEY,
    Titulo VARCHAR(255),
    FechaPublicacion DATE,
    Contenido TEXT,
    Resumen TEXT,
    Imagen INT,
    IDAutor INT
);

CREATE TABLE Comentarios (
    ID INT PRIMARY KEY,
    Contenido TEXT,
    FechaPublicacion DATE,
    IDUsuario INT,
    IDArticulo INT
);


ALTER TABLE Articulos ADD FOREIGN KEY (IDAutor) REFERENCES Usuarios(ID);
ALTER TABLE Comentarios ADD FOREIGN KEY (IDUsuario) REFERENCES Usuarios(ID);
ALTER TABLE Comentarios ADD FOREIGN KEY (IDArticulo) REFERENCES Articulos(ID);
