<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Country,State,City};

class DropdownController extends Controller
{
    public function index() {
        $data['countries'] = Country::get(['name', 'id']);
        return view ('index', $data);
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
        $data['countries'] = Country::get(['name', 'id']);
        return view ('state', $data);
    }

    public function sState(Request $request) {
        $state = new State;
        $state->name = $request->state;
        $state->country_id = $request->country_id;
        $state->save();

        return redirect()->route('getState');
    }

    public function gCity(Request $request) {
        $data['countries'] = Country::get(['name', 'id']);
        return view ('city', $data);
    }

    public function sCity(Request $request) {
        $city = new City;
        $city->city = $request->city;
        $city->country_id = $request->country_id;
        $city->state_id = $request->state_id;
        $city->save();

        return redirect()->route('getCity');
    }

    public function fetchState(Request $request) {
        $data['states'] = State::orderBy('name', 'asc')
            ->where('country_id', $request->country_id)
            ->get(['name', 'id']);

        return response()->json($data);
    }

    public function fetchCity(Request $request) {

        $data['cities'] = City::orderBy('city', 'asc')
            ->where('state_id', $request->state_id)
            ->get(['city', 'id']);

        return response()->json($data);
    }
}
