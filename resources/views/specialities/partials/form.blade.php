<form method="POST" action="{{ empty($speciality) ? route('specialities.index') : route('specialities.update', ['id' => $speciality->id]) }}">
  @csrf
  @unless(empty($speciality))
    {{ method_field('PUT') }}
    <input type="hidden" name="id" value={{ $speciality->id }}>
  @endunless
  <div class="form-group">
    <label for="speciality-name">
      Nome:
    </label>
    <input
      id="speciality-name"
      class="form-control"
      name="name"
      type="text"
      maxlength="45"
      placeholder="Ex: Cura"
      value="{{ old('name', $speciality->name ?? null) }}"
    >
  </div>
  <div class="d-flex justify-content-end">
    <button class="btn btn-info" type="submit">
      Salvar
    </button>
  </div>
</form>
