<form action="">
  <label for="">{{ $label }}</label>
  <div class="input-group">
    <input
      type="text"
      class="form-control form-control-lg"
      placeholder="persona-chilera@email.com"
      aria-label="nl"
      autofocus="{{ isset($autofocus) ? 'true' : 'false' }}">
    <span class="input-group-btn">
      <button class="btn btn-guate btn-lg" type="button">¡Suscribime!</button>
    </span>
  </div>
</form>
