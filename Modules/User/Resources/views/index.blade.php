@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de Usuario</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Seus Agendamentos</h2>

                    <table class="table table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Hora</th>
                                <th>Situação</th>
                                <th>Acoes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-warning">Remarcar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>

                    <a type="button" href="{{ route('call.create') }}" class="btn btn-success">Novo Agendamento</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection