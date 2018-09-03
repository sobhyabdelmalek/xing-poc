<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function scopeBestWeather($query)
    {
    	$bestMatch = "name, if( `temp` > 17 and `humidity` < 80 and `wind` < 2 , 30, 40) as weight";

        return $query->selectRaw($bestMatch)
					->orderBy('weight', 'asc')
					->value('name');
    }
}
