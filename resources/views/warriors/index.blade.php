@extends('layout')

@section('content')
  <div class="card">
    <div class="card-header d-flex align-items-center">
      Guerreiros

      <a class="btn btn-info btn-sm ml-auto" href="{{ route('web.warriors.create') }}">
        Cadastrar
      </a>
    </div>
    <div class="card-body">
      @unless(empty($warriors))
        <table class="table">
          <thead>
            <tr>
              <th>Avatar</th>
              <th>Nome</th>
              <th>Tipo</th>
              <th>Especialidades</th>
              <th>Vida</th>
              <th>Defesa</th>
              <th>Dano</th>
              <th>Vel. de Ataque</th>
              <th>Vel. de Movimento</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($warriors as $warrior)
              <tr>
                <td><img src="{{ asset('/storage/' . $warrior->thumbnail) }}" alt="" style="max-width: 70px;"></td>
                <td>{{ $warrior->name }}</td>
                <td>{{ $warrior->type->name }}</td>
                <td>{{ $warrior->specialities->implode('name', ', ') }}</td>
                <td>{{ $warrior->health }}</td>
                <td>{{ $warrior->defense }}</td>
                <td>{{ $warrior->damage }}</td>
                <td>{{ $warrior->attack_speed }}</td>
                <td>{{ $warrior->move_speed }}</td>
                <td>
                  <a class="btn btn-sm btn-danger" href="#">
                    Excluir
                  </a>
                  <a class="btn btn-sm btn-info" href="{{ route('web.warriors.edit', ['id' => $warrior->id]) }}">
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
