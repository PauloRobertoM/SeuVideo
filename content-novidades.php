<?php
    $args = array (
        'post_status'            => 'publish',
        'pagination'             => true,
        'posts_per_page'         => '10',
    );

    $posts = new WP_Query( $args );
?>

<div class="hidden-xs">
    <?php if ( $posts->have_posts() ) : ?>
        <div class="grid">
            <?php $count = 1; while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <div class="item grid-item">
                    <a href="<?php the_permalink() ?>" class="">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(''); ?>
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
            <?php $count++; endwhile; ?>
        </div>
    <?php endif; ?>
</div><!-- hidden-xs -->

<div class="hidden-lg hidden-md hidden-sm">
    <?php if ( $posts->have_posts() ) : ?>
        <?php $count = 1; while ( $posts->have_posts() ) : $posts->the_post(); ?>
            <div class="item">
                <a href="<?php the_permalink() ?>" class="">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(''); ?>
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
        <?php $count++; endwhile; ?>
    <?php endif; ?>
</div><!-- hidden-lg -->
