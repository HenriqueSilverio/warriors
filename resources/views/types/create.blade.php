@extends('layout')

@section('content')
  <div class="card">
    <div class="card-header">
      Tipos &raquo; Cadastrar
    </div>
    <div class="card-body">
      @include('types.partials.form')
    </div>
  </div>
@endsection
