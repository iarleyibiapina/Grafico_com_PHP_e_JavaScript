-- Postgress
-- Criação da tabela 'grupos'
CREATE TABLE grupos (
    id SERIAL PRIMARY KEY,
    grupo VARCHAR(50) NOT NULL
);

-- Inserção de três linhas na tabela 'grupos'
INSERT INTO grupos (grupo) VALUES ('grupo-1'), ('grupo-2'), ('grupo-3');

-- Criação da tabela 'valores' com relacionamento com 'grupos'
CREATE TABLE valores (
    id SERIAL PRIMARY KEY,
    id_grupo INT REFERENCES grupos(id),
    valor_1 INT DEFAULT 0,
    valor_2 INT DEFAULT 0,
    valor_3 INT DEFAULT 0
);

-- Exemplo de inserção na tabela 'valores' com aumento de valor
INSERT INTO valores (id_grupo, valor_2) VALUES (1, 10);  -- Aumenta 'valor_1' para 'grupo-1' em 10

-- Exemplo de UPDATE para aumentar valor_2 em 5 para o grupo-1
-- inser não será utilizado, apenas update
UPDATE valores
SET valor_2 = valor_2 + 5
WHERE id_grupo = 1;

select * from valores;

SELECT
    g.id AS grupo_id,
    g.grupo,
    v.id AS valor_id,
    v.valor_1,
    v.valor_2,
    v.valor_3
FROM
    grupos g
JOIN
    valores v ON g.id = v.id_grupo;
