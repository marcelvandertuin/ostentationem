<?php get_header(); ?>
<a href="#" role="button" aria-label="to main" class="skiplink">Go to main</a>
<div class="container container-header">
	<div class="row">
		<header id="header" aria-label="header" class="header col-xl-10 offset-xl-1">
			<h2 class="hidden">Header</h2>
			<a href="<?php echo home_url(); ?>" role="button" aria-label="to home">
				<img src="<?php echo get_template_directory_uri() . '/assets/icons/brand.svg' ?>" width="874" height="103" aria-label="brand header" alt="brand header">
			</a>
		</header>
	</div>
</div>
<main id="main" aria-label="main" class="container container-main">
	<h2 class="hidden">Main</h2>
	<section id="articles" aria-label="articles" class="container-articles col-xl-10 offset-xl-1">
		<h3 class="hidden">Articles</h3>
		<div class="row row-articles">
			<?php
				$counter = 0;
				if (have_posts()) {
					while (have_posts()) {
						$counter++;
						the_post();
						get_template_part('template-parts/content', 'archive');
						if ($counter === 1) {
							?>
							<section id="section-decorative" aria-label="section-decorative" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 articles-article articles-article-logomark">
								<h4 class="hidden">(Decorative: Logomark Ostentationem)</h4>
								<img src="<?php echo get_template_directory_uri() . '/assets/icons/logomark-' . rand(1, 4) . '.svg' ?>" width="422" height="442" alt="logomark ostentationem">
							</section>
							<?php
						}
					}
				}
			?>
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
