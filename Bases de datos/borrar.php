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
      $link=$_GET["id"];
      $delete1="DELETE FROM Incluyen WHERE IdReparacion='$link'";
      $delete2="DELETE FROM Intervienen WHERE IdReparacion='$link'";
      $delete3="DELETE FROM Realizan WHERE IdReparacion='$link'";
      $delete4="DELETE FROM REPARACIONES WHERE IdReparacion='$link'";

      $connection->query( $delete1 );
      $connection->query( $delete2 );
      $connection->query( $delete3 );
      $connection->query( $delete4 );


      header("refresh:0; url=inicio.php");

    ?>


  </body>
</html>
