<?php

namespace conexaovida\Http\Controllers;

use conexaovida\Doador;
use Illuminate\Http\Request;

class MessageController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $doadores = Doador::orderBy('id_doador', 'desc')->paginate(15);
        
        //$doadores = Doador::all()->sortByDesc("id");

        
       return view('doadoressangue', ['doadores' => $doadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        \conexaovida\Doador::create($request->all());

        return redirect()->route('cadastrosangue');
    }

    /**
     * Display the specified resource.
     *
     * @param  \conexaovida\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Doador $message) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \conexaovida\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
        
        $doador =  Doador::find($id);
        
        return view('editdoadoressangue', array('doador' => $doador));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \conexaovida\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doador $doador) {
        
        
        $doador->update($request->all());
       return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \conexaovida\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        Doador::destroy($id);

       return $this->index();
    }
    
    public function email(Request $r) {
        
  //      dd($r->input('gruposanguineo'));
  dd(\conexaovida\Doador::all());
//              "gruposanguineo" => "A-"
//      "assunto" => "weqweqwe"
//      "mensagem" => "qweqwe"
//      "submit" => null
    }

}
