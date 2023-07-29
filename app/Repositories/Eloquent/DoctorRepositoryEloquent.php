<?php
namespace App\Repositories\Eloquent;
use App\Models\Doctor;
use App\Repositories\DoctorRepository;
use Illuminate\Support\Facades\DB;


class DoctorRepositoryEloquent implements DoctorRepository
{
    public function getDoctors(){
        return Doctor::all();
    }
    public function getDoctorsOfCity($id){
        return DB::table('doctors')
        ->where('city_id', 'like', $id)
        ->get();
    }
    
}