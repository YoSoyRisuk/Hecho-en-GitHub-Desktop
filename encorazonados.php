<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encorazonados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $N1="";
    $N2="";
    if(isset($_POST["PrimerNombre"])){
    $N1=$_POST["PrimerNombre"];
    $N2=$_POST["SegundoNombre"];
    }
    if(empty($_POST["PrimerNombre"])){
    }
?>
    <fieldset>
    <legend><h1>Encorazonados</h1></legend>
    <form method="POST">
        <b>Ingrese aquí el nombre de los tortolitos</b><br><br>
      <label for="">Ingrese Primer Nombre</label><br>
      <input type="text" name="PrimerNombre" placeholder="Primer Nombre"><br><br>
      <label for="">Ingrese Segundo Nombre</label><br>
      <input type="text" name="SegundoNombre" placeholder="Segundo Nombre"><br><br>
      <input type="submit" value="Confirmar">
      <input type="reset" value="Reset"><br><br>
      <p>Resultado: <?php echo "A $N1 le gusta $N2 &#128147"?> &#128525 </p>
    </form>
    </fieldset>
</body>
</html>