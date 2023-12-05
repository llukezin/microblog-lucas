# Exercícios da área pública do site

## Parte 1: carregamento dos dados de uma notícia selecionada (clicada) pelo usuário

Quando o usuário clica em uma notícia na página **index.php**, é aberta a página **noticia.php** e ela deverá receber o **id** da notícia que o usuário escolheu.

Portanto, programe na página **noticia.php** o necessário para capturar o ID vindo da URL.

Após isso, faça a chamada da função **lerDetalhes** repassando à ela o **id** capturado e a **conexao**.

Guarde o retorno desta função em uma variável chamada **dadosDaNoticia**.

## Parte 2: programação da função lerDetalhes (em funcoes-noticias.php)

A função **lerDetalhes** precisa receber os parâmetros **id** **conexao**.

Fora isso, você deve programar o comando SQL usando junção (JOIN) entre as tabelas noticias e usuarios.

Dica: veja a programação feita na área administrativa na página **admin/noticias.php**.

A função deve retornar **UM ARRAY ASSOCIATIVO**.

## Parte 3: exibição da notícia escolhida

Volte para a página pública **noticia.php**, teste a sua variável **dadosDaNoticia** usando pre e var_dump.

Se o teste foi bem sucedido (apareceu os dados da noticia escolhida), então faça os dados aparecem no HTML (titulo, texto, data, imagem e o autor).

Não é necessário usar loop/foreach.
