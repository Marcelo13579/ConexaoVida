@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">   
            <div align="center" class="alert {{ Session::get('cadastrosangue')['class'] }}">
                {{ Session::get('cadastrosangue')['message'] }}
            </div>
            <div>
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <div class="bs-example">
                        <h1>Cadastro de Doadores</h1>
                    </div>

                    <div class="well">
                        <form method="post" id="form" name="form" action="{{ route('doador.store') }}" class="bs-example form-horizontal">
                            <fieldset>
                                {{ csrf_field() }} 
                                <div class="form-group">
                                    <div class="col-lg-9">
                                        <span>Não se preocupe! Seus dados não serão exibidos e/ou divulgados.</span><br/>
                                        <span class="colorRed" style="color: red">* Preenchimento Obrigat&oacute;rio</span>
                                    </div>
                                </div>
                                <input type="hidden" id="action" name="action" value="salvar" />
                                <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
                                    <label class="col-lg-2 control-label">Nome<span style="color: red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" autofocus="" />
                                        @if($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <input type="hidden" id="action" name="action" value="salvar" />
                                <div class="form-group {{ $errors->has('cpf') ? 'has-error' : '' }}">
                                    <label for="cpf" class="col-lg-2 control-label">CPF<span style="color: red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input onkeypress="valida_cpf();" class="form-control" id="cpf" name="cpf" placeholder="12345678910" type="text" autofocus="" />
                                        @if($errors->has('cpf'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cpf') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('nascimento') ? 'has-error' : '' }}" >
                                    <label for="dia" class="col-lg-2 control-label">Nascimento<span style="color: red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="date" name="nascimento" id="nascimento" class="form-control">
                                        @if($errors->has('nascimento'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nascimento') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('estado') ? 'has-error' : '' }}">
                                    <label for="estado" class="col-lg-2 control-label">
                                        Estado<span style="color: red;">*</span>
                                    </label>
                                    <div class="col-lg-3">
                                        <input class="form-control" id="estado" name="estado" type="text">				
                                        @if($errors->has('estado'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('estado') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <label for="cidade" class="col-lg-2 control-label">
                                        Cidade<span style="color: red;">*</span>
                                    </label>
                                    <div class="col-lg-3">
                                        <div id="divCidade"  >
                                            <input class="form-control" id="cidade" name="cidade" type="text">
                                            @if($errors->has('cidade'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cidade') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('endereco') ? 'has-error' : '' }}">
                                    <label for="endereco" class="col-lg-2 control-label">Endereço<span style="color: red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input class="form-control" id="endereco" name="endereco" placeholder="Endereço" type="text"  value="" maxlength="100" autofocus="" />
                                        @if($errors->has('endereco'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('endereco') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label class="col-lg-2 control-label">
                                        Genero<span style="color: red;">*</span>
                                    </label>
                                    <div class="col-lg-4">
                                        <input name="genero" id="genero" value="Masculino" type="radio"  checked="checked" >
                                        <span   >Masculino</span>
                                        </input>&#160;&#160;&#160;&#160;&#160;
                                        <input name="genero" id="genero" value="Feminino" type="radio"  >
                                        <span   >Feminino</span>
                                        </input>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tiposanguineo" class="col-lg-2 control-label">
                                        Tipo Sangu&iacute;neo<span style="color: red;">*</span>
                                    </label>
                                    <div class="col-lg-8">
                                        <input  checked="checked" type="radio" id="tiposanguineo" name="tiposanguineo" value="A+"  > <span  >A+</span></input>&#160;&#160;
                                        <input type="radio" id="tiposanguineo" name="tiposanguineo" value="A-"  > <span  >A-</span></input>&#160;&#160;
                                        <input type="radio" id="tiposanguineo" name="tiposanguineo" value="O+"  > <span  >O+</span></input>&#160;&#160;
                                        <input type="radio" id="tiposanguineo" name="tiposanguineo" value="O-"  > <span  >O-</span></input>&#160;&#160;
                                        <input type="radio" id="tiposanguineo" name="tiposanguineo" value="B+"  > <span  >B+</span></input>&#160;&#160;
                                        <input type="radio" id="tiposanguineo" name="tiposanguineo" value="B-"  > <span  >B-</span></input>&#160;&#160;
                                        <input type="radio" id="tiposanguineo" name="tiposanguineo" value="AB+"  > <span  >AB+</span></input>&#160;&#160;
                                        <input type="radio" id="tiposanguineo" name="tiposanguineo" value="AB-"  > <span  >AB-</span></input>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('emailprincipal') ? 'has-error' : '' }}">
                                    <label for="emailprincipal" class="col-lg-2 control-label">
                                        E-mail Principal<span style="color: red;">*</span>
                                    </label>
                                    <div class="col-lg-8">
                                        <input  type="text" class="form-control" placeholder="emailprincipal" id="emailPrincipal" name="emailprincipal" size="50" value="" />
                                        @if($errors->has('emailprincipal'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('emailprincipal') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="emailalternativo" class="col-lg-2 control-label">
                                        E-mail Alternativo
                                    </label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="emailalternativo" id="emailAlternativo" name="emailalternativo" size="50" value="" />
                                    </div>
                                </div>

                                <input type="hidden" id="action" name="action" value="salvar" />
                                <div class="form-group {{ $errors->has('numerowhatsapp') ? 'has-error' : '' }}">
                                    <label for="numerowhatsapp" class="col-lg-2 control-label">Número de WhatsApp<span style="color: red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input class="form-control" id="numerowhatsapp" name="numerowhatsapp" placeholder="55999999999" type="text"  value="" maxlength="15" autofocus="" />
                                        @if($errors->has('numerowhatsapp'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('numerowhatsapp') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="outrocontato" class="col-lg-2 control-label">Outro contato</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" id="outrocontato" name="outrocontato" placeholder="55999999999" type="text"  value="" maxlength="15" autofocus="" />
                                    </div>
                                </div>

                                <!--
                                <script>
                                    function exibe(id) {
                                        if (document.getElementById(id).style.display == "block") {
                                            document.getElementById(id).style.display = "none";
                                        } else {
                                            document.getElementById(id).style.display = "block";
                                        }
                                    }
                                </script>
                                
                                <div class="form-group">
                                    
                                    <label for="vocee" class="col-lg-2 control-label">Você é</label>
                                    
                                     <div class="col-lg-8">
                                         <input name="vocee" id="vocee" value="" type="checkbox" onclick="exibe('sumir');">
                                        <span>Estudante, professor ou funcionário da Faculdade CNEC Santo Ângelo</span>
                                        </input>&#160;&#160;&#160;&#160;&#160;
                                        
                                        <br>
                                        
                                        <div class="col-lg-6" style="display: none;" id="sumir">
                                            
                                            <label>Vinculado ao curso de: </label>
                                            
                                            <div class="col-lg-8">
                                            
                                                <input name="curso" id="curso" value="Administração" type="radio">
                                                
                                            </div>
                                        </div>
                                </div>
                                </div> -->

                            </fieldset>
                            <br/>
                            <fieldset>
                                <legend>Última Doação</legend>
                                <div class="form-group">
                                    <label for="texto" class="col-lg-10 control-label" style="text-align: left;">
                                        <span class="colorRed">A data e o local da última doação são opicionais.</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">
                                        Data da última doação
                                    </label>
                                    <div class="col-lg-8">
                                        <input type="date" name="dataultimadoacao" id="dataultimadoacao" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="localDoacao" class="col-lg-2 control-label">
                                        Local da última doação
                                    </label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="Local da última Doação" id="localdoacao" name="localultimadoacao" size="40" />
                                    </div>
                                </div>
                            </fieldset>
                            <br/><br/>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    <button type="submit" name="submit" id="submit" class="btn btn-danger">Cadastrar</button> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection