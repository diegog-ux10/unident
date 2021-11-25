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
            <div class='top-bar row mw-100'>
                <div class="phone col-9 text-right">523 1800</div>
                <div class="social-icon col-1 text-right">FB</div>
                <div class="social-icon col-1 text-right">I</div>
                <div class="social-icon col-1 text-right">Youtube</div>
            </div>
            <section class="menu-area row">
                <div class="logo col">logo</div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light col-8">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </section>
        </div>
    </header>