<?php
/**
 * Created by IntelliJ IDEA.
 * User: cti
 * Date: 18/01/18
 * Time: 09:45
 */


spl_autoload_register(function ($nameClass){

    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

    if (file_exists($filename)){

        require_once ($filename);

    }
});