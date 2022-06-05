<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\demandeProtectionFamiliale;
use App\Models\demandeProtectionSocial;
use Illuminate\Http\Request;

class ProtectionFamilialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.familial-protection');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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
            'profession' => 'required',
            'birthday'=>'required|before_or_equal:2002-01-01',
            'salary' => ['required','lt:3000'],
            'imagecin' => ['required','image']
        ]);
        //demandeProtectionSocial::create($data);

        $imagePath=request('imagecin')->store('uploads/familial-protection','public');
        $data['imagecin'] = $imagePath;
        demandeProtectionFamiliale::create($data);
        $success = true;
        return redirect()->route('familial-protection')->with( ['success' => $success] );
    }
    public function updateStatus($request){
        $demande = $request['demande'];
        $newDemande = demandeProtectionFamiliale::find($demande['id']);
        $newDemande -> status = $demande['status'];
        $newDemande -> message = $demande['message'];
        $newDemande->save();
        return $newDemande;
    }
    public function updateStatusApi(Request $request){
        $demande = $request->demande;
        $newDemande = demandeProtectionFamiliale::find($demande['id']);
        $newDemande -> status = $demande['status'];
        $newDemande -> message = $demande['message'];
        $newDemande->save();
        return $newDemande;
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
