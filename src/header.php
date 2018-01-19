<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php sla_asset('css/app.css'); ?>">
    <link rel="icon" href="<?php sla_asset('img/favicon.png'); ?>">
    <title><?php sla_the_title(); ?> - Saint Léon'art</title>
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <?php get_template_part('part', 'navbar');?>
        <h1>Saint Léon'art</h1>
        <p>
            <strong><time>28 - 30 septembre 2018</time></strong>
            <strong>Quartier Saint-Léonard à liège</strong>
        </p>
        <div>
            <a href="#" class="cta cta__primary">Programme</a>
            <a href="#" class="cta cta__secondary">Artistes</a>
        </div>
    </header>