<?php include "cabecera.inc.php"; ?>
    
    <div class="menu">
        <a href="./index.php">Página Principal</a>
        <a class="elegido">INGRESAR</a>
    </div>
    
    <br><br><br>
    
    <section class="form-register">
        <h4>Iniciar Sesión</h4>
        <input class="controlador" type="text" name="user" id="users" placeholder="USUARIO">
        <input class="controlador" type="password" name="contraseña" id="contraseñas" placeholder="CONTRASEÑA">
        <input href="./notas.php" class="boton" type="submit" value="INGRESAR"> 
    </section>

    <?php 
    $conn = mysqli_connect("localhost", "desarrollador","","mibdquisbert");

    if (!$conn) {
        echo 'error al conectar la bd';
    }
    else {
        echo 'conectado';
    }
    
    $consulta="select * from usuario";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()){
           $ci = $row['CI']; 
           $usuario = $row['Usuario']; 
           $pas = $row['Password']; 
           ?>
           <div>
               <h2><?php echo $usuario; ?></h2>
               <div>
                   <p>
                       <b>CI: </b> <?php echo $ci; ?> <br>
                       <b>USUARIO: </b> <?php echo $usuario; ?> <br>
                       <b>PASSWORD: </b> <?php echo $pas; ?> <br>
                   </p>
               </div>
           </div>
           <?php
        }
    }
?>

<?php include "pie.inc.php"; ?>