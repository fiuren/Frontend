<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <hi>Resultado del Formulario<hi>
<?php 
if ($_SERVER['REQUEST_METHOD']=='POST'){
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$musica="";
$cine="";
$deporte="";
if(isset($_POST['musica']))
$musica="musica,";
if(isset($_POST['deporte']))
$deporte="deporte,";
if(isset($_POST['cine']))
$cine="cine,";
echo "
<h3>Nombre</h3>$nombre;
<h3>email</h3>$email;
";
exit
}
http_response_code(403);
exit;
?> 
</body>
<html>

