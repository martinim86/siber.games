<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;
    public $api_key_openweathermap = 'ec7de5a75a1b24401ec1257d6cdc7e6c';
    public $api_key_weatherapi = '7006a061fb48480ea80161901232605 ';
}

