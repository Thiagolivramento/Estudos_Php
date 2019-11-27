<?php

/* as constantes no php devem ser declaradas como case sensitive
ou como não sendo case sensitive
*/

define ("nome_da_constante", "valor_da_constante");

echo "nome_da_constante"; //imprime o valor da constante. Convenção- nome em maiusculo.

/* no php 7 é possivel fazer uma constante array.
Abaixo segue um exemplo*/

define ("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

print_r(BANCO_DE_DADOS);// imprimindo a constate array.

//php também tem constantes pré definidas.

