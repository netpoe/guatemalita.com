<form action="{{ $action }}" method="POST">
  {{ csrf_field() }}
  <label for="">{{ $label }}</label>
  <div class="input-group {{ $errors->has('email') ? ' has-danger' : '' }}">
    <input
      type="email"
      class="form-control form-control-lg"
      placeholder="persona-chilera@email.com"
      aria-label="nl"
      name="email"
      value="{{ old('email') ? old('email') : null }}"
      autofocus="{{ isset($autofocus) ? 'true' : 'false' }}">
    <span class="input-group-btn">
      <button class="btn btn-guate btn-lg" type="submit">¡Suscribime!</button>
    </span>
  </div>
  @if ($errors->has('email'))
    <span class="help-block">
      <strong>{{ $errors->first('email') }}</strong>
    </span>
  @endif
</form>
