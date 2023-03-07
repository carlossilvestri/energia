<?php
   $phone = "919891119";
   $file = basename($_SERVER['PHP_SELF']);
   $page = str_replace(".php", "", $file);
   $footerInformation = "Puedes llamar al teléfono " .  $phone . " de forma totalmente gratuita y le atenderemos sin compromiso."; 
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
