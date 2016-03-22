<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

    <section class="page-main search-page">
        <section class="row">

            <section class="card">
                <section class="row md">
                    <section class="col-8">
                        <nav class="breadcrumbs">
                            <ul>
                                <li><a href="/"><span>Stiftung IBS</span></a> <i class="mdi mdi-chevron-right"></i></li>
                                <li class="active"><span>Suche</span></li>
                            </ul>
                        </nav>

                        <h1>Suchergebnisse nach "<?php echo esc_html(get_search_query()); ?>"</h1>

                        <section>
                            <form action="/" method="get" class="search-form">
                                <i class="mdi mdi-magnify"></i><input type="search" name="s" id="search" placeholder="Suchbegriff" value="<?php echo esc_html(get_search_query()); ?>"/>
                            </form>
                        </section>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <section class="search-result">
                                    <header><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></header>
                                    <section class='excerpt'><?php the_excerpt() ?></section>
                                </section>
                            <?php endwhile; ?>
                            <?php the_posts_pagination(array(
                                'prev_text' => "Vorherige Seite",
                                'next_text' => "Nächste Seite",
                                'before_page_number' => "Seite ",
                            )); ?>
                        <?php else: ?>
                            <section>Keine Suchergebnisse</section>
                        <?php endif; ?>
                    </section>
                </section>
            </section>
        </section>
    </section>
<?php get_footer();