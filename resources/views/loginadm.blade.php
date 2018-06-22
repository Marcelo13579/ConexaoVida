@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        
        <div align="center" class="alert {{ Session::get('flash_message')['class'] }}">
                       {{ Session::get('flash_message')['message'] }}
                   </div>


        <div style="padding-top: 70px;"></div>
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <img src="{{ asset('img/conexãovida.png') }}" width="50%" style="display: block; margin-left: auto; margin-right: auto;">
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('doador.admin') }}" name="form" id="form">
                        <fieldset>
                            {{ csrf_field() }} 
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input class="form-control" type="text" placeholder="Usuário" name="usuario" type="usuario" autocomplete="off" autofocus>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input class="form-control" type="password" placeholder="Senha" id="senha" name="senha" autocomplete="off" value="">
                            </div>
                            <br>
                            <div style="text-align:center; margin: 0">
                                <div class="form-group">
                                    <button name="submit" class="btn btn-primary btn-lg">Login</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>




    </div>
</div>

@endsection
