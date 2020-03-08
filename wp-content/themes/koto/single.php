<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<article class="article">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h1>
                    <?php the_title(); ?>
                </h1>

                <p>
                    <?php the_time('F j, Y'); ?>
                </p>

                <img src="<?php the_post_thumbnail_url(); ?>" alt="">

                <?php the_content();?>
                <?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
            </div>
        </div>
    </div>

</article>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>