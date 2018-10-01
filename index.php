<?php get_header(); ?>
<section>
	<div class="container-fluid">
		 <?php echo do_shortcode('[rev_slider alias="banner"]');?>
		
	</div>
</section>
<section class=" pd-tb-5">
	<div class="container column text-center"  data-aos="flip-left">
		<h1>Quem Somos ?</h1>
		<p>O <strong>Canil Canavans</strong> Lorem Ipsum sum dollor  Lorem Ipsum sum dollor  Lorem Ipsum sum dollor  Lorem Ipsum sum dollor  Lorem Ipsum sum dollor<br />  Lorem Ipsum sum dollor  Lorem Ipsum sum dollor  Lorem Ipsum sum dollor  Lorem Ipsum sum dollor  Lorem Ipsum sum dollor <br /> Lorem Ipsum sum dollor  Lorem Ipsum sum dollor  Lorem Ipsum sum dollor  Lorem Ipsum sum dollor <br> Lorem Ipsum sum dollor  Lorem Ipsum sum dollor </p>

	</div>


	<div class="container"  data-aos="zoom-in">
		<div class="service-box">
			<div class="service-icon" style="width:20%;margin:2% auto !important">
				<a href="#" ><img src="<?php echo get_template_directory_uri();?>/assets/images/ic-1.png" /></a>
			</div>
			<div class="service-content">
				<h4>O Canil:</h4>
				<p><a href="#">Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor ...</a></p>
			</div>
		</div>
 
 
			<div class="service-box service-center">
			<div class="service-icon">
			<a href="#" >    <img src="<?php echo get_template_directory_uri();?>/assets/images/ic-2.png" /></a>
			</div>
			<div class="service-content">
			<h4>Ninhadas:</h4>
			<p><a href="#">Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor ...</a></p>
			</div>
			</div>
 
			 
			<div class="service-box  service-center" data-animation="fadeIn" data-animation-delay="03">
			<div class="service-icon">
			<a href="#" >    <img src="<?php echo get_template_directory_uri();?>/assets/images/ic-3.png" /></a>
			</div>
			<div class="service-content">
			<h4>Eventos:</h4>
			<p><a href="#">Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor ...</a></p>
			</div>
			</div>
 
</div>


	</div>

<div class="container-fluid bg-imagem-fundo">

	<div class="container column text-center"  data-aos="flip-left" style="height: 600px;">
		<p>Canil Canavans, Com um plantel recheado de campeões<br/><strong>Entre e confira nossos Campeões</strong> </p>

		<a href="#" class="btn-system btn-large"><i class="fa fa-tasks"></i> Conheça nossos campeões</a>
	</div>
</div>


	<div class="container">
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

