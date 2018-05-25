@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">

            <div style="padding-top: 50px;">
                <h1 style="color: #333333; text-align: center; font-family: 'Candal',sans-serif; font-size: 40px; font-weight: 600;">Conexão Vida</h1>
            </div>

            <div class="col-sm-6 col-sm-offset-3">

                <p style="padding-top: 20px; color: #333333; text-align: justify; line-height: 1.5; text-indent: 40px; font-family: 'Candal',sans-serif; font-weight: 600; font-size: 20px;">
                    O Conexão Vida foi idealizado pelo curso de Biomedicina e desenvolvido pelo curso de Análise e Desenvolvimento de Sistemas da Faculdade CNEC Santo Ângelo, com o objetivo de facilitar o processo de cadastramento e controle de doadores. A equipe de trabalho foi constituída de alunos e professores da instituição, sendo estes:
                </p>

                <div style="padding-top: 30px;"></div>

                <div id="bruna">                
                    <img style="width: 100px; float: left; border-radius: 50px;" src="{{ asset('img/bruna.jpg') }}">
                    <div style="color: #747474; padding-left: 20%; font: 600 18px/18px 'Candal',sans-serif;">
                        <h1 style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Profª Dra. Bruna Comparsi</h1>
                        <p style="color: #333333;">Professor(a) nos cursos de: Biomedicina, Fisioterapia e Odontologia</p>
                        <p style="color: #333333;">Contato: brunacomparsi@gmail.com</p>
                    </div>
                </div>

                <div style="padding-top: 30px;"></div>

                <div id="felipe">                
                    <img style="width: 100px; float: left; border-radius: 50px;" src="{{ asset('img/felipe.jpg') }}">
                    <div style="color: #747474; padding-left: 20%; font: 600 18px/18px 'Candal',sans-serif;">
                        <h1 style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Profª Felipe Ghisleni Freitas</h1>
                        <p style="color: #333333;">Coordenador e Professor nos Cursos de: Administração de Empresas,</p>
                        <p style="color: #333333;">Ciências Contábeis e Superior de Tecnologia em Análise e Desenvolvimento de Sistemas</p>                            
                        <p style="color: #333333;">Contato: felipeghisleni@gmail.com</p>
                    </div>
                </div>

                <div style="padding-top: 30px;"></div>

                <div id="caroline">                
                    <img style="width: 100px; float: left; border-radius: 50px;" src="{{ asset('img/carolina.jpg') }}">
                    <div style="color: #747474; padding-left: 20%; font: 600 18px/18px 'Candal',sans-serif;">
                        <h1 style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Caroline Dornelles</h1>
                        <p style="color: #333333;">Acadêmica do curso de Biomedicina</p>
                        <p style="color: #333333;">Contato: carolinedornelles5@gmail.com</p>
                    </div>
                </div>

                <div style="padding-top: 30px;"></div>

                <div id="marcelo">                
                    <img style="width: 100px; float: left; border-radius: 50px;" src="{{ asset('img/marcelo.jpg') }}">
                    <div style="color: #747474; padding-left: 20%; font: 600 18px/18px 'Candal',sans-serif;">
                        <h1 style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Marcelo Abreu da Silva</h1>
                        <p style="color: #333333;">Acadêmico do curso de Análise e Desenvolvimento de Sistemas</p>
                        <p style="color: #333333;">Contato: marceloabreu09@hotmail.com.br</p>
                    </div>
                </div>

                <div style="padding-top: 30px;"></div>

                <div id="eduardo">                
                    <img style="width: 100px; float: left; border-radius: 50px;" src="{{ asset('img/eduardo.jpg') }}">
                    <div style="color: #747474; padding-left: 20%; font: 600 18px/18px 'Candal',sans-serif;">
                        <h1 style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Eduardo Rodrigues</h1>
                        <p style="color: #333333;">Acadêmico do curso de Análise e Desenvolvimento de Sistemas</p>
                        <p style="color: #333333;">Contato: eduardo.hrs@outlook.com </p>
                    </div>
                </div>

                <div style="padding-top: 30px;"></div>

                <div id="gilson">                
                    <img style="width: 100px; float: left; border-radius: 50px;" src="{{ asset('img/gilson.jpg') }}">
                    <div style="color: #747474; padding-left: 20%; font: 600 18px/18px 'Candal',sans-serif;">
                        <h1 style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Gilson Santos</h1>
                        <p style="color: #333333;">Acadêmico do curso de Análise e Desenvolvimento de Sistemas</p>
                        <p style="color: #333333;">Contato: gilsonezequielsantos@gmail.com</p>
                    </div>
                </div>

                <div style="padding-top: 30px;"></div>

                <div id="rodrigo">                
                    <img style="width: 100px; float: left; border-radius: 50px;" src="{{ asset('img/rodrigo.jpg') }}">
                    <div style="color: #747474; padding-left: 20%; font: 600 18px/18px 'Candal',sans-serif;">
                        <h1 style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Rodrigo Horn</h1>
                        <p style="color: #333333;">Acadêmico do curso de Análise e Desenvolvimento de Sistemas</p>
                        <p style="color: #333333;">Contato: r.horn24@gmail.com</p>
                    </div>
                </div>

                <div style="padding-top: 30px;"></div>

                <div id="ricardo">                
                    <img style="width: 100px; float: left; border-radius: 50px;" src="{{ asset('img/ricardo.jpg') }}">
                    <div style="color: #747474; padding-left: 20%; font: 600 18px/18px 'Candal',sans-serif;">
                        <h1 style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Ricardo Bomm</h1>
                        <p style="color: #333333;">Acadêmico do curso de Análise e Desenvolvimento de Sistemas</p>
                        <p style="color: #333333;">Contato: ricardo.bomm@hotmail.com</p>
                    </div>
                </div>

                <div style="padding-top: 30px;"></div>

                <div id="romulo">                
                    <img style="width: 100px; float: left; border-radius: 50px;" src="{{ asset('img/romulo.jpg') }}">
                    <div style="color: #747474; padding-left: 20%; font: 600 18px/18px 'Candal',sans-serif;">
                        <h1 style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Rômulo Fagundes</h1>
                        <p style="color: #333333;">Acadêmico do curso de Análise e Desenvolvimento de Sistemas</p>
                        <p style="color: #333333;">Contato: romulofabriciofagundes@hotmail.com</p>
                    </div>
                </div>

                <div style="padding-top: 30px;"></div>

                <div id="douglas">                
                    <img style="width: 100px; float: left; border-radius: 50px;" src="{{ asset('img/douglas.jpg') }}">
                    <div style="color: #747474; padding-left: 20%; font: 600 18px/18px 'Candal',sans-serif;">
                        <h1 style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Douglas Carvalho</h1>
                        <p style="color: #333333;">Acadêmico do curso de Análise e Desenvolvimento de Sistemas</p>
                        <p style="color: #333333;">Contato: douglas_carvalho@unimedmissoes.com.br</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>


@endsection