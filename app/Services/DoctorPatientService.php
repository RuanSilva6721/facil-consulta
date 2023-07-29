<?php
namespace App\Services;

use App\Repositories\DoctorPatientRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class DoctorPatientService
{
    private $doctorPatientRepository;

    public function __construct(DoctorPatientRepository $doctorPatientRepository){
        $this->doctorPatientRepository = $doctorPatientRepository;
    }
    public function linkPatientToDoctor($id, $request)
    {
        $data = $request->all();
        $patientId = $data['paciente_id'];

        return $this->doctorPatientRepository->linkPatientToDoctor($id, $patientId);
    }

}