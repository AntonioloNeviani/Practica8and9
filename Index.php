<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_SESSION['nombre'])){
            echo "<p>Has iniciado sesion: " . $_SESSION['nombre'] . "";
            echo "<p><a href='Cerrar.php'>Cerrar Sesion</a></p>";
            echo "<p><a href='MenuPrincipal.php'>Menu Principal</a></p>";
        }else {
        ?>
        <form action="Session.php" method="POST">
            <p>Nombre:<input type="text" placeholder="Tu Nombre!" name="nombre" id="nombre" required/></p>
            <p>Contraseña:<input type="password" placeholder="Tu Contraseña!" name="password" id="password" required/></p><br/>
            <input type="submit" value="Entrar" />
        </form>
        <?php
        }
        ?>
    </body>
</html>
