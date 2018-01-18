<?php
/**
 * Created by IntelliJ IDEA.
 * User: cti
 * Date: 17/01/18
 * Time: 13:23
 */
function __autoload($nomeClasse){

    require_once ("$nomeClasse.php");
    //var_dump("$nomeClasse");
}

$carro = new Gol();

$carro->acelerar(80);