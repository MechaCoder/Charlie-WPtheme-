<html>
<!-- page.php -->
<?php get_header(); ?>
<div id='cust-page-main' class='container-fluid'>
	<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<!-- content here -->
		<div class='cust-page-mainCol col-md-8'>
			<div class='cust-page-info'>
				<h1 class='cust-page-title' style='margin-top:-20px'><?php the_title()?></h1>
				<h3 class='cust-page-author' style='margin-bottom: 0px;'> By <?php the_author();?></h3>
			</div>
			<div class='cust-page-content'>
				<?php the_content(); ?>
			</div>
		</div>
		<div id='cust-page-sideCol' class='cust-page-sideCol col-md-4' style='padding-left:0px'>
			<div id='cust-page-sidebar' class='cust-page-sidebar' style='margin-top:-10px'><?php dynamic_sidebar('Home right sidebar'); ?></div>
		</div>
	<?php  endwhile; else:?><p> no Content found </p><?php endif; ?>
</div>
<?php get_footer(); ?>
</html>