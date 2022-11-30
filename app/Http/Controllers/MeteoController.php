<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dnsimmons\OpenWeather\OpenWeather;

class MeteoController extends Controller
{
    public function show()
    {
        $weather = new OpenWeather();
        $current = $weather->getCurrentWeatherByCityName('Compiègne', 'metric', 'fr');
        
        return view('meteo.show')->with(['meteo' => $current]);
    }
}
