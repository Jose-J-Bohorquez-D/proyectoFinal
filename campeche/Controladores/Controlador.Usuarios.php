<?php 

class UsuariosCtlr
{
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
                    echo '
                        <script type="text/javascript">
                            Swal.fire({
                                title: "Perfecto!",
                                text: "Usuario y contrasena Correctos!",
                                icon: "success",
                            }).then(function() {
                                // Redirige al usuario a la página deseada
                                window.location.href = "index.php?act=miPerfil"; 
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
}
?>