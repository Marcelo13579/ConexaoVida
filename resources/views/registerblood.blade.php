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
                <h1>Cadastro de Doadores</h1>
            </div>

            <div class="well">
                <form method="post" id="form" name="form" action="cadastro_incluir.php" class="bs-example form-horizontal">
                    <fieldset>
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
                            <div class="col-lg-2">
                                <select onkeypress="valida_dia();" id="dia" name="dia" class="form-control">
                                    <option value="">00</option>
                                    <option value="01"  >01</option>
                                    <option value="02"  >02</option>
                                    <option value="03"  >03</option>
                                    <option value="04"  >04</option>
                                    <option value="05"  >05</option>
                                    <option value="06"  >06</option>
                                    <option value="07"  >07</option>
                                    <option value="08"  >08</option>
                                    <option value="09"  >09</option>
                                    <option value="10"  >10</option>
                                    <option value="11"  >11</option>
                                    <option value="12"  >12</option>
                                    <option value="13"  >13</option>
                                    <option value="14"  >14</option>
                                    <option value="15"  >15</option>
                                    <option value="16"  >16</option>
                                    <option value="17"  >17</option>
                                    <option value="18"  >18</option>
                                    <option value="19"  >19</option>
                                    <option value="20"  >20</option>
                                    <option value="21"  >21</option>
                                    <option value="22"  >22</option>
                                    <option value="23"  >23</option>
                                    <option value="24"  >24</option>
                                    <option value="25"  >25</option>
                                    <option value="26"  >26</option>
                                    <option value="27"  >27</option>
                                    <option value="28"  >28</option>
                                    <option value="29"  >29</option>
                                    <option value="30"  >30</option>
                                    <option value="31"  >31</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <select  id="mes" name="mes" class="form-control">
                                    <option value="">00</option>
                                    <option value="01"  >01</option>
                                    <option value="02"  >02</option>
                                    <option value="03"  >03</option>
                                    <option value="04"  >04</option>
                                    <option value="05"  >05</option>
                                    <option value="06"  >06</option>
                                    <option value="07"  >07</option>
                                    <option value="08"  >08</option>
                                    <option value="09"  >09</option>
                                    <option value="10"  >10</option>
                                    <option value="11"  >11</option>
                                    <option value="12"  >12</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <select  id="ano" name="ano" class="form-control">
                                    <option value="">0000</option>
                                    <option value="2002"  >2002</option>
                                    <option value="2001"  >2001</option>
                                    <option value="2000"  >2000</option>
                                    <option value="1999"  >1999</option>
                                    <option value="1998"  >1998</option>
                                    <option value="1997"  >1997</option>
                                    <option value="1996"  >1996</option>
                                    <option value="1995"  >1995</option>
                                    <option value="1994"  >1994</option>
                                    <option value="1993"  >1993</option>
                                    <option value="1992"  >1992</option>
                                    <option value="1991"  >1991</option>
                                    <option value="1990"  >1990</option>
                                    <option value="1989"  >1989</option>
                                    <option value="1988"  >1988</option>
                                    <option value="1987"  >1987</option>
                                    <option value="1986"  >1986</option>
                                    <option value="1985"  >1985</option>
                                    <option value="1984"  >1984</option>
                                    <option value="1983"  >1983</option>
                                    <option value="1982"  >1982</option>
                                    <option value="1981"  >1981</option>
                                    <option value="1980"  >1980</option>
                                    <option value="1979"  >1979</option>
                                    <option value="1978"  >1978</option>
                                    <option value="1977"  >1977</option>
                                    <option value="1976"  >1976</option>
                                    <option value="1975"  >1975</option>
                                    <option value="1974"  >1974</option>
                                    <option value="1973"  >1973</option>
                                    <option value="1972"  >1972</option>
                                    <option value="1971"  >1971</option>
                                    <option value="1970"  >1970</option>
                                    <option value="1969"  >1969</option>
                                    <option value="1968"  >1968</option>
                                    <option value="1967"  >1967</option>
                                    <option value="1966"  >1966</option>
                                    <option value="1965"  >1965</option>
                                    <option value="1964"  >1964</option>
                                    <option value="1963"  >1963</option>
                                    <option value="1962"  >1962</option>
                                    <option value="1961"  >1961</option>
                                    <option value="1960"  >1960</option>
                                    <option value="1959"  >1959</option>
                                    <option value="1958"  >1958</option>
                                    <option value="1957"  >1957</option>
                                    <option value="1956"  >1956</option>
                                    <option value="1955"  >1955</option>
                                    <option value="1954"  >1954</option>
                                    <option value="1953"  >1953</option>
                                    <option value="1952"  >1952</option>
                                    <option value="1951"  >1951</option>
                                </select>
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
                                <input name="genero" id="genero" value="Masculino" type="radio"  >
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
                                <input type="radio" id="tiposanguineo" name="tiposanguineo" value="A+"  > <span  >A+</span></input>&#160;&#160;
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
                    <fieldset>
                        <legend>Última Doação</legend>
                        <div class="form-group">
                            <label for="texto" class="col-lg-10 control-label" style="text-align: left;">
                                <span class="colorRed">A data e o local da última doação são opicionais.</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="doacao" class="col-lg-2 control-label">
                                Data da última doação
                            </label>
                            <div class="col-lg-8">
                                <input type="date" class="form-control" placeholder="Data da última Doação" id="datadoacao" name="datadoacao" size="12" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="localDoacao" class="col-lg-2 control-label">
                                Local da última doação
                            </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Local da última Doação" id="localdoacao" name="localdoacao" size="40" value="" />
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