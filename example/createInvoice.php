<?php

include __DIR__ . "/../vendor/autoload.php";

$Sdk = new CapitalPayments\Sdk\Sdk('mnz6TvEp2MidgjPO','/cJO6a3P5PDy289fEWMo4WP8a3VLI6N8SULuazyteJy55cjxF8Bertn2dSAS+agtPxcrNFLPX1n9nkDt17mkdw==:VEFMRU5UT1VNQlJFTExBMg==');

# creates a new payment and retrieves the data and url payment 
$response = $Sdk->createInvoice([
    'invoice_id' => 'InvioceID-InvoiceNumber', # @string
    'amount' => 47 # float|int
]);
