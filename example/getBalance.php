<?php

include __DIR__ . "/../vendor/autoload.php";

$Sdk = new CapitalPayments\Sdk\Sdk('mnz6TvEp2MidgjPO','/cJO6a3P5PDy289fEWMo4WP8a3VLI6N8SULuazyteJy55cjxF8Bertn2dSAS+agtPxcrNFLPX1n9nkDt17mkdw==:VEFMRU5UT1VNQlJFTExBMg==');

# get the balance from the api
$response = $Sdk->getBalance();
