<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(Train::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        dd($train);
    }

}
