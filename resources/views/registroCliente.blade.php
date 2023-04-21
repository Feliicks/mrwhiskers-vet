<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-RccFYiF0ywvRzRm+dd8TJj2Xr1EJDP1l3s+LLoGJSMnn/mPUZoNGN+M/jBveghA1NjgXJ+TRQ2rhPY1NhE+lZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <title>Document</title>
</head>
<body>
{{--   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}

  @if (session('success'))
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endif

<div class="container card col-md-5 p-3 mt-4"  > 
<form class="row needs-validation" method="POST" action="{{route ('registroCli')}}" >
  @csrf
  @if (session('success'))
  <h6 class="alert alert-success">{{session('success')}}</h6>
  {{-- <script type="text/javascript">alert("YOUR MESSAGE")</script> --}}
  @endif

  @error('nombre')
  <h6 class="alert alert-danger">{{$message}}</h6>
  @enderror
<!--     <div class="justify-content-center"> Registro de usuarios</div>
    <div class="form-group col-6">
      <label for="nameId" class="form-label mt-4">Nombre completo: </label>
      <input type="text" class="form-control" id="nameId" placeholder="Nombre" required>
    </div>
    <div class="col-6">
      <label for="apellidos" class="form-label mt-4">Apellidos:</label>
      <input type="text" class="form-control" id="apellidos" placeholder="Apellidos"required>
    </div>
    <div class="form-group">
    <label for="cinum" class="form-label mt-4">Numero de Cedula:</label>
      <input type="text" class="form-control" id="cinum" required placeholder="Numero de cedula">
    </div>
    <div class="form-group">
      <label for="number" class="form-label mt-4">Telefono:</label>
      <input type="text" class="form-control" id="number" placeholder="Telefono" required>
    </div>
    <div class="form-group">
      <label for="direccion" class="form-label mt-4">Direccion de domicilio:</label>
      <input type="text" class="form-control" id="direccion" placeholder="Direccion" required>
    </div>
    <div>
    <label for="correo" class="form-label mt-4">Correo electronico:</label>
      <input type="text" class="form-control" id="correo" placeholder="Enter email" required>
      </div>
    <div class="form-group">
      <label for="contrasenia" class="form-label mt-4">Contraseña:</label>
      <input type="password" class="form-control" id="contrasenia" placeholder="Password"required>
    </div> -->
 

    <div class="justify-content-center text-senter fw-bold"> Registro de usuarios</div>
    <div class="form-group col-6">
      <label for="nameId" class="form-label mt-4">Nombre completo: </label>
      <input type="text" class="form-control" id="nameId" placeholder="Nombre" name=nombre>
    </div>
    <div class="col-6">
      <label for="apellidos" class="form-label mt-4">Apellidos:</label>
      <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name=apellidos>
    </div>

    <div class="form-group">
    <label for="cinum" class="form-label mt-4">Numero de Cedula:</label>
      <input type="text" class="form-control" id="cinum"  placeholder="Numero de cedula" name=cedula_de_identidad>
    </div>
    <div class="form-group">
      <label for="number" class="form-label mt-4">Telefono:</label>
      <input type="text" class="form-control" id="number" placeholder="Telefono" name=telefono >
    </div>
    <div class="form-group">
      <label for="direccion" class="form-label mt-4">Direccion de domicilio:</label>
      <input type="text" class="form-control" id="direccion" placeholder="Direccion" name=direccion>
    </div>
    <div>
    <label for="correo" class="form-label mt-4">Correo electronico:</label>
      <input type="text" class="form-control" id="correo" placeholder="Enter email" name=correo>
      </div>
    <div class="form-group">
      <label for="contrasenia" class="form-label mt-4">Contraseña:</label>
      <input type="password" class="form-control" id="contrasenia" placeholder="Password" name="contrasenia">
    </div>


    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Ejemplo</label>
      <textarea class="form-control" id="exampleTextarea" rows="1"></textarea>
    </div>

    <button type="submit" class="btn btn-primary btn-lg mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal"  >Enviar registro!</button>
  
</form>


</div>
<script>// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>