<?php get_header(); ?>

<?php
   array(
      'titulo' => 'Quem Somos',
      'breadcrumb' => array(
         array('content' => 'Home', 'href' => site_url()),
         array('content' => 'Quem Somos', 'href' => null)
      )
   );
   $page = 'quem-somos';
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
                  <li><a href="<?php echo site_url('quem-somos'); ?>" class="active">Quem Somos</a></li>
                  <li><a href="<?php echo site_url('portfolio'); ?>" class="hvr-underline-from-center">Portfólio</a></li>
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
            <h1>Quem Somos</h1>
            <p>Home / <span>Quem Somos</span></p>
         </div><!-- container -->
      </div><!-- .content -->
   </section><!-- #vitrine -->

   <section id="quem-somos">
      <div class="container">
         <h1>Bem vindo à Seu Vídeo, Aqui fazemos vídeos incríveis.</h1>
         <p>A Seu Vídeo é uma produtora que surgiu da união de diversos profissionais, que tem bastante experiência na área de produção de audiovisual. Somos especialistas na produção de vídeo animados para sua empresa. Seguimos a máxima de oferecer o máximo de qualidade em vídeos, e que eles estejam completamente alinhados com sua estratégia e expectativa. A Seu Vídeo é uma produtora que surgiu da união de diversos profissionais, que tem bastante experiência na área de produção de audiovisual. Somos especialistas na produção de vídeo animados para sua empresa. Seguimos a máxima de oferecer o máximo de qualidade em vídeos, e que eles estejam completamente alinhados com sua estratégia e expectativa.</p>

         
         <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
         <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="item">
               <a href="#" class="hvr-wobble-top">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/um.png" class="quem" alt="Quem Somos - Seu Vídeo" />
               </a>

               <h4>Produção de vídeo</h4>
            </div><!-- item -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/plus.png" class="plus" alt="Quem Somos - Seu Vídeo" />
            <div class="item">
               <a href="#" class="hvr-wobble-top">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/dois.png" class="quem" alt="Quem Somos - Seu Vídeo" />
               </a>

               <h4>Animação</h4>
            </div><!-- item -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/plus.png" class="plus" alt="Quem Somos - Seu Vídeo" />
            <div class="item">
               <a href="#" class="hvr-wobble-top">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/tres.png" class="quem" alt="Quem Somos - Seu Vídeo" />
               </a>

               <h4>Design</h4>
            </div><!-- item -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/plus.png" class="plus" alt="Quem Somos - Seu Vídeo" />
            <div class="item">
               <a href="#" class="hvr-wobble-top">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/quatro.png" class="quem" alt="Quem Somos - Seu Vídeo" />
               </a>

               <h4>Estratégia</h4>
            </div><!-- item -->
         </div><!-- .md-10 -->
         <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>


         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul>
               <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> 46% dos usuários tomam algum tipo de ação após visualizar algum vídeo de anúncio</a></li>
               <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> 59% dos gerentes e diretores são mais propensos a ver um vídeo do que ler um texto</a></li>
               <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> 90% É a porcentagem de clientes online que consideram os vídeos que assistiram como fatores decisivos na tomada da decisão de compra de algum produto ou serviço.</a></li>
               <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Até 2020, o consumo de vídeos online pode ultrapassar o de TV tradicional</a></li>
            </ul>
         </div><!-- .md-12 -->
      </div><!-- .container -->
   </section><!-- #quem-somos -->

   <?php get_template_part('content', 'gostou'); ?>

   <?php get_template_part('content', 'explicativo'); ?>

<?php get_footer(); ?>
