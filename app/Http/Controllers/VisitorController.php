<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorInformation;

class VisitorController extends Controller
{
    public function getVisitorInformations(){
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $result = VisitorInformation::insert([
            'ip_address'=>$ipAddress,
            'visit_time'=>date("h:i:sa"),
            'visit_date'=>date("d-m-Y"),
        ]);

        return $result;
    }
}
