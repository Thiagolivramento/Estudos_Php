<?php

function nome_da_funcao(/*parametros*/){

//aqui dentro vai o que a função vai executar.

}

nome_da_funcao(); //estou chamando a função. 

//exemplo abaixo:

function salario(){

    return 980.00;
 }

 echo "Você recebeu de salario: ".(salario()*3);

//caso queira passar parametros para a função, exemplo abaixo:

function ola($texto){

    return "Olá $texto";

}

echo ola("mundo");
echo ola("Thiago");

// os comandos acima irão imprimir - olá mundo e olá Thiago.
