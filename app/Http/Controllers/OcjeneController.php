<?php

namespace App\Http\Controllers;

use App\Models\Ocjene;
use Illuminate\Http\Request;

class OcjeneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ocjene = Ocjene::all();

        return view('index', compact("ocjene"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dodaj-ocjenu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'predmet' => 'required|string',
            'ocjena' => 'required|int|min:1|max:5',
            'profesor' => 'required|string',
        ]);

        Ocjene::create($request->all());

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
