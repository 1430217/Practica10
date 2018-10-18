<?php
require_once "conexion.php";

class Datos extends Conexion{

    /* Funcion para imprimir los datos en la tabla de las carreras */
    public function getCarreras($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
    
        $stmt->close();        
    }

    /* Funcion para CONTAR los registros de la tabla  */
    public function countCarrera($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        $rows = $stmt->rowCount();
        //$stmt->execute();
        //$stmt->fetchAll();

        return $rows;
    }

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

    /* Funcion para imprimir los datos en la tabla de maestros */
    public function getMaestros($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
    
        $stmt->close();        
    }

    /* Funcion para CONTAR los registros de la tabla  */
    public function countMaestros($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        $rows = $stmt->rowCount();

        return $rows;
    }
    
}
