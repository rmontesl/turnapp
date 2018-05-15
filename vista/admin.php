<?php include 'partial/head.php'; ?>
<?php session_start(); ?>
<?php include 'partial/nav.php'; ?>

<section class="hero">
	<div class="container">
		<div class="row">
			<div class="col s12 m8 offset-m2">
				<img src="assets/img/devices2.png" class="img-hero">
				<h2 class="grey-text center-align">Bienvenido, <?php echo $_SESSION["usuario"]["nombre"]; ?></h2>
				<p class="grey-text justify-align">TurnApp apunta a que el proceso productivo del Portal de Oportunidades, enfocado en Granos del Atlántico, cumpla con estándares sociales y ambientales, además de adquirir compromisos con la transparencia y la medición de impacto, que permita finalmente una generación de ingresos responsable para la mejora de la sociedad, evidenciando la construcción de un sistema orgánico de desarrollo y eficiencia intergrupal.</p>
			</div>
		</div>
	</div>
</section>
<section class="objetivos">
	
</section>

<?php include 'partial/footer.php'; ?>