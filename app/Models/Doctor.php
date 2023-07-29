<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'specialty', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'doctor_patients', 'doctor_id', 'patient_id');
    }
}
