@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">   
             <div>
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="bs-example">
                <h1>Cadastro de Doadores Orgãos</h1>
            </div>

            <div class="well">
                <form method="post" id="form" name="form" action="{{ route('orgaos.store') }}" class="bs-example form-horizontal">
                    <fieldset>
                        {{ csrf_field() }} 
                        <div class="form-group">
                            <div class="col-lg-9">
                                <span>Não se preocupe! Seus dados não serão exibidos e/ou divulgados.</span><br/>
                                <span class="colorRed" style="color: red">* Preenchimento Obrigat&oacute;rio</span>
                            </div>
                        </div>
                        <input type="hidden" id="action" name="action" value="salvar" />
                        <div class="form-group">
                            <label for="nome" class="col-lg-2 control-label">Nome<span style="color: red;">*</span></label>
                            <div class="col-lg-8">
                                <input onkeypress="valida_nome();" class="form-control" id="nome" name="nome" placeholder="Nome" type="text"  value="" maxlength="40" autofocus="" />
                            </div>
                        </div>
                        
                        <input type="hidden" id="action" name="action" value="salvar" />
                        <div class="form-group">
                            <label for="cpf" class="col-lg-2 control-label">CPF<span style="color: red;">*</span></label>
                            <div class="col-lg-8">
                                <input onkeypress="valida_cpf();" class="form-control" id="cpf" name="cpf" placeholder="12345678910" type="text"  value="" maxlength="11" autofocus="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dia" class="col-lg-2 control-label">Nascimento<span style="color: red;">*</span></label>
                           <div class="col-lg-8">
                            <input type="date" name="nascimento" id="nascimento" class="form-control">
                           </div>
                        </div>

                        <div class="form-group">
                            <label for="estado" class="col-lg-2 control-label">
                                Estado<span style="color: red;">*</span>
                            </label>
                            <div class="col-lg-3">
                                <select id="estado" name="estado" class="form-control">
                                    <option value=""><span>-- Selecione --</span></option>
                                    <option value="Acre">Acre</option>
                                    <option value="Alagoas">Alagoas</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Amapá">Amap&aacute;</option>
                                    <option value="Bahia">Bahia</option>
                                    <option value="Ceará">Cear&aacute;</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value="Espírito Santo">Esp&iacute;rito Santo</option>
                                    <option value="Goiás">Goi&aacute;s</option>
                                    <option value="Maranhão">Maranh&atilde;o</option>
                                    <option value="Minas Gerais">Minas Gerais</option>
                                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                    <option value="Mato Grosso">Mato Grosso</option>
                                    <option value="Pará">Par&aacute;</option>
                                    <option value="Paraíba">Para&iacute;ba</option>
                                    <option value="Pernambuco">Pernambuco</option>
                                    <option value="Piauí">Piau&iacute;</option>
                                    <option value="Paraná">Paran&aacute;</option>
                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                    <option value="Rondônia">Rond&ocirc;nia</option>
                                    <option value="Roraima">Roraima</option>
                                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                    <option value="Santa Catarina">Santa Catarina</option>
                                    <option value="Sergipe">Sergipe</option>
                                    <option value="São Paulo">S&atilde;o Paulo</option>
                                    <option value="Tocantins">Tocantins</option>
                                </select>							
                            </div>
                            <label for="cidade" class="col-lg-2 control-label">
                                Cidade<span style="color: red;">*</span>
                            </label>
                            <div class="col-lg-3">
                                <div id="divCidade"  >
                                    <input class="form-control" id="cidade" name="cidade" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="endereco" class="col-lg-2 control-label">Endereço<span style="color: red;">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control" id="endereco" name="endereco" placeholder="Endereço" type="text"  value="" maxlength="100" autofocus="" />
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="col-lg-2 control-label">
                                Genero<span style="color: red;">*</span>
                            </label>
                            <div class="col-lg-4">
                                <input name="genero" id="genero" value="Masculino" type="radio"  checked="">
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
                                <input checked="" type="radio" id="tiposanguineo" name="tiposanguineo" value="A+"  > <span  >A+</span></input>&#160;&#160;
                                <input type="radio" id="tiposanguineo" name="tiposanguineo" value="A-"  > <span  >A-</span></input>&#160;&#160;
                                <input type="radio" id="tiposanguineo" name="tiposanguineo" value="O+"  > <span  >O+</span></input>&#160;&#160;
                                <input type="radio" id="tiposanguineo" name="tiposanguineo" value="O-"  > <span  >O-</span></input>&#160;&#160;
                                <input type="radio" id="tiposanguineo" name="tiposanguineo" value="B+"  > <span  >B+</span></input>&#160;&#160;
                                <input type="radio" id="tiposanguineo" name="tiposanguineo" value="B-"  > <span  >B-</span></input>&#160;&#160;
                                <input type="radio" id="tiposanguineo" name="tiposanguineo" value="AB+"  > <span  >AB+</span></input>&#160;&#160;
                                <input type="radio" id="tiposanguineo" name="tiposanguineo" value="AB-"  > <span  >AB-</span></input>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="orgaos" class="col-lg-2 control-label">
                                &Oacute;rg&atilde;os<span style="color: red;">*</span>
                            </label>
                            <div class="col-lg-8">
                                <input checked="" type="radio" id="orgaos" name="orgaos" value="Córnea"> <span>Córnea</span>&#160;&#160;
                                <input type="radio" id="orgaos" name="orgaos" value="Coração"> <span>Coração</span>&#160;&#160;
                                <input type="radio" id="orgaos" name="orgaos" value="Rins"> <span>Rins</span>&#160;&#160;
                                <input type="radio" id="orgaos" name="orgaos" value="Fígado"> <span>Fígado</span>&#160;&#160;
                                <input type="radio" id="orgaos" name="orgaos" value="Pulmões"> <span>Pulmões</span>&#160;&#160;
                                <input type="radio" id="orgaos" name="orgaos" value="Pâncreas"> <span>Pâncreas</span>&#160;&#160;
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="observacoes" class="col-lg-2 control-label">
                                Observações<span style="color: red;"></span>
                            </label>
                            <div class="col-lg-8">
                                <input  type="text" class="form-control" placeholder="Hipertensão, Diabetes, etc" id="observacoes" name="observacoes" size="50" value="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="emailprincipal" class="col-lg-2 control-label">
                                E-mail Principal<span style="color: red;">*</span>
                            </label>
                            <div class="col-lg-8">
                                <input  type="text" class="form-control" placeholder="emailprincipal" id="emailPrincipal" name="emailprincipal" size="50" value="" />
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
                        <div class="form-group">
                            <label for="numerowhatsapp" class="col-lg-2 control-label">Número de WhatsApp<span style="color: red;">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control" id="numerowhatsapp" name="numerowhatsapp" placeholder="55999999999" type="text"  value="" maxlength="15" autofocus="" />
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