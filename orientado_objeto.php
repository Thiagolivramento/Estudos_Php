<?php

/*pequeno estudo sobre orientação ao objeto em php
* contemplando algumas características de como realizar.
* dentro do php existem as classes e os objetos
ex: classe - pessoa... objeto - thiago
dentro das classes existem os campos e os metodos
campos são as variaveis e o metodos as funções.
*/

//criando uma classe

class Pessoa{
    public $nome; //public informa que a variavel é publica.
    public $idade;
//função falar nome
    public function falarNome() {
        echo $this->nome; //o $this-> informa que o atributo/campo nome que está sendo exibido diz questão ao escopo local.
    }
    public function falarIdade(){
        echo $this->idade;
    }
}

$uma_pessoa = new Pessoa; //new significa que estou criando um objeto para a classe pessoa.
$uma_pessoa->nome = "Thiago";/* aqui o objeto  está recebendo a string thiago para ser alocada
na posição nome da classe pessoa. O mesmo ocorre na idade.
*/
$uma_pessoa->idade = 36;

var_dump($uma_pessoa); //estou vendo qual é o tipo e tamanho da variavel uma pessoa.

// para chamar a função que está dentro da classe, utilizar exemplo abaixo. Lembrar de excluir o var_dump.

$uma_pessoa-> falarNome();
$uma_pessoa-> falarIdade();//chamando a função falar idade.
