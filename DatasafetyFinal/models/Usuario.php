<?php

class Usuario extends DB
{
    public function vista_usuario()
    {
        try {
            $r = parent::conexion()->prepare("SELECT * FROM _usuario");
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function registro_user($dato)
    {
        try {
            $query = 'INSERT INTO usuarios (name_user,last_name_user,email_user) VALUES (?,?,?)';
            $resultado = $this->connect()->prepare($query);
            $resultado->execute(
                array(
                    $dato['nombre'],
                    $dato['asdasd'],
                    $dato['asdasd']
                )
            );
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function editar_user($dato)
    {
        try {
            $query = 'UPDATE users SET name_user = ?, last_name_user = ?, email_user = ? WHERE id_user = ?';
            $resultado = $this->connect()->prepare($query);
            $resultado->execute(
                array(
                    $dato[''],
                    $dato[''],
                    $dato[''],
                    $dato['']
                )
            );
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function borrar_usuario($id){
		try {

			$r = $this->connect()->prepare('DELETE FROM users WHERE id_user = ?');
			$r->execute(array($id));			
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
		}
}

}