<?php get_header(); ?>
<section id="banner" aria-label="banner" role="banner" class="container-fluid container-banner">
	<h2 class="hidden">Banner</h2>
	<div class="banner">
		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				the_content();
			}
		}
		?>
		<img src="<?php echo get_template_directory_uri() . '/assets/icons/brand-banner.svg' ?>" width="265" height="256" aria-label="brand banner" alt="brand banner">
		<div class="banner-link-container">
			<a href="<?php echo get_post_type_archive_link('post'); ?>" role="button" aria-label="to exposition">exposition</a>
		<div class="banner-overlay"></div>
	</div>
</section>
<?php get_footer(); ?>
