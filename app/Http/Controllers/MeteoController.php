<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dnsimmons\OpenWeather\OpenWeather;

class MeteoController extends Controller
{
    public function show()
    {
        $weather = new OpenWeather();
        $current = $weather->getCurrentWeatherByCityName('Paris');
        var_dump($current);
        die;
        
        return view('meteo.show')->with(['current' => $current]);
    }
}
