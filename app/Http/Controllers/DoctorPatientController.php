<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorPatientRequest;
use App\Http\Requests\UpdateDoctorPatientRequest;
use App\Models\DoctorPatient;
use App\Services\DoctorPatientService;
use Exception;
use Illuminate\Http\Request;

class DoctorPatientController extends Controller
{
    private $doctorPatientService;

    public function __construct(DoctorPatientService $doctorPatientService)
    {
        $this->doctorPatientService = $doctorPatientService;
    }
    public function linkPatientToDoctor($id, Request $request)
    {
        try {
            return $this->doctorPatientService->linkPatientToDoctor($id, $request);
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }
    public function getPatientOfDoctor($id)
    {
        try {
            return $this->doctorPatientService->getPatientOfDoctor($id);
        } catch (\Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }
}
