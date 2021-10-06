<?php include "cabecera.inc.php"; ?>
    
    <div class="menu">
        <a href="./index.php">Página Principal</a>
        <a class="elegido">INGRESAR</a>
    </div>
    
    <br><br><br>
    

    <?php 
    $conn = mysqli_connect("localhost", "desarrollador","","mibdquisbert");

    if (!$conn) {
        echo 'error al conectar la bd';
    }
    else {
        echo 'conectado';
    }
    
    $consulta="select * from nota";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()){
           $ci = $row['CI']; 
          // $usuario = $row['Usuario'];
           $mat = $row['sigla'];
           $n1 = $row['nota1']; 
           $n2 = $row['nota2']; 
           $n3 = $row['nota3']; 
           $nt = $row['notafinal']; 
           ?>
           <div>
               <h2><?php echo $usuario; ?></h2>
               <div>
                   <p>
                       <b>CI: </b> <?php echo $ci; ?> <br>
                       <b>MATERIA: </b> <?php echo $mat; ?> <br>
                       <b>NOTA 1: </b> <?php echo $n1; ?> <br>
                       <b>NOTA 2: </b> <?php echo $n2; ?> <br>
                       <b>NOTA 3: </b> <?php echo $n3; ?> <br>
                       <b>NOTA TOTAL: </b> <?php echo $total; ?> <br>
                   </p>
               </div>
           </div>
           <?php
        }
    }
?>




<?php include "pie.inc.php"; ?>