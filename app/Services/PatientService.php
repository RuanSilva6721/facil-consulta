<?php
namespace App\Services;

use App\Repositories\PatientRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PatientService
{
    private $patientRepository;

    public function __construct(PatientRepository $patientRepository){
        $this->patientRepository = $patientRepository;
    }
    public function updatePatient($id, $request)
    {
        $data = $request->all();
        return $this->patientRepository->updatePatient($id, $data);
    }
    public function createPatient($request)
    {
        $data = $request->all();
        return $this->patientRepository->createPatient($data);
    }

}