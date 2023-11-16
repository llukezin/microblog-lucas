# Comandos de SQL para operações de dados (CRUD)

# Resumo

- C: CREATE (INSERT) -> usado para inserir dados 
- R: READ (SELECT) -> usado para ler/consultar dados
- U: UPDATE (UPDATE) -> usado para arualizar dados
- D: DELETE (DELETE) -> usado para excluir dados

## Exemplos

### INSERT na tabela de usuários
```sql
INSERT INTO usuarios (nome,email, senha, tipo) VALUES ('Luke Mendonça','llukezinnegocios@gmail.com','40028922','admin');
```
```sql
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
```

### SELECT na tabela de usuários

SELECT * FROM usuarios;

SELECT nome, email FROM usuarios;

SELECT nome, email FROM usuarios WHERE tipo = 'admin';

### UPDATE em dados da tabela de usuários

UPDATE usuarios SET tipo = 'admin' 
WHERE id = 4;

-- obs: NUNCA ESQUEÇA DE PASSAR UMA CONDIÇÃO PARA O UPDATE!


### DELETE em dados da tabela de usuarios

DELETE FROM usuarios WHERE id = 2;

-- Obs: NUNCA ESQUEÇA DE PASSAR UMA CONDIÇÃO PARA O DELETE!


### INSERT na tabela de noticias

```sql
INSERT INTO noticias(titulo, texto, resumo, usuario_id)
VALUES(
   'Descoberto oxigênio em Vênus',
    'Nesta manhã, uma decoberta incrivel foi feitas por astronomos a fina atmosfera marciana é composta por 96% de dióxido de carbono, tornando o ar irrespirável para os humanos. O Moxie funciona dividindo moléculas de dióxido de carbono, que incluem um átomo de carbono e dois átomos de oxigênio.',
    'Recentemente o telescopio no Havai encontrou traços de oxigênio no planeta...',
    'venus,jpg',
    1
);
```
```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES(

    'Nova versão do VSCode',
    'A Microsoft trouxe recursos de Inteligência Artificial...',
    'Recentemente o VSCode foi atualizado...',
    'vscode,png',
    4
);
```
```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES(
    'Onda de calor no Brasil',
    'Efeitos do aquecimentos global estão prejudicando a vida...',
    'Temperaturas muito acima da média',
    'sol.svg',
    1
);
```

### objetivo: consulta que mostre a data e o titulo da noticia e o nome do autor desta noticia.

#### SELECT COM JOIN (CONSULTA COM JUNÇÃO DE TABELAS)

```sql
-- Especificamos o nome da coluna junto com o nome da tabela
SELECT
    noticias.data,
    noticias.titulo,
    usuarios.nome

-- Especificamos quais tabelas serão "juntadas/combinadas"
FROM noticias JOIN usuarios

-- Criterio para o JOIN funcionar:
-- Fazemos uma comparação entre a a chave estrangeira (FK)
-- com a chave primária (PK)
ON noticias.usuario_id = usuarios.id

-- opcional (ordenação/classificação pela data)
-- DESC indica ordem decrescente (mais recente vem primeiro)
ORDER BY data DESC; -- opcional
```