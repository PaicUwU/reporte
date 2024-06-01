<?php 
include("menu.php");
include("clases/Apps.php");
$apps=new Apps();
$pk_apps=$_GET["pk_apps"];

$registro=$apps->mostrarPorId($pk_apps);
$datos=mysqli_fetch_assoc($registro);
 ?>
 <div class="container">
  <div class="row row-cols-2 row-cols-md-2 g-1 ">
   <div class="container-fluid">
      <div class="row row-cols-2 row-cols-md-1 g-1 ">
        <div class="col">
          <div style="background-color: #1b2838;" class="card" style="width: 40rem;">
            <div class="card-body">
              <center>
                <h5 style="color: white" class="card-title">Compra de la App</h5><br>
                <label style="color: white">Producto a comprar:</label><br>
                <label style="color: white"><?=$datos['titulo']?></label><br><br>
                <label style="color: white">Precio: $<?=$datos['precio']?></label><br><br>
              </center>
            </div>
            <center><a class="btn btn-secondary" href="venta.php?pk_apps=<?=$fila['pk_apps']?>">Comprar</a></center><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<footer style="position: absolute; bottom: 0;" class="footer-distributed" >

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

