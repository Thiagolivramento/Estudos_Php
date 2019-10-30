<?php

  echo "Ola, essa frase foi escrita através da função echo<br/>";

  echo "essa é outra linha.";

  //fazendo comentário no php
  /*
  essa também é uma forma de fazer comentário

  */
  // para fazer concatenação se utiliza o .(ponto) entre os valores a serem concatenados.
  

  print("<br/>Essa frase é imprensa com comando print");
  echo "nova alteração para o git";

  $novaVariavel = 'string';

  // para criar variavél no PHP se utiliza a sigla $NOMEDAVARIAVAEL = atribuição do valor ;

  echo $novaVariavel;


  // com o comando abaixo eu imprimo o tipo da variavel e quantos caracteres tem. Posso usar isso para facilitar no caso de array.
  var_dump($novaVariavel);

  // a variavel $this é uma variavel pré definida pelo php.
  
  echo $novaVariavel;

  echo "<br/>";

  unset //comando para limpar variavel.

  isset //comando utilizado dentro do if para verificar se a variavel existe. 
  
  //tipos basicos de variaveis:

  $variavelString = "texto";
  $variavelInt = 100;
  $variavelFloat = 100.99;
  $variavelBoleano = true / false ;

  //variaveis compostas: array e objeto.

  $frutas = array ("banana", "laranja")
  echo $frutas[1]; // estou imprimindo o item da posição 1 do array.

  $nascimento = new DateTime(); //variavel tipo objeto - datetime informa a hora e o dia.

  //existem as variaveis de tipo especiais  resource e null

  $tipoNulo = NULL; //variavel de valor nulo. Ou seja, não existe valor para esse tipo de variavel, é diferente de vazio.

  // variaveis pre definidas do Php:

  $_GET[]; //tipo de variavel global, verificar sua função dentro do Php.
  $_POST; //idem ao superior.
  $_SERVER []; //pega informações do ambiente (usuário e servidor)

  //escopo de variavel - até onde a variavel pode ser enxergada.

  // para criar uma função em php, utilize a seguinte sintaxe:

  function teste() {
     global $variavelInt; // aqui estou colocando a variavel dentro do escopo da função. 
     echo $variavelInt;
  }
  
  teste (); //estou chamando a função no escopo global.

  /*quando utilizo a variavel pre definida (global) serve para colcoar que a variavel é global no código inteiro.
  isso sobresai o escopo da função. Lembre que as variaveis dependem do escopo em que elas estão inseridas.
  */


?>


