<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Helpers\WeatherService;
use App\Models\City;

class WeatherController extends Controller
{
    
    /**
     * [storeCitiesWeather store weather for each city]
     * @param  WeatherService $weatherService
     * @return void
     */
    public function storeCitiesWeather(WeatherService $weatherService)
    {
        $CitiesWeatherList = $weatherService->getWeatherForCities();

        $weatherService->saveCitiesWeather($CitiesWeatherList['list']);

        return view('weather.update');
    }

    /**
     * get city which has high temp
     *  then low wind and humidity
     * @return [view]
     */
    public function getBestWeather()
    {
    	$city = City::bestWeather();

    	return view('weather.best', ['city' => $city]);
    }

    public function index()
    {
    	$cities = City::all()->toArray();

    	return view('weather.cities', ['cities' => $cities]);
    	
    }
}
