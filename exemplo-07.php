<?php
/**
 * Created by IntelliJ IDEA.
 * User: cti
 * Date: 17/01/18
 * Time: 13:40
 */


function incluirClasses($nomeClasse)
{

    if (file_exists("$nomeClasse" . ".php") === True) {


    require_once("$nomeClasse" . ".php");

}

}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse)

    if (file_exists("$nomeClasse" . ".php") === True) {
    require_once("$nomeClasse" .".php");
});


$carro = new Gol();

$carro->acelerar(80);