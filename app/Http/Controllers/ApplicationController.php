<?php

namespace App\Http\Controllers;

use App\Models\application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function new_applications (Request $request) {

        $applications = $request->all();
        application::create ([
            "name" => $applications["name"],
            "surname" => $applications["surname"],
            "tour_id" => $applications["tour_id"],
            "amount" => $applications["amount"]
        ]);

        return redirect("/");
    }
}
