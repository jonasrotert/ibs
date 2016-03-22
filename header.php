<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link href="<?php echo bloginfo('template_url'); ?>/style.css" rel="stylesheet"/>
    <?php wp_head(); ?>
</head>

<?php if (is_front_page() && is_home()) : ?>
<body class="front-page">
<?php else: ?>
<body>
<?php endif; ?>

<header class="page-header">
    <section class="row xs">
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
            <section class="slider" id="slider">
                <button id="prev" class="prev"><i class="mdi mdi-chevron-left"></i></button>
                <button id="next" class="next"><i class="mdi mdi-chevron-right"></i></button>
            </section>
        </section>
    </section>
<?php endif; ?>

<nav class="page-nav desktop">
    <section class="row">
        <?php wp_nav_menu(array(
            'menu' => 'Main',
            'container' => '',
            'depth' => 2
        )); ?>
        <section class="color-band">
            <section class="green"></section>
            <section class="blue"></section>
            <section class="gray"></section>
            <section class="orange"></section>
        </section>
    </section>
</nav>
<nav class="page-nav mobile">
    <section class="row">
        <section><i class="toggle mdi mdi-menu"/></i><span class="toggle-label">Menü</span></section>
        <?php wp_nav_menu(array(
            'menu' => 'Main',
            'container' => '',
            'depth' => 2
        )); ?>
    </section>
</nav>