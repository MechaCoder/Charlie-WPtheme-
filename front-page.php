<html>
<!-- homepage.php -->
<?php get_header(); ?>
<div class='cust-frontPage-main container-fluid'>
	<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<!-- content here -->
		<div class='cust-frontPage-mainCol col-md-12'>
			<div class='cust-frontPage-content'>
				<?php the_content(); ?>
			</div>
		</div>
	<?php  endwhile; else:?><p> no Content found </p> <?php endif; ?>
</div>
<?php get_footer(); ?>
</html>