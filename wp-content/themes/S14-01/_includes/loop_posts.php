
<div class="col-md-4 mt-5 p-5">
	<?php if (has_post_thumbnail() ) {
		the_post_thumbnail('custom-size-blog', array('class' => 'img-fluid mb-3'));
	 } else { ?>
	 	<img src="<?php echo get_theme_file_uri('assets/images/blognopic.jpg') ?>" class="img-fluid mb-3">
	<?php } ?>
	<h2><?php the_title() ?></h2>
	<p><?php the_excerpt() ?></p>
	<a class="btn btn-dark" href="<?php the_permalink() ?>">Lee más</a>

</div>