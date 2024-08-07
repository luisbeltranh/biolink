<!DOCTYPE html>
<html>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Treelink Theme - Link in Bio</title>
    <meta name="description" content="A modular, responsive & minimalist Link in bio theme built with Bootstrap 5. Easy to deploy & easy to edit. Ideal for mobile & social media use." />
    <meta name="keywords" content="The best link in bio template" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="/assets/public/images/icon.png">
    <link rel="stylesheet" type="text/css" href="/assets/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/public/css/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/public/css/style.css">
    <?php
    if ($estilo == 'video') {
    ?>
        <link rel="stylesheet" type="text/css" href="/assets/public/css/colors/video-mode.css">
    <?php
    }
    ?>
    <?php
    if ($estilo == 'gradiente') {
    ?>
        <link rel="stylesheet" type="text/css" href="/assets/public/css/colors/gradient-bg.css">
    <?php
    }
    ?>
    <?php
    if ($estilo == 'tema1') {
    ?>
        <link rel="stylesheet" type="text/css" href="/assets/user/css/temas.css">
    <?php
    }
    ?>
    <?php
    if ($estilo == 'tema2') {
    ?>
        <link rel="stylesheet" type="text/css" href="/assets/user/css/temadinamico.php">
        <style>
            /*===================================
Background Color
=====================================*/

            body {
                /* 1 background-color: #eae7dc; */
                background-color: #<?= dechex($tema['back_color']) ?>;
                background-image: linear-gradient(#<?= str_pad(dechex($tema['back_grad_first']), 6, "0", STR_PAD_LEFT) ?>, #<?= str_pad(dechex($tema['back_grad_second']), 6, "0", STR_PAD_LEFT) ?>);
                transition: all 0.5s;
            }
        </style>
    <?php
    }
    ?>


</head>