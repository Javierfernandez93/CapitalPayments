# CapitalPayments
This Api has been made Crypto Payments based on USDT.TRC20

# Install with composer 
> composer require capitalpayments/sdk:dev-main

# Login with API 

```
include __DIR__ . "/../vendor/autoload.php";
$Sdk = new CapitalPayments\Sdk\Sdk('api_key','api_secret');
$response = $Sdk->getBalance();

```
