<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
    <?php printf("<h1>Insertar Reparacion</h1>");
    if (!isset($_POST["Matricula"])) : ?>


    <form action="" method="post" class="matricula">
      <table border="0">
        <tr>
          <td>Matricula:  </td>
          <td>
    <?php
      $connection = new mysqli("localhost", "root", "1234", "talleresfaber");

      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();


      }

      // elegir matricula:
      echo '<select name="Matricula">';
      $result=$connection->query("select Matricula from vehiculos");
      while ($fila=$result->fetch_object()) {
//va de fila en fila y guarda en $fila
    echo  "<option value='$fila->Matricula'>$fila->Matricula</option>";
  //Muestre dentro de cada opcion el valor
}
    echo '</select>';
      ?>

    </td>
  </tr>



            <tr>
              <td>FechaEntrada:  </td>
              <td><input type="date" name="FechaEntrada"  maxlength="10" size="10" required></td>
            </tr>
            <tr>
              <td>Kilometros:  </td>
              <td><input type=number name='Kilometros' value=0 min=0 max=500000 ></td>
            </tr>
            <tr>
              <td>Averia:  </td>
              <td><textarea rows='4' cols='50' name='Averia'></textarea></td>
            </tr>
            <tr>
              <td>FechaSalida:  </td>
              <td><input type="date" name="FechaSalida"  maxlength="10" size="10" required></td>
            </tr>
            <tr>
              <td>Reparado:  </td>
              <td><input type=radio name='Reparado' value=0>NO <input type=radio name='Reparado' value=1>SI</td>
            </tr>
            <tr>
              <td>Observaciones:  </td>
              <td><textarea rows='4' cols='50' name='Observaciones'></textarea></td>
            </tr>
            <tr>
              <td colspan="2"><input type=submit value="Entrar" id="enviar"></td>
            </tr>
            </table>
          </form>


      <?php  else: ?>

      <?php
      $connection = new mysqli("localhost", "root", "1234", "talleresfaber");
      $Matricula=$_POST["Matricula"];
      $FechaEntrada=$_POST["FechaEntrada"];
      $Kilometros=$_POST["Kilometros"];
      $Averia=$_POST["Averia"];
      $FechaSalida=$_POST["FechaSalida"];
      $Reparado=$_POST["Reparado"];
      $Observaciones=$_POST["Observaciones"];

      $insert="INSERT INTO REPARACIONES VALUES (NULL, '$Matricula', '$FechaEntrada', $Kilometros, '$Averia', '$FechaSalida', $Reparado, '$Observaciones')";
      $connection->query( $insert );
      header("refresh:0; url=inicio.php");

    ?>


      <?php endif ?>





  </body>
</html>
