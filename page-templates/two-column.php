<?php
/*
 * Template Name: Zweispaltiges Layout
 */
?>

<?php get_header(); ?>
    <section class="page-main">
        <section class="row">

            <section class="card col-12">
                <?php
                // Breadcrumb menu
                echo '<nav class="breadcrumbs">';
                if (function_exists('breadcrumbs')) {
                    breadcrumbs();
                }
                echo '</nav>';
                ?>
                <section class="row sm">
                    <?php while (have_posts()) : the_post(); ?>


                        <?php wp_nav_menu(array(
                            'menu' => 'Main',
                            'container' => 'nav',
                            'container_class' => 'sub-nav col-3',
                            'container_id' => ''
                        )); ?>

                        <section class="col-8">

                            <?php if (has_post_thumbnail()) : ?>
                                <header class="page-title thumbnail" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"><!--<span class="title"><?php the_title(); ?></span>--></header>
                            <?php endif; ?>
                            <header class="page-title"><?php the_title(); ?></header>
                            <main class="page-content"><?php the_content(); ?></main>
                        </section>

                    <?php endwhile; ?>
                </section>
            </section>
        </section>
    </section>
<?php get_footer();