# Comandos de SQL para operações de dados (CRUD)

# Resumo

- C: CREATE (INSERT) -> usado para inserir dados 
- R: READ (SELECT) -> usado para ler/consultar dados
- U: UPDATE (UPDATE) -> usado para arualizar dados
- D: DELETE (DELETE) -> usado para excluir dados

## Exemplos

### INSERT na tabela de usuários

INSERT INTO usuarios (nome,email, senha, tipo) VALUES ('Luke Mendonça','llukezinnegocios@gmail.com','40028922','admin');


INSERT INTO usuarios(nome, email, senha, tipo)
VALUES(
    'Fulano da Silva',
    'fulano@gmail.com',
    '456',
    'editor'
), (
    'Beltrano Soares',           
    'beltrano@msn.com',
    '000penha',
    'admin'

), (
    'Chapolin Colorado',
    'chapolin@vingadores.com.br',
    'marreta',
    'editor'
);

### SELECT na tabela de usuários

SELECT * FROM usuarios;

SELECT nome, email FROM usuarios;

SELECT nome, email FROM usuarios WHERE tipo = 'admin';

### UPDATE em dados da tabela de usuários

UPDATE usuarios SET tipo = 'admin' 
WHERE id = 4;

-- obs: NUNCA ESQUEÇA DE PASSAR UMA CONDIÇÃO PARA O UPDATE!
