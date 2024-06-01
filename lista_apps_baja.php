<?php 
include ("menu.php");
include("clases/Apps.php");
$apps=new Apps();

$arregloDatos=$apps->mostrar_baja();

?>
<br><br>
<style type="text/css">
	.bi{
		font-size: 22px;
		color: blue;
	}
</style>
<div class="container">
	<h2 style="color: white">Lista de aplicaciones dadas de baja</h2>
	<table class="table table-dark table-striped">
		<tr>
			<th>Titulo</th>
			<th>Distribuidora</th>
			<th>Opciones</th>
		</tr>
		<?php
		while ($fila=mysqli_fetch_array($arregloDatos)) {
		?>
		<tr>
			<td><?=$fila["titulo"]?></td>
			<td><?=$fila["distribuidora"]?></td>
			<td>
				<a href="funciones/volver_activa.php?pk_apps=<?=$fila['pk_apps']?>">
					<i title="Volver a Activa" class="bi bi-eye-fill"></i>
				</a>
			</td>
		</tr>
		<?php

			} 

		?>
	</table>
</div><br><br>


<footer style="position: absolute; bottom: 0;" class="footer-distributed" >

	<div class="footer-right">

		<a href="#"><i class="bi bi-facebook"></i></a>
		<a href="https://twitter.com/Kun_Aizakku"><i class="bi bi-twitter"></i></a>
		<a href="#"><i class="bi bi-linkedin"></i></a>
		<a href="#"><i class="bi bi-github"></i></a>

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