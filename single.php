<?php get_header(); ?>

   <?php
      $data =
      array(
         'titulo' => 'Blog',
         'breadcrumb' => array(
            array('content' => 'Home', 'href' => site_url()),
            array('content' => 'Blog', 'href' => '')
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
                  <li><a href="<?php echo site_url('portfolio'); ?>" class="hvr-underline-from-center">Portfólio</a></li>
                  <li><a href="<?php echo site_url('blog'); ?>" class="active">Blog</a></li>
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
            <h1>Blog</h1>
            <p>Home / <span>Blog</span></p>
         </div><!-- container -->
      </div><!-- .content -->
   </section><!-- #vitrine -->

   <section class="blog b-int">
      <div class="container">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="content">
               <div class="date">
                  <?php $mes = ucfirst(get_the_date('F')); ?>
                  <?php $dia = get_the_date('d'); ?>
                  <?php $ano = get_the_date('Y'); ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/date.png" alt="Data - Seu Vídeo">
                  <span><?php echo "{$dia} {$mes} {$ano}"; ?></span>
              </div><!-- .date -->
              <h4><?php the_title(); ?></h4>

               <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(''); ?>
               <?php endif; ?>

               <p><?php the_content(); ?></p>
            </div><!-- .content -->

            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
               <ul class="post-shares">
                  <li><a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="facebook" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></a></li>
                  <li><a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>" class="twitter" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                  <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="google" target="_blank"><i class="fa fa-google-plus"></i> Google Plus</a></li>
               </ul>
            </div><!-- .md-5 -->

            <div class="col-lg-8 col-md-9 col-sm-6 col-xs-12">
               <!-- COMMENTS -->
               <div id="fb-root"></div>
               <script>(function(d, s, id) {
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) return;
               js = d.createElement(s); js.id = id;
               js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=300193366983202";
               fjs.parentNode.insertBefore(js, fjs);
               }(document, 'script', 'facebook-jssdk'));</script>
               <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="5"></div>
            </div><!-- .md-9 -->

         <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
         <?php endif; ?>
      </div><!-- .container -->
   </section><!-- .blog -->
  
<?php get_footer(); ?>