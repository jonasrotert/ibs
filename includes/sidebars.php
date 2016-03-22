<?php
register_sidebar(array(
    'name' => 'Startseite Fußzeile 1.Spalte',
    'id' => 'frontpage-footer-column-1',
    'description' => 'Inhalte dieses Widgets werden in der ersten Spalte der Fußzeile auf der Startseite angezeigt.',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<span class="font-bold">',
    'after_title' => '</span>'
));
register_sidebar(array(
    'name' => 'Startseite Fußzeile 2.Spalte',
    'id' => 'frontpage-footer-column-2',
    'description' => 'Inhalte dieses Widgets werden in der zweiten Spalte der Fußzeile auf der Startseite angezeigt.',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<span class="font-bold">',
    'after_title' => '</span>'
));
register_sidebar(array(
    'name' => 'Startseite Fußzeile 3.Spalte',
    'id' => 'frontpage-footer-column-3',
    'description' => 'Inhalte dieses Widgets werden in der dritten Spalte der Fußzeile auf der Startseite angezeigt.',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<span class="font-bold">',
    'after_title' => '</span>'
));
register_sidebar(array(
    'name' => 'Startseite Sidebar',
    'id' => 'frontpage-sidebar',
    'description' => 'Inhalte dieses Widgets werden in der rechten Spalte auf der Startseite angezeigt.',
    'before_widget' => '<section class="card">',
    'after_widget' => '</section>',
    'before_title' => '',
    'after_title' => ''
));

register_sidebar(array(
    'name' => 'Startseite Teaser 1',
    'id' => 'frontpage-teaser-1',
    'description' => 'Dieser Teaser wird links auf der Startseite angezeigt.',
    'before_widget' => '<section class="col-4">',
    'after_widget' => '</section>',
    'before_title' => '',
    'after_title' => ''
));
register_sidebar(array(
    'name' => 'Startseite Teaser 2',
    'id' => 'frontpage-teaser-2',
    'description' => 'Dieser Teaser wird mittig auf der Startseite angezeigt.',
    'before_widget' => '<section class="col-4">',
    'after_widget' => '</section>',
    'before_title' => '',
    'after_title' => ''
));
register_sidebar(array(
    'name' => 'Startseite Teaser 3',
    'id' => 'frontpage-teaser-3',
    'description' => 'Dieser Teaser wird rechts auf der Startseite angezeigt.',
    'before_widget' => '<section class="col-4">',
    'after_widget' => '</section>',
    'before_title' => '',
    'after_title' => ''
));