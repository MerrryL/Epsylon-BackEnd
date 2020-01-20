<?php

namespace App\Http\Controllers;

use App\Procurable;
use Illuminate\Http\Request;

class ProcurableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procurables=Procurable::All();
        foreach($procurables as $procurable){
            $procurable->type;
        }
        return json_encode($procurables);
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
     * @param  \App\Procurable  $procurable
     * @return \Illuminate\Http\Response
     */
    public function show(Procurable $procurable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procurable  $procurable
     * @return \Illuminate\Http\Response
     */
    public function edit(Procurable $procurable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procurable  $procurable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procurable $procurable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Procurable  $procurable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procurable $procurable)
    {
        //
    }
}
