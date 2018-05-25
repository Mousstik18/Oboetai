<?php 
session_start();

include('meta.php') ?>
  
  <body class="homepage">
    <?php include('header.php') ?>
    
    	<!--EnTete de Page-->
        <div id="featured">
	    	<div class="container">
        		<?php include('featured_accueil.php') ?>
        	</div>
		</div>

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				
				<?php include('accueil.php')?>
				
			</div>
		</div>

	<!-- citation àléatoire -->
	<div id="tweet">
		<?php include('citation.php') ?>
	</div>
	
	<!-- Footer -->
	<div id="footer">
		<?php include('footer.php') ?>
	</div>
	
	<!-- Copyright -->
	<div id="copyright">
		<?php include('copyright.php') ?>
	</div>
	
	</body>
</html>