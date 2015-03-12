<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body> 
<header class='cust-head page-header' style='margin-top: 0px;'>
	<div class='cust-head-1Row row row-fluid'>
		<div class='cust-head-siteTitle col-md-6'><a href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a></div>
	</div>
	<div class='cust-head-2Row row'>
		<h2  class='cust-head-siteDis col-md-6'><?php wp_title(); ?></h2>
		<nav class='cust-head-siteNav col-md-6'>
			<?php wp_nav_menu(array(
				'theme_location'  => 'header-menu',
				'container'       => 'div',
				'items_wrap'	  => '<li id="%1$s" class="%2$s">%3$s</li>',
				'depth' => 0
			)); ?> 
		</nav>
	</div> 
</header>