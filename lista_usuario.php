<?php 
include ("menu.php");
include("clases/Usuario.php");
$usuario=new Usuario();

$arregloDatos=$usuario->mostrar();

?>
<br><br>
<style type="text/css">
	.bi{
		font-size: 22px;
		color: blue;
	}
</style>
<div class="container">
	<h2 style="color: white">Lista de usuarios registrados</h2>
	<table class="table table-dark table-striped">
		<tr>
			<th>nombres</th>
			<th>username</th>
			<th>correo</th>
			<th>hacer admin</th>
			<th>hacer plebeyo</th>
			<th>eliminar</th>
		</tr>
		<?php
		while ($fila=mysqli_fetch_array($arregloDatos)) {
		?>
		<tr>
			<td><?=$fila["nombres"]?></td>
			<td><?=$fila["username"]?></td>
			<td><?=$fila["correo"]?></td>
			<td>
				<a href="funciones/hacer_admin.php?pk_usuario=<?=$fila['pk_usuario']?>">
					<i title="Ser Admin" class="bi bi-chevron-double-up"></i>
				</a>
			</td>
			<td>
				<a href="funciones/hacer_plebeyo.php?pk_usuario=<?=$fila['pk_usuario']?>">
					<i title="Ser Plebeyo" class="bi bi-chevron-down"></i>
				</a>
			</td>
			<td>
				<a href="funciones/baja_usuario.php?pk_usuario=<?=$fila['pk_usuario']?>">
					<i title="Eliminar" class="bi bi-eye-slash-fill"></i>
				</a>	
			</td>
		</tr>
		<?php

			} 

		?>
	</table>
</div><br><br>

<footer class="footer-distributed">

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

