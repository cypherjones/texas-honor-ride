<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>
<?php get_header(); ?>

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

<?php get_footer(); ?>