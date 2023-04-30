<?php 

namespace CapitalPayments\Sdk;

use CapitalPayments\Sdk\UrlManager;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Exception;

class Sdk {
    private $api_key = 'SET_YOUR_API_KEY';
    private $api_secret = 'SET_YOUR_API_SECRET';
    
    public function __construct(string $api_key = null,string $api_secret = null)
    {
        if(isset($api_key) === true)
        {
            if(isset($api_secret) === true)
            {
                $this->api_key = $api_key;
                $this->api_secret = $api_secret;
            } else {
                throw new Exception('Invalid API Secret');
            }
        } else {
            throw new Exception('Invalid API Key');
        }
    }

    public function login() : array
    {
        $Client = new Client(['verify' => true, 'auth' => [$this->api_key, $this->api_secret]]);

        $response = $Client->get(UrlManager::LOGIN);

        if($response->getStatusCode() == 200) 
        {
            return json_decode($response->getBody()->getContents(),true);
        }

        return [];
    }

    public function createInvoice(array $data = null) : array
    {
        if(isset($data['amount'])) 
        {
            if(is_numeric($data['amount'])) 
            {
                $Client = new Client(['verify' => true, 'auth' => [$this->api_key, $this->api_secret]]);

                $response = $Client->post(UrlManager::CREATE_INVOICE, [
                    RequestOptions::JSON => $data
                ]);

                if($response->getStatusCode() == 200) 
                {
                    return json_decode($response->getBody()->getContents(),true);
                }

                return [];
            } else {
                throw new Exception('Invalid amount format');
            }
        } else {
            throw new Exception('Invalid amount');
        }
    }
    
    public function getBalance(array $data = null) : array
    {
        $Client = new Client(['verify' => true, 'auth' => [$this->api_key, $this->api_secret]]);

        $response = $Client->post(UrlManager::GET_BALANCE, [
            RequestOptions::JSON => $data
        ]);

        if($response->getStatusCode() == 200) 
        {
            return json_decode($response->getBody()->getContents(),true);
        }

        return [];
    }

    public function getInvoiceStatus(array $data = null) : array
    {
        $Client = new Client(['verify' => true, 'auth' => [$this->api_key, $this->api_secret]]);

        $response = $Client->post(UrlManager::GET_BALANCE, [
            RequestOptions::JSON => $data
        ]);

        if($response->getStatusCode() == 200) 
        {
            return json_decode($response->getBody()->getContents(),true);
        }

        return [];
    }
    
    public function getMainWallet(array $data = null) : array
    {
        $Client = new Client(['verify' => true, 'auth' => [$this->api_key, $this->api_secret]]);

        $response = $Client->post(UrlManager::GET_MAIN_WALLET, [
            RequestOptions::JSON => $data
        ]);

        if($response->getStatusCode() == 200) 
        {
            return json_decode($response->getBody()->getContents(),true);
        }

        return [];
    }
    
    public function getWallets(array $data = null) : array
    {
        $Client = new Client(['verify' => true, 'auth' => [$this->api_key, $this->api_secret]]);

        $response = $Client->get(UrlManager::GET_WALLETS);

        if($response->getStatusCode() == 200) 
        {
            return json_decode($response->getBody()->getContents(),true);
        }

        return [];
    }

    public function getEnvironment(array $data = null) : array
    {
        $Client = new Client(['verify' => true, 'auth' => [$this->api_key, $this->api_secret]]);

        $response = $Client->get(UrlManager::GET_ENVIRONMENT);

        if($response->getStatusCode() == 200) 
        {
            return json_decode($response->getBody()->getContents(),true);
        }

        return [];
    }
}