@extends('plantilla')
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/crear_feria.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@section('titulo')
Crea tu Feria
@endsection
@section('content')
  <h1>Crea tu feria</h1>
  <div class="registro">
  <form method="post" action="crearFeria" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre"> Nombre de la feria <span>*</span></label>
      <input type="nombre" class="form-control" id="nombre" placeholder="Nombre de tu feria" name="nombre" required>
    </div>
    <div class="form-group col-md-6">
      <label for="ubicacion"> Ubicacion  <span>*</span></label>
      <input type="text" class="form-control" id="ubicacion" placeholder="Ubicacion" name="ubicacion" required>
    </div>
    <div class="form-group col-md-6">
      <label for="datepicker"> Desde <span>*</span></label>
      <input type="text" class="form-control" id="datepicker" placeholder="fecha inicio" name="desde" required>
    </div>
    <div class="form-group col-md-6">
      <label for="datepicker1"> Hasta <span>*</span></label>
      <input type="text" class="form-control" id="datepicker1" placeholder="fecha finalizacion" name="hasta" required>
    </div>
    <script src="./js/crear_feria.js"></script>
    <div class="form-group col-md-6">
      <label for="descripcion"> Descripcion <span>*</span></label>
      <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="descripcion">
    </div>
    <div class="foto">
      <div class="form-group col-md-6">
        <label for="foto_feria">Subi una Foto de tu feria:</label>
        <div class="display">
        </div>
        <input type="file" id="upload" name="foto_feria">
  <button type="submit"id="crear" class="btn btn-primary">Feriate!</button>
  </form>
  <ul>
{{-- @foreach ($errores as $error)
    <li class="alert alert-danger" role="alert">{{$error}}</a></li>
  @endforeach;  --}}
  </ul>
  </div>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">

  <script src="./js/crear_feria.js"></script>
  </div>
@endsection
