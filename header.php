<head>
	<title><?php echo bloginfo( 'name' ); echo "-"; echo the_title();?></title>
	<?php wp_head(); ?>
</head>
<body>
<header id='cust-head' class='page-header' style='margin-top: 0px;'>
	<div id='cust-head-1Row' class='row row-fluid'>
		<div id='cust-head-siteTitle' class='col-md-6'><h1><?php echo bloginfo('name'); ?></h1></div>
	</div>
	<div id='cust-head-2Row' class='row'>
		<h2 id='cust-head-siteDis' class='col-md-6'><?php echo bloginfo('description'); ?></h2>
		<nav id='cust-head-siteNav' class='col-md-6'>
			<?php wp_nav_menu(array(
				'theme_location'  => 'header-menu',
				'container'       => 'div',
				'items_wrap'	  => '<span id="%1$s" class="%2$s" >%3$s</span>')); ?>
		</nav>
	</div> 
</header>