<article>
					<!-- IMAGEM DO POST -->
					<?php if(has_post_thumbnail()): ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full', array('class' => 'post_miniatura'));?>
								
						</a>
					<?php endif; ?>

					<!-- TITULO DO POST -->
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>

					<!-- AUTHOR, DATE , CATEGORY -->
					<p>
						<?php get_the_date(); ?> | 
						<a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> |
						<?php the_category(', '); ?>
					</p>
					<!-- CONTEUDO DO POST -->
					<p>
						<?php the_excerpt(); ?>
					</p>
					<!-- COMENTARIOS -->
					<P>
						<?php comments_number('0 Comentários', '1 Comentário', '% Comentários' ); ?>  | 
						<a href="<?php the_permalink(); ?>"> Saiba Mais</a>
					</P>

				</article>