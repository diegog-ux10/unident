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
                <div class="logo col">Logo</div>
                <div class="dropdown col">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Aqui</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </div>
            </section>
        </div>
    </header>