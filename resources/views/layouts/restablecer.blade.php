<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperación de Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <i class="fas fa-lock fa-3x text-warning"></i>
                        <h4 class="mt-2">Recuperación de Contraseña</h4>
                    </div>

                    <!-- Formulario de recuperación de contraseña -->
                    <form id="recoveryForm">
                        <div class="form-group">
                            <label for="inputEmail">Correo Electrónico</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Ingrese su correo electrónico" required>
                        </div>
                        <button type="button" class="btn btn-warning btn-block" onclick="recoverPassword()">Recuperar Contraseña</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function recoverPassword() {
        // Obtener el correo ingresado
        var email = document.getElementById('inputEmail').value;

        // Realizar una solicitud al servidor para verificar si el correo existe y cambiar la contraseña
        // Aquí deberías implementar la lógica del servidor (por ejemplo, con AJAX y un backend en PHP, Node.js, etc.)

        // Simulando una respuesta exitosa del servidor para este ejemplo
        var response = { success: true, message: "Contraseña cambiada con éxito" };

        // Mostrar el resultado al usuario
        alert(response.message);

        // Puedes redirigir al usuario a otra página después de cambiar la contraseña
        // window.location.href = "nueva_pagina.html";
    }
</script>

</body>
</html>
