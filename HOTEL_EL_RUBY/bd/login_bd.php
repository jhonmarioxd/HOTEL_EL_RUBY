<?php 
    require_once('conexion_bd.php');

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $Validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo' AND contrasena = '$contrasena'");
        if (mysqli_num_rows($Validar_login) > 0) {
            header("Location: ../index.php");
            exit;
    } else {
        echo'
        <script>
        alert("usuario no existe verifique los datos instroduciodos");
        window.location.href="../login.php";
        </script>
        ';
        exit;
    }

?>