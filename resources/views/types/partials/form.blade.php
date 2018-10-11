<form method="POST" action="{{ empty($type) ? route('types.index') : route('types.update', ['id' => $type->id]) }}">
  @csrf
  @unless(empty($type))
    {{ method_field('PUT') }}
    <input type="hidden" name="id" value={{ $type->id }}>
  @endunless
  <div class="form-group">
    <label for="type-name">
      Nome:
    </label>
    <input
      id="type-name"
      class="form-control"
      name="name"
      type="text"
      maxlength="45"
      placeholder="Ex: Arqueiro"
      value="{{ old('name', $type->name ?? null) }}"
    >
  </div>
  <div class="d-flex justify-content-end">
    <button class="btn btn-info" type="submit">
      Salvar
    </button>
  </div>
</form>
