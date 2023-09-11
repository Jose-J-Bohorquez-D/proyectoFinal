<?php 

    #desde aca se van a gestionar las coneciones a base de datos 
    class MvcMdl
    {
        public static function enlaces_paginas_mdl($enlaces_mdl)
        {
            if ($enlaces_mdl == "registro" ||
                $enlaces_mdl == "actualizarUsuario" ||
                $enlaces_mdl == "ingreso" ) {

                $ruta_pagina = "Vistas/Paginas/".$enlaces_mdl.".php";

            }elseif ($enlaces_mdl == "index-inicio") {
                
                $ruta_pagina = "Vistas/Paginas/inicio.php";

            }elseif ($enlaces_mdl == "todoOkReg") {
                
                $ruta_pagina = "Vistas/Paginas/registro.php";

            }else{

                $ruta_pagina = "Vistas/Paginas/404.php";

            }

            return $ruta_pagina;
        }
    }

?>
