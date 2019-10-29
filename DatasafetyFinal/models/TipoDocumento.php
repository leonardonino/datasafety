<?php


class TipoDocumento extends DB{

    public function vista_tipo_documento()
    {
        try {
            $r = parent::conexion()->prepare("SELECT * FROM  _tipo__documento");
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }



}
?>