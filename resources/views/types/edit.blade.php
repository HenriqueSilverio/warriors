@extends('layout')

@section('content')
  <div class="card">
    <div class="card-header">
      Tipos &raquo; Editar
    </div>
    <div class="card-body">
      @include('types.partials.form')
    </div>
  </div>
@endsection
