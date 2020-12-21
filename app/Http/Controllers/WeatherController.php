<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function list()
    {
        $data = Http::get('http://api.weatherapi.com/v1/forecast.json?key=5f73d1590ee34c23a73110210201912&q=[lat],[long]&days=2')->json();
        return view('content', ['data' => $data]);
    }

    public function show(Request $request)
    {
        try {
            $country = $request->search;

            $url = "http://api.weatherapi.com/v1/forecast.json?key=5f73d1590ee34c23a73110210201912&q=$country&days=2";
            $arr = file_get_contents($url);
            $jsonData = json_decode($arr);

            $weatherToday = $jsonData->forecast->forecastday[0]->day->condition->text;
            $weatherTomorrow = $jsonData->forecast->forecastday[1]->day->condition->text;
        } catch (\Exception $e) {
            return view('content', ['error' => "Country doesn't exist, try again"]);
        }

        return view('content', ['country' => $country, 'weatherToday' => $weatherToday,
            'weatherTomorrow' => $weatherTomorrow]);
    }
}
