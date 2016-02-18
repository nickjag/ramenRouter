<?php
if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) { exit;}

$page_title = 'Contact';
require_once( RAMEN_ROOT . '/views/includes/head.php' );

?>
</head>
<body>

	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="cover-container">
				
				<?php require_once( RAMEN_ROOT . '/views/includes/navigation.php' ); ?>
				
				<div class="inner cover">
					<h1 class="cover-heading">Contact</h1>
					<p class="lead">AJAX with Ramen<br><br><button type="button" class="btn btn-primary">Press Me</button></p>
				</div>
	
			</div>
		</div>
	</div>
	
	<?php require_once( RAMEN_ROOT . '/views/includes/footer.php' ); ?>
	
	<script>
	
	$(document).ready(function() {
		$('.btn').on('click', function() {
			$(this).load("<?php print SITE_PATH; ?>/ajax/contact").removeClass('btn-primary').addClass('btn-success');
		});
	});
	
	</script>

</body>
</html>