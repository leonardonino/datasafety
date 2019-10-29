<?php

class RepositorioUsuario {
    public static function obtener_todos($conexion) {
        $usuarios = array();
        
        if (isset($conexion)) {
            try {
                
                include_once 'usuario.php';
                $sql = "SELECT * FROM usuarios";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();
                
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuarios[] = new Usuario(
                            $fila['id'], $fila['nombre'], $fila['email'], $fila['password'], $fila ['fecha_registro']
                        );
                         }
                    } else {
                        print 'No hay usuarios';
                    }
                
                
            } catch (PDOexception $ex) { 
                print "ERROR" . $ex -> getMessage();
                }
        }
        return $usuarios;
    }
    public static function obtener_numero_usuarios($conexion) {
        $total_usuarios = null;
        if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*) as total FROM reserva";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();
                
                $total_usuarios = $resultado['total'];
            } catch (PDOexception $ex) { 
                print 'ERROR' . $ex -> getMessage();
                }
        }
        return $total_usuarios;
    }
    
    public static function insertar_usuario($conexion, $usuario) {
        $usuario_insertado = false;
        if (isset($conexion)) {
            try {
                $sql = 'INSERT INTO cliente(Celular, Nombre, Correo_electronico, Tipo_Documen, Num_Documen, Contraseña, Confcontraseña) VALUES(:telefono, :nombre, :email, :tipo_documento, :documento, :clave, :clave2)';
                
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':telefono' , $usuario -> obtener_telefono(), PDO::PARAM_STR);
                $sentencia -> bindParam(':nombre' , $usuario -> obtener_nombre(), PDO::PARAM_STR);
                $sentencia -> bindParam(':email' , $usuario -> obtener_email(), PDO::PARAM_STR); 
                $sentencia -> bindParam(':tipo_documento' , $usuario -> obtener_tdocu(), PDO::PARAM_STR); 
                $sentencia -> bindParam(':documento' , $usuario -> obtener_documento(), PDO::PARAM_STR); 
                $sentencia -> bindParam(':clave' , $usuario -> obtener_clave(), PDO::PARAM_STR); 
                $sentencia -> bindParam(':clave2' , $usuario -> obtener_clave2(), PDO::PARAM_STR); 
                                        
                $usuario_insertado = $sentencia -> execute();
                    
            } catch (PDOexception $ex) {
                print 'ERROR' . $ex ->getMessage();
            }
        }
        return $usuario_insertado;
    }
}
