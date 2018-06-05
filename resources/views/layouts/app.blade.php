<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Conexão Vida</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="../../../public/css/bootstrap.css" rel="stylesheet">
        <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <div style="float: left;">
                        <img src="{{ asset('img/conexãovidamenu.png') }}">
                    </div>
                    <li><a href="{{ route('inicio') }}" style="color: black; font-weight: bold; font-size: 20px; padding-top: 25px;">Início</a></li>
                    <li><a href="{{ route('sobre') }}" style="color: black; font-weight: bold; font-size: 20px; padding-top: 25px;">Sobre</a></li>
                    <li><a href="{{ route('cadastrosangue') }}" style="color: black; font-weight: bold; font-size: 20px; padding-top: 25px;">Cadastro Sangue</a></li>
                    <li><a href="{{ route('cadastroorgaos') }}" style="color: black; font-weight: bold; font-size: 20px; padding-top: 25px;">Cadastro Orgãos</a></li>
                    <li><a href="{{ route('doadoressangue') }}" style="color: black; font-weight: bold; font-size: 20px; padding-top: 25px;">Doadores Sangue</a></li>
                    <li><a href="{{ route('doadoresorgaos') }}" style="color: black; font-weight: bold; font-size: 20px; padding-top: 25px;">Doadores Orgãos</a></li>
                    <li><a href="{{ route('email') }}" style="color: black; font-weight: bold; font-size: 20px; padding-top: 25px;">E-mail</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('loginadm') }}" style="color: black; font-weight: bold; font-size: 20px; padding-top: 25px;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="{{ route('sair') }}" style="color: black; font-weight: bold; font-size: 20px; padding-top: 25px;"><span></span> Sair</a></li>
                </ul>
            </div>
        </nav>

        @yield('content')   

        <div style="padding-top: 10px;"></div>
        <div style="position: relative; left: 0; bottom: 0; width: 100%; text-align: center; background-color: #282a2b; color: white; padding-top: 10px;">
            <p>Idealizado e alimentado pelo Programa de Extensão em Saúde Integrada</p>
            <div style="padding-top: 10px;"></div>
            <p>Desenvolvido pelos acadêmicos do curso de Análise e Desenvolvimento de Sistemas</p>
            <div style="padding-top: 10px;"></div>
            <p>Mantido pela Faculdade CNEC Santo Ângelo</p>
            <div style="padding-top: 10px;"></div>
            <p>Todos os direitos reservados ©</p>
        </div>
    </body>
</html>

<script type="text/javascript">
var _paq = _paq || [];
/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function () {
    var u = "//kraft.ads.cnecsan.edu.br/piwik/";
    _paq.push(['setTrackerUrl', u + 'piwik.php']);
    _paq.push(['setSiteId', '6']);
    var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
    g.type = 'text/javascript';
    g.async = true;
    g.defer = true;
    g.src = u + 'piwik.js';
    s.parentNode.insertBefore(g, s);
})();
</script>
