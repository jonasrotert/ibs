<footer class="page-footer">
    <section class="part widgets">
        <section class="row sm">
            <section class="col-4">
                <?php if (is_active_sidebar('frontpage-footer-column-1')) dynamic_sidebar('frontpage-footer-column-1'); ?>
            </section>
            <section class="col-4">
                <?php if (is_active_sidebar('frontpage-footer-column-2')) dynamic_sidebar('frontpage-footer-column-2'); ?>
            </section>
            <section class="col-4">
                <?php if (is_active_sidebar('frontpage-footer-column-3')) dynamic_sidebar('frontpage-footer-column-3'); ?>
            </section>
            <section class="color-band">
                <section class="green"></section>
                <section class="blue"></section>
                <section class="gray"></section>
                <section class="orange"></section>
            </section>
        </section>
    </section>
    <section class="part last-modified">
        <section class="row sm">
            <section class="col-8">
                Letzte Änderung: <?php the_modified_date(); ?> | Verantwortlich: <?php the_modified_author(); ?>
            </section>
            <section class="col-4">
                <?php wp_nav_menu(array(
                    'menu' => 'Social',
                    'container' => 'nav',
                    'container_class' => 'social',
                    'container_id' => 'social'
                )); ?>
            </section>
        </section>
    </section>
</footer>
<base href="<?php bloginfo('template_url'); ?>/"/>
<script src="./lib/systemjs/dist/system.src.js"></script>

<script>
    System.config({
        packages: {
            script: {

                defaultExtension: 'js'
            }
        }
    });
    System.import('script/boot.js').then(null, console.error.bind(console));
</script>
<section class="dialogwrapper">
    <section class="background"></section>
    <section class="dialog"></section>
</section>
</body>
</html>