<!-- website design Binca Shinaasi - website development Maria Lara maaarialara.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="web_author" description="Maria Lara">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="style.css">
    <title> Levendis - Fisioterapia y Entrenamiento </title>
    <meta property="og:description" content="Levendis - Fisioterapia y Entrenamiento" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Levendis" />
    <meta property="og:url" content="http://levendis.com/" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav class="nav__mobile">
        <svg class="menu__trigger" id="btn" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.4091 25.3125V0.596589H13.7727V25.3125H12.4091ZM0.732955 13.6364V12.2727H25.4489V13.6364H0.732955Z" fill="white"/>
        </svg>
        <div class="menu__item menu__item--0">
            <a href="#servicios">SERVICIOS</a>
            <a href="/levendiswp/filosofia-levendis/">FILOSOFÍA LEVENDIS</a>
            <a href="#contacto">CONTACTO</a>
        </div>
    </nav>
    <nav class="nav__desktop">
        <div class="link__home-logo">
            <a href="/levendiswp/">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/isotipo_turquesa-y-celeste.png" alt="levendis-logo">
            </a>
        </div>
        <ul>
            <li>
                <a href="#servicios">SERVICIOS</a>
            </li>
            <li>
                <a href="/levendiswp/filosofia-levendis/">FILOSOFÍA LAVENDIS</a>
            </li>
            <li>
                <a class="cta contacto" href="#contacto">CONTACTO</a>
            </li>
        </ul>
    </nav>
<main>
    