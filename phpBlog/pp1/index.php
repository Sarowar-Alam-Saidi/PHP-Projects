<html>

<head>
	<title> WELCOME TO MALALA</title>
	<link rel="stylesheet" href="style.css" >
	<link rel="stylesheet" href="bootstrap.css" >
</head>

<body>
<div class="container full">
<!-- div container start-->
<!-- header part-->
<div class="row">
	<div><?php include("includes/header.php"); ?></div>
</div>
<!-- header part finish-->
<!--navbar pary start-->
<div><?php include("includes/navbar.php"); ?></div>
<!--navbar part finish-->

<!--body_content part start-->
<div class="col-md-12">
	<!-- right part start-->
		<?php include("includes/main_content.php"); ?>
	<!-- right part finisg-->
	<!-- left part finisg-->
		<?php include("includes/rightbar.php"); ?>
	<!-- left part finisg-->
</div>
<!-- body content part finifh-->

<!--footer part-->
		<!--<?php include("includes/footer.php"); ?>-->
		<div class="footer-copy-right">
			<div class="container">
				
					<div class="col-md-12">
						<div class="copy-right-text pull-left">
							<p>&copy;Copyright 2018 - Desinged by -Saidi</p>
						</div><!-- /Copyright Text -->
						
						<div class="scroll-up pull-right">
					        <a href="index.php">Top</a>
					    </div>
						<!-- Scroll Up -->
					</div>
				
			</div>
		</div>
<!--footer part finish-->
</div>
</body>

</html>