<?php
namespace App\Repositories\Eloquent;
use App\Models\Doctor;
use App\Models\DoctorPatient;
use App\Repositories\DoctorPatientRepository;
use Illuminate\Support\Facades\DB;


class DoctorPatientRepositoryEloquent implements DoctorPatientRepository
{
    public function linkPatientToDoctor($id, $patientId){
        $doctorPatient = new  DoctorPatient();

        $doctorPatient->doctor_id = $id;
        $doctorPatient->patient_id = $patientId;
        $doctorPatient->save();

        return $doctorPatient;
    }
    
}