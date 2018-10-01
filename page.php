<?php get_header(); ?>

<section>
	<div class="container">
			<?php while (have_posts()): ?>
				<?php the_post(); ?>

				<article>

					<!-- TITULO DO POST -->
					<h2>
						<?php the_title(); ?>
							
					</h2>

					<!-- CONTEUDO DO POST -->
					<p>
						<?php the_content(); ?>
					</p>
					<!-- COMENTARIOS -->
					

					<hr/>

					<?php
						if(comments_open()){ ?>
							<P>
						<?php comments_number('0 Comentários', '1 Comentário', '% Comentários' ); ?>
					</P>
					<?php
							comments_template();
						}
					 ?>

				</article>
			<?php endwhile; ?>

	</div>

	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>

