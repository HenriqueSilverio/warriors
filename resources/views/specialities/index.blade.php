@extends('layout')

@section('content')
  <div class="card">
    <div class="card-header d-flex align-items-center">
      Especialidades

      <a class="btn btn-info btn-sm ml-auto" href="{{ route('web.specialities.create') }}">
        Cadastrar
      </a>
    </div>
    <div class="card-body">
      @unless(empty($specialities))
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($specialities as $speciality)
              <tr>
                <td>{{ $speciality->id }}</td>
                <td>{{ $speciality->name }}</td>
                <td>
                  <a class="btn btn-sm btn-danger" href="#">
                    Excluir
                  </a>
                  <a class="btn btn-sm btn-info" href="{{ route('web.specialities.edit', ['id' => $speciality->id]) }}">
                    Editar
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endunless
    </div>
  </div>
@endsection
