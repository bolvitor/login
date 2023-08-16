<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <!-- Agrega aquí tus enlaces a hojas de estilo si es necesario -->
    <link rel="stylesheet" href="tu_archivo_de_estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-9 col-lg-6 col-xl-5 text-center">
            <img src="./images/cit.png" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <div class="container border rounded p-4">
                <h2 class="text-center mb-4">Iniciar Sesión</h2>
                <form>
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Correo Electrónico" />
                        <label class="form-label" for="form3Example3">Email</label>
                    </div>
                    <div class="form-outline mb-3">
                        <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Contraseña" />
                        <label class="form-label" for="form3Example4">Contraseña</label>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Recordarme
                            </label>
                        </div>
                        <a href="#!" class="text-body">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="button" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar Sesión</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta? <a href="#!" class="link-danger">Registrarse</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Agrega aquí tus scripts si es necesario -->
    <script src="build/js/inicio.js"></script>
</body>
</html>
