    <?php
      class AdministradorController extends Usuario 
      {

         private $tipoDocumento;

         public function __construct(){
            try {
                $this->tipoDocumento = new TipoDocumento();
            } catch (Exception $e) {
               
            }
         }
         public function home()
         {
            require_once 'views/all/header.php';
            require_once 'views/all/navbar.php';
            require_once 'views/all/sidebar.php';
            require_once 'views/Administrador/home.php';
            require_once 'views/all/aside.php';
            require_once 'views/all/footer.php';
         }
         public function perfil()
         {
            require_once 'views/all/header.php';
            require_once 'views/all/navbar.php';
            require_once 'views/all/sidebar.php';
            require_once 'views/Administrador/perfil.php';
            require_once 'views/all/aside.php';
            require_once 'views/all/footer.php';
         }
         public function registrar()
         {
            require_once 'views/all/header.php';
            require_once 'views/all/navbar.php';
            require_once 'views/all/sidebar.php';
            require_once 'views/Administrador/registrar.php';
            require_once 'views/all/aside.php';
            require_once 'views/all/footer.php';
         }
         public function gestion_de_perfiles()
         {
            require_once 'views/all/header.php';
            require_once 'views/all/navbar.php';
            require_once 'views/all/sidebar.php';
            require_once 'views/Administrador/gestion_de_perfiles.php';
            require_once 'views/all/aside.php';
            require_once 'views/all/footer.php';
         }
         public function gestion_de_usuarios()
         {
            require_once 'views/all/header.php';
            require_once 'views/all/navbar.php';
            require_once 'views/all/sidebar.php';
            require_once 'views/Administrador/gestion_de_usuarios.php';
            require_once 'views/all/aside.php';
            require_once 'views/all/footer.php';
         }
         public function gestion_de_equipos()
         {
            require_once 'views/all/header.php';
            require_once 'views/all/navbar.php';
            require_once 'views/all/sidebar.php';
            require_once 'views/Administrador/gestion_de_equipos.php';
            require_once 'views/all/aside.php';
            require_once 'views/all/footer.php';
         }
         public function Registro_De_Movimientos()
         {
            require_once 'views/all/header.php';
            require_once 'views/all/navbar.php';
            require_once 'views/all/sidebar.php';
            require_once 'views/Administrador/Registro_De_Movimientos.php';
            require_once 'views/all/aside.php';
            require_once 'views/all/footer.php';
         }
         public function Cambio_De_Clave()
         {
            require_once 'views/all/header.php';
            require_once 'views/all/navbar.php';
            require_once 'views/all/sidebar.php';
            require_once 'views/Administrador/Cambio_De_Clave.php';
            require_once 'views/all/aside.php';
            require_once 'views/all/footer.php';
         }
         public function Informes()
         {
            require_once 'views/all/header.php';
            require_once 'views/all/navbar.php';
            require_once 'views/all/sidebar.php';
            require_once 'views/Administrador/Informes.php';
            require_once 'views/all/aside.php';
            require_once 'views/all/footer.php';
         }

         public function crear_usuario()
         {
            $tipo_documento = $_POST['tipoperfil'];
            $tipo_identificacion = $_POST['tipoiden'];
            $tipo_documento = $_POST['tipoperfil'];
            $tipo_documento = $_POST['tipoperfil'];
         }
      }
