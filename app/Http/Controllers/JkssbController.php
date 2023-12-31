<?php

namespace App\Http\Controllers;

use App\Models\JkssbMcq;
use Illuminate\Http\Request;

class JkssbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return JkssbMcq::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return JkssbMcq::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
