<?php

namespace App\Http\Controllers;

use App\Persona;
Use App\AnioEscolar;
use App\PersonRole;
use Illuminate\Http\Request;

class PersonRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('personas.create');
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
     * @param  \App\PersonRole  $personRole
     * @return \Illuminate\Http\Response
     */
    public function show(PersonRole $personRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonRole  $personRole
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonRole $personRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonRole  $personRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonRole $personRole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonRole  $personRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonRole $personRole)
    {
        //
    }
}