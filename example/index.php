<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

error_reporting(E_ALL);

include __DIR__ . "/../vendor/autoload.php";

echo "<pre>";

$Sdk = new CapitalPayments\Sdk\Sdk('mnz6TvEp2MidgjPO','/cJO6a3P5PDy289fEWMo4WP8a3VLI6N8SULuazyteJy55cjxF8Bertn2dSAS+agtPxcrNFLPX1n9nkDt17mkdw==:VEFMRU5UT1VNQlJFTExBMg==');

print_r($Sdk->getBalance());
// print_r($Sdk->getEnvironment());
// print_r($Sdk->createInvoice([
//     'invoice_id' => 'GC-123',
//     'amount' => 120
// ]));
// print_r($Sdk->login());
