<?php

   $nome= "thiago livramento";
   
   //função - strtoupper ();

   $nome = strtoupper ($nome); //usando a função  strtoupper eu coloco toda a variavel $nome em maiusculo. Precisa ser entre aspas.

   echo $nome;

   //função - strtolower ();

   $nome = strtolower ($nome); // colocando em minúsculo novamente, com a função strtolower.

   //função ucwords (); converte todas as primeiras letras em maiusculo.
   //função ucfirst (); converte apenas a primeira letra da string.

   //função str_replace (); troca o caracter da string.

   $empresa = "Adapta";

   $empresa = str_replace ('a', '4', $empresa);

   echo $empresa;

   //função strpos (); me diz a posição do caracter ou da string que procuro.

   $frase = "A palavra é escrita assim."
   $palavra = 
   $q = strpos($frase, "é");

   var_dump($q); //apresenta o tipo de variavel é qual a posição.

   //função substr(); posso selecionar uma substring, apenas uma parte do texto.

   $subtexto = substr($frase, 0, $q);
   /* entre paretense eu chamo a variavel que contem o texto, a posição inicial
   e até onde eu quero extrair, no caso o é da frase.*/

   // função  strlen me fornece o tamanho da string.  

   
