<?php get_header(); ?>

    <?php
        $page = 'home';
    ?>

    <div id="dialog-message" title="Tem uma Startup?">
        <p>
            Confira nossa proposta espacial para novos negócios.<br />
            Deixe aqui seu email, que entraremos em contato.

            <form action="https://formspree.io/paulo1rm23@gmail.com" method="POST">
                <input type="email" name="E-mail" value="" placeholder="E-MAIL" aria-required="true" />

                <input type="submit" class="botao" value="Enviar">
            </form>
        </p>
    </div><!-- MODAL -->

    <section id="produtos">
        <div class="container">
            <h1 class="titulo-geral">Nossos <span>Produtos</span></h1>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="#" class="hvr-wobble-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/prod1.png" alt="Produtos - Seu Vídeo">

                        <h2>Vídeo Pessoal</h2>
                        <p>Tem alguma data especial? Quer homenagear alguém? Faça conosco seu vídeo ilustrado animado. Essa é uma maneira diferente e divertida. Ideal para festas, datas comemorativas.</p>
                    </a>
                </div><!-- .md-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="#" class="hvr-wobble-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/prod2.png" alt="Produtos - Seu Vídeo">

                        <h2>Vídeo Teaser</h2>
                        <p>Tem um produto e deseja fazer um vídeo para promoção, lançamento ou divulgação? Essa é a melhor forma. Esses vídeos são curtos com duração de 7 segundos.</p>
                    </a>
                </div><!-- .content -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="#" class="hvr-wobble-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/prod3.png" alt="Produtos - Seu Vídeo">

                        <h2>Vídeo Empresarial</h2>
                        <p>Quer fazer um vídeo institucional para sua empresa, seja ela PME ou Startup? Essa é a opção. Aqui também é o local para apresentações internas e treinamentos corporativos.</p>
                    </a>
                </div><!-- .md-4 -->
            </div><!-- .row -->
        </div><!-- .contianer -->
    </section><!-- #produtos -->

    <?php get_template_part('content', 'explicativo'); ?>

    <section id="producao">
        <div class="container">
            <h1 class="titulo-geral">saiba como é a <span>produção do seu vídeo</span></h1>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="content verde">
                    <span>1</span>
                    <a href="#" class="hvr-wobble-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/um.png" alt="Produçao - Seu Vídeo">

                        <h2>briefing</h2>
                        <p>Seguindo nosso manual, você nos passará as informações necessários para produzirmos o melhor vídeo.</p>
                    </a>
                </div><!-- .content verde -->
            </div><!-- .md-4 -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="content vermelho">
                    <span>2</span>
                    <a href="#" class="hvr-wobble-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/dois.png" alt="Produçao - Seu Vídeo">

                        <h2>Roteiro</h2>
                        <p>Vamos escrever sua história da melhor forma, respeitando seu briefing e estratégia.</p>
                    </a>
                </div><!-- .content vermelho -->
            </div><!-- .md-4 -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="content azul">
                    <span>3</span>
                    <a href="#" class="hvr-wobble-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/tres.png" alt="Produçao - Seu Vídeo">

                        <h2>storyboard</h2>
                        <p>O roteiro começa a ganhar vida com algumas ideias visuais.</p>
                    </a>
                </div><!-- .content azul -->
            </div><!-- .md-4 -->

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="content laranja">
                    <span>4</span>
                    <a href="#" class="hvr-wobble-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/quatro.png" alt="Produçao - Seu Vídeo">

                        <h2>Ilustração</h2>
                        <p>Seguindo nosso manual, você nos passará as informações necessários para produzirmos o melhor vídeo.</p>
                    </a>
                </div><!-- .content laranja -->
            </div><!-- .md-4 -->
            <div class="col-lg-8 col-md-8 col-sm-12 hidden-xs">
                <div class="content rosa">
                    <span>5</span>
                    <a href="#" class="hvr-wobble-top">
                        <div class="content2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/cinco.png" alt="Produçao - Seu Vídeo">
                            
                            <div class="item">
                                <h2>motion/sound</h2>
                                <p>Aqui, tudo que foi feito nas etapas anteriores começa a se mexer e falar.</p>
                            </div><!-- item -->
                        </div><!-- content2 -->
                    </a>
                </div><!-- .content rosa -->
            </div><!-- .md-8 -->
            <!-- mobile -->
            <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                <div class="content rosa">
                    <span>5</span>
                    <a href="#" class="hvr-wobble-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/cinco.png" alt="Produçao - Seu Vídeo">

                        <h2>motion/sound</h2>
                        <p>Aqui, tudo que foi feito nas etapas anteriores começa a se mexer e falar.</p>
                    </a>
                </div><!-- .content rosa -->
            </div><!-- .xs-12 -->
        </div><!-- .container -->
    </section><!-- #producao -->

    <section class="blog">
        <div class="container">
            <h1 class="titulo-geral">dicas de marketing digital <span>para o seu negócio</span></h1>

            <div class="owl-carousel owl-theme">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="item">
                        <a href="<?php the_permalink() ?>" class="">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('blog-index'); ?>
                            <?php endif; ?>
                            
                            <div class="content">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo excerpt(115, get_the_excerpt()); ?> Leia mais</p>

                                <div class="date">
                                    <?php $mes = ucfirst(get_the_date('F')); ?>
                                    <?php $dia = get_the_date('d'); ?>
                                    <?php $ano = get_the_date('Y'); ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/date.png" alt="Data - Seu Vídeo">
                                    <span><?php echo "{$dia} {$mes}"; ?></span>
                                </div><!-- .date -->
                            </div><!-- .content -->
                        </a>
                    </div><!-- .item -->
                <?php endwhile; endif; ?>                
            </div><!-- .owl-carousel -->
            
            <div class="botao-blog">
                <a href="<?php echo site_url('blog'); ?>" class="botao">Veja Mais</a>
            </div><!-- .botao-blog -->
        </div><!-- .container -->
    </section><!-- .blog -->

<?php get_footer(); ?>