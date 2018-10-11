@extends('layout')

@section('content')
  <div class="card">
    <div class="card-header d-flex align-items-center">
      Tipos

      <a class="btn btn-info btn-sm ml-auto" href="{{ route('web.types.create') }}">
        Cadastrar
      </a>
    </div>
    <div class="card-body">
      @unless(empty($types))
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($types as $type)
              <tr>
                <td>{{ $type->id }}</td>
                <td>{{ $type->name }}</td>
                <td>
                  <a class="btn btn-sm btn-danger" href="#">
                    Excluir
                  </a>
                  <a class="btn btn-sm btn-info" href="{{ route('web.types.edit', ['id' => $type->id]) }}">
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
