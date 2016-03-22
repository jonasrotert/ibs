<?php
/*
 * Template Name: Einspaltiges Layout
 */
?>
<?php get_header(); ?>
    <section class="page-main">
        <section class="row">
            <?php while (have_posts()) : the_post(); ?>
                <section class="card">
                    <?php
                    // Breadcrumb menu
                    echo '<nav class="breadcrumbs">';
                    if (function_exists('breadcrumbs')) {
                        breadcrumbs();
                    }
                    echo '</nav>';
                    ?>
                    <?php if (has_post_thumbnail()) : ?>
                        <header class="page-title thumbnail" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"><!--<span class="title"><?php the_title(); ?></span>--></header>
                    <?php endif; ?>
                    <header class="page-title"><?php the_title(); ?></header>
                    <main class="page-content"><?php the_content(); ?></main>
                </section>
            <?php endwhile; ?>
        </section>
    </section>
<?php get_footer();