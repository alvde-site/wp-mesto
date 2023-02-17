<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Mesto</title>
    <script defer="defer" src="<?php echo bloginfo('template_url'); ?>/main.js"></script>
    <link href="<?php echo bloginfo('template_url'); ?>/style.css" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body class="root">
    <div class="page">
        <header class="header">
            <div class="header__logo"></div>
        </header>
        <main class="content">