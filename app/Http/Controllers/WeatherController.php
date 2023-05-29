<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Weather;

class WeatherController extends Controller
{
    public function index(Request $request){

         if($request->title){
            try {
                $weather_model = new Weather();
                $breeds = Http::get('https://api.openweathermap.org/data/2.5/weather', [
                    'units' => 'metric',
                    'q' => $request->title,
                    'appid' => $weather_model->api_key_openweathermap,
                ])['main']['temp'];
                $weatherapi = Http::get('http://api.weatherapi.com/v1/current.json', [
                    'key' => $weather_model->api_key_weatherapi,
                    'q' => $request->title,
                    'aqi' => 'no',
                ])['current']['temp_c'];
                $avg = ($breeds + $weatherapi)/2;
                return view('weather', ["breeds"=>$breeds, 'city'=>$request->title, 'weatherapi'=>$weatherapi, 'avg'=>$avg]);
              
              } catch (\Exception $e) {
                $notcity = "There is no city with that name";
                return view('weather', ["notcity"=>$notcity]);
              }
            
        }
        return view('weather');
    }
}
