<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layout.header')
    <title>Inicio</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <div class="d-flex align-items-center m-2">
                <img class="" src="{{ asset('bootstrap-4.svg') }}" alt="logo" width="30"
                    height="24">
                <p class="mb-0 fw-semibold ms-4">¡Mr. Whiskers!</p>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
            aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link mx-3 text-reset text-uppercase fw-semibold" href="#">Inicio
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 text-reset text-uppercase fw-semibold" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 text-reset text-uppercase fw-semibold" href="#campanias">Campañas de salud</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 text-reset text-uppercase fw-semibold" href="#contacto">Contacto</a>
                </li>
                <li class="d-flex mx-3">
                    <button class="btn btn-primary my-2 my-sm-0 " type="submit">
                        <a class="nav-link text-white fw-bold" href="/login">Acceso administración!</a>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
    {{-- <div class="container">
  <img class="img-fluid" src="https://static.wixstatic.com/media/24536d_8610bbeb807d4d45ab9e6600e27c1e2c~mv2.png/v1/fill/w_980,h_680,q_90/24536d_8610bbeb807d4d45ab9e6600e27c1e2c~mv2.png" alt="1.png" loading="eager" style="width: 100%; height: auto;">
</div> --}}
    {{-- Carrusel --}}
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active d-item">
                <img src="https://static.wixstatic.com/media/24536d_8610bbeb807d4d45ab9e6600e27c1e2c~mv2.png/v1/fill/w_1920,h_680,q_90/24536d_8610bbeb807d4d45ab9e6600e27c1e2c~mv2.webp"
                    class="d-block w-100 d-img " alt="...">
            </div>
            <div class="carousel-item d-item">
                <img src="https://static.wixstatic.com/media/24536d_8610bbeb807d4d45ab9e6600e27c1e2c~mv2.png/v1/fill/w_1920,h_680,q_90/24536d_8610bbeb807d4d45ab9e6600e27c1e2c~mv2.webp"
                    class="d-block w-100 d-img " alt="...">
            </div>
            <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase">Clinica Veterinaria </p>
                <h1 class="display-1 fw-bolder text-capitalize">Mr Whiskers</h1>
                <p class="mt-5 fs-3 text-uppercase">Consultas, servicios y todo lo demás</p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="row align-items-start mt-5">
            <div class="col col-md-1">
            </div>
            <div class="col col-md-4  " id="servicios">
                <h2 class="font_2" style="line-height:1em; font-size:45px;"><span
                        style="font-weight:bold;">NUESTROS</span></h2>

                <h2 class="font_2" style="line-height:1em; font-size:45px;"><span>SERVICIOS</span></h2>
            </div>


            <div class="col col-md-7">
              <div class="container"> 
                <section style="height:400px;">

                  <div class="d-flex">
                      <svg xmlns="http://www.w3.org/2000/svg " style="width:70px; height:60px; " class="icon-section" fill="black">
                          <path
                              d="M46.5 28.9L20.6 3c-.6-.6-1.6-.6-2.2 0l-4.8 4.8c-.6.6-.6 1.6 0 2.2l19.8 20-19.9 19.9c-.6.6-.6 1.6 0 2.2l4.8 4.8c.6.6 1.6.6 2.2 0l21-21 4.8-4.8c.8-.6.8-1.6.2-2.2z">
                          </path>
                      </svg>
                      <div>
                          <h6 class="font_6" style="font-size:20px;">EXÁMENES DE CONTROL</h6>
                          <p class="font_8" style="font-size:14px;">Haz clic para editar y agregar tu propio
                              texto.&nbsp;</p>
                      </div>
                  </div>

                  <div class="d-flex mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg " style="width:70px; height:60px; " class="icon-section" fill="black">
                        <path
                            d="M46.5 28.9L20.6 3c-.6-.6-1.6-.6-2.2 0l-4.8 4.8c-.6.6-.6 1.6 0 2.2l19.8 20-19.9 19.9c-.6.6-.6 1.6 0 2.2l4.8 4.8c.6.6 1.6.6 2.2 0l21-21 4.8-4.8c.8-.6.8-1.6.2-2.2z">
                        </path>
                    </svg>
                    <div>
                        <h6 class="font_6" style="font-size:20px;">EXÁMENES DE CONTROL</h6>
                        <p class="font_8" style="font-size:14px;">Haz clic para editar y agregar tu propio
                            texto.&nbsp;</p>
                    </div>
                </div>
                <div class="d-flex mt-5">
                  <svg xmlns="http://www.w3.org/2000/svg " style="width:70px; height:60px; " class="icon-section" fill="black">
                      <path
                          d="M46.5 28.9L20.6 3c-.6-.6-1.6-.6-2.2 0l-4.8 4.8c-.6.6-.6 1.6 0 2.2l19.8 20-19.9 19.9c-.6.6-.6 1.6 0 2.2l4.8 4.8c.6.6 1.6.6 2.2 0l21-21 4.8-4.8c.8-.6.8-1.6.2-2.2z">
                      </path>
                  </svg>
                  <div>
                      <h6 class="font_6" style="font-size:20px;">EXÁMENES DE CONTROL</h6>
                      <p class="font_8" style="font-size:14px;">Haz clic para editar y agregar tu propio
                          texto.&nbsp;</p>
                  </div>
              </div>


              </section>
            </div>
              </div>
                

            </div>

        </div>
    </div>

    <div class="container ">
        <div class="row align-items-start mt-5">
            <div class="col col-md-1">
            </div>
            <div class="col col-md-4 "id="campanias">
                <h2 id="servicios" class="fw-bold" style="font-size:45px;">
                    <span>CAMPAÑAS DE </span>
                </h2>
                <h2 class="fw-medium" style=" font-size:45px;">
                    <span>SALUD</span>
                </h2>
            </div>

            <div class="col col-md-7">
                <section class="container ">
                    <div style="display: flex; align-items: center;">
                        <div class="bg-primary p-4 lh-base ">
                            <p class="text-white fw-bold " style="font-size:16px;">Lorem ipsum dolor sit, amet
                                consectetur adipisicing elit. Quaerat labore odio autem vel, dolor illum quam, dolorum
                                nesciunt cum adipisci corrupti ducimus soluta. Exercitationem quidem maxime beatae, fuga
                                repudiandae iure! Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
                                doloremque, delectus nesciunt exercitationem omnis ad consequatur ex repellat esse harum
                                qui ipsa, adipisci amet repudiandae quae assumenda a officiis nihil?</p>
                        </div>
                    </div>
                </section>

            </div>


        </div>
    </div>
    <div class="container">
        <div class="row align-items-start mt-5">
            <div class="col col-md-1">
            </div>
            <div class="col col-md-4" id="contacto">
                <h2 class="fw-bold" style="line-height:1em; font-size:45px;"><span>SIGUE EN</span></h2>
                <h2 class="font_2" style="line-height:1em; font-size:45px;"><span style="font-weight:bold;">CONTACTO
                    </span></h2>
            </div>
            <div class="col col-md-7">


                <section class="container bg-secondary p-5">

                    <div style="display: flex; align-items: center; " class="row align-items-start">
                        <div class="col col-6">
                            <h6 class="fs-5"> NUESTRA DIRECCION:</h6>
                            {{-- <p class="font_8" style="font-size:14px;">Av. Los Jarrones</p><br>
                    <p class="font_8" style="font-size:14px;">#26726. Edificio Microsoft </p> --}}
                            <div class="fs-6 mt-4">
                                <p class="">
                                    <span>Av. Los Rosales 122</span>
                                </p>
                                <p class="" style="">
                                    <span>28021, Madrid.</span>
                                </p>
                                <p class="" style="">
                                    <span>
                                        <span style="font-weight:bold;">Email:</span><a data-auto-recognition="true"
                                            href="mailto:">correo elctronic@test.com</a><br>
                                        <span style="font-weight:bold;">Tel: </span>22222222
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col col-6 ">
                            <h6 class="fs-5"> NUESTROS HORARIOS:</h6>
                            <div class=" fs-6 mt-4">
                                <p class="fw-semibold"><span>
                                        <span>7:00 AM - 10:00 PM</span>
                                    </span>
                                </p>
                                <p class="">Lunes- Sábado</p>
                                <p class="fw-semibold">
                                    <span> 10:00 AM - 6:00 PM</span>
                                </p>
                                <p class=""><span>Domingo</span></p>
                            </div>
                        </div>

                    </div>


                </section>

            </div>

        </div>
    </div>
    <div class="my-5 py-5 px-5 text-center">
        <button type="button " class="btn btn-primary fw-semibold fs-5 px-4">
            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-semibold fs-5 px-4 ">
                ¡Reserva tu cita aqui!
            </a>
        </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog custom-modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" width="400px" id="exampleModalLabel">Reserva de cita</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="container text-start">
                  <div class="row align-items-start">
                    <div class="col col-6">
                      <div class="mb-3 mt-2">
                        <label for="cedula" class="form-label">Cédula de identidad</label>
                        <input type="text" class="form-control" id="cedula" required>
                      </div>
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" id="nombre" required>
                      </div>
                      <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" required>
                      </div>
                      <div>RFID</div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" required>
                      </div>
                      <div class="mb-3">
                        <label for="mascota" class="form-label">Nombre de la mascota</label>
                        <input type="text" class="form-control" id="mascota" required>
                      </div>
                      <div class="mb-3">
                        <label for="raza" class="form-label">Raza de la mascota</label>
                        <input type="text" class="form-control" id="raza" required>
                      </div>
                    </div>
                    <div class="col col-6">
                      <div class="mb-3 mt-2">
                          <label for="direccion" class="form-label">Direccion de domicilio:</label>
                          <input type="text" class="form-control" id="direccion" placeholder="Direccion" name=direccion>
                      </div>
                      <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" required>
                      </div>
                      <div class="mb-3">
                        <label for="hora" class="form-label">Hora</label>
                        <select class="form-select" aria-label="Seleccionar hora" id="hora" required>
                          <option selected disabled value="">Seleccionar hora</option>
                          <option value="9:00am">9:00am</option>
                          <option value="10:00am">10:00am</option>
                          <option value="11:00am">11:00am</option>
                          <option value="12:00pm">12:00pm</option>
                          <option value="1:00pm">1:00pm</option>
                          <option value="2:00pm">2:00pm</option>
                          <option value="3:00pm">3:00pm</option>
                          <option value="4:00pm">4:00pm</option>
                          <option value="5:00pm">5:00pm</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="tipoConsulta" class="form-label">Tipo de consulta</label>
                        <select class="form-select" aria-label="Seleccionar tipo de consulta" id="tipoConsulta" required>
                          <option selected disabled value="">Seleccionar tipo de consulta</option>
                          <option value="Consulta general">Consulta general</option>
                        </select>
                      </div>
                      <button type="" class="btn btn-primary">Reservar cita</button>
                    </div>
                  </div>
                </div>
              </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" type="submit" class="btn btn-primary">Send message</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="my-5 py-5 px-5 text-center">
        <button type="button " class="btn btn-primary fw-semibold fs-5 px-4">
            <a href="/registro" target="_blank" class="btn btn-primary fw-semibold fs-5 px-4 ">
                Registrate como nuestro cliente!
            </a>
        </button>
    </div>
</body>
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
     
    </div>
    <!-- Left -->

    <!-- Right -->

    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Mr Whiskers
          </h6>
          <p>
            Mr. Whiskers,  servicios de calidad para el cuidado de tus mascotas. Desde consultas generales hasta procedimientos quirúrgicos. Contamos con productos y alimentos de alta calidad para satisfacer las necesidades de tus mascotas
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Servicios
          </h6>
          <p>
            Consultas
          </p>
          <p>
            Cirujias
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Enlaces utiles
          </h6>
          <p>
            <a href="#" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://google.com/">Felicks Dev</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</html>
