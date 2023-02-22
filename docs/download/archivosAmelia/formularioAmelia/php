<html>
<head>
 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
      <form id="form">
        <input type="text" id="search" class="search" placeholder="Search">
      </form>
    </header>
<main id="main">
<?php
include ('conexion.php');
$nombre=$_REQUEST['nombre'];
$donativo=$_REQUEST['donativo'];
$tipomoneda=$_REQUEST['tipomoneda'];
$data = [
    'nombre' => $nombre,
    'donativo' => $donativo,
    'tipomoneda' => $tipomoneda,
];
$sql = "INSERT INTO donativos VALUES (null,:nombre, :donativo, :tipomoneda)";
$stmt= $conn->prepare($sql);
$stmt->execute($data);
echo "<div class='center'>";
echo "<h2> Has colaborado con ". $donativo. "  " . $tipomoneda."</h2>" ;
echo "<h2> Donacion registrada correctamente. Gracias por su colaboracion </h2>";
echo "<h2><a href='index.html' > Volver a Inicio </a></h2>";
echo "</div>";
echo "<div class='center' style='font-size:25px;color: #FF0000'>";
 $sql = 'SELECT sum(donativo) as total from donativos;';
    foreach ($conn->query($sql) as $row) {
        echo "TOTAL RECAUDADO ".$row['total'] . "\n";
    }
echo "</div>";
?>
</main>
</body>
</html>