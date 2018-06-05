@extends('layouts.app')

@section('javascript')
<script type="text/javascript" src="{{ asset('js/call.js') }}"></script>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="{{ asset('css/jquery.datetimepicker.min.css') }}">
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novo Agendamento</div>

                <div class="card-body">
                    <form action="{{ route('call.store') }}" method="POST" role="form">
	                    @if (session('status'))
	                        <div class="alert alert-success">
	                            {{ session('status') }}
	                        </div>
	                    @endif

	                    	<div class="form-group">
	                    		<input type="text" id="datepicker" placeholder="Selecione a data">
	                    	</div>

	                    	<div class="form-group">
	                    		<input type="text" id="timepicker" placeholder="Selecione o horario">
	                    	</div>
	                   
	                    <hr>

	                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



