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
        $validator = Validator::make($request->all(), [
            'paciente_id' => 'required|numeric'
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 400);
        }
        $data = $request->all();
        $patientId = $data['paciente_id'];

        return $this->doctorPatientRepository->linkPatientToDoctor($id, $patientId);
    }
    public function getPatientOfDoctor($id)
    {
        return $this->doctorPatientRepository->getPatientOfDoctor($id);
    }

}