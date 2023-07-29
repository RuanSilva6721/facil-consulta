<?php

namespace App\Http\Controllers;
use App\Services\CityService;
use Exception;

class CityController extends Controller
{
    private $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function getCities()
    {
        try {
            return $this->cityService->getCities();
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }

}
