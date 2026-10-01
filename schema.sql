-- tabela de usuarios
CREATE TABLE helpdesk.Usuarios(
idUsuario INT AUTO_INCREMENT PRIMARY KEY,
Nome VARCHAR(45) NOT NULL,
Email VARCHAR(45) NOT NULL,
Cargo VARCHAR(15),
Tipo ENUM ('USUARIO', 'TECNICO') DEFAULT 'USUARIO'
);

-- tabela de chamados
CREATE TABLE helpdesk.Chamados(
idChamado INT AUTO_INCREMENT PRIMARY KEY,
Titulo VARCHAR(45) NOT NULL,
Categoria VARCHAR(45) NOT NULL,
Descricao TEXT NOT NULL,
Status ENUM ('EM ABERTO', 'EM ANDAMENTO', 'CONCLUIDO', 'CANCELADO') DEFAULT 'EM ABERTO',
DataCriacao DATETIME DEFAULT CURRENT_TIMESTAMP,
idUsuario INT NOT NULL,
Deletado TINYINT(1) DEFAULT 0,
FOREIGN KEY Chamados(idUsuario) REFERENCES Usuarios(idUsuario) ON DELETE CASCADE
);

INSERT INTO helpdesk.Usuarios (Nome, Email, Cargo, Tipo) 
VALUES ('Usuario Padrao', 'usuario@email.com', 'Analista', 'USUARIO');