
<html>
<!-- index.php -->
<?php get_header(); ?>
<div id='cust-page-main' class='container-fluid'>
	<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<!-- content here -->
		<div id='cust-page-mainCol' class='col-md-8'>
			<div id='cust-page-info'>
				<span id='cust-page-title'><h1 style='margin-top:-20px'><?php the_title()?></h1></span>
				<span id='cust-page-author'><h3 style='margin-bottom: 0px;'> By <?php the_author();?></h3></span>
			</div>
			<div id='cust-page-content'>
				<span><?php the_content(); ?></span>
			</div>
		</div>
		<div id='cust-page-sideCol' class='col-md-4' style='padding-left:0px'>
			<div id='cust-page-sidebar' style='margin-top:-10px'><?php dynamic_sidebar('Home right sidebar'); ?></div>
		</div>
	<?php  endwhile; else:?><p> no Content found </p><?php endif; ?>
</div>
<?php get_footer(); ?>
</html>