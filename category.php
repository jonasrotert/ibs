<?php get_header(); ?>
    <section class="page-main">
        <section class="row">
            <section class="card col-12">
                <nav class="breadcrumbs">
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                </nav>
                <section class="row sm">
                    <section class="col-8">
                        <h1><?php the_archive_title(); ?></h1>
                        <p class="taxonomy-description"><?php the_archive_description(); ?></p>
                    </section>
                </section>
                <section class="row sm">

                    <section class="col-8">
                        <section class="news">
                            <?php while (have_posts()) : the_post(); ?>
                                <section class="newsitem row xs">
                                    <section class="thumbnail col-4" style="background-image: url('<?php if (has_post_thumbnail()) the_post_thumbnail_url(); ?>')">
                                        <a href="<?php the_permalink(); ?>"></a>
                                    </section>
                                    <section class="excerpt col-8">
                                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                        <p><?php the_excerpt(); ?></p>
                                    </section>
                                </section>
                            <?php endwhile; ?>
                        </section>
                    </section>
                    <section class="col-4">
                        <section class="contact">
                            Hallo
                        </section>
                    </section>

                </section>
            </section>
        </section>
    </section>
<?php get_footer(); ?>