<?php
/**
* Weather App using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\models;

class Weather
{
    /**
     * @param string $city
     * @param string $state
     * @return string
     */
    public function weatherMan($city, $state)
    {
        $city = str_replace(" ", "_", $city);
        $json_string = file_get_contents("http://api.wunderground.com/api/4dd8685754031ba8/geolookup/conditions/q/" . $state . "/" . $city . ".json");
        $parsed_json = json_decode($json_string);

        $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};

        $weatherInfo = [
            'city' => $parsed_json->{'location'}->{'city'},
            'state' => $parsed_json->{'location'}->{'state'},
            'temp_f' => $temp_f,
            'gif' => $this->weatherGif($temp_f)
            ];

        return $weatherInfo;
    }

    /**
     * @param float $temperature
     * @return string $temperatureGif
     */
    public function weatherGif($temperature)
    {
        if($temperature >= 60)
        {
            $temperatureGif = 'assets/sun.gif';
        }
        elseif($temperature < 60 && $temperature > 32)
        {
            $temperatureGif = 'assets/chilly.gif';
        }
        else
        {
            $temperatureGif = 'assets/cold.gif';
        }

        return $temperatureGif;
    }
}
