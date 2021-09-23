<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/CSS/style.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous">
    <title>Media By Mads</title>
</head>
<body>
    
    <header>
        <div class="contact">
            <i class="fas fa-phone"></i>
            <p> +45 28 68 36 16</p>
            <i class="far fa-envelope"></i>
            <p>madsmeda@gmail.com</p>
        </div>
    </header>

    <?php wp_nav_menu(array('theme_location' => 'Main Menu'));?>

    <hr>