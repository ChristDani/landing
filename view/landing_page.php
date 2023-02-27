<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Landing Page con formulario horizontal</title>
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/js.js"></script>
	<link rel="icon" type="image/png" sizes="32x32" href="../img/Primer logo.png">
</head>
<body>
	<header>
		<img id="logo" src="../img/Primer logo.png" width="150px" height="45px">

		<section id="nav">
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Servicios</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</nav>
		</section>
		
	</header>
  	
	<main id="main">

  <section id="hero">

		
		<section class="formulario">
			<form action="../procesos/grabar.php" method="post">
				
      <label for="subject">¡Llene este formulario para contactarnos!:</label>

        <input type="text" id="txtdni" name="txtdni" required placeholder="Ingresa tu dni">
				<input type="text" id="txtnombre" name="txtnombre" required placeholder="Ingresa tus Nombres">
        
          <input type="text" id="txtapellido" name="txtapellido" required placeholder="Ingrese sus Apellidos">

				
				<input type="email" id="txtemail" name="txtemail" required placeholder="Ingrese su Direccion Email">
        <input type="phone" id="txttelefono" name="txttelefono" required placeholder="Ingrese tu Telefono:">
        <label for="subject">Asunto:</label>
          <select class="lista" name="lstasunto" id="lstasunto">
            
            <option value="opcion0">Quiero alquilar</option>
            <option value="opcion1">Quiero vender</option>
            <option value="opcion2">Quiero comprar</option>
            <option value="opcion3">Otro</option>
          </select>
				
				<input type="submit" value="Enviar"> 
			</form>

      
		</section>
	</main>
	<footer>
		<p>Derechos Reservados &copy; 2023</p>
	</footer>
</body>
</html>
