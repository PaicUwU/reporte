<?php 
include("menu.php");
include("clases/Categoria.php");
$categoria=new Categoria();

$arregloDatos=$categoria->mostrar();
?><br>
<form action="funciones/insertar_categoria.php" method="post" id="formulario" class="container" enctype="multipart/form-data">
	<h1 style="color: white;">Nueva Categoria</h1>
	<label style="color: white;">Nombre de la categoria:</label>
	<input required type="text" name="nom_cat" class="form-control">
	
	
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

