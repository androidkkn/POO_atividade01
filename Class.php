<?php
//O "$this" é tipo você falar que um atributo é conectado apenas naquele objeto. 

class Produtos //classe
{
    //atributo
    private string $nome;
    private float $preco;
    //metodo construct
    public function __construct(string $nome, float $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function mostrarProdutos() //Vai mostrar o objeto
    {
        echo $this->nome . "\n";
        echo $this->preco . "\n";
    }
}
//Criação dos objetos
$c1 = new Produtos("Lápis", 2.00); 
    $c1->mostrarProdutos();
$c2 = new Produtos("Borracha", 5.00);
    $c2->mostrarProdutos();
