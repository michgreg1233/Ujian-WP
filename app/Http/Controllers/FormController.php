<?php

namespace App\Http\Controllers;

use App\Models\detail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'asal' => 'required',
            'dest' => 'required',
            'duration' => 'required',
            'transport' => 'required',
            'hotel' => 'required',
        ]);

        $data =[
            'name' => $request->input('name'),
            'qty' => $request->input('qty'),
            'asal' => $request->input('asal'),
            'dest' => $request->input('dest'),
            'duration' => $request->input('duration'),
            'transport' => $request->input('transport'),
            'hotel' => $request->input('hotel'),
        ];
        detail::create($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
