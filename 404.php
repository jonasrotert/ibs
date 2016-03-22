<?php get_header(); ?>

<section class="page-main error404 search-page">
    <section class="row">
        <section class="card col-12">
            <h1>404: Schade, ...</h1>
            <p>
                die Seite, die Sie besuchen möchten, scheint nicht zu existieren.</p>
            <p>
                Möchsten Sie eine Suche starten?
            </p>
            <form action="/" method="get" class="search-form">
                <i class="mdi mdi-magnify"></i><input type="search" name="s" id="search" placeholder="Suchbegriff"/>
            </form>
        </section>
    </section>
</section>
<?php get_footer(); ?>
