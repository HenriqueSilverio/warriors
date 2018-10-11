@extends('layout')

@section('content')
  <div class="card">
    <div class="card-header">
      Guerreiros &raquo; Editar
    </div>
    <div class="card-body">
      @include('warriors.partials.form')
    </div>
  </div>
@endsection
