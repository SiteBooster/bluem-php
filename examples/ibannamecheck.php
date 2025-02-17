<?php

require_once __DIR__ . '/initialization.php';


$iban = "NL66ABNA4097012428";
$name = "D. Jeroen Maarten";
$debtorReference = "1234";

$request = $bluem_object->CreateIBANNameCheckRequest(
    $iban,
    $name,
    $debtorReference
);

$response = $bluem_object->PerformRequest($request);

switch ($response->GetIBANResult()) {
case 'INVALID':
    echo "IBAN $iban and name $name do not match";
    break;
case 'KNOWN':
    break;
}
