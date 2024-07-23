<div class="row">
  <div class="col-md-10">
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre" value="{{ isset($perfil) ? $perfil->name : old('name') }}" required>
    </div>
  </div>
  <div class="col-md-10">
    <div class="form-group">
      <label for="ci">CI</label>
      <input type="number" class="form-control" id="ci" name="ci" placeholder="Ingrese su CI" value="{{ isset($perfil) ? $perfil->ci : old('ci') }}" required>
    </div>
  </div>
  <div class="col-md-10">
    <div class="form-group">
      <label for="genero">Género</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" id="sexoM" name="sexo" value="M" @if ((isset($perfil) ? $perfil->sexo : old('sexo')) == 'M') checked @endif>
        <label class="form-check-label" for="sexoM">Masculino</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" id="sexoF" name="sexo" value="F" @if ((isset($perfil) ? $perfil->sexo : old('sexo')) == 'F') checked @endif>
        <label class="form-check-label" for="sexoF">Femenino</label>
      </div>
    </div>
  </div>
  <div class="col-md-10">
    <div class="form-group">
      <label for="celular">Teléfono</label>
      <input type="tel" class="form-control" id="celular" name="celular" placeholder="Ingrese su teléfono" value="{{ isset($perfil) ? $perfil->celular : old('celular') }}" required>
    </div>
  </div>
  <div class="col-md-10">
    <div class="form-group">
      <label for="domicilio">Domicilio</label>
      <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Ingrese su domicilio" value="{{ isset($perfil) ? $perfil->domicilio : old('domicilio') }}" required>
    </div>
  </div>
  <div class="col-md-10">
    <div class="form-group">
      <label for="email">E-Mail</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" value="{{ isset($perfil) ? $perfil->email : old('email') }}" required>
    </div>
  </div>
  @if ($perfil->tipoc == 1)
  <input type="hidden" name="tipoc" value="1">
  <input type="hidden" name="tipoe" value="0">
  @else
  <div class="col-md-10">
    <div class="form-group">
      <label for="estado">Estado</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" id="estadoInactivo" name="estadoemp" value="Inactivo" @if ((isset($perfil) ? $perfil->estadoemp : old('estadoemp')) == 'Inactivo') checked @endif>
        <label class="form-check-label" for="estadoInactivo">Inactivo</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" id="estadoActivo" name="estadoemp" value="Activo" @if ((isset($perfil) ? $perfil->estadoemp : old('estadoemp')) == 'Activo') checked @endif>
        <label class="form-check-label" for="estadoActivo">Activo</label>
      </div>
    </div>
  </div>
  <input type="hidden" name="tipoc" value="0">
  <input type="hidden" name="tipoe" value="1">
  @endif
  @csrf
</div>

