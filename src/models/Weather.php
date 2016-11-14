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
     * @return string
     */
    public function weatherMan()
    {
        $json_string = file_get_contents("http://api.wunderground.com/api/4dd8685754031ba8/geolookup/conditions/q/MI/Detroit.json");
        $parsed_json = json_decode($json_string);

        $weatherInfo = [
            'city' => $parsed_json->{'location'}->{'city'},
            'state' => $parsed_json->{'location'}->{'state'},
            'temp_f' => $parsed_json->{'current_observation'}->{'temp_f'}
            ];

        return $weatherInfo;
    }
}
