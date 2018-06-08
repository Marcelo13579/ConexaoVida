<?php

namespace conexaovida\Http\Controllers;

use conexaovida\Orgaos;
use Illuminate\Http\Request;

class OrgaosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orgaos = Orgaos::all()->sortByDesc("id");

        
       return view('doadoresorgaos', ['orgaos' => $orgaos]);
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
        \conexaovida\Orgaos::create($request->all());

        return redirect()->route('cadastroorgaos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \conexaovida\Orgaos  $orgaos
     * @return \Illuminate\Http\Response
     */
    public function show(Orgaos $orgaos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \conexaovida\Orgaos  $orgaos
     * @return \Illuminate\Http\Response
     */
    public function edit(Orgaos $orgaos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \conexaovida\Orgaos  $orgaos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orgaos $orgaos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \conexaovida\Orgaos  $orgaos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orgaos $orgaos)
    {
        //
    }
}
