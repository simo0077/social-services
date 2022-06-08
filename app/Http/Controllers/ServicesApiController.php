<?php

namespace App\Http\Controllers;

use App\Http\Controllers\services\BourseController;
use App\Http\Controllers\services\ProtectionFamilialeController;
use App\Http\Controllers\services\ProtectionSocialController;
use App\Models\demandeBourse;
use App\Models\demandeProtectionFamiliale;
use App\Models\demandeProtectionSocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServicesApiController extends Controller
{
    public function socialProtectionApi($id){
        $demande = demandeProtectionSocial::find($id);
        if($demande->status==1){
            $rand = rand(0,1);
            $status = $rand==0?'-1':'2';
            $demande['status'] = $status;
            $message_error = "This document is incorrect missing please correct it";
            $message_success="Please come take your social protection card from the x place";
            $message = $rand==0 ? $message_error: $message_success;
            $demande['message'] = $message;
            $request = array('demande'=>$demande);
            $demande_returned =(new ProtectionSocialController)->updateStatus($request);
            return $demande_returned;
        }

    }
    public function familialProtectionApi($id){
        $demande = demandeProtectionFamiliale::find($id);
        if($demande->status==1){
            $rand = rand(0,1);
            $status = $rand==0?'-1':'2';
            $demande['status'] = $status;
            $message_error = "This document is incorrect missing please correct it";
            $message_success="Please come take your famial protection card from the x place";
            $message = $rand==0 ? $message_error: $message_success;
            $demande['message'] = $message;
            $request = array('demande'=>$demande);
            $demande_returned =(new ProtectionFamilialeController)->updateStatus($request);
            return $demande_returned;
        }

    }
    public function bourseApi($id){
        $demande = demandeBourse::find($id);
        if($demande->status==1){
            $rand = rand(0,1);
            $status = $rand==0?'-1':'2';
            $demande['status'] = $status;
            $message_error = "Yhis document is incorrect missing please correct it";
            $message_success="You are accepted for the scholarship, for more information please visit us on example.com";
            $message = $rand==0 ? $message_error: $message_success;
            $demande['message'] = $message;
            $request = array('demande'=>$demande);
            $demande_returned =(new BourseController)->updateStatus($request);
            return $demande_returned;
        }

    }
}
