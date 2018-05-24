@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

        <div style="margin-left: auto; margin-right: auto; text-align: center;">
        <img src="{{ asset('img/conexãovida.png') }}">
        </div>
        
        <div style="padding-top: 30px; font-weight: bold; padding-top: 30px; color: #000000; text-align: center; font: 600 40px/18px 'Candal',sans-serif; padding-bottom: 10px;">
            <h1>Doação a um Clique!</h1>
            <h2>Esta conexão precisa de você. Doe sangue!</h2>
        </div>
        
        <div style="text-align: center; padding-top: 10px; padding-bottom: 10px;">
          <!--  <img style="width: 500px" src="{{ asset('img/logos.png') }}">  -->

            
            <img style="width: 100px; border-radius: 20px;" src="{{ asset('img/Biomedicina.png') }}">
            <img style="width: 230px; border-radius: 20px; padding-left: 20px;" src="{{ asset('img/Cnec.png') }}">
            <img style="width: 150px; border-radius: 20px;" src="{{ asset('img/ADS.png') }}">
        </div>
            
    </div>          
</div>
@endsection
