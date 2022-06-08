<?php

namespace App\Http\Controllers;

use App\Models\demandeBourse;
use App\Models\demandeProtectionFamiliale;
use App\Models\demandeProtectionSocial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin');
    }

    public function socialProtection()
    {
        $demandes = demandeProtectionSocial::all();

        return view('admin.social-protection', compact('demandes'));
    }

    public function familialProtection()
    {
        $demandes = demandeProtectionFamiliale::all();

        return view('admin.familial-protection', compact('demandes'));
    }
    public function bourse()
    {
        $demandes = demandeBourse::all();

        return view('admin.bourse', compact('demandes'));
    }

}
