<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 border p-3"> <!-- Agregado borde y padding -->
                <h2 class="text-center mb-4 text-primary">Inicio de sesión</h2>
                <form method="post" action="/login_prueba/autenticar"> <!-- Ajustar la acción según tu estructura de rutas -->
                    <div class="form-group">
                        <label for="usu_catalogo" class="form-label">Catálogo</label>
                        <input type="number" class="form-control" id="usu_catalogo" name="usu_catalogo">
                    </div>
                    <div class="form-group">
                        <label for="usu_password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="usu_password" name="usu_password">
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                </form>
                <p class="mt-3">¿No tiene una cuenta? <a href="/login_prueba/registro" class="text-primary fw-bold">Regístrese aquí</a></p>
            </div>
        </div>
    </div>