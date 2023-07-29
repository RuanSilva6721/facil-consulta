<?php
namespace App\Repositories;


interface DoctorRepository
{
    public function getDoctors();
    public function getDoctorsOfCity($id);
    
}