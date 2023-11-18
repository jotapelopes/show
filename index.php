
<?php

require_once "Ingresso.php";
require_once "IngressoVip.php";
require_once "Evento.php";

$ingressoNormal = new Ingresso(50, "Show da Pipokinha");

$ingressoVip = new IngressoVip(50, "Inês Brazil");
$ingressoVip->setValorAdicional(2000);

$ingressoNormal->apresentar();
$ingressoVip->apresentarVip();

?>