<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link href="<?php echo bloginfo('template_url'); ?>/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/1.5.54/css/materialdesignicons.min.css">
    <?php wp_head(); ?>
</head>

<body>

<header class="page-header">
    <section class="row">
        <section class="brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <section class="logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt="Stiftung IBS" aria-label="Stiftung IBS" name="Stiftung IBS"/>
                </section>
                <section class="title">
                    <span>Stiftung Internationales Informatik-</span><br/>
                    <span>und Begegnungszentrum Sachsen</span>
                </section>
            </a>
        </section>
    </section>
</header>

<?php if (is_front_page() && is_home()) : ?>
    <section class="hero">
        <section class="row">
            <img src="<?php echo bloginfo('template_url'); ?>/img/banner.jpg" alt="Stiftung IBS" aria-label="Stiftung IBS" name="Stiftung IBS"/>
        </section>
    </section>
<?php endif; ?>

<nav class="page-nav">
    <section class="row">
        <?php wp_nav_menu(array(
            'menu' => 'Main',
            'container' => '',
            'depth' => 2
        )); ?>
    </section>
</nav>