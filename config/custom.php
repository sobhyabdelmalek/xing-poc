<?php

return [

'weather_service' => [
	'base_url' => env('WEATHER_BASE_URL', 'http://api.openweathermap.org/'),
	'api' => env('WEATHER_API', 'data/2.5/group?id=524901,703448,2643743,3220838,2172797&units=metric&APPID=7918b8de7598d84448acbb034c1c54c7')
] 

];
