<?php

class Pessoa{

    public  $nome = "teste";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this ->nome. "<br/>";
        echo $this ->idade. "<br/>";
        echo $this ->senha. "<br/>";


    }


}
class Programador   extends Pessoa{

    public function verDados(){

        echo $this ->nome. "<br/>";
        echo $this ->idade. "<br/>";
        echo $this ->senha. "<br/>";

        echo get_class($this). "<br/>";


    }


}
    $objeto = new Programador();

        #echo $objeto->idade . "<br/>";

    $objeto->verDados();


