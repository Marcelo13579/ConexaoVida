@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">   
            <div>

                <div class="col-lg-12">
                    <div class="bs-example">
                        <h1>Doadores de Sangue</h1>
                    </div>
                    <table class="table table-bordered">
                        <thead> 
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Data de Nascimento</th>
                                <th>Estado</th>
                                <th>Cidade</th>
                                <th>Endereço</th>
                                <th>Gênero</th>
                                <th>Tipo Sanguíneo</th>
                                <th>E-mail Principal</th>
                                <th>E-mail Alternativo</th>
                                <th>Número de WhatsApp</th>
                                <th>Outro Contato</th>
                                <th>Data Última Doação</th>
                                <th>Local Última Doação</th>
                                <th>Operações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($doadores as $doador)
                            <tr>
                                <th>{{ $doador->id_doador }}</th>
                                <td>{{ $doador->nome }}</td>
                                <td>{{ $doador->cpf }}</td>
                                <td>{{ $doador->nascimento }}</td>
                                <td>{{ $doador->estado }}</td>
                                <td>{{ $doador->cidade }}</td>
                                <td>{{ $doador->endereco }}</td>
                                <td>{{ $doador->genero }}</td>
                                <td>{{ $doador->tiposanguineo }}</td>
                                <td>{{ $doador->emailprincipal }}</td>
                                <td>{{ $doador->emailalternativo }}</td>
                                <td>{{ $doador->numerowhatsapp }}</td>
                                <td>{{ $doador->outrocontato }}</td>
                                <td>{{ $doador->dataultimadoacao }}</td>
                                <td>{{ $doador->localultimadoacao }}</td>
                                <td>
                                    <form action="{{ route('doador.destroy', $doador->id_doador) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" onclick="return confirm('Deseja mesmo excluir?')">
                                            Apagar
                                        </button>
                                    </form>

                                    <form action="{{ route('doador.edit', $doador->id_doador) }}" method="POST">

                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="GET">
                                        <button class="btn btn-info">
                                            Editar
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div align="center">
                        {!! $doadores->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection