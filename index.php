<?php

    require("Carro.php");
    
    $carro = new Carro();
    
    $carro->Ligar();
    
    $carro->Acelerar();
    $carro->Acelerar();
    $carro->Acelerar();
    $carro->Desacelerar();
 
    $carro->Desligar();
    
    $carro->Desacelerar();
    
    $carro->Ligar();
    
    $carro->Acelerar();
    
    echo "Ligado: ".$carro->getLigado();
    echo "Velocimentro: ".$carro->getVelocimetro();

?>
