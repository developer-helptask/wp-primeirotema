<?php
if(post_password_required()){
	return;
}

if(have_comments()){

	foreach($comments as $comment){
		?>
		<div class="comentario">
			<div class="comentario_foto">
				<?php echo get_avatar($comment, 60); ?>
			</div>
			<div class="comentario_area">
				<strong><?php comment_author(); ?> - <?php comment_date(); ?></strong><br/>
				<?php comment_text(); ?>
			</div>
		</div>
		<?php
	}
	the_comments_pagination();
}

comment_form(array(
	'comment_field' => '<textarea name="comment" placeholder="Comentário"></textarea>',
	'fields' => array(
			'author' => '<input type="text" name="author" placeholder="Nome ">';
			'email' => '<input type="email" name="email" placeholder="Email ">';
			'url' => '<input type="text" name="url" placeholder="Site ">';
		),
	'class_submit' => 'btn',
	'label_submit' => 'Comentar',
	'title_reply' => 'Dê a sua opinião :)'
));
?>