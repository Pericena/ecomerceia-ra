@csrf
@include('layouts.messages')

<div class="row">
  <div class="col-12">
    <div class="form-floating mb-3">
      <input type="text" placeholder="Nombre" class="form-control" name="name" value="{{ isset($empleado) ? $empleado->name : old('name') }}" required>
      <label for="name">Nombre</label>
    </div>
  </div>

  <div class="col-12">
    <div class="form-floating mb-3">
      <input type="number" placeholder="CI" class="form-control" name="ci" value="{{ isset($empleado) ? $empleado->ci : old('ci') }}" required>
      <label for="ci">CI</label>
    </div>
  </div>

  <div class="col-12">
    <h5>Género</h5>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="sexo" id="sexoM" value="M" {{ (isset($empleado->sexo) ? $empleado->sexo : old('sexo')) == 'M' ? 'checked' : '' }} required>
      <label class="form-check-label" for="sexoM">Masculino</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="sexo" id="sexoF" value="F" {{ (isset($empleado->sexo) ? $empleado->sexo : old('sexo')) == 'F' ? 'checked' : '' }} required>
      <label class="form-check-label" for="sexoF">Femenino</label>
    </div>
  </div>

  <div class="col-12">
    <div class="form-floating mb-3">
      <input type="tel" placeholder="Teléfono" class="form-control" name="celular" value="{{ isset($empleado) ? $empleado->celular : old('celular') }}" pattern="[0-9]{7,10}" required>
      <label for="celular">Teléfono</label>
      <small class="form-text text-muted">Ingrese un número de teléfono válido.</small>
    </div>
  </div>

  <div class="col-12">
    <div class="form-floating mb-3">
      <input type="text" placeholder="Domicilio" class="form-control" name="domicilio" value="{{ isset($empleado) ? $empleado->domicilio : old('domicilio') }}" required>
      <label for="domicilio">Domicilio</label>
    </div>
  </div>

  <div class="col-12">
    <h5>Estado</h5>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="estadoemp" id="estadoInactivo" value="Inactivo" {{ (isset($empleado->estadoemp) ? $empleado->estadoemp : old('estadoemp')) == 'Inactivo' ? 'checked' : '' }} required>
      <label class="form-check-label" for="estadoInactivo">Inactivo</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="estadoemp" id="estadoActivo" value="Activo" {{ (isset($empleado->estadoemp) ? $empleado->estadoemp : old('estadoemp')) == 'Activo' ? 'checked' : '' }} required>
      <label class="form-check-label" for="estadoActivo">Activo</label>
    </div>
  </div>

  <div class="col-12">
    <div class="form-floating mb-3">
      <input type="number" placeholder="Salario" class="form-control" name="salario" value="{{ isset($empleado) ? $empleado->salario : old('salario') }}" step="0.01" required>
      <label for="salario">Salario</label>
    </div>
  </div>

  <div class="col-12">
    <div class="form-floating mb-3">
      <input type="email" placeholder="E-Mail" class="form-control" name="email" value="{{ isset($empleado) ? $empleado->email : old('email') }}" required>
      <label for="email">E-Mail</label>
    </div>
  </div>

  @if (empty($empleado->id))
  <div class="col-12">
    <div class="form-floating mb-3">
      <input type="password" placeholder="Contraseña" class="form-control" name="password" required>
      <label for="password">Contraseña</label>
    </div>
  </div>
  <div class="col-12">
    <div class="form-floating mb-3">
      <input type="password" placeholder="Confirmar Contraseña" class="form-control" name="password_confirmation" required>
      <label for="password_confirmation">Confirmar Contraseña</label>
    </div>
  </div>
  @endif

  <input type="hidden" name="tipoc" value="0">
  <input type="hidden" name="tipoe" value="1">
</div>

