@extends('layout')

@section('content')
  <div class="card">
    <div class="card-header">
      Especialidades &raquo; Editar
    </div>
    <div class="card-body">
      @include('specialities.partials.form')
    </div>
  </div>
@endsection
