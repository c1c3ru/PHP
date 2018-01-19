<?php
/**
 * Created by IntelliJ IDEA.
 * User: cti
 * Date: 18/01/18
 * Time: 10:18
 */
require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("teste da silva");
$cad->setEmail("teste@teste.com");
$cad->setSenha("123456");

$cad->registraVenda();