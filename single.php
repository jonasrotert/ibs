<?php get_header(); ?>
    <section class="page-main article">
        <section class="row">

            <section class="card">


                <?php while (have_posts()) :
                    the_post(); ?>

                    <?php
                    // Breadcrumb menu
                    echo '<nav class="breadcrumbs">';
                    if (function_exists('breadcrumbs')) {
                        breadcrumbs();
                    }
                    echo '</nav>';
                    ?>
                    <section class="row sm">
                        <section class="col-1"></section>
                        <section class="col-6">
                            <header class="page-title"><?php the_title(); ?></header>
                            <hr/>
                            <p><?php the_date() ?></p>
                        </section>
                    </section>
                    <section class="row sm">
                        <section class="col-1"></section>
                        <section class="col-6">
                            <?php the_content(); ?>
                        </section>
                        <section class="col-1"></section>
                        <section class="col-3">
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="thumbnail" src="<?php the_post_thumbnail_url(); ?>"/>
                            <?php endif; ?>
                            <section class="contact">
                                <header class="contact-header">Kontakt</header>

                                <!--<?php echo get_avatar(get_the_author_meta('user_email'), $author_bio_avatar_size); ?>-->
                                <p>
                                    <?php echo get_the_author(); ?><br/>
                                    <?php the_author_meta('description'); ?>
                                </p>
                            </section>
                        </section>
                    </section>
                <?php endwhile; ?>

            </section>
        </section>
    </section>
<?php get_footer();