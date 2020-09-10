<?php
	get_header();
	global $theme_path;
 ?>

	<div id="primary" class="content-area">
		<main>
			<section class="error-404 not-found">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<img src="<?php echo $theme_path.'assets/img/404.jpg' ?>" alt="404">
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
