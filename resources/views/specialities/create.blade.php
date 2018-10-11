@extends('layout')

@section('content')
  <div class="card">
    <div class="card-header">
      Especialidades &raquo; Cadastrar
    </div>
    <div class="card-body">
      @include('specialities.partials.form')
    </div>
  </div>
@endsection
