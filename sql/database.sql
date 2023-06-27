CREATE DATABASE cadastro;

USE cadastro;

-- Tabela cliente
CREATE TABLE cliente (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    rg VARCHAR(12) NOT NULL,
    telefone1 VARCHAR(15) NOT NULL,
    telefone2 VARCHAR(15),
    endereco_atual VARCHAR(200) NOT NULL,
    endereco_projeto VARCHAR(200) NOT NULL,
    fatura_disponivel VARCHAR(10) NOT NULL
);

-- Tabela projeto
CREATE TABLE projeto (
    id_cliente INT,
    pin_projeto VARCHAR(5) PRIMARY KEY NOT NULL,
    planta VARCHAR(200) NOT NULL,
    empreendimento VARCHAR(100) NOT NULL,
    M2 DECIMAL(3, 2) NOT NULL,
    previsao_entrega VARCHAR(10) NOT NULL,
    FOREIGN KEY(id_cliente) REFERENCES cliente(id_cliente)
);


SELECT * FROM cliente WHERE cpf = '58962188856';

SELECT * FROM projeto WHERE pin = '11111';

-- insert 
INSERT INTO cliente VALUES(DEFAULT, 'lara Ayumi', 58962188856);

INSERT INTO projeto VALUES(11111, 2, 'Lara Ayumi', '20230529');