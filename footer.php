<footer class='cust-footer-main container-fluid row'>
	<div class='cust-footer-ColLeft col-md-4'>
		<div class='cust-foorter-ColLeft-title'>ColLeft Header</div>
		<div class='cust-foorter-ColLeft-content col-md-12'><?php dynamic_sidebar( 'Footer Left' ); ?></div>
	</div>
	<div class='cust-footer-ColCent col-md-4'>
		<div class='cust-foorter-ColCent-title'>ColCent Header</div>
		<div class='cust-foorter-ColCent-content' class='col-md-12'><?php dynamic_sidebar( 'Footer center' ); ?></div>
	</div>
	<div class='cust-footer-ColRigt col-md-4'>
		<div class='cust-footer-ColRigt-title col-md-12'>ColRigt header</div>
		<div class='cust-footer-ColRigt-contentcol-md-12'><?php dynamic_sidebar( 'Footer right' ); ?></div>
	</div>
</footer>
	<?php wp_footer(); ?>
</body>