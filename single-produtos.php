<?php get_header(); ?>

   <?php
      array(
         'titulo' => 'Projetos',
         'breadcrumb' => array(
            array('content' => 'Home', 'href' => site_url()),
            array('content' => 'Projetos', 'href' => site_url('produtos')),
            array('content' => get_the_title(), 'href' => null),
         )
      );
   ?>

   <div id="topo" class="topo-interna">
      <nav class="navbar navbar-default" id="meuMenu">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand hvr-wobble-top" href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo.png" class="logo" alt="Logo - Seu Vídeo" /></a>
            </div><!-- .navbar-header -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li><a href="<?php echo site_url('/'); ?>" class="hvr-underline-from-center">Home</a></li>
                  <li><a href="<?php echo site_url('quem-somos'); ?>" class="hvr-underline-from-center">Quem Somos</a></li>
                  <li><a href="<?php echo site_url('portfolio'); ?>" class="active">Portfólio</a></li>
                  <li><a href="<?php echo site_url('blog'); ?>" class="hvr-underline-from-center">Blog</a></li>
                  <li><a href="#contato" class="hvr-underline-from-center">Contato</a></li>
                  <li><a href="/#producao" class="hvr-underline-from-center">Como Funciona</a></li>
                  <li><a href="<?php echo site_url('orcamento'); ?>" class="botao">Faça seu Orçamento</a></li>
               </ul><!-- .nav -->
            </div><!-- .navbar-collapse -->
         </div><!-- .container -->
      </nav><!-- .navbar -->
   </div><!-- #topo -->

   <section id="vitrine-interna">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/quem-somos.jpg" alt="Quem Somos - Seu Vídeo" />
      <div class="content">
         <div class="container">
            <h1>Portfólio</h1>
            <p>Home / <span>Portfólio</span></p>
         </div><!-- container -->
      </div><!-- .content -->
   </section><!-- #vitrine -->

   <section class="portfolio portfolio-single">
      <div class="container">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h4><?php the_title(); ?></h4>
            
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <p><?php the_content(); ?></p>
               </div><!-- .md-4 -->
               
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                  <?php echo rwmb_meta( 'produtos_video', $args, $produto->ID ); ?>
               </div><!-- .md-8 -->
            </div><!-- .row -->

            <div class="fotorama" data-nav="thumbs">
               <?php $internas = rwmb_meta('produtos_internas', array('type' => 'image_advanced', 'size' => 'thumb_produtos_full')); ?>
               <?php $primeiraInterna = (!empty($internas)) ? current($internas) : null; ?>

               <?php foreach ($internas as $indice => $interna) : ?>
                  <img src="<?php echo $interna['url']; ?>" alt="<?php echo $interna['title']; ?>">
               <?php endforeach; ?>
            </div><!-- .fotorama -->
         <?php endwhile; endif; ?>
      </div><!-- .container -->
   </section><!-- .portfolio -->

   <?php get_template_part('content', 'gostou'); ?>

<?php get_footer(); ?>