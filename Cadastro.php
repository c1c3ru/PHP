<?php
/**
 * Created by IntelliJ IDEA.
 * User: cti
 * Date: 18/01/18
 * Time: 09:52
 */

class Cadastro
{

    private $nome;
    private $email;
    private $senha;


    public function getNome(): string{

        return $this->nome;

    }

    public function getEmail():string{

        return $this->email;

    }

    public function getSenha():string{

        return $this->senha;

    }

    public function setNome($nome){

        return $this->nome = $nome;

    }

    public function setEmail($email){

        return $this->email = $email;

    }

    public function setSenha($senha){

        return $this->senha = $senha;

    }

    public function  __toString()
    {
        // TODO: Implement __toString() method.
        return jason_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));
    }

}





































