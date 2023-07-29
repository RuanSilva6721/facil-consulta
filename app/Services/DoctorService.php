<?php
namespace App\Services;

use App\Repositories\DoctorRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class DoctorService
{
    private $doctorRepository;

    public function __construct(DoctorRepository $doctorRepository){
        $this->doctorRepository = $doctorRepository;
    }
    public function getDoctors()
    {
        return $this->doctorRepository->getDoctors();
    }
    public function getDoctorsOfCity($id)
    {
        return $this->doctorRepository->getDoctorsOfCity($id);
    }

}