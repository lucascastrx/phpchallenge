CREATE TABLE pessoas (
  id bigint unsigned NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  cpf varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE contatos (
  id bigint unsigned NOT NULL AUTO_INCREMENT,
  pessoa_id bigint unsigned NOT NULL,
  descricao varchar(255) NOT NULL,
  tipo tinyint(1) NOT NULL,
  PRIMARY KEY (id),
  KEY contatos_pessoa_id_foreign (pessoa_id),
  CONSTRAINT contatos_pessoa_id_foreign FOREIGN KEY (pessoa_id) REFERENCES pessoas (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;