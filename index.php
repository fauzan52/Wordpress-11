<?php get_header();  ?>
<main>



<div class="card mb-3">
    <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p class="card-text"><?php the_post_thumbnail('small_thumbnail'); ?></p>
            <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read more ...</a></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p class="card-text"><?php the_post_thumbnail('small_thumbnail'); ?></p>
            <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read more ...</a></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<?php
if( have_posts() ):
	while ( have_posts() ): the_post();
		get_template_part('content', get_post_format());
	endwhile;
    echo paginate_links();
else:
	echo 'Tidak ada postingan';
endif;
?>
</main>

<!--Memanggil Widget-->
<!--<aside>-->
<!--    --><?php //dynamic_sidebar('sidebar1') ?>
<!--</aside>-->
<!--<div class="clear"></div>-->
<?php get_footer(); ?>

<!--WP Query-->
<!--<div id="custom_post">-->
<!--    <h1>Post Terakhir : </h1>-->
<?php
//    $custom_post = new WP_Query('cat=7');
//
//    if   ($custom_post -> have_posts()):
//        while ($custom_post->have_posts()): $custom_post->the_post(); ?>
<!--        <a href="--><?php //the_permalink(); ?><!--"> --><?php //the_title(); ?><!--</a>-->
<!--    --><?php
//    endwhile;
//    else:
//        echo 'Tidak ada postingan';
//    endif;
//?>
<!--</div>-->