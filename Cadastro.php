<?php
/**
 * Created by IntelliJ IDEA.
 * User: cti
 * Date: 19/01/18
 * Time: 11:52
 */


namespace Cliente;

class Cadastro extends \Cadastro
{

    public function registraVenda(){

        echo "registrado!!". $this->getNome();
    }

}