CREATE DATABASE cadastro;

USE cadastro;
-- Tabela cliente
CREATE TABLE cliente(
    id_cliente SMALLINT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    rg VARCHAR(12) NOT NULL UNIQUE,
    telefone1 VARCHAR(15) NOT NULL,
    telefone2 VARCHAR(15),
    endereco_atual VARCHAR(200) NOT NULL,
    data_fatura VARCHAR(10) NOT NULL
);

-- Tabela projeto
CREATE TABLE projeto(
    pin_projeto VARCHAR(5) PRIMARY KEY,
    id_cliente SMALLINT NOT NULL,
    planta VARCHAR(200) NOT NULL,
    empreendimento VARCHAR(100) NOT NULL,
    endereco_projeto VARCHAR(200) NOT NULL,
    M2 varchar(5) NOT NULL,
    previsao_entrega VARCHAR(10) NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);
-- ALTER TABLE projeto ADD CONSTRAINT fk_id 

-- Tabela nota fiscal
CREATE TABLE notaFiscal (
    cod_notaFiscal SMALLINT PRIMARY KEY AUTO_INCREMENT,
    pin_projeto VARCHAR(5) NOT NULL,
    nome_arquivo VARCHAR(200) NOT NULL,
    caminho_arquivo VARCHAR(255) NOT NULL,
    observacao VARCHAR(255),
    data_publicacao DATE NOT NULL,
    FOREIGN KEY (pin_projeto) REFERENCES projeto(pin_projeto)
);

-- Tabela arquivos
CREATE TABLE arquivos(
    cod_arquivo SMALLINT PRIMARY KEY AUTO_INCREMENT,
    pin_projeto VARCHAR(5) NOT NULL,
    nome_arquivo VARCHAR(200) NOT NULL,
    caminho_arquivo VARCHAR(255) NOT NULL,
    observacao VARCHAR(255),
    data_publicacao DATE NOT NULL,
    FOREIGN KEY (pin_projeto) REFERENCES projeto(pin_projeto)
);

-- Tabela financeiro
CREATE TABLE controleFinanceiro(
    cod_financeiro SMALLINT PRIMARY KEY AUTO_INCREMENT,
    pin_projeto VARCHAR(5) NOT NULL,
    id_servico SMALLINT,
    status ENUM('Receita', 'Despesa'),
    data DATE,
    valor DECIMAL(10,2),
    anexo VARCHAR(255),
    FOREIGN KEY (pin_projeto) REFERENCES projeto(pin_projeto),
    FOREIGN KEY(id_servico) REFERENCES servicos(id_servico)
);

-- Tabela de serviços
CREATE TABLE servicos(
    id_servico SMALLINT PRIMARY KEY AUTO_INCREMENT,
    servico VARCHAR(20)
);


cliente > projeto (um cliente pode ter um ou varios projetos)
projeto > cliente (um projeto pode ter um ou varios clientes)

projeto > nota fiscal
projeto > arquivo
projeto > controle financeiro

servicos > controle financeiro

INSERT INTO servicos(servico) VALUES
('Emprenteira'),
('Iluminação'),
('Vidraçaria'),
('Marcenaria'),
('Ar-condicionado'),
('Marmoraria'),
('Revestimento');


SELECT * FROM cliente WHERE cpf = '58962188856';

INSERT INTO cliente VALUES(DEFAULT, 'lara Ayumi', "58962188856", "123456789101", "1234565432", "000000000", "Rua nestor", "2023-01-06");

SELECT * FROM projeto WHERE pin = '11111';

-- insert 


INSERT INTO projeto VALUES(11111, 2, 'Lara Ayumi', '20230529');