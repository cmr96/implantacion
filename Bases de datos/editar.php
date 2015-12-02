
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETTING DATA FROM A MYSQL DATABASE</title>
    <style>
      img {
        height: 35px;
        width: 35px;
      }
    </style>
  </head>
  <body>
    <?php
      //CREATING THE CONNECTION
      if (isset($_GET['id'])) {
        $connection = new mysqli("localhost", "root", "1234", "talleresfaber");
        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Conexion fallida: %s\n", $mysqli->connect_error);
            exit();
          }

            //MAKING A SELECT QUERY
            /* Consultas de selección que devuelven un conjunto de resultados */
            if ($result = $connection->query("SELECT * FROM REPARACIONES WHERE IdReparacion=".$_GET['id'])) {

                //FETCHING OBJECTS FROM THE RESULT SET
                //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
                while($obj = $result->fetch_object()) {
                    //PRINTING EACH ROW
                    echo "<form action='editar.php' method='post'>";
                    echo "ID: <input type='number' name='id' value='".$obj->IdReparacion."'></br>";
                    echo "Matricula: <input type='text' name='matric' value='".$obj->Matricula."'></br>";
                    echo "Fecha de entrada: <input type='date' name='fechaen' value='".$obj->FechaEntrada."'></br>";
                    echo "KM: <input type='number' name='kilom' value='".$obj->Km."'></br>";
                    echo "Averia: <input type='text' name='aver' value='".$obj->Averia."'></br>";
                    echo "Fecha de salida: <input type='date' name='fechasal' value='".$obj->FechaSalida."'></br>";
                    echo "Estado de reparacion: <input type='number' name='repar' value='".$obj->Reparado."'></br>";
                    echo "Observaciones: <input type='text' name='obs' value='".$obj->Observaciones."'></br>";
                    echo "<input type='submit' name='enviar'>";
                    echo "</form>";
                }


          //Liberar la consulta
          $result->close();
          unset($obj);
          unset($connection);
        }
        }
if (isset($_POST["enviar"])){

        $connection = new mysqli("localhost", "root", "1234", "talleresfaber");

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Conexion fallida: %s\n", $mysqli->connect_error);
            exit();
        }

       $consulta="UPDATE reparaciones SET IdReparacion='".$_POST['id']."', Matricula='".$_POST['matric']."',FechaEntrada='".$_POST['fechaen']."',Km=".$_POST['kilom'].",Averia='".$_POST['aver']."',FechaSalida='".$_POST['fechasal']."',Reparado='".$_POST['repar']."',Observaciones='".$_POST['obs']."' WHERE IdReparacion=".$_POST['id'].";";


                   if ($connection->query($consulta)) {
                   echo "Actualizado realizado correctamente";
                   }
       $connection->close();
    header("Location: inicio.php");
  }

       //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
    ?>
  </body>
</html>
