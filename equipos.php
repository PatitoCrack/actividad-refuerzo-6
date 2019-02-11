<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $resultado = $conexion->query("SELECT id_equipo, nombre, ciudad FROM equipo");
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav>
      <ul>
        <li style="color:blue;margin-left: 70px; float:left;"><a href="equipos.php">Equipos Listado equipos</a></li>
        <li style="color:blue;margin-left: 300px; float:left;"><a href="jugadores.php">Equipos Listado jugadores</a></li>
        <li style="color:blue;margin-left: 500px;"><a href="partidos.php">Equipos Listado partidos</a></li>
      </ul>
    </nav>
    <table>
      <tr>
        <td style="color:white;text-align:center;background-color:#2E9AFE">ID</td>
        <td style="color:white;text-align:center;background-color:#2E9AFE">Equipos</td>
        <td style="color:white;text-align:center;background-color:#2E9AFE">Ciudad</td>
      </tr>
      <?php
        foreach ($resultado as $equipo) {
          echo "<tr>";
          echo "<td style=text-align:center;>".$equipo['id_equipo']."</td>";
          echo "<td style=text-align:center;>".$equipo['nombre']."</td>";
          echo "<td style=text-align:center;>".$equipo['ciudad']."</td>";
          echo "</tr>";
        }
      ?>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
