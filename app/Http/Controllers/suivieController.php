<?php

namespace App\Http\Controllers;

use App\Models\demandeProtectionSocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class suivieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('suivie');

    }
    public function search(Request $request)
    {
        $cin = $request -> cin;
        $birthday = $request -> birthday;
        $demandes_social_protection = DB::select('select * from demande_protection_socials  where cin = :cin and birthday  = :birthday', ['cin' => $cin,'birthday'=>$birthday]);;
        $demandes_bourse = DB::select('select * from demande_bourses  where cin = :cin and birthday  = :birthday', ['cin' => $cin,'birthday'=>$birthday]);;
        $demandes_familial_protection = DB::select('select * from demande_protection_familiales  where cin = :cin and birthday  = :birthday', ['cin' => $cin,'birthday'=>$birthday]);;
        $demandes=array("demandes_social_protection"=>$demandes_social_protection,"demandes_familial_protection"=>$demandes_familial_protection,"demandes_bourse"=>$demandes_bourse);
        return $demandes;

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
