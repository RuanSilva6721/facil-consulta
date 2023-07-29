<?php
namespace App\Repositories\Eloquent;
use App\Models\City;
use App\Repositories\CityRepository;


class CityRepositoryEloquent implements CityRepository
{
    public function getCities(){
        return City::all();
    }
    
}