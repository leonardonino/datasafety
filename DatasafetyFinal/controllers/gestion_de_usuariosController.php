<?php
 class AdministradorController {
     public function home(){
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/all/sidebar.php';
        require_once 'views/gestion_de_usuarios/home.php';
        require_once 'views/all/aside.php';
        require_once 'views/all/footer.php';   
     }
     public function perfil(){
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/all/sidebar.php';
        require_once 'views/Administrador/perfil.php';
        require_once 'views/all/aside.php';
        require_once 'views/all/footer.php';    
     }
     public function registrar(){
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/all/sidebar.php';
        require_once 'views/Administrador/registrar.php';
        require_once 'views/all/aside.php';
        require_once 'views/all/footer.php';     
     }
     public function gestion_de_perfiles(){
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/all/sidebar.php';
        require_once 'views/Administrador/gestion_de_perfiles.php';
        require_once 'views/all/aside.php';
        require_once 'views/all/footer.php';     
     }
 }
