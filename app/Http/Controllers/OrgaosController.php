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
        
         if (session('admin')) {
             
         
        $orgaos = Orgaos::orderBy('id_doador', 'desc')->paginate(15);

        
       return view('doadoresorgaos', ['orgaos' => $orgaos]);
       
         }
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
        
        \Session::flash('cadastroorgao', [
            'message' => 'Usuário cadastrado com sucesso!',
            'class' => 'alert-success'
        ]);

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
      public function edit($id) {
        
         if (session('admin')) {
          
        $orgaos = Orgaos::find($id);
        
        return view('editdoadoresorgaos', array('orgao' => $orgaos));
        
         }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \conexaovida\Orgaos  $orgaos
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, Orgaos $orgao) {
        
        if (session('admin')) {
        
        $orgao->update($request->all());
        
        \Session::flash('cadastroorgao', [
            'message' => 'Dados alterados com sucesso!',
            'class' => 'alert-success'
        ]);
        
       return $this->index();
       
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \conexaovida\Orgaos  $orgaos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

         if (session('admin')) {
             
         
        Orgaos::destroy($id);
        
        \Session::flash('cadastroorgao', [
            'message' => 'Dados excluídos com sucesso!',
            'class' => 'alert-success'
        ]);

       return $this->index();
         }
    }
}
