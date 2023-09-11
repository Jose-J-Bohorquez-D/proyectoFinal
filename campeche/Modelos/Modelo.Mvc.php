<?php 

    #desde aca se van a gestionar las coneciones a base de datos 
    class MvcMdl
    {
        public static function enlaces_paginas_mdl($enlaces_mdl)
        {
            if ($enlaces_mdl == "registro" ||
            $enlaces_mdl == "actualizarUsuario" ||
                $enlaces_mdl == "inicio" ||
                $enlaces_mdl == "ingreso" ) {

                $ruta_pagina = "Vistas/Paginas/".$enlaces_mdl.".php";

            }else{

                $ruta_pagina = "Vistas/Paginas/inicio.php";

            }

            return $ruta_pagina;
        }
    }

?>
