<?php get_header(); ?>
    <main class="page-main">
        <section class="row sm">
            <section class="card col-8">
                <section class="news">
                    <?php
                    $args = array('posts_per_page' => 3, 'order' => 'DSC', 'orderby' => 'date');
                    $postslist = get_posts($args);
                    foreach ($postslist as $post) :
                        setup_postdata($post); ?>
                        <section class="newsitem row xs">
                            <section class="thumbnail col-3" style="background-image: url('<?php if (has_post_thumbnail()) the_post_thumbnail_url(); ?>')">
                                <a href="<?php the_permalink(); ?>"></a>
                            </section>
                            <section class="excerpt col-9">
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <p><?php the_excerpt(); ?></p>
                            </section>
                        </section>
                        <?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
                    <hr/>
                    <section class="more">
                        <a href="/category/presse"><i class="mdi mdi-chevron-right"></i><?php pll_e('Mehr Neuigkeiten') ?></a>&nbsp;<a href="/<?php pll_e('Veranstaltungskalender') ?>"><i class="mdi mdi-chevron-right"></i><?php pll_e('Veranstaltungskalender') ?></a>
                    </section>
                </section>
            </section>
            <section class="col-4">
                <form action="/" method="get" class="search-form">
                    <i class="mdi mdi-magnify"></i><input type="search" name="s" id="search" placeholder="<?php pll_e('Suchbegriff') ?>"/>
                </form>
                <?php if (is_active_sidebar('frontpage-sidebar')) dynamic_sidebar('frontpage-sidebar'); ?>
            </section>
        </section>
        <section class="row md">
            <?php if (is_active_sidebar('frontpage-teaser-1')) dynamic_sidebar('frontpage-teaser-1'); ?>
            <?php if (is_active_sidebar('frontpage-teaser-2')) dynamic_sidebar('frontpage-teaser-2'); ?>
            <?php if (is_active_sidebar('frontpage-teaser-3')) dynamic_sidebar('frontpage-teaser-3'); ?>
        </section>
    </main>
<?php get_footer(); ?>