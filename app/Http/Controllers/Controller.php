<?php

namespace App\Http\Controllers;

use App\Models\demandeProtectionFamiliale;
use App\Models\demandeProtectionFamilialeArchived;
use App\Models\demandeProtectionSocial;
use App\Models\demandeProtectionSocialeArchived;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        $rejected_requests = demandeProtectionSocial::where('status','-1')->get()->count();
        $rejected_requests += demandeProtectionSocialeArchived::where('status','-1')->get()->count();
        $rejected_requests += demandeProtectionFamiliale::where('status','-1')->get()->count();
        $rejected_requests += demandeProtectionFamilialeArchived::where('status','-1')->get()->count();
        $accepted_requests = demandeProtectionSocial::where('status','2')->get()->count();
        $accepted_requests += demandeProtectionSocialeArchived::where('status','2')->get()->count();
        $accepted_requests += demandeProtectionFamiliale::where('status','2')->get()->count();
        $accepted_requests += demandeProtectionFamilialeArchived::where('status','2')->get()->count();
        $all_requests = demandeProtectionSocial::all()->count();
        $all_requests += demandeProtectionFamiliale::all()->count();
        $all_requests += demandeProtectionFamilialeArchived::all()->count();
        $all_requests += demandeProtectionSocialeArchived::all()->count();
        return view('welcome',compact('rejected_requests','accepted_requests','all_requests'));
    }
}
