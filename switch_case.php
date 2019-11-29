<?php

$diaDaSemana = date("w");

//vou colocar um switch e a condição dele, pode ser o diaDaSemana.

switch (condição){
    case 0:
    echo "domingo";
    break;

    case 1:
    echo "segunda";
    break;

    //e assim vai colocando os casos. O break serve para parar o switch quando for a condição.

   //caso precise, utiliza o default que serve quando nenhum caso é realizado.
   default:
   echo "data inválida";
   break;

   }
?>
