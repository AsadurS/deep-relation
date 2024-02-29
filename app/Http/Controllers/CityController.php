<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = Country::with(['shops.employees', 'employees'])->get();
        dd($cities[0]->employees);
        return view('welcome', compact('cities'));
    }


}
