<?php

namespace App\Services\CovidStatistic;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class Client
{
    protected string $uri;

    public function __construct(string $uri) 
    {
        $this->uri = $uri;
    }

    public function getTotalCasesByType(string $country, string $type, string $today)
    {

        $request = Http::get($this->uri."/total/country/${country}/status/${type}?from=${today}&to=${today}");

        $response = json_decode($request->getBody()->getContents());

        return $response[count($response) - 1];   
    }

}