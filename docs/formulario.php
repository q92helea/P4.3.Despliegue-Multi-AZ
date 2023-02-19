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
<form action="./grabar.php" method="post" class="form">

     <label ><h1> DONATIVOS PARA TURQUIA Y SIRIA </h1></label>
    <label for="name">Nombre :</label>
    <input type="text" id="nombre" name="nombre">
    <br>
<label for="donativo">Donativo: </label>
    <input type="donativo" id="donativo" name="donativo">
    <br>
<input type="radio" name="tipomoneda" value="euro" checked > Euros <br>

    <input type="radio" name="tipomoneda" value="dolar"> Dolares <br>
    <br>
<input type="submit" value ="Enviar" name="enviar" />

<label ><h1> DONATIVOS PARA TURQUIA Y SIRIA </h1></label>
    <label for="name">Nombre :</label>
    <input type="text" id="nombre" name="nombre">
    <br>
<label for="donativo">Donativo: </label>
    <input type="donativo" id="donativo" name="donativo">
    <br>
<input type="radio" name="tipomoneda" value="euro" checked > Euros <br>

    <input type="radio" name="tipomoneda" value="dolar"> Dolares <br>
    <br>
<input type="submit" value ="Enviar" name="enviar" />


</form>

</body>
</html>