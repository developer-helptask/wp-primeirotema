<?php get_header(); ?>

<section>
	<div class="container">

		<h1><?php the_archive_title(); ?></h1>

		<?php if(have_posts()): ?>
			<?php while (have_posts()): ?>
				<?php the_post(); ?>

				<?php get_template_part('template_parts/post'); ?>
			<?php endwhile; ?>
		<?php endif;?>

		<div class="paginacao">
			<div class="pagina_anterior"><?php previous_posts_link('Anterior'); ?></div>
			<div class="pagina_proximo"><?php next_posts_link('Proximo'); ?></div>
		</div>
	</div>

	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>

