<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php sla_asset('css/app.css'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php sla_asset('img/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php sla_asset('img/favicon-16x16.png'); ?>">
    <title><?php sla_the_title(); ?> - Saint Léon'art</title>
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <header class="header header--front-page pb-4">
        <?php get_template_part('part', 'navbar');?>
        <div class="container header__content text-center">
            <img class="<?php if(!is_front_page()){echo 'd-none';}; ?>" src="<?php sla_asset('img/logo.svg'); ?>" alt="Logo Saint Léon'art">
            <h1>Saint Léon'art</h1>
            <p class="mx-auto">
                <strong class="d-block"><time datetime="2018-09-28"><?php the_field('infos_date', 'option') ?></time></strong>
                <strong class="<?php if(!is_front_page()){echo 'd-none';}; ?>">Quartier Saint-Léonard à liège</strong>
            </p>
            <div>
                <a href="<?php sla_the_permalink_by_title('Programme'); ?>" class="btn btn-secondary <?php if(!is_front_page()){echo 'd-none';}; ?>">Programme</a>
                <a href="<?php sla_the_permalink_by_title('Artistes'); ?>" class="btn btn-primary <?php if(!is_front_page()){echo 'd-none';}; ?>">Artistes</a>
            </div>
        </div>
    </header>