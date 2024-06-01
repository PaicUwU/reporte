<?php 
include("menu.php");
include("clases/Apps.php");
$apps=new Apps();
$registros=$apps->mostrar_accion();
 ?>
 <div>
  <center><h1 style="color: white">Accion</h2></center>
</div><br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php
            while ($fila=mysqli_fetch_array($registros)){
        ?>
            <div class="col-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="img/<?=$fila["foto"]?>" width="100%">
                        </div>
                        <div class="flip-card-back"><br>
                            <h3><?=$fila['titulo']?></h3>
                            <label>Desarrolladora: <?=$fila["desarrolladora"]?></label><br><br>
                            <a href="ver_apps.php?pk_apps=<?=$fila['pk_apps']?>" class="btn btn-warning" role="button">Detalles</a>
                        </div><br>
                    </div>
                </div><br>
            </div>
        <?php
            } 
         ?>
    </div>
</div>


<footer style="position: absolute; bottom: 0;" class="footer-distributed">

    <div class="footer-right">

        <a href="https://www.youtube.com/watch?v=MLsbc-dFWS8"><i class="bi bi-facebook"></i></a>
        <a href="https://twitter.com/Kun_Aizakku"><i class="bi bi-twitter"></i></a>
        <a href="https://www.youtube.com/watch?v=PyoRdu-i0AQ"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.youtube.com/watch?v=PBV47uCPliM"><i class="bi bi-github"></i></a>

    </div>

    <div style="position: absolute; bottom: 0;" class="footer-left">

        <p class="footer-links">
            <a class="link-1" href="#">Home</a>

            <a href="#">Blog</a>

            <a href="">Pricing</a>

            <a href="#">About</a>

            <a href="#">Faq</a>

            <a href="#">Contact</a>
        </p>

        <p>ASHEN KNIGHT Company &copy; 2022</p>
    </div>

</footer>

