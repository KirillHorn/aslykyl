<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;


class TourController extends Controller
{
    public function index()
    {
        $tour = Tour::all();
        return view("index", [
            "tour"=>$tour,
        ]);
    }
    public function inftour($id_tour){
        $tours = Tour::find($id_tour);
        return view("tour",["tour"=>$tours]);
    }
}
