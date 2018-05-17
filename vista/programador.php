<?php include 'partial/headcalendar.php'; ?>
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
      <div class="col s12">
        <div id="CalendarioWeb"></div>
      </div>
    </div>
  </div>
</section>
<script>
  $(document).ready(function(){
    $('#CalendarioWeb').fullCalendar();
  });
</script>

<?php include 'partial/footercalendar.php'; ?>