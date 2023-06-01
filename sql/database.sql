CREATE DATABASE Cadastro;
use Cadastro;

-- create
CREATE TABLE projeto(
    pin int(5) PRIMARY KEY UNIQUE,
    id_cliente int(2),
    nome_cliente VARCHAR(40),
    data DATE,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id)
);

CREATE TABLE cliente (
    id int(2) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    cpf VARCHAR(11) UNIQUE NOT NULL
);



-- select 
SELECT * FROM cliente WHERE cpf = '58962188856';

SELECT * FROM projeto WHERE pin = '11111';

-- insert 
INSERT INTO cliente VALUES(DEFAULT, 'lara Ayumi', 58962188856);

INSERT INTO projeto VALUES(11111, 2, 'Lara Ayumi', '20230529');