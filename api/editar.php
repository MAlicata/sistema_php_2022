<?php 

    //http://localhost/sistema_php_2022/api/editar.php?nombre=Matias&apellido=messi&email=asdas@afsa.com&telefono=125151&detalle=asdasd&id=24    
    $conexion = new mysqli("localhost","root","123456","sistema", "8111") or die("not connected".mysqli_connect_error());
      if(isset($_GET['nombre'])){
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $email = $_GET['email'];
        $telefono = $_GET['telefono'];
        $detalle = $_GET['detalle'];

        $sql="UPDATE `clientes` SET `nombre` = '$nombre', `apellido` = '$apellido', `email` = '$email', `telefono` = '$telefono', `detalle` = '$detalle' WHERE `clientes`.`id` = $id;";
        $query=mysqli_query($conexion,$sql);
        if($query){
          echo"1 row update";
        }else{
          echo mysqli_error($conexion);
        }

      }     
        

?>