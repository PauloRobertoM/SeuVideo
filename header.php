<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title>Seu Vídeo</title>

      <link rel='dns-prefetch' href='http://maps.googleapis.com' />
      <link rel='dns-prefetch' href='http://fonts.googleapis.com' />
      <link rel='dns-prefetch' href='http://s.w.org' />
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon" />
      <link rel="alternate" type="application/rss+xml" title="Seu Vídeo" />
      <link rel="alternate" type="application/rss+xml" title="Seu vídeo" />

      <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;subset=latin-ext" rel="stylesheet">
      
      <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css' type='text/css' media='all' />
      <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css' type='text/css' media='all' />
      <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->      
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
      <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/hover-min.css' type='text/css' media='all' />
      <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/style.css' type='text/css' media='all' />
      <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/style-mob.css' type='text/css' media='all' />

      <?php wp_head(); ?>
   </head>

   <body>
      <?php if ($page == 'home') { ?>
         
      <?php } else { ?>
         <?php include 'components/menu.php'; ?>
         <?php include 'components/vitrine.php'; ?>
      <?php } ?>