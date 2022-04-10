<?php

namespace App\Http\Controllers;

use App\Providers\CovidStatisticProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Services\CovidStatistic\Client;

class HomeController extends Controller
{
    public function index(Client $covidStatistic) {
        $today = Carbon::now()->toDateString();

        $totalConfirmed = $covidStatistic->getTotalCasesByType('croatia', 'confirmed', $today);
        $totalDeaths = $covidStatistic->getTotalCasesByType('croatia', 'deaths', $today);
        $totalRecovered = $covidStatistic->getTotalCasesByType('croatia', 'recovered', $today);

        return view('index', [
            'totalConfirmed' => $totalConfirmed,
            'totalDeaths' => $totalDeaths,
            'totalRecovered' => $totalRecovered,
        ]);
    }
}
