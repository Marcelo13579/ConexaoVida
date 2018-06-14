@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div>

                <div class="col-lg-12">
                    <div class="bs-example">
                        <h1>Doadores Orgãos</h1>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Operações</th>
                                <th>#</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Data de Nascimento</th>
                                <th>Estado</th>
                                <th>Cidade</th>
                                <th>Endereço</th>
                                <th>Gênero</th>
                                <th>Tipo Sanguíneo</th>
                                <th>Orgãos</th>
                                <th>Observações</th>
                                <th>E-mail Principal</th>
                                <th>E-mail Alternativo</th>
                                <th>Número de WhatsApp</th>
                                <th>Outro Contato</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orgaos as $orgao)
                            <tr>
                                <td><form action="{{ route('orgaos.destroy', $orgao->id_doador) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" onclick="return confirm('Deseja mesmo excluir?')">
                                            Apagar
                                        </button>
                                    </form>
                                    <form action="{{ route('orgaos.edit', $orgao->id_doador) }}" method="POST">

                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="GET">
                                        <button class="btn btn-info">
                                            Editar
                                        </button>
                                    </form>
                                </td>
                                <th>{{ $orgao->id_doador }}</th>
                                <td>{{ $orgao->nome }}</td>
                                <td>{{ $orgao->cpf }}</td>
                                <td>{{ $orgao->nascimento }}</td>
                                <td>{{ $orgao->estado }}</td>
                                <td>{{ $orgao->cidade }}</td>
                                <td>{{ $orgao->endereco }}</td>
                                <td>{{ $orgao->genero }}</td>
                                <td>{{ $orgao->tiposanguineo }}</td>
                                <td>{{ $orgao->orgaos }}</td>
                                <td>{{ $orgao->observacoes }}</td>
                                <td>{{ $orgao->emailprincipal }}</td>
                                <td>{{ $orgao->emailalternativo }}</td>
                                <td>{{ $orgao->numerowhatsapp }}</td>
                                <td>{{ $orgao->outrocontato }}</td>
                                
                                    

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div align="center">
                        {!! $orgaos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection