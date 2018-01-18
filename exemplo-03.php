<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($velocidade);


}
class Civic implements Veiculo{

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

$carro = new Civic();
$carro->trocarMarcha(1);

?>