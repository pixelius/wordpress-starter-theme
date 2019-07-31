<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8">
    <!-- to choose what version of Internet Explorer the page should be rendered as -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- how to control the page's dimensions and scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WordPress Starter Theme</title>
    <meta name="description" content="por definir">
    <meta name="author" content="Emilio García">

    <?php wp_head();?>
</head>

<body <?php body_class('o-page');?>> 

    <div class="o-page__inner">

        <header class="header">

            <span class="php">header.php</span>

            <nav>
            <?php wp_nav_menu (
                array(
                    'theme-location' => 'top-menu'
                )
            );?>
            </nav>
            
        </header>

            