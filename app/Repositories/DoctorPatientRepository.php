<?php
namespace App\Repositories;


interface DoctorPatientRepository
{
    public function linkPatientToDoctor($id, $patientId);
    public function getPatientOfDoctor($id);
    
}