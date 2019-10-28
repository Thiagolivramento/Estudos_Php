esse é o comando include. Ele funciona como um chamado de um menu pré estabelecido.
É uma especie de import. Posso criar um arquivo php de funções e chamar ela sempre que precisar.
posso também usar o comando require. Porém tem diferenças.
Abaixo o exemplo de como usar

<?php

    include "nome_do_arquivo.php";

    $resultado = somar (10, 20);

    echo $resultado;


/* no caso, estou chamando o arquivo que contém a função somar,
que está sendo usada na variavel $resultado.

Ficar atento que no exemplo é como o arquivo estivesse na mesma pasta/diretório.
Uma boa prática é salvar os arquivos de include numa única pasta, com nome inc.
*/
?>


comando require executa a mesma função. É o mais recomendado de se utilizar.

<?php

    require "nome_do_arquivo.php";

    $resultado = somar (10, 20);

    echo $resultado;

/*vantagem:o require exige que o arquivo importado exista e funcionando.
caso isso não ocorra, apresenta um erro fatal.
*/
?>

Existe a função require_once, que chama a função apenas uma vez. Por que posso chamar vários arquivos php e eles
terem as mesmas funções sendo chamadas.
<?php

    require_once "nome_do_arquivo.php";

    $resultado = somar (10, 20);

    echo $resultado;

