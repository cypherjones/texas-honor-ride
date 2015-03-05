<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

<?php get_header( ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <!-- ============ featured video ============ -->

    <section id="featured" class="background" style="background-image: url(<?php the_field('background_image') ?>)">
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <?php 

              $video = get_field('featured_video');

              if(! empty($video)) : ?>

                  <div class="featured video">
                    <?php echo $video; ?>
                  </div>

            <?php endif; ?>
          </div>
          <div class="col-md-4">
            <div class="content">
              <?php 

              $content = get_the_content( );;

              if(! empty($content)) : ?>

                  <div class="copy">
                    <?php echo $content; ?>
                  </div>

            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ============ panels ============ -->
    <section id="panels">
      <div class="container">
        <div class="row">
        <?php if(have_rows('panel_content')) : while (have_rows('panel_content')) : the_row(); ?>
          <div class="col-md-3">
            <div class="panel">
              <div class="icon"><img src="<?php the_sub_field('icon') ?>" alt=""></div>
              <div class="title"><h2><?php the_sub_field('title') ?></h2></div>
              <div class="subtitle"><?php the_sub_field('subtitle') ?></div>
              <div class="btn"><a href=""></a><?php the_sub_field('button_text') ?></div>
            </div>
          </div>
        <?php endwhile; endif; ?>
        </div>
      </div>
    </section>
    <!-- ============ infographic ============ -->
    <section id="infographic">
      <div class="container">
        <div class="row">
        <?php 

          $infographic = get_field('graphic');

          if(! empty($infographic)) : ?>

          <div class="graphic">
            <img src="<?php echo $infographic; ?>" alt="">
          </div>
        
        <?php endif; ?>
          
        </div>
      </div>
    </section>
    <!-- ============ shop ============ -->
    <section id="shop">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <div class="shop box">
            <div class="title">
              <?php 
                $shopTitle = get_field('shop_title');

                if (! empty($shopTitle)) : ?>

                <h3><?php echo $shopTitle; ?></h3>

              <?php endif; ?>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ============ supporters ============ -->
    <section id="supporters">
      <div class="container">
        <div class="row">
          <div class="heading">
            <div class="title">
               <?php 

                $supportersTitle   = get_field('supporters_section_title', 'option');

                if (! empty($supportersTitle)) : ?>

                <h3><?php echo $supportersTitle; ?></h3>

              <?php endif; ?>
            </div>
            <div class="subtitle">
               <?php 
                
                $supporterssubtitle = get_field('supporters_section_subtitle', 'option');

                if (! empty($supporterssubtitle)) : echo $supporterssubtitle; ?>

              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="box">
            <ul>

            <?php if(have_rows('supporters', 'option')) : while (have_rows('supporters', 'option')) : the_row(); ?>

              <li><img src="<?php the_sub_field('supporter_image') ?>" alt="supporter logo"></li>

            <?php endwhile; endif; ?>

            </ul>
          </div>
        </div>
      </div>
    </section>

  <?php endwhile; endif; wp_reset_query(); rewind_posts(); ?>


  
<?php get_footer( ); ?>