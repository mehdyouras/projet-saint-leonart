<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php sl_asset('css/main.css'); ?>">
    <link rel="icon" href="<?php sl_asset('img/favicon.png'); ?>">
    <title><?php sl_the_title(); ?> - Saint Léon'art</title>
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<header class="o-layout">
    <div class="o-layout__item c-hamburger c-hamburger--elastic" tabindex="0" aria-label="Menu" role="button" aria-controls="navigation">
        <div class="c-hamburger-box">
            <div class="c-hamburger-inner"></div>
        </div>
    </div>
    <nav id="nav">
        <a href="#" class="c-nav__item">Accueil</a>
        <a href="#" class="c-nav__item">Programme</a>
        <a href="#" class="c-nav__item">Artistes</a>
        <a href="#" class="c-nav__item">Agenda</a>
        <a href="#" class="c-nav__item">En pratique</a>
        <a href="#" class="c-nav__item">à propos</a>
    </nav>
    <div class="o-layout__item c-brand c-brand--home">
        <div class="c-brand__logos">
            <img src="<?php sl_asset('img/logo.svg'); ?>" alt="Logo du festival Saint Léon'art">
            <img src="<?php sl_asset('img/logo-text.svg'); ?>" alt="Saint Léon'art">
        </div>
        <div class="c-brand__details">
            <h1>Saint Léon'art</h1>
            <p class="c-brand__dates">28 - 30 septembre 2018</p>
            <p class="c-brand__location">Quartier Saint Léonard à Liège</p>
        </div>
        <div class="c-brand__cta-container">
            <a href="#" class="c-cta c-cta--main">Programme</a>
            <a href="#" class="c-cta c-cta--second">Artistes</a>
        </div>
    </div>
</header>