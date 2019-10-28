<?php

//documento sobre operadores de atribuição em PHP.

  $variavel = "string" ; //o caracter = é o operador de atribuição.
  echo $variavel. " mais alguma coisa"; //o operador . é usado para concatenar string.

  $variavel.= "bosta"; /* usando os dois operadores, eu mantenho o valor do primeiro e concateno com o valor informado, no caso "bosta",
 fica no caso = string bosta.
 */

 $variavel1 = 25;
 $variavel1 += 100; //o += também é um operador de atribuição no PHP. serve para somar valores as variaves. o -= é o desconto.
 //posso usar *=  para fazer porcentagem.

 //operadores aritiméticos:

 $a= 10;
 $b= 2;

 echo $a + $b;
 echo $a - $b;
 echo $a * $b;
 echo $a / $b;

 echo $a % $b; //o operador % serve como modulo da divisão. OU seja o resto da divisão é apresentando.

 echo $a ** $b; //utilizando o * duas vezes eu faço exponenciação.

 //operadores de comparação:

 var_dump($a > $b);
 var_dump($a < $b);
 var_dump($a == $b); //dois iguais compara apenas os valores e não o tipo de variavel.
 var_dump($a === $b); //três iguais compara valores e tipo de variavel.
 var_dump($a != $b); // usando != estou afirmando que a primeira variavel é diferente da segunda. ! é uma negação na programação. 
 var_dump($a !== $b); //aqui afirmo que não é igual nem valor e nem tipo de variavel.


 //operadores novos do PHP 7:

 $c = 50;
 $d = 35;

 var_dump($c <=> $d); /* o operador <=> (spaceship). funciona da seguinte maneira: se c for maior volta 1, 
 se for igual volta 0 e se for menor volta -1.*/

 $f = NULL;
 $e = NULL;
 $g = 10;

 echo $f ?? $e ?? $g; //utilizando o operador ??. Imprime f, caso seja nulo, imprime e, caso seja nulo imprime g.

 //operadores de incremento e decremento:

 $var = 10;

 echo $var++; //estou incrementando +1 a variavel var.
 echo ++$var; //mesma lógica do anterior, porém incrementa antes de realizar a impressão.

 echo --$var; //operadore de decremento. Tira 1 da variavel.
  
 //ordem de execução dos operadores. Precedencia de operadores. Segue a lógica matemática.




 ?>


