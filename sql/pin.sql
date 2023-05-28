CREATE TABLE cadastro (
    pin VARCHAR(5),
    nome VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL
);

SELECT * FROM cadastro WHERE email = 'layumih06@gmail.com'

INSERT INTO cadastro VALUES('', 'Lara Ayumi', 'layumih06@gmail.com');