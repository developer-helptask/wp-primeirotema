<?php get_header(); ?>

<section>
	<div class="container">
		<?php if(have_posts()): ?>
			<?php while (have_posts()): ?>
				<?php the_post(); ?>

				<article>

					<!-- TITULO DO POST -->
					<h2>
						<?php the_title(); ?>
							
					</h2>

					<!-- IMAGEM DO POST -->
					<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail('full') ;?>
					<?php endif; ?>

					<!-- AUTHOR, DATE , CATEGORY -->
					<p>
						<?php get_the_date(); ?> | 
						<a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> |
						<?php the_category(', '); ?>
					</p>
					<!-- CONTEUDO DO POST -->
					<p>
						<?php the_content(); ?>
					</p>
					<!-- COMENTARIOS -->
					<P>
						<?php comments_number('0 Comentários', '1 Comentário', '% Comentários' ); ?>  | 
					</P>

					<hr/>

					<?php
						if(comments_open()){
							comments_template();
						}
					 ?>

				</article>
			<?php endwhile; ?>
		<?php endif;?>

		<div class="paginacao">
			<div class="pagina_anterior"><?php previous_post_link(); ?></div>
			<div class="pagina_proximo"><?php next_post_link(); ?></div>
		</div>
	</div>

	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>

