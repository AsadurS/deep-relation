<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = Country::with(['shops'])->take(3)->get();
        $cities = Country::with(['shops.employees'])->take(3)->get();
        $cities = Country::with([ 'employees'])->take(3)->get();
        $cities = Country::with(['addresses'])->take(3)->get();


        return view('welcome', compact('cities'));
    }


}
