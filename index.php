<?php
/**
 * Created by IntelliJ IDEA.
 * User: cti
 * Date: 18/01/18
 * Time: 10:18
 */
require_once ("config.php");
$cad = new Cadastro();

$cad->getNome("teste da silva");
$cad->setEmail("teste@teste.com");
$cad->getSenha("123456");