<?php

namespace App\Http\Controllers;

use App\Model\Bairshil;
use Illuminate\Http\Request;

class BairshilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bairshil = Bairshil::orderBy('id', 'desc')->get();
        return view('admin.bairshil', compact('bairshil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bairshil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bairshil::create([
            'name' => $request->bairshil
        ]);
        return redirect()->route('admin.bairshil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Bairshil  $bairshil
     * @return \Illuminate\Http\Response
     */
    public function show(Bairshil $bairshil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Bairshil  $bairshil
     * @return \Illuminate\Http\Response
     */
    public function edit(Bairshil $bairshil)
    {
        $hayg = Bairshil::orderBy('id', 'desc')->get();
        return view('admin.bairshil_edit', compact(['bairshil', 'hayg']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Bairshil  $bairshil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bairshil $bairshil)
    {
        $bairshil->name = $request->bairshil;
        $bairshil->save();
        return redirect()->route('admin.bairshil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Bairshil  $bairshil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bairshil $bairshil)
    {
        $bairshil->delete();
        return redirect()->route('admin.bairshil.index');
    }
}
