<?php
namespace App\Repositories\Eloquent;

use App\Models\Patient;
use App\Repositories\PatientRepository;
use Illuminate\Support\Facades\DB;


class PatientRepositoryEloquent implements PatientRepository
{
    public function updatePatient($id, $data){

        $patient = Patient::find($id);
        $patient->update($data);

        return $patient;
    }
    public function createPatient($data){
        
        $patient = new Patient();
        $patient->name = $data['name'];
        $patient->cpf = $data['cpf'];
        $patient->phone = $data['phone'];
        $patient->save();

        return $patient;
    }
    
}