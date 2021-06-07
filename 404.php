<?php get_header(); ?>
<a href="#" role="button" aria-label="to main" class="skiplink">Go to main</a>
<div class="container container-header">
	<div class="row">
		<header id="header" aria-label="header" class="header col-xl-10 offset-xl-1">
			<h2 class="hidden">Header</h2>
			<a href="<?php echo get_post_type_archive_link('post'); ?>" role="button" aria-label="to exposition">
				<img src="<?php echo get_template_directory_uri() . '/assets/icons/brand.svg' ?>" aria-label="brand header" alt="brand header">
			</a>
		</header>
	</div>
</div>
<main id="main" aria-label="main" class="container container-main">
	<h2 class="hidden">Main</h2>
	<section id="article-section" aria-label="article-section" class="container-article col-xl-10 offset-xl-1">
		<h3 class="hidden">Article</h3>
		<div class="row">
			<article id="article-<?php the_title(); ?>" aria-label="article" class="col-12 article">
				<h4 class="hidden">404</h4>
					<p><i>PAGE NOT FOUND&#8212;</i>Click <a href="<?php echo get_post_type_archive_link('post'); ?>" role="button" role="button" aria-label="back to exposition"> here</a> to return to the exposition.</p>
			</article>
		</div>
	</section>
</main>
<div class="container container-footer">
	<div class="row">
		<footer id="footer" aria-label="footer" class="footer col-xl-10 offset-xl-1">
			<h2 class="hidden">Footer</h2>
			<nav id="navigation-footer" aria-label="navigation footer" class="footer-navigation">
				<h3 class="hidden">Navigation footer links</h3>
				<ul>
					<li>
						<a href="https://marcelvandertuin.com" role="button" target="_blank" rel="follow" aria-label="to new window marcelvandertuin.com">copyright</a>
					</li>
						<?php
						wp_nav_menu(
							array(
								'menu' => 'footer',
								'container' => '',
								'theme_location' => 'footer',
								'items_wrap' => '%3$s'
							)
						);
						?>
					<li>
						<a href="#" role="button" aria-label="back to top" class="to-top">back to top</a>
					</li>
				</ul>
			</nav>
		</footer>
	</div>
</div>
<?php get_footer(); ?>