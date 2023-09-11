<?php 

class UsuariosCtlr
{
    public function actualizar_usuario_ctlr()
    {
        if (isset($_GET['idEditUsu'])) {
            if (!empty($_GET['idEditUsu'])) {
                $idEditUsuCtlr = $_GET['idEditUsu'];
                $rta=UsuariosMdl::actualizar_usuario_mdl($idEditUsuCtlr);
                #var_dump($rta);
                echo '
    <label for="tipo_documento">Tipo de Documento:</label>
    <select value="tipo_documento" name="tipo_documento_up" required>
        <option value="" class="text-center">'.$rta["tipo_doc"].' (es su documento actual)</option>
        <option value="TI">TI</option>
        <option value="CC">CC</option>
        <option value="CE">CE</option>
    </select><br>

    <label for="numero_documento_up">Numero de documento</label>
    <input type="number" value="'.$rta["num_doc"].'" name="numero_documento_up" required><br>

    <label for="nombre1">Primer Nombre:</label>
    <input type="text" value="'.$rta["nombre1"].'" name="nombre1_up" required><br>

    <label for="nombre2">Segundo Nombre:</label>
    <input type="text" value="'.$rta["nombre2"].'" name="nombre2_up"><br>

    <label for="apellido1">Primer Apellido:</label>
    <input type="text" value="'.$rta["apellido1"].'" name="apellido1_up" required><br>

    <label for="apellido2">Segundo Apellido:</label>
    <input type="text" value="'.$rta["apellido2"].'" name="apellido2_up"><br>

    <label for="fecha_nac">Fecha de Nacimiento:</label>
    <input type="date" value="'.$rta["fecha_nac"].'" name="fecha_nac_up" required><br>

    <label for="correo">Correo Electrónico:</label>
    <input type="email" value="'.$rta["correo"].'" name="correo_up" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="tel" value="'.$rta["telefono"].'" name="telefono_up" required><br>

    <label for="direccion">Dirección:</label>
    <input type="text" value="'.$rta["direccion"].'" name="direccion_up" required><br>

    <label for="ubicacion">Ubicación:</label>
    <input type="text" value="'.$rta["ubicacion"].'" name="ubicacion_up" required><br>

    <label for="usuario">Usuario:</label>
    <input type="text" value="'.$rta["usuario"].'" name="usuario_up" required><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" value="'.$rta["pwd"].'" name="pwd_up" required><br>
                ';
            }
        }
    }

    public function listar_usuarios_ctlr()
    {
        $rta = UsuariosMdl::listar_usuarios_mdl("usuarios");
        #var_dump($rta);
        foreach ($rta as $row => $item) {
            echo '
                <tr>
                  <td><a href="index.php?act=editarUsu&idEditUsu='.$item["id_usuario"].'" class="btn btn-warning">Editar</a></td>
                  <td><a href="" class="btn btn-danger">Eliminar</a></td>
                  <td>'.$item["tipo_doc"].'</td>
                  <td>'.$item["num_doc"].'</td>
                  <td>'.$item["nombre1"].'</td>
                  <td>'.$item["nombre2"].'</td>
                  <td>'.$item["apellido1"].'</td>
                  <td>'.$item["apellido2"].'</td>
                  <td>'.$item["fecha_nac"].'</td>
                  <td>'.$item["correo"].'</td>
                  <td>'.$item["telefono"].'</td>
                  <td>'.$item["direccion"].'</td>
                  <td>'.$item["ubicacion"].'</td>
                  <td>'.$item["usuario"].'</td>
                  <td>'.$item["pwd"].'</td>
                  <td>'.$item["rol"].'</td>
                  <td>'.$item["estado"].'</td>
                  <td>'.$item["fecha_crea"].'</td>
                  <td>'.$item["fecha_actualiza"].'</td>
                  <td>'.$item["fecha_elimina"].'</td>
                </tr>
        ';
        }
    }

    public function ingreso_usuario_ctlr()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $datos_form_ing_ctlr = array(
                "correo" => $_POST["correo_ing"],
                "contrasena" => $_POST["contrasena_ing"]
            );

            $rta = UsuariosMdl::ingreso_usuario_mdl($datos_form_ing_ctlr);
            #var_dump($rta[8]);
            if ($rta == "errorIng") {
                echo '
                    <script type="text/javascript">
                        Swal.fire({
                            title: "Error!",
                            html: "Usuario y contraseña incorrectos.<br>Verifica e intenta nuevamente.<br>Si la falla persiste, comunícate con el administrador.",
                            icon: "error",
                        });
                    </script>
                ';
            }else{
                if($rta["correo"] == $_POST["correo_ing"] && $rta["pwd"] == $_POST["contrasena_ing"]) {
                    session_start();
                    $_SESSION['usuCampeche'] = true;
                    echo '
                        <script type="text/javascript">
                            Swal.fire({
                                title: "Perfecto!",
                                text: "Usuario y contrasena Correctos!",
                                icon: "success",
                            }).then(function() {
                                // Redirige al usuario a la página deseada
                                window.location.href = "index.php?act=listarUsuarios"; 
                            });
                        </script>
                    ';
                }
            }

        } else {
            #Manejar el caso en el que alguien accede directamente a esta página sin enviar un formulario.
            #echo "Acceso no autorizado.";
        }
    }

    public function registrar_usuario_ctlr()
    {
        function sanitizeInput($input) 
        {
            // Eliminar etiquetas HTML y espacios en blanco al principio y al final
            $input = trim(strip_tags($input));

            // Reemplazar caracteres especiales con entidades HTML
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

            return $input;
        }

        function validateText($input) {
            // Utilizar una expresión regular para validar que solo contiene caracteres a-z y A-Z
            return preg_match('/^[a-zA-Z]+$/', $input);
        }

        function validateNumber($number) {
            // Utilizar una expresión regular para validar que solo contiene números
            return preg_match('/^[0-9]+$/', $number);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errores = array(); // Array para almacenar los errores

            // Crear un array asociativo para almacenar los datos del formulario
            $datos_form_reg_ctlr = array(
                "tipo_documento" => $_POST["tipo_documento_reg"],
                "numero_documento" => $_POST["numero_documento_reg"],
                "nombre1" => $_POST["nombre1_reg"],
                "nombre2" => $_POST["nombre2_reg"],
                "apellido1" => $_POST["apellido1_reg"],
                "apellido2" => $_POST["apellido2_reg"],
                "fecha_nac" => $_POST["fecha_nac_reg"],
                "correo" => $_POST["correo_reg"],
                "telefono" => $_POST["telefono_reg"],
                "direccion" => $_POST["direccion_reg"],
                "ubicacion" => $_POST["ubicacion_reg"],
                "usuario" => $_POST["usuario_reg"],
                "contrasena" => $_POST["pwd_reg"],
                "rol" => $_POST["rol_reg"]
            );

            // Sanitizar todos los campos del formulario
            foreach ($datos_form_reg_ctlr as $campo => $valor) 
            {
                $datos_form_reg_ctlr[$campo] = sanitizeInput($valor);
            }

            // Validar el campo de número de documento
            if (!validateNumber($datos_form_reg_ctlr["numero_documento"])) 
            {
                $errores[] = "El campo de número de documento debe contener solo números.";
            }

            // Validar el campo de teléfono
            if (!validateNumber($datos_form_reg_ctlr["telefono"])) 
            {
                $errores[] = "El campo de teléfono debe contener solo números.";
            }

            // Validar campos de texto
            $camposTexto = array("nombre1", "nombre2", "apellido1", "apellido2", "direccion", "ubicacion", "usuario", "contrasena");

            foreach ($camposTexto as $campo) 
            {
                if (!validateText($datos_form_reg_ctlr[$campo])) 
                {
                    $errores[] = "El campo $campo contiene caracteres no permitidos.";
                }
            }

            // Validar que todos los campos requeridos estén llenos
            $camposRequeridos = array(
                "tipo_documento", "numero_documento", "nombre1", "apellido1", "fecha_nac", "correo", "telefono",
                "direccion", "ubicacion", "usuario", "contrasena", "rol"
            );

            foreach ($camposRequeridos as $campo) 
            {
                if (empty($datos_form_reg_ctlr[$campo])) 
                {
                    $errores[] = "El campo $campo es requerido y debe ser completado.";
                }
            }

            // Si no hay errores, los datos son válidos y se pueden procesar o almacenar
            if (empty($errores)) 
            {
                #echo "Datos válidos. Procesar o almacenar los datos aquí.";
                $rta = UsuariosMdl::registrar_usuario_mdl($datos_form_reg_ctlr);

                if ($rta == "todoOkReg") {
                    header("location:index.php?act=todoOkReg");
                }else{
                    
                }
            } else {
                // Mostrar los errores
                echo "Se encontraron los siguientes errores:<br>";
                foreach ($errores as $error) {
                    echo "$error<br>";
                }
            }
        }
    }
}
?>