@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="text-align: center;">   
            <div class="bs-example" style="text-align: center;">
                <h1>Envio de E-mails</h1>
                <span class="colorRed" style="color: red;">* Preenchimento Obrigat&oacute;rio</span>
            </div>

            <div style="padding-top: 30px;"></div>

            <form method="post" id="form" name="form" class="bs-example form-horizontal">

                <div class="form-group">

                    <label class="col-md-4 control-label">Tipo Sanguíneo<b style="color: red; font-size: 20px;">*</b></label>

                    <div class="col-md-4">
                        <select class="form-control" name="gruposanguineo" id="gruposanguineo">
                            <option value="">Grupo Sanguíneo</option>
                            <option value="O-">O-</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="A+">A+</option>
                            <option value="B-">B-</option>
                            <option value="B+">B+</option>
                            <option value="AB-">AB-</option>
                            <option value="AB+">AB+</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">

                    <label class="col-md-4 control-label">Assunto<b style="color: red; font-size: 20px;">*</b></label>
                    <div class="col-md-4">

                        <input class="form-control" id="assunto" name="assunto" placeholder="" type="text"  value=""/>

                    </div>
                </div>
                <div class="form-group">

                    <label class="col-md-4 control-label">Mensagem<b style="color: red; font-size: 20px;">*</b></label>

                    <div class="col-md-4">

                        <textarea class="form-control" name="mensagem" id="mensagem" rows="7" cols="100"></textarea>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button name="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection