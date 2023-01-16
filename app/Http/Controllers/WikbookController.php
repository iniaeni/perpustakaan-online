<?php

namespace App\Http\Controllers;

use App\Models\Wikbook;
use Illuminate\Http\Request;

class WikbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.index');
    }

    public function register()
    {
        return view('dashboard.register');
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
     * @param  \App\Models\Wikbook  $wikbook
     * @return \Illuminate\Http\Response
     */
    public function show(Wikbook $wikbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wikbook  $wikbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Wikbook $wikbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wikbook  $wikbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wikbook $wikbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wikbook  $wikbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wikbook $wikbook)
    {
        //
    }
}
