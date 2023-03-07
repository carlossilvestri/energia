<?php
   $phone = "11828";
   $file = basename($_SERVER['PHP_SELF']);
   $page = str_replace(".php", "", $file);
   $footerInformation = "Servicio de Información telefónica prestado por Duck Telecomunicaciones S.L. 3,03€ impuestos incluidos es el coste por minuto de esta llamada"; 
   $mainTitle = "Energía España Renovable";
    $titles = [
        "index.php" =>  $mainTitle . " | Inicio",
        "tarifas-de-gas.php" =>  $mainTitle . " | Tarifas de Gas",
        "tarifas-de-luz.php" =>  $mainTitle . " | Tarifas de Luz",
        "contacto.php" =>  $mainTitle . " | Información de Contacto",
        "politica-de-privacidad.php" =>  $mainTitle . " | Política de Privacidad",
        "aviso-legal.php" =>  $mainTitle . " | Aviso Legal"
    ];
    $pages = [
        "index.php" => "Inicio",
        "tarifas-de-gas.php" => "Tarifas de Gas",
        "tarifas-de-luz.php" => "Tarifas de Luz",
        "contacto.php" => "Información Contacto",
        "politica-de-privacidad.php" => "Política de Privacidad",
        "aviso-legal.php" => "Aviso Legal"
    ];
    $pagesHeader = [
        "index.php" =>  "Inicio",
        "tarifas-de-gas.php" =>  "Tarifas de Gas",
        "tarifas-de-luz.php" =>  "Tarifas de Luz",
        "contacto.php" =>  "Contacto",
    ];
