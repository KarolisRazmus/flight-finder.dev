<?php

namespace App\Http\Controllers;

use App\ApAirline;
use Illuminate\Http\Request;

class ApAirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airlines = ApAirline::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ApAirline  $apAirline
     * @return \Illuminate\Http\Response
     */
    public function show(ApAirline $apAirline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApAirline  $apAirline
     * @return \Illuminate\Http\Response
     */
    public function edit(ApAirline $apAirline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApAirline  $apAirline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApAirline $apAirline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApAirline  $apAirline
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApAirline $apAirline)
    {
        //
    }
}
