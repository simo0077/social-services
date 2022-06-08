<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\demandeBourse;
use App\Models\demandeProtectionSocial;
use Illuminate\Http\Request;

class BourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.bourse');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'cin' => ['required','unique:demande_protection_socials'],
            'sexe' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'school'=>'required',
            'level' => 'required',
            'birthday'=>'required|before_or_equal:2004-01-01',
            'parentsSalary' => ['required','lt:8000'],
            'imagecin' => ['required','image'],
            'pdfsalaryattestation' => ['mimes:doc,pdf,docx,zip','required']
        ]);

        $imagePath1=request('imagecin')->store('uploads/bourse/cin','public');
        $data['imagecin'] = $imagePath1;
        $imagePath2=request('pdfsalaryattestation')->store('uploads/bourse/salaryAttestation','public');
        $data['pdfsalaryattestation'] = $imagePath2;
        demandeBourse::create($data);
        $success = true;
        return redirect()->route('bourse')->with( ['success' => $success] );
    }
    public function updateStatus($request){
        $demande = $request['demande'];
        $newDemande = demandeBourse::find($demande['id']);
        $newDemande -> status = $demande['status'];
        $newDemande -> message = $demande['message'];
        $newDemande->save();
        return $newDemande;
    }
    public function updateStatusApi(Request $request){
        $demande = $request->demande;
        $newDemande = demandeBourse::find($demande['id']);
        $newDemande -> status = $demande['status'];
        $newDemande -> message = $demande['message'];
        $newDemande->save();
        return $newDemande;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
