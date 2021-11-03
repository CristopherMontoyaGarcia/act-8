<?php include ('header.php');?>
<body>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>CLIENTE</h1>
			</div>

			<div class="contenedor">

<h1 class="intro">Introduzca sus datos:</h1>
<div class="form">

	<form action="/action_page.php">
		<label for="fname">Nombre Completo:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="lname">No. Telefonico:</label>
		<input type="text" id="lname" name="lname"><br><br>
		<label for="fname">Correo:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="lname">Edad:</label>
		<input type="text" id="lname" name="lname"><br><br>
		<label for="lname">Direccion:</label>
		<input type="text" id="lname" name="lname"><br><br>
		<p>Genero:</p>
		<form action="/action_page.php" method="get">
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">Masculino</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS" checked="checked">
        <label for="css">Femenino</label><br> <br>
        <input type="button" value="Registrar">
	    </form>
</div>

<div class="im1">
		<img src="imagen2.png" height="350" width="500">
	</div>

</div>
	</section>
<?php include('footer.php'); ?>
</body>
</html> 