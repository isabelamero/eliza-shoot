
CREATE TABLE produtos (
    id SERIAL PRIMARY KEY,
    tipo VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    imagem VARCHAR(255) DEFAULT 'img/logoelizashoot.png',
);

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

-- Exemplo de inserção inicial para teste
INSERT INTO users (nome, email, senha) VALUES ('Admin', 'admin@elizashoot.com', 'admin123');
