
<html>

<head>
<style>
#img {
  height: 500px;
  width: 500px;
}
</style>
</head>

<body>

    <?php

    $v2=$_GET["id"];

    $v1=array(
        array("DNI" => "11111111X",
              "Nombre" => "Carlos",
              "Apellidos" => "Matinez Romero",
              "Direccion" => "C/Lopez de gomara",
              "telefono" => "644758842",
              "Correo" => "carlos1m2r3@hotmail.com"),

        array("DNI" => "22222222X",
              "Nombre" => "Lenny",
              "Apellidos" => "Pelaez Romero",
              "Direccion" => "C/Sanchez",
              "telefono" => "645645642",
              "Correo" => "ellend@hotmail.com"),

        array("DNI" => "33333333X",
              "Nombre" => "Carl",
              "Apellidos" => "Matinez Black",
              "Direccion" => "C/Milky",
              "telefono" => "623228842",
              "Correo" => "carlelcrk@hotmail.com"),

        array("DNI" => "44444444X",
              "Nombre" => "Homer",
              "Apellidos" => "Jay Simpson",
              "Direccion" => "C/San vicente de paul",
              "telefono" => "644758842",
              "Correo" => "donutsarelife@hotmail.com"),

        array("DNI" => "555555555X",
              "Nombre" => "Bart",
              "Apellidos" => "Simpson Boubie",
              "Direccion" => "C/Esperanza",
              "telefono" => "644758842",
              "Correo" => "mlgdontfake@hotmail.com"),

        array("DNI" => "66666666X",
              "Nombre" => "Lisa",
              "Apellidos" => "Simpson Boubie",
              "Direccion" => "C/Wall",
              "telefono" => "644758842",
              "Correo" => "intelligence@hotmail.com"),

        array("DNI" => "77777777X",
              "Nombre" => "Marge",
              "Apellidos" => "Boubie Boubie",
              "Direccion" => "C/Hammintonn",
              "telefono" => "644758842",
              "Correo" => "lifeisbluewasused@hotmail.com"),

        array("DNI" => "88888888X",
              "Nombre" => "Milhouse",
              "Apellidos" => "Ramirez Sanchez",
              "Direccion" => "C/Leon",
              "telefono" => "644758842",
              "Correo" => "lifeisblue@hotmail.com"),

        array("DNI" => "99999999X",
              "Nombre" => "Nelson",
              "Apellidos" => "Cortes Garrido",
              "Direccion" => "C/San Jacinto",
              "telefono" => "644758842",
              "Correo" => "ihitguys@hotmail.com"),

        array("DNI" => "12345678X",
              "Nombre" => "Cletus",
              "Apellidos" => "Soto Martin",
              "Direccion" => "C/Reyes catolicos",
              "telefono" => "644758842",
              "Correo" => "paleto@hotmail.com")


            );


    echo "<div style='width:800px;height:225px;float:left;margin: 50 50 50 50;'>";
    echo "<div style='width:225px;height:225px;float:left'>";
    echo "<img style='height: 225px;width: 225px;' src='imagenes/imagen".$v2.".png'>";
    echo "</div>";

    echo "<div style='width:500px;height:225px;float:left;margin-left:50px'>";
    echo "<h1>".$v1[$v2]['Nombre']." ".$v1[$v2]['Apellidos']."</h1>";
    echo "<p>Telefono: ".$v1[$v2]['telefono']."</p>";
    echo "<p>Direccion: ".$v1[$v2]['Direccion']."</p>";
    echo "<p>Correo: ".$v1[$v2]['Correo']."</p>";
    echo "</div>";
    echo "</div>";

    // var_dump($v1[$_GET["id"]]);


    ?>

</body>

</html>
