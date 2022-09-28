<?php 

    //http://localhost/sistema_php_2022/api/eliminar.php?id=15    
    $conexion = new mysqli("localhost","root","123456","sistema", "8111") or die("not connected".mysqli_connect_error());
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql="DELETE FROM `clientes` WHERE `clientes`.`id` = $id";
        $query=mysqli_query($conexion,$sql);
        if($query){
          echo"1 row deleted";
        }else{
          echo mysqli_error($conexion);
        }
      }
?>