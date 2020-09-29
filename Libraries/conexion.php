
<?php
include_once "../config/config.php";
  class Conexion{
    private $connect;
    // Defino mi constructor de clase
    public function __construct(){
      $connectionString = "mysql:hos=".BD_HOST.";dbname=".BD_NAME.";".BD_CHARSET;
      try {
        // aqui la programacion en caso todo vaya bien
        $this->connect = new PDO($connectionString,BD_USER,BD_PASS);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // prueba
        echo "La conexion fue exitosa";
      } catch (Exception $e) {
        // aqui la programacion en caso ocurra un error
        $this->connect = "Error de Conexion";
        echo "ERROR: " . $e->getMessage();
      }
    }
  }
  // prueba: instanciamos la clase para comprobar su estado
  $connect = new Conexion();
?>
