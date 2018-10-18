<?php 
    class MvcController{

        public function pagina(){
            include 'views/template.php';
        }

        public function enlacesPaginasController(){
            if(isset($_GET['action'])){
                $enlaces = $_GET['action'];
            }else{
                $enlaces = 'index';
            }
            $respuesta = EnlacesPagina::enlacesPaginasModel($enlaces);
            include $respuesta;
        }

        /*                         *
        * Funciones para registrar *
        *                          */

        /* registrar un maestro  */
        public function registrarMaestroController(){
            if(isset($_POST['nombre'])){
                
                $maestro = array('nombre' => $_POST['nombre'],
                                'no_empleado' => $_POST['no_empleado'],
                                'idCarrera' => $_POST['idCarrera'],
                                'email' => $_POST['email'],
                                'password' => $_POST['password']
                );

                #Print para saber si se mandaban los datos al controller
                #print_r($maestro);

                $stmt = Datos::registrarMaestro($maestro, 'maestros'); 

				if($stmt == "success")
					header("location:index.php?action=ok"); 
				else 
					header("location:index.php");
            }
            
        }

        /* Registrar alumnos */
        public function registrarAlumnoController(){
            if(isset($_POST['nombre'])){
                
                $alumno = array('nombre' => $_POST['nombre'],
                                'matricula' => $_POST['matricula'],
                                'idCarrera' => $_POST['idCarrera'],
                                'idMaestro' => $_POST['idMaestro']
                );

                #Print para saber si se mandaban los datos al controller
                print_r($alumno);

                $stmt = Datos::registrarAlumno($alumno, 'alumnos'); 

                /* HAY ERRORES EN ESTA PARTE, AUN NO LO SOLUCIONO */
				if($stmt == "success")
					header("location:index.php?action=ok"); #<- en esta linea hay problemas
				else 
					header("location:index.php");
            }
            
        }



        /*                                 *
        * Funciones para obtener los datos *
        *                                  */

        /* Impirme las carreras en una tabla */
        public function getCarrerasController(){
			$stmt = Datos::getCarreras('carreras');

			//For each para recorrer la tabla de las carreras y poder imprimirlos
			foreach ($stmt as $carrera => $r) {
				//Echo para imprimir los datos en la tabla
				echo 
                    '<tr>
                        <td>'.$r["idCarrera"].'</td>
						<td>'.$r["nombre"].'</td>
					</tr>'
				;
			}		
        }

        /* Controller para cargar las carreras en el select */
        public function getCarrerasCmb(){
            $stmt = Datos::getCarreras('carreras');

            foreach($stmt as $carrera => $r) {
                echo '<option value=" '.$r['idCarrera'].' ">' .$r['nombre']. '</option>';
            }
        }

        /* Controller para cargar los maestros en el select */
        public function getMaestrosCmb(){
            $stmt = Datos::getMaestros('maestros');

            foreach($stmt as $maestro => $r) {
                echo '<option value=" '.$r['idMaestro'].' ">' .$r['nombre']. '</option>';
            }
        }

        /* Imprime los maestros en una tabla */
        public function getMaestrosController(){
			$stmt = Datos::getMaestros('maestros');

			//For each para recorrer la tabla de las carreras y poder imprimirlos
			foreach ($stmt as $maestro => $r) {
				//Echo para imprimir los datos en la tabla
				echo 
                    '<tr>
                        <td>'.$r["idMaestro"].'</td>
                        <td>'.$r["nombre"].'</td>
                        <td>'.$r["no_empleado"].'</td>
                        <td>'.$r["idCarrera"].'</td>
                        <td>'.$r["email"].'</td>
					</tr>'
				;
			}		
        }

        /* Imprime los alumnos en una tabla */
        public function getAlumnosController(){
			$stmt = Datos::getAlumnos('alumnos');

			//For each para recorrer la tabla de las carreras y poder imprimirlos
			foreach ($stmt as $alumno => $r) {
				//Echo para imprimir los datos en la tabla
				echo 
                    '<tr>
                        <td>'.$r["nombre"].'</td>
                        <td>'.$r["matricula"].'</td>
                        <td>'.$r["idCarrera"].'</td>
                        <td>'.$r["idMaestro"].'</td>
                        <td>'.'<button class="btn btn-warning" ><span class="glyphicon glyphicon-pencil"></span></button>'.'</td>
                        <td>'.'<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>'.'</td>
                        <td>'.'<button class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></button>'.'</td>
					</tr>'
				;
			}		
        }

        /* 
        * Controllers que tengan en su nombre "getCount..." son para hacer conteo de los registros de las diferentes tablas
        * esto para mostrar el numero de registros en el dashboard.
        */
        /* Controller para imprimir el conteo de carreras (Ver en el dashboard) */
        public function getCountCarreras(){
            $stmt = Datos::countCarrera('carreras');
            echo $stmt;
        }

        /* Controller para imprimir el conteo de maestros (Ver en el dashboard) */
        public function getCountMaestros(){
            $stmt = Datos::countCarrera('maestros');
            echo $stmt;
        }

        /* Controller para imprimir el conteo de alumnos/tutorados (Ver en el dashboard) */
        public function getCountAlumnos(){
            $stmt = Datos::countAlumnos('alumnos');
            echo $stmt;
        }

    }
?>