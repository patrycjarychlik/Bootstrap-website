<?php
require ("Engine.php");
require ("header.htm");
?>
<body>
<div id="wrap">
	<div class="container-fluid">
	
<?php
require ("navigation.htm");

// require ("karuzela.htm");
require ("slider.htm");
require ($fileName);

?>
	</div>
</div>
<!----- FOOTER ----->
		<footer class="container-fluid footer .navbar-fixed-bottom ">
			<div class="container">
				<hr class="divider">
				<p class="pull-right">
					<a href="#" onclick="$.scrollTo(0, {duration:400});"><strong>Do góry</strong></a>
				</p>
				<p>&copy; 2015 Silegold</p>
			</div>
		</footer>
	<!-- ------------------SCRIPTS------------------ -->
	<!-- -- on the bottom for faster page loading -- -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="js/demo.js"></script>
	<!--    <script src="js/jquery.min.js" type="text/javascript"></script>  -->
	<!--    <script type="text/javascript" src="js/jquery.scrollTo.min.js?2.1.0"></script> -->
	<!--    <script src="js/bootstrap.min.js"></script> -->
</body>
</html>
