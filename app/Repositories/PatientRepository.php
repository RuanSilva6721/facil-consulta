<?php
namespace App\Repositories;


interface PatientRepository
{
    public function updatePatient($id, $data);
    
}