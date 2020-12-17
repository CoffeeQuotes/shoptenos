<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoCompleteController extends Controller
{
    //
    /**
     * Display a listing of the resources.
     * @return \illuminate\Http\Response
     */
    public function index() {
        return view('autocomplete-search');
    }

    /**
     * Show the from for creating a new resources
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request) {

    }
}
