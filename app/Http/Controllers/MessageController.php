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

        if (session('admin')) {

            $doadores = Doador::orderBy('id_doador', 'desc')->paginate(15);

            //$doadores = Doador::all()->sortByDesc("id");


            return view('doadoressangue', ['doadores' => $doadores]);
        }
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
    public function store(\conexaovida\Http\Requests\DoadorRequest $request) {

        \conexaovida\Doador::create($request->all());

        \Session::flash('cadastrosangue', [
            'message' => 'Usuário cadastrado com sucesso!',
            'class' => 'alert-success'
        ]);

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


        if (session('admin')) {

            $doador = Doador::find($id);

            return view('editdoadoressangue', array('doador' => $doador));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \conexaovida\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doador $doador) {

         if (session('admin')) {

        $doador->update($request->all());
        
        \Session::flash('flash_message', [
            'message' => 'Dados alterados com sucesso!',
            'class' => 'alert-success'
        ]);
        return $this->index();
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \conexaovida\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        if (session('admin')) {

        Doador::destroy($id);
        
         \Session::flash('flash_message', [
            'message' => 'Dados excluídos com sucesso!',
            'class' => 'alert-success'
        ]);

        return $this->index();
        }
    }

    public function email(Request $r) {
        
        $enviaremail = null;
        
        if (session('admin')) {

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Conexao Vida <conexaovida.iesa@gmail.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        $gruposanguineo = $r->input('gruposanguineo');

        $assunto = $r->input('assunto');

        $mensagem = $r->input('mensagem');

        $resultado = \conexaovida\Doador::all();

        foreach ($resultado as $usuario) {

            if ($gruposanguineo == $usuario['tiposanguineo']) {

                $enviaremail = mail($usuario['emailprincipal'], $assunto, $mensagem, $headers);
            }
        }
        
        if ($enviaremail) {
        
         \Session::flash('emailenviar', [
            'message' => 'E-mail enviado com sucesso!',
            'class' => 'alert-success'
        ]);
        } else {
            
            \Session::flash('emailenviar', [
            'message' => 'Erro ao enviar o e-mail!',
            'class' => 'alert-success'
        ]);
        }

        return view('email');
        
        
        }
    }

    public function admin(Request $r) {

        $usuario = $r->input('usuario');

        $senha = $r->input('senha');

        if ($usuario != "conexao2017") {

            \Session::flash('flash_message', [
                'message' => 'Usuário incorreto!',
                'class' => 'alert-success'
            ]);
            
            return view('loginadm');
            
        }

        if (password_verify($senha, '$2y$10$fLrxYdFLwIQZa1fBN8rA7OaqUOpyqhr2Vts0G6ttN00qokpXMxTwm')) {

            \Session::flash('flash_message', [
                'message' => 'Senha correta!',
                'class' => 'alert-success'
            ]);
        } else {

            \Session::flash('flash_message', [
                'message' => 'Senha incorreta!',
                'class' => 'alert-success'
            ]);
            
            return view('loginadm');
        }

        if ($usuario == "conexao2017" && password_verify($senha, '$2y$10$fLrxYdFLwIQZa1fBN8rA7OaqUOpyqhr2Vts0G6ttN00qokpXMxTwm')) {

            // Store a piece of data in the session...
            $sessao = session(['admin' => true]);

            \Session::flash('flash_message', [
                'message' => 'Login efetuado com sucesso!',
                'class' => 'alert-success'
            ]);
        }


        return view('welcome');
    }

}
