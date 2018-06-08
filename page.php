<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>
<?php get_header(); ?>

<?php if (is_page('shop' )) : ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if (have_rows('products')) : while (have_rows('products')) : the_row(); ?>
    
      <section id="product_box">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <?php the_sub_field('product_url') ?>
            </div>
          </div>
        </div>
      </section>

    <?php endwhile; endif; ?>

  <?php endwhile; endif; ?>

  <?php elseif (is_page('gallery' )) : ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
        <section id="galleries">
          <div class="container">
            <div class="col-sm-9 col-md-9">
             <div class="row">
              <?php if (have_rows('galleries')) : while (have_rows('galleries')) : the_row(); ?>
              <div class="row">
                <div class="title">
                  <?php the_sub_field('gallery_title'); ?>
                </div>
              </div>
              <div class="row">
              <?php if (have_rows('gallery')) : while (have_rows('gallery')) : the_row(); ?>
                <div class="col-sm-6 col-md-3">
                  <a class="fancybox" rel="gallery1" href="<?php the_sub_field('gallery_image') ?>"><img src="<?php the_sub_field('gallery_image') ?>" alt=""></a>
                </div>
              <?php endwhile; endif; ?>
              </div>
              <?php endwhile; endif; ?>
            </div>
            <div class="row">
              <?php

              if( have_rows('videos') ):

                  while ( have_rows('videos') ) : the_row(); ?>

                  <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="sub_video">
                      
                       <?php the_sub_field('video'); ?>

                    </div>
                  </div>  

                <?php endwhile;

              else :

                  // no rows found

              endif;

              ?>
            </div>
          </div>
            <div class="col-sm-3 col-md-3">
              <div class="sidebar">
              <?php if(have_rows('partner', 'option')) : while (have_rows('partner', 'option')) : the_row(); ?>
                <div class="logo">
                  <a href="<?php the_sub_field('partner_url', 'option') ?>"><img src="<?php the_sub_field('logo_or_image', 'option') ?>" alt=""></a>
                </div>
                <div class="msg">
                  <?php the_sub_field('partner_msg', 'option') ?>
                </div>
              <?php endwhile; endif; ?>
              </div>
            </div>
          </div>
        </section>

      

    <?php endwhile; endif; ?>

  <?php else : ?>

  <section id="post">
    <div class="container">
      <div class="post">
        <div class="row">
          <div class="col-sm-9 col-md-9">
            <div class="post title">
              <h1><?php the_title( ); ?></h1>
            </div>
            <div class="thumb">
              <?php the_post_thumbnail( ); ?>
            </div>
            <div class="content">
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <?php the_content( ); ?>
            <?php endwhile; endif;?>
            </div>
          </div>

          <div class="col-sm-3 col-md-3">
            <div class="sidebar">
            <?php if(have_rows('partner', 'option')) : while (have_rows('partner', 'option')) : the_row(); ?>
              <div class="logo">
                <a href="<?php the_sub_field('partner_url', 'option') ?>"><img src="<?php the_sub_field('logo_or_image', 'option') ?>" alt=""></a>
              </div>
              <div class="msg">
                <?php the_sub_field('partner_msg', 'option') ?>
              </div>
            <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>

<?php get_footer(); ?>