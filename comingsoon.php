<?php
/* Template Name: Coming Soon Template */ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumYumsGallery - Coming Soon </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
</head>

<body class="bg-main font-body tracking-wide" <?php body_class() ?>>
    <!-- START container -->
    <div class='container mx-auto flex h-screen'>
        <div class="content-center text-center my-auto mx-auto ">
            <img class="inline-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" alt="">
            <span class="block text-white">coming soon</span>
        </div>

    </div>
    <!-- END container -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".nav-toggler").each(function(_, navToggler) {
                var target = $(navToggler).data("target");
                $(navToggler).on("click", function() {
                    $(target).animate({
                        height: "toggle"
                    });
                });
            });
        });
    </script>
</body>

</html>