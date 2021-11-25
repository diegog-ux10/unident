<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unident</title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">logo</div>
                <div class="col-sm-4">
                    <div class="phone d-inline">523 1800</div>
                    <div class="social-icon d-inline">FB</div>
                    <div class="social-icon d-inline">I</div>
                    <div class="social-icon d-inline">Youtube</div>
                </div>
            </div>
            <section class="menu-area">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-dark" role="navigation">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="#"></a>
                            <?php wp_nav_menu( array(
                                'theme_location'  => 'my_main_menu',
                                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => 'bs-example-navbar-collapse-1',
                                'menu_class'      => 'navbar-nav ml-auto',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ) ); 
                            ?>
                        </div>
                    </nav>
                </div>
            </section>
        </div>
    </header>