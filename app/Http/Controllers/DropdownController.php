<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\Country;
use App\Models\State;
use App\Models\City;

class DropdownController extends Controller
{
    public function index() {
        return view ('index');
    }

    public function gCountry() {
        return view ('country');
    }

    public function sCountry(Request $request) {
        $country = new Country;
        $country->name = $request->country;
        $country->save();

        return redirect()->route('getCountry');
    }

    public function gState() {
        $countryList = Country::orderBy('name', 'asc')->get();
        return view ('state', compact('countryList'));
    }

    public function sState(Request $request) {
        $state = new State;
        $state->state = $request->state;
        $state->country_id = $request->country_id;
        $state->save();

        return redirect()->route('getState');
    }

    public function gCity() {
        // $allSubCategory = DB::table('states')->orderBy('id', 'DESC')
        //             ->join('states', 'states.country_id', '=', 'countries.id')
        //             ->select('states.state', 'countries.id')
        //             ->get();

        $allState = State::orderBy('state', 'asc')->get();
        
        $countryList = Country::orderBy('name', 'asc')->get();
         
        
        return view ('city', compact('countryList', 'allState'));
    }

    public function sCity(Request $request) {
        $city = new City;
        $city->city = $request->city;
        $city->country_id = $request->country_id;
        $city->state_id = $request->state_id;
        $city->save();

        return redirect()->route('getCity');
    }
}
