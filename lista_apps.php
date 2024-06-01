<?php 
include ("menu.php");
include("clases/Apps.php");
$apps=new Apps();

$arregloDatos=$apps->mostrar();

?>
<br><br>
<style type="text/css">
	.bi{
		font-size: 22px;
		color: blue;
	}
</style>
<div class="container">
	<h2 style="color: white">Lista de Aplicaciones</h2>
	<table class="table table-dark table-striped">
		<tr>
			<th>Titulo</th>
			<th>distribuidora</th>
			<th>Opciones</th>
		</tr>
		<?php
		while ($fila=mysqli_fetch_array($arregloDatos)) {
		?>
		<tr>
			<td><?=$fila["titulo"]?></td>
			<td><?=$fila["distribuidora"]?></td>
			<td>
				<a href="funciones/baja_apps.php?pk_apps=<?=$fila['pk_apps']?>">
					<i title="Eliminar" class="bi bi-eye-slash-fill"></i>
				</a>
			</td>
		</tr>
		<?php

			} 

		?>
	</table>
</div><br><br>

<footer   class="footer-distributed">

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


