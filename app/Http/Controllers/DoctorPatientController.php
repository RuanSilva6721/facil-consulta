<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorPatientRequest;
use App\Http\Requests\UpdateDoctorPatientRequest;
use App\Models\DoctorPatient;

class DoctorPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorPatientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DoctorPatient $doctorPatient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DoctorPatient $doctorPatient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorPatientRequest $request, DoctorPatient $doctorPatient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DoctorPatient $doctorPatient)
    {
        //
    }
}
