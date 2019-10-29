<?php
    class ValidadorRegistro{
        
        private $aviso_inicio;
        private $aviso_cierre;
        
        private $nombre;
        private $telefono;
        private $email;
        private $documento;
        private $clave;
        
        private $error_nombre;
        private $error_telefono;
        private $error_email;
        private $error_documento;
        private $error_clave1;
        private $error_clave2;
        
        public function __construct($nombre, $telefono, $email, $documento, $clave1, $clave2) {
            $this -> aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
            $this -> aviso_cierre = "</div>";
                
            $this -> nombre = "";
            $this -> telefono = "";
            $this -> email = "";
            $this -> documento = "";
            $this -> clave = "";
            
            $this -> error_nombre = $this -> validar_nombre($nombre);
            $this -> error_email = $this -> validar_email($email);
            $this -> error_telefono = $this -> validar_telefono($telefono);
            $this -> error_documento = $this -> validar_documento($documento);
            $this -> error_clave1 = $this -> validar_clave1($clave1);
            $this -> error_clave2 = $this -> validar_clave2($clave1, $clave2);
            
            if ($this -> error_clave1 === "" && $this -> error_clave2 === "") {
                $this -> clave = $clave1;
            }
        }
        private function variable_iniciada($variable) {
            if (isset($variable) && !empty($variable)) {
                return true;
            } else {
                return false;
            }
        }
        private function validar_nombre($nombre) {
            if (!$this -> variable_iniciada($nombre)) {
                return "Debes escribir tu nombre.";
            } else {
                $this -> nombre = $nombre;
            }
            if (strlen($nombre) < 6) {
                return 'El nombre debe ser más largo que 6 caracteres.';
            }
            if (strlen($nombre) > 40) {
                return 'El nombre no puede ocupar más de 40 caracteres.';
            }
            return "";
        }
        private function validar_email($email) {
            if (!$this -> variable_iniciada($email)) {
                return 'Debes escrbir tu email.';
            } else {
                $this -> email = $email;
            }
            return "";
        }
        private function validar_telefono($telefono) {
            if (!$this -> variable_iniciada($telefono)) {
                return 'Debes colocar tu telefono de contacto.';
            } else {
                $this -> telefono = $telefono;
            }
            return "";
        }
        private function validar_documento($documento) {
            if (!$this -> variable_iniciada($documento)) {
                return 'Debes colocar tu número de documento.';
            } else {
                $this -> documento = $documento;
            }
            return "";
        }
        private function validar_clave1($clave1) {
            if (!$this -> variable_iniciada($clave1)) {
                return 'Debes escribir una contraseña.';
            }
            return "";
        }
        private function validar_clave2($clave1, $clave2) {
            if(!$this -> variable_iniciada($clave1)) {
                return 'Primero rellena el campo contraseña.';
            }
            if (!$this -> variable_iniciada($clave2)) {
                return 'Debes repetir tu contraseña.';
        }
            if ($clave1 !== $clave2) {
                return 'Las contraseñas no coinciden.';
            }
            return "";
    }
        public function obtener_nombre() {
            return $this -> nombre;
        }
        public function obtener_email() {
            return $this -> email;
        }
        public function obtener_telefono() {
            return $this -> telefono;
        }
        public function obtener_documento() {
            return $this -> documento;
        }
        public function obtener_clave() {
            return $this -> clave;
        }
        
        public function obtener_error_nombre() {
            return $this -> error_nombre;
        }
        public function obtener_error_email() {
            return $this -> error_email;
        }
        public function obtener_error_telefono() {
            return $this -> error_telefono;
        }
        public function obtener_error_documento() {
            return $this -> error_documento;
        }
        public function obtener_error_clave1() {
            return $this -> error_clave1;
        }
        public function obtener_error_clave2() {
            return $this -> error_clave2;
        }
        public function mostrar_nombre() {
            if ($this -> nombre !== "") {
                echo 'value="'. $this -> nombre . '"';
            }
        }
        public function mostrar_error_nombre() {
            if (!$this -> error_nombre !== "") {
                echo $this -> aviso_inicio . $this -> error_nombre . $this -> aviso_cierre;   
            }
        }
        public function mostrar_telefono() {
            if ($this -> telefono !== "") {
                echo 'value="'. $this -> telefono . '"';
            }
        }
        public function mostrar_error_telefono() {
            if (!$this -> error_telefono !== "") {
                echo $this -> aviso_inicio . $this -> error_telefono . $this -> aviso_cierre;   
            }
        }
        public function mostrar_email() {
            if ($this -> email !== "") {
                echo 'value="'. $this -> email . '"';
            }
        }
        public function mostrar_error_email() {
            if (!$this -> error_email !== "") {
                echo $this -> aviso_inicio . $this -> error_email . $this -> aviso_cierre;   
            }
        }
        public function mostrar_documento() {
            if ($this -> documento !== "") {
                echo 'value="'. $this -> documento . '"';
            }
        }
        public function mostrar_error_documento() {
            if (!$this -> error_documento !== "") {
                echo $this -> aviso_inicio . $this -> error_documento . $this -> aviso_cierre;   
            }
        }
        public function mostrar_error_clave1() {
            if (!$this -> error_clave1 !== "") {
                echo $this -> aviso_inicio . $this -> error_clave1 . $this -> aviso_cierre;   
            }
        }
        public function mostrar_error_clave2() {
            if (!$this -> error_clave2 !== "") {
                echo $this -> aviso_inicio . $this -> error_clave2 . $this -> aviso_cierre;   
            }
        }
        public function registro_valido() {
            if ($this -> error_nombre === '' &&
                $this -> error_telefono === '' &&
                $this -> error_email === '' &&
                $this -> error_documento === '' &&
                $this -> error_clave1 === '' &&
                $this -> error_clave2 === '') {
                return true;
            } else {
                return false;
            }
        }
}
?>