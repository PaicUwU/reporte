<?php 
include("menu.php");
include("clases/Categoria.php");
$categoria=new Categoria();

$arregloDatos=$categoria->mostrar();
?><br>
<form action="funciones/insertar_app.php" method="post" id="formulario" class="container" enctype="multipart/form-data">
	<h1 style="color: white;">Nueva app</h1>
	<label style="color: white;">Titulo:</label>
	<input required type="text" name="titulo" class="form-control">
	<label style="color: white;">Precio:</label>
	<input required type="int" name="precio" placeholder="$00.00" class="form-control" aria-label="Amount (to the nearest dollar)">
	<label style="color: white;">Foto (1600x800px)</label>
	<input required type="file" name="foto" class="form-control">
	<label style="color: white;">Descripcion</label>
	<input required type="text" name="descripcion" class="form-control">
	<label style="color: white;">Desarrolladora:</label>
	<input required type="text" name="desarrolladora" class="form-control">
	<label style="color: white;">Distrubuidora:</label>
	<input required type="text" name="distribuidora" class="form-control">
	<label style="color: white;">Categoria:</label>
	<select required class="form-control" name="fk_categoria">
		<option value="">Seleccione una opción</option>
		<?php
		while ($fila=mysqli_fetch_array($arregloDatos)) {
		?>
		<option value="<?=$fila['pk_categoria']?>"><?=$fila["nom_cat"]?></option>
		<?php

			} 

		?>
	</select><br>
	
	<input class="btn btn-primary" type="submit" name="Guardar"><br>
</form><br><br>

<footer style="position: absolute; bottom: 0;"  class="footer-distributed">

    <div class="footer-right">

        <a href="https://www.youtube.com/watch?v=MLsbc-dFWS8"><i class="bi bi-facebook"></i></a>
        <a href="https://twitter.com/Kun_Aizakku"><i class="bi bi-twitter"></i></a>
        <a href="https://www.youtube.com/watch?v=PyoRdu-i0AQ"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.youtube.com/watch?v=PBV47uCPliM"><i class="bi bi-github"></i></a>

    </div>

    <div class="footer-left">

        <p class="footer-links">
            <a class="link-1" href="#">Home</a>

            <a href="#">Blog</a>

            <a href="#">Pricing</a>

            <a href="#">About</a>

            <a href="#">Faq</a>

            <a href="#">Contact</a>
        </p>

        <p>ASHEN KNIGHT Company &copy; 2022</p>
    </div>

</footer>

