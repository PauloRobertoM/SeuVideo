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
                  <li><a href="<?php echo site_url('orcamento'); ?>" class="botao ativo">Faça seu Orçamento</a></li>
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
				<div class="passo1 passo">
					<div class="menu-topo">
						<ul>
							<li><a href="" class="bola active">1</a></li>
							<li class="img-elip"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli-cor.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola">2</a></li>
							<li class="img-elip"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola">3</a></li>
							<li class="img-elip"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola">4</a></li>
						</ul>

						<p class="text-center">Para podermos preparar o melhor orçamento e orientar melhor você quanto ao seu vídeo, por favor, preencher campos abaixo.</p>
					</div><!-- .menu-topo -->
					
					<div class="content">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/passo1.png" alt="Passos - Seu Vídeo" />
							</div><!-- .md-6 -->
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h4>Conhendo melhor você</h4>

								<label>Seu nome ou da empresa</label>
								<input type="text" name="Nome" value="" />

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<label>Telefone (no campo de preencher colocar (DDD)</label>
										<input type="tel" name="Telefone" value="" />
									</div><!-- .md-6 -->
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<label>E-mail<br><br></label>
										<input type="email" name="E-mail" value="" />
									</div><!-- .md-6 -->
								</div><!-- .row -->

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<label>Qual atividade de sua empresa (Ex: Varejo, Consultoria, Startup)</label>
										<input type="text" name="Atividade" value="" />
									</div><!-- .md-6 -->
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<label>Qual seu site? (ou endereço de rede social)</label>
										<input type="text" name="Site" value="" placeholder="http://" />
									</div><!-- .md-6 -->
								</div><!-- .row -->

								<a class="button_passo2 botao" />Seguinte <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div><!-- .md-6 -->
						</div><!-- .row -->
					</div><!-- .content -->
				</div><!-- .passo -->

				<div class="passo2 passo">
					<div class="menu-topo">
						<ul>
							<li><a href="" class="bola">1</a></li>
							<li class="img-elip"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola active">2</a></li>
							<li class="img-elip"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli-cor.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola">3</a></li>
							<li class="img-elip"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola">4</a></li>
						</ul>
					</div><!-- .menu-topo -->
					
					<div class="content">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/passo2.png" alt="Passos - Seu Vídeo" />
							</div><!-- .md-6 -->
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h4>Queremos saber como você quer seu vídeo</h4>

								<label>Qual finalidade do seu vídeo?</label>
								<select name="Qual Finalidade?">
									<option value="Palestra">Palestra</option>
									<option value="Institucional">Institucional</option>
									<option value="Redes sociais">Redes sociais</option>
									<option value="Whatsapp">Whatsapp</option>
									<option value="Treinamento">Treinamento</option>
									<option value="Outra">Outra</option>
								</select>

								<label>Tem referência? (Não tem? Não precisa se preocupar, nós ajudamos você a escolher, deixe em branco que retornaremos por email)</label>
								<input type="text" name="Tem referência?" value="" placeholder="http://" />

								<a class="button_passo3 botao" />Seguinte <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								<a class="button_passo1 botao botao2" /><i class="fa fa-angle-left" aria-hidden="true"> Anterior</i></a>
							</div><!-- .md-6 -->
						</div><!-- .row -->
					</div><!-- .content -->
				</div><!-- .passo -->

				<div class="passo3 passo">
					<div class="menu-topo">
						<ul>
							<li><a href="" class="bola">1</a></li>
							<li class="img-elip"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola">2</a></li>
							<li class="img-elip"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola active">3</a></li>
							<li class="img-elip"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eli-cor.png" alt="Passos - Seu Vídeo" /></a></li>
							<li><a href="" class="bola">4</a></li>
						</ul>
					</div><!-- .menu-topo -->
					
					<div class="content">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/passo3.png" alt="Passos - Seu Vídeo" />
							</div><!-- .md-6 -->
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h4>Vamos conversar mais sobre seu vídeo</h4>

								<label>Duração: (Caso não tenha definido, ajudaremos você com nossa consultoria em vídeos.)</label><br />
								<select name="Duração:">
									<option value="30 segundos">30 segundos</option>
									<option value="60 segundos">60 segundos</option>
									<option value="90 segundos">90 segundos</option>
									<option value="120 segundos">120 segundos</option>
									<option value="Outra">Outra</option>
								</select>
								<label>Outro</label>
								<input type="text" name="Outra Duração" id="duracao">

								<label>Tem prazo definido para receber seu vídeo? (ex: 15 dias)<br />* Para finalizar o prazo para produção discutiremos mais no decorrer do projeto.</label>
								<input type="text" name="Prazo" value="" />

								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<label>Precisa de Roteiro?</label><br />
										<input type="radio" name="Precisa de Roteiro?" value="Sim"> <span>Sim</span>
										<input type="radio" name="Precisa de Roteiro?" value="Não"> <span>Não</span>
									</div><!-- .md-4 -->
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<label>Podemos incluir o áudio no orçamento?</label><br />
										<input type="radio" name="Incluir o áudio?" value="Sim"> <span>Sim</span>
										<input type="radio" name="Incluir o áudio?" value="Não"> <span>Não</span>
									</div><!-- .md-8 -->
								</div><!-- .row -->

								<input type="submit" class="botao" value="Finalizar" />
								<a class="button_passo2 botao botao2" /><i class="fa fa-angle-left" aria-hidden="true"> Anterior</i></a>
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