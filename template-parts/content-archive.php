<article id="article-<?php the_permalink(); ?>" aria-label="article" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 articles-article">
	<ul>
		<li>
			<a href="<?php the_permalink(); ?>" role="button" aria-label="to the article" class="article-link-image">
				<?php the_post_thumbnail(); ?>
			</a>
		</li>
		<li>
			<h4><?php the_title(); ?></h4>
		</li>
		<li>
			<?php the_excerpt(); ?>
		</li>
		<li>
			<a href="<?php the_permalink(); ?>" role="button" aria-label="to the article">continue reading</a>
		</li>
		<li>
			<hr>
		</li>
	</ul>
</article>