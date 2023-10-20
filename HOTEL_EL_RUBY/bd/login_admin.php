<?php 
    require_once('conexion_bd.php');

    $correo_ad = $_POST['correo_ad'];
    $contrasena_ad = $_POST['contrasena_ad'];

    $Validar_login_admin = mysqli_query($conexion, "SELECT * FROM admin_tb WHERE correo = '$correo_ad' AND contrasena = '$contrasena_ad'");
        if (mysqli_num_rows($Validar_login_admin) > 0) {
            header("Location: ../Admin.php");
            exit;
    } else {
        echo'
        <script>
        alert("No eres administrador");
        window.location.href="../login.php";
        </script>
        ';
        exit;
    }

?>