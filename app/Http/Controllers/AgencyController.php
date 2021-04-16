<?php

namespace App\Http\Controllers;

use App\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    //
    public function store(Request $request){
        return Agency::create($request->all());
    }

    public function delete(Request $request){
        $agency = Agency::findOrFail($request->route('id'));
        $agency -> delete();
        return 204;
    }
}
