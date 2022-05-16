<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExchangeRate extends Controller
{
    private $apikey = 'JAoFsUhibrtcLbPHF8EOHWxBjp6sE0w1';
    public $url = "https://api.apilayer.com/fixer/latest";
    public $base_currency;
    public $symbols;
    private $httpHeader = [];
    private $curl;

    public function __construct(){
        $this->base_currency = 'INR';
        $this->symbols = 'USD';
        $this->curl = curl_init();
        // var_dump($this->curl);
    }

    public function setHeader(){
        $this->httpHeader['Content-Type'] = "text/plain";
        $this->httpHeader['apikey'] = $this->apikey;
        // echo $this->url . "?symbols=".$this->symbols."&base=".$this->base_currency;
        $this->curl_setopt_array();
    }

    private function curl_setopt_array(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.apilayer.com/fixer/latest?symbols=INR%2CGBP%2CCAD&base=USD",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain",
            "apikey: JAoFsUhibrtcLbPHF8EOHWxBjp6sE0w1"
        ),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        var_dump($response);
        echo $response;
    }
}
