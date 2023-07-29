<?php
namespace App\Services;

use App\Repositories\CityRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CityService
{
    private $cityRepository;

    public function __construct(CityRepository $cityRepository){
        $this->cityRepository = $cityRepository;
    }
    public function getCities()
    {
        return $this->cityRepository->getCities();
    }

}