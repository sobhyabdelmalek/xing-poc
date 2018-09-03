<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class WeatherService
{
	/**
	 * call openweathermap api to get weather 
	 * @return [mixed] [array of weather for 5 cities]
	 */
	public function getWeatherForCities()
	{
		$client = new Client(
            [
                'base_uri' => config("custom.weather_service.base_url"),
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ]
        );

        $response = $client->request('GET', config("custom.weather_service.api"));

    	$cities = json_decode($response->getBody()->getContents(), true);

    	return $cities;
	}

	/**
	 * [saveCitiesWeather parse api data and insert
	 * to local db
	 * ]
	 * @param  [array] $citiesWeather
	 * @return void
	 */
	public function saveCitiesWeather($citiesWeather)
	{
		$weather = [];

		foreach ($citiesWeather as $index => $cityWeather) {
			$weather[$index]['name'] = $cityWeather['name'];
			$weather[$index]['temp'] = $cityWeather['main']['temp'];
			$weather[$index]['humidity'] = $cityWeather['main']['humidity'];
			$weather[$index]['wind'] = $cityWeather['wind']['speed'];
		}

		DB::statement("truncate table cities");
		DB::table('cities')->insert($weather);
	}

}
