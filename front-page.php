<?php get_header(); ?>
    <section class="front-page">
        <section class="row">

            <section class="card col-8">
                <section class="news">
                    <?php
                    $args = array('posts_per_page' => 3, 'order' => 'DSC', 'orderby' => 'date');
                    $postslist = get_posts($args);
                    foreach ($postslist as $post) :
                        setup_postdata($post); ?>
                        <section class="newsitem">
                            <section class="thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) the_post_thumbnail(); ?>
                                </a>
                            </section>
                            <section class="excerpt">
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <p><?php the_excerpt(); ?></p>
                            </section>
                        </section>
                        <?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
                </section>
            </section>

            <section class="card col-4">
                Hello
            </section>

        </section>
    </section>
<?php get_footer(); ?>