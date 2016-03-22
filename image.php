<?php get_header(); ?>

<section class="page-main">
    <section class="row">
        <section class="card col-12">

            <?php while (have_posts()) : the_post(); ?>
                <h1>Bild: <?php the_title(); ?></h1>
                <section class="attachment">
                    <?php echo wp_get_attachment_image(get_the_ID(), 'medium'); ?>
                </section>
            <?php endwhile; ?>
        </section>
    </section>
</section>
<?php get_footer(); ?>
