<?php
//http://localhost/sistema_php_2022/api/index.php?nombre=Matias&apellido=messi&email=asdas@afsa.com&telefono=125151&detalle=asdasd    
    $conexion = new mysqli("localhost","root","123456","sistema", "8111") or die("not connected".mysqli_connect_error());
   
        $id = $_GET['id'];
        $sql="SELECT * FROM `clientes` WHERE id = $id";
        $result=mysqli_query($conexion,$sql);
    
        $clientes = array();
        while ($fila = mysqli_fetch_array($result)) {
          array_push($clientes, $fila);
        }
        echo json_encode($clientes);

    
?>