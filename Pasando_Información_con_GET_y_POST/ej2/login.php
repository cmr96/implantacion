<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body>

  <script>
  $(function() {
    $( "#dialog" ).dialog();
  });
  </script>

  <style>
  #enviar {float:right;}
  </style>


<?php if (!isset($_POST["usu"])) : ?>


<div id="dialog" title="Identificate">
  <form action="" method="post" class="login">
  <table border="0">
    <tr>
      <td>Usuario:  </td>
      <td><input type="text" name="usu" maxlength="10" size="10" required></td>
    </tr>
    <tr>
      <td>Contraseña:  </td>
      <td><input type="password" name="pass"  maxlength="10" size="10" required></td>
    </tr>
    <tr>
      <td colspan="2"><input type=submit value="Entrar" id="enviar"></td>
    </tr>
  </table>
  </form>
</div>

    <?php
    else:
    $usu=$_POST["usu"];
    $pass=$_POST["pass"];

      if ($usu =="pepe" && $pass =="1234"){
      header("refresh:0; url=matricula.php");
      }
      else {
      echo "<div style='margin: 65 100 100 150;float:left;'><h1>Su usuario o contraseña son incorrectos</h1></div>";
      header("refresh:2; url=login.php");
     }
     endif
     ?>

</body>
</html>
