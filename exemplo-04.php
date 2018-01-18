<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($velocidade);


}
abstract class Automovel implements Veiculo{

    public function acelerar($velocidade)
    {
        // TODO: Implement acelerar() method.
        echo "Acelerando até: " . $velocidade . "km/h";
    }

    public function freiar($velocidade)
    {
        // TODO: Implement freiar() method.

        echo "Frenagem até: ". $velocidade . "km/h";
    }

    public function trocarMarcha($marcha)
    {
        // TODO: Implement trocarMarcha() method.

        echo "Trocando de marcha" . $marcha;

    }

}

class Gol extends Automovel{

    public function empurrar(){


    }
}
$carro  = new Gol();
$carro->acelerar(200)

?>