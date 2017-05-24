<?php get_header(); ?>
	
	<?php
		array(
			'titulo' => 'Blog',
			'breadcrumb' => array(
				array('content' => 'Home', 'href' => site_url()),
				array('content' => 'Blog', 'href' => null)
			)
		);
		$page = 'blog';
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
            <h1>Orçamento</h1>
            <p>Home / <span>Orçamento</span></p>
         </div><!-- container -->
      </div><!-- .content -->
   </section><!-- #vitrine -->

	<section class="orcamento">
		<div class="container">
			<form action="https://formspree.io/paulo1rm23@gmail.com" method="POST">
				<div class="passo4 passo">
					<div class="menu-topo">
						<ul>
							<li><a href="" class="bola">1</a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola">2</a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola">3</a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola active">4</a></li>
						</ul>
					</div><!-- .menu-topo -->
					
					<div class="content">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/passo4.png" alt="Passos - Seu Vídeo" />
							</div><!-- .md-6 -->
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h4>Finalização</h4>

								<ul>
									<li><i class="fa fa-check" aria-hidden="true"></i> Você receberá seu orçamento por email, ou iremos tirar mais dúvidas para finalização do processo.</li>
									<li><i class="fa fa-check" aria-hidden="true"></i> Dúvida pode procurar o suporte.</li>
								</ul>

								<a class="botao botao2" href="<?php echo site_url('orcamento'); ?>" /><i class="fa fa-angle-left" aria-hidden="true"> Anterior</i></a>
							</div><!-- .md-6 -->
						</div><!-- .row -->
					</div><!-- .content -->
				</div><!-- .passo -->
			</form>
		</div><!-- .container -->
	</section><!-- .orcamento -->

	<?php get_template_part('content', 'explicativo'); ?>
	<?php get_template_part('content', 'gostou'); ?>

<?php get_footer(); ?>