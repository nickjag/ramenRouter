<?php
if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) { exit;}

$page_title = 'Error';
require_once( RAMEN_ROOT . '/views/includes/head.php' );

?>
</head>
<body>

	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="cover-container">
				
				<?php require_once( RAMEN_ROOT . '/views/includes/navigation.php' ); ?>
				
				<div class="inner cover">
					<h1 class="cover-heading">Error</h1>
					<p class="lead">That page was not found.</p>
				</div>
	
			</div>
		</div>
	</div>
	
	<?php require_once( RAMEN_ROOT . '/views/includes/footer.php' ); ?>

</body>
</html>