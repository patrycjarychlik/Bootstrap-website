<?php
require ("engine.php");
require ("header.htm");
?>
<body>
<?php
require ("navigation.htm");
?>
<div id="wrap">
		<div class="container-fluid">
	
<?php
if ($title == "ofirmie") {
	error_log ( $title );
	require ("slider.htm");
}
require ($fileName);
?>

	</div>
	</div>
	<!----- FOOTER ----->
	<footer class="container-fluid footer .navbar-fixed-bottom ">
		<div class="container divider">
			<p class="pull-right">
				<a href="#" onclick="$.scrollTo(0, {duration:400});"> <span class="glyphicon glyphicon-menu-up"></span></a>
			</p>
			<p style="color:white">&copy; 2015 Silegold.</p>
		</div>
	</footer>
	<!-- ------------------SCRIPTS------------------ -->
	<!-- -- on the bottom for faster page loading -- -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="js/carousel.js"></script>
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="js/jquery.blueimp-gallery.min.js"></script>
	<script src="js/gen_validatorv4.js"></script>

	<script type="text/javascript" src="js/jquery.scrollTo.min.js?2.1.0"></script> 
</body>
</html>
