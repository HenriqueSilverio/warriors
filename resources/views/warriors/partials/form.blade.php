<form method="POST" enctype="multipart/form-data" action="{{ empty($warrior) ? route('warriors.index') : route('warriors.update', ['id' => $warrior->id]) }}">
  @csrf
  @unless(empty($warrior))
    {{ method_field('PUT') }}
    <input type="hidden" name="id" value={{ $warrior->id }}>
  @endunless
  <div class="form-group">
    <label for="warrior-name">
      Nome:
    </label>
    <input
      id="warrior-name"
      class="form-control"
      name="name"
      type="text"
      maxlength="45"
      placeholder="Ex: Soraka"
      value="{{ $warrior->name ?? null }}"
    >
  </div>
  <div class="form-group">
    <label for="warrior-avatar">
      Avatar:
    </label>
    <input
      id="warrior-avatar"
      class="form-control-file"
      name="thumbnail"
      type="file"
      accept="image/*"
    >
  </div>
  <div class="form-group">
    <label for="warrior-type">
      Tipo
    </label>
    <select id="warrior-type" class="form-control" name="type_id">
      <option value="-1" selected disabled>
        Selecione
      </option>
      @unless(empty($types))
        @foreach($types as $type)
          <option value="{{ $type->id }}" {{ isset($warrior) && $type->id === $warrior->type_id ? 'selected' : '' }}>
            {{ $type->name }}
          </option>
        @endforeach
      @endunless
    </select>
  </div>
  @unless(empty($specialities))
    <div class="form-group">
      <label class="form-label">
        Especialidades:
      </label>
      @foreach($specialities as $speciality)
        <div class="form-check form-check-inline">
          <input
            id="warrior-speciality-{{ $speciality->id }}"
            name="speciality_id[]"
            class="form-check-input"
            type="checkbox"
            value="{{ $speciality->id }}"
            {{ isset($warrior) && $warrior->specialities->contains('id', $speciality->id) ? 'checked' : '' }}
          >
          <label class="form-check-label" for="warrior-speciality-{{ $speciality->id }}">
            {{ $speciality->name }}
          </label>
        </div>
      @endforeach
    </div>
  @endunless
  <div class="form-group">
    <label for="warrior-health">
      Vida:
    </label>
    <input
      id="warrior-health"
      class="form-control"
      name="health"
      type="number"
      maxlength="45"
      placeholder="Ex: 529"
      value="{{ $warrior->health ?? null }}"
    >
  </div>
  <div class="form-group">
    <label for="warrior-defense">
      Defesa:
    </label>
    <input
      id="warrior-defense"
      class="form-control"
      name="defense"
      type="number"
      maxlength="45"
      placeholder="Ex: 32"
      value="{{ $warrior->defense ?? null }}"
    >
  </div>
  <div class="form-group">
    <label for="warrior-damage">
      Dano:
    </label>
    <input
      id="warrior-damage"
      class="form-control"
      name="damage"
      type="number"
      maxlength="45"
      placeholder="Ex: 50"
      value="{{ $warrior->damage ?? null }}"
    >
  </div>
  <div class="form-group">
    <label for="warrior-attack-speed">
      Velocidade de ataque:
    </label>
    <input
      id="warrior-attack-speed"
      class="form-control"
      name="attack_speed"
      type="number"
      max="2.5"
      step="0.1"
      placeholder="Ex: 0,6"
      value="{{ $warrior->attack_speed ?? null }}"
    >
  </div>
  <div class="form-group">
    <label for="warrior-move-speed">
      Velocidade de movimento:
    </label>
    <input
      id="warrior-move-speed"
      class="form-control"
      name="move_speed"
      type="number"
      maxlength="45"
      placeholder="Ex: 365"
      value="{{ $warrior->move_speed ?? null }}"
    >
  </div>
  <div class="d-flex justify-content-end">
    <button class="btn btn-info" type="submit">
      Salvar
    </button>
  </div>
</form>
