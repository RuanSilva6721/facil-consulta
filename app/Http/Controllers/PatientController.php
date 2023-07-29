<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;
use App\Services\PatientService;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    private $patientService;

    public function __construct(PatientService $patientService)
    {
        $this->patientService = $patientService;
    }
    public function updatePatient($id, Request $request)
    {
        try {
            return $this->patientService->updatePatient($id, $request);
        } catch (\Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }
    public function createPatient(Request $request)
    {
        try {
            return $this->patientService->createPatient($request);
        } catch (\Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }
}
