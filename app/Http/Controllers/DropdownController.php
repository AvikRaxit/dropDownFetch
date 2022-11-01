<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

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
}
