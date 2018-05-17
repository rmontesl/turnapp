<?php include 'partial/head.php'; ?>
<?php session_start(); 
	if (isset($_SESSION["usuario"])) {
	 	if ($_SESSION["usuario"]["privilegio"] == 2) {
	 		header("location:user.php");
	 	}
	 }else {
	 header("location:index.php");
  }
	 ?>
<?php include 'partial/nav.php'; ?>

<section class="hero">
  <div class="container">
    <div class="row">
      <div class="col s12 m8 offset-m2">
        <img src="assets/img/devices2.png" alt="">
        <h3 class="center-align grey-text">Descargar manuales</h3>
      </div>
    </div>
  </div>
</section>


<?php include 'partial/footer.php'; ?>