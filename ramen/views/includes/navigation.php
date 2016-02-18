<?php
if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) { exit;}
?>
<div class="masthead clearfix">
	<div class="inner">
		<h3 class="masthead-brand">RamenRouter</h3>
		<nav>
			<ul class="nav masthead-nav">
				<li<?php print ($routing->path == '/' ? ' class="active"' : ''); ?>><a href="<?php print SITE_PATH; ?>/">Home</a></li>
				<li<?php print ($routing->path == '/about' ? ' class="active"' : ''); ?>><a href="<?php print SITE_PATH; ?>/about">About</a></li>
				<li<?php print ($routing->path == '/locations' ? ' class="active"' : ''); ?>><a href="<?php print SITE_PATH; ?>/locations">Locations</a></li>
				<li<?php print ($routing->path == '/contact' ? ' class="active"' : ''); ?>><a href="<?php print SITE_PATH; ?>/contact">Contact</a></li>
			</ul>
		</nav>
	</div>
</div>