<?php

//comando for, usado como contador no php. Tem inicio e fim. dentro do paretese vai a condição do for.

for ($i = 0; $i < 10; $i++){

    echo $i . "<br>";

   }

/* outro exemplo de utilização do for:
* criando um botão cascata par selecionar o ano na page.
*/

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100; $i--){
    
    echo '<option value="'.$i.'">'.$i.'</option>';

 }

 echo "</select>"
