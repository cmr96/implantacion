<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
    <?php

      $connection = new mysqli("localhost", "root", "1234", "talleresfaber");


      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }


      if ($result = $connection->query("SELECT * FROM REPARACIONES;")) {

          printf("<h1>Reparaciones de Talleres Faber</h1>");

      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table border=1>
          <thead>
            <tr>
              <th>IdReparacion</th>
              <th>Matricula</th>
              <th>FechaEntrada</th>
              <th>Kilometros</th>
              <th>Averia</th>
              <th>FechaSalida</th>
              <th>Reparado</th>
              <th>Observaciones</th>
              <th>Editar</th>
              <th>Añadir Mecanico</th>
              <th>Añadir Pieza</th>
              <th>Borrar</th>
          </thead>

          <a href="crear.php"><button> Crear Reparacion </button>

      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr align='center'>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->FechaEntrada."</td>";
              echo "<td>".$obj->Km."</td>";
              echo "<td>".$obj->Averia."</td>";
              echo "<td>".$obj->FechaSalida."</td>";
              echo "<td>".$obj->Reparado."</td>";
              echo "<td>".$obj->Observaciones."</td>";
              echo "<td><a href='editar.php?id=$obj->IdReparacion'><img style='height: 25px;width: 25px;' src='imagenes/img.jpg'></a></td>";
              echo "<td><a href='asignar_empleados.php?id=$obj->IdReparacion'><img style='height: 25px;width: 25px;' src='imagenes/img1.jpg'></a></td>";
              echo "<td><a href='asignar_piezas.php?id=$obj->IdReparacion'><img style='height: 25px;width: 25px;' src='imagenes/img2.jpg'></a></td>";
              echo "<td><a href='borrar.php?id=$obj->IdReparacion'><img style='height: 25px;width: 25px;' src='imagenes/img3.jpg'></a></td>";
              echo "</tr>";
          }

          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);

      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

    ?>
  </body>
</html>
