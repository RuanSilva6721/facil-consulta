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
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'cpf' => 'required|max:20',
            'phone' => 'required|max:20'
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 400);
        }
        $data = $request->all();
        return $this->patientRepository->updatePatient($id, $data);
    }
    public function createPatient($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'cpf' => 'required|max:20',
            'phone' => 'required|max:20'
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 400);
        }
        $data = $request->all();
        return $this->patientRepository->createPatient($data);
    }

}