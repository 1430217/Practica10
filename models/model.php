<?php 
    class EnlacesPagina{

        public function enlacesPaginasModel($enlaces){
            if($enlaces == 'login' || $enlaces == 'registrar' || $enlaces == 'listadoAlumnos'
                || $enlaces == 'listadoTutorias' || $enlaces == 'addAlumnos' || $enlaces == 'dashboard'
                || $enlaces == 'listadoCarreras' || $enlaces == 'listadoMaestros'){

                    $module = 'views/modules/'.$enlaces.'.php';            
            }
            else if ($enlaces === 'index') { $module = 'views/modules/dashboard.php'; }
            else if ($enlaces === 'ok') {$module = 'views/modules/dashboard.php';}
            return $module;
        }
    }
?>