<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Base de datos</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/buttons.css">

  <script src="funciones.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>
  <section class="container">
    <div class="login" >
      <h1>Ingreso</h1>
      <form method="post" action="nexo.php">
        <p><input type="text" name="patente" id="patente" placeholder="Ingrese Patente"></p>
        <br>
        <button type="button" class="round medium blue button" onclick="ingresar()">Ingresar</button>
      </form>
          <div id="tabla">
            <?php
            //include("grilla.php");
            ?>
          </div>
    </div>

  </section>


</body>
</html>
