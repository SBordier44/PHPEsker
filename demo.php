<?php
require 'vendor/autoload.php';

use Esker\Common\Constant;
use Esker\Common\Debug;
use Esker\Common\Transport;
use Esker\Esker;

define('NL', chr(10));

$eskerServiceUsername = getenv('ESKER_USERNAME');
$eskerServicePassword = getenv('ESKER_PASSWORD');

$files = [
    'data/invoice.pdf'
];

$to = 'Entreprise XYZ' . NL . 'Service ABC' . NL . 'John DOE' . NL . '8 Rue de la pelouse verte' . NL . '44000 Nantes' . NL . 'France';
$from = 'NBB Lease' . NL . 'Service Commercial' . NL . '3 Avenue Hoche' . NL . '75008 Paris' . NL . 'France';
$subject = 'Nouvelle Facture';

try {
    $esker = new Esker($eskerServiceUsername, $eskerServicePassword, true);
    $esker->buildTransport(Transport::POSTAL_MAIL, [
        'Subject' => $subject,
        'FromBlockAddress' => $from,
        'ToBlockAddress' => $to,
        'Color' => 'Y',
        'Cover' => 'Y',
        'MaxRetry' => '3',
        'SenderAddress' => 'Y',
        'AskDepositProof' => 'Y',
        'AskReceipt' => 'Y',
        'Envelop' => 'C6',
        'ExpressProcessing' => 'N', // Express Sender for urgent mail
        'AskReceiptNotification' => 'Y',
        'StampType' => Constant::MAIL_TYPE['FR']['Recommande'],
        'ReceiptManageByFlyDoc' => 'Y'
    ], $files, true, 'TEST - Development');
    $results = $esker->submitTransport();
    Debug::dump($results);
} catch (Exception $e) {
    Debug::dump($e);
    die();
}
