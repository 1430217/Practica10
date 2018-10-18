<?php
require_once "conexion.php";

class Datos extends Conexion{

    /*
    * Funciones para registrar alumnos, maestros, etc. 
    */

    public function registrarMaestro($maestro, $tabla){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, no_empleado, idCarrera, email, password) VALUES
                                            (:nombre, :no_empleado, :idCarrera, :email, :password)")
        ;
        $stmt->bindParam(':nombre', $maestro['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':no_empleado', $maestro['no_empleado'], PDO::PARAM_STR);
        $stmt->bindParam(':idCarrera' , $maestro['idCarrera'], PDO::PARAM_INT);
        $stmt->bindParam(':email' , $maestro['email'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $maestro['password'], PDO::PARAM_STR);


        if($stmt->execute()) 
            return 'success';
        else 
            return 'error';
        
        $stmt->close();
    }

    /* Funciones para registrar un alumno */
    public function registrarAlumno($alumno, $tabla){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, matricula, idCarrera, idMaestro) VALUES 
                                            (:nombre, :matricula, :idCarrera, :idMaestro)"
        );

        $stmt->bindParam(':nombre', $alumno['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':matricula', $alumno['matricula'], PDO::PARAM_STR);
        $stmt->bindParam(':idCarrera', $alumno['idCarrera'], PDO::PARAM_INT);
        $stmt->bindParam(':idMaestro', $alumno['idMaestro'], PDO::PARAM_INT);

        if($stmt->execute()) 
            return 'success';
        else 
            return 'error';
        
        $stmt->close();
    }


    /*
    * Funciones para hacer select en las tablas
    * sirven para los select de los formularios y para los listados de la tablas
    */

    /* Funcion para imprimir los datos en la tabla de las carreras */
    public function getCarreras($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
    
        $stmt->close();        
    }

    /* Funcion para imprimir los datos en la tabla de maestros */
    public function getMaestros($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
    
        $stmt->close();        
    }

    public function getAlumnos($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
    
        $stmt->close();        
    }


    /* 
    * Funciones para hacer el conteo de los registros de la base de datos 
    * estas funciones se usan en el archivo de cotroller.
    */

    /* Funcion para CONTAR los registros de la tabla  */
    public function countCarrera($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        $rows = $stmt->rowCount();
        //$stmt->execute();
        //$stmt->fetchAll();

        return $rows;
    }

    /* Funcion para CONTAR los registros de la tabla Maestros */
    public function countMaestros($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        $rows = $stmt->rowCount();

        return $rows;
    }

    /* Funcion para CONTAR los registros de la tabla Alumnos */
    public function countAlumnos($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        $rows = $stmt->rowCount();

        return $rows;
    }
    
}
