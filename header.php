<!-- <!doctype html> -->
<html lang="en">
<head>
  

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" />
    <meta name="author" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="" />
    <meta name="copyright" content="2014 (c) Company Name" />
    
    <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image" content="" />
        
 
    

    <!-- Mobile Jazz -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSS: implied media="all" -->

    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/style.css" type="text/css" media="screen" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!--     <?php wp_get_archives('type=monthly&format=link'); ?>
 -->    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>


    <!-- Place somewhere in the <head> of your document -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>

    
    <!-- google fonts -->

    <link href='http://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet' type='text/css'>

    <!-- type kit -->
    <script src="//use.typekit.net/msc0fac.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <!-- bootstrap css -->

    <link href="<?php bloginfo('template_directory' ); ?>/css/bootstrap.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory' ); ?>/js/bootstrap.js" type='text/javascript'></script>

    <!-- instafeed -->
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/instafeed.min.js"></script>
    

  
</head>

<body <?php body_class(); ?>>
  
  <header>

      <!-- ============ main top fixed banner ============ -->

      <div class="container banner background desktop">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="btn_box">
                <?php 

              $program      = get_field('program_button_text', 'option');
              $involved     = get_field('get_involved_text', 'option');
              $donate       = get_field('donate_now_text', 'option');
              $programURL   = get_field('program_button_url', 'option');
              $involvedURL  = get_field('get_involved_url', 'option');
              $donateURL    = get_field('donate_now_url', 'option');

             ?>

              <ul>

                <?php if(! empty($program)) : ?>

                <li>
                  <div class="btn program">
                    <a href="<?php echo $programURL; ?>"><?php echo $program; ?> <i class="fa fa-globe"></i></a>
                  </div>
                </li>

                <?php endif; ?>

                <?php if(! empty($involved)) : ?>

                <li>
                  <div class="btn involved">
                    <a href="<?php echo $involvedURL; ?>"><?php echo $involved; ?> <i class="fa fa-users"></i></a>
                  </div>
                </li>
                
                <?php endif; ?>

                <?php if(! empty($donate)) : ?>

                <li>
                  <div class="btn donate">
                    <a href="<?php echo $donateURL; ?>"><?php echo $donate; ?> <i class="fa fa-heart-o"></i></a>
                  </div>
                </li>
                
                <?php endif; ?>

              </ul>
            </div>
            <div class="mission">
              <?php

                $mission = get_field('mission', 'option');

                if (! empty($mission)) :
                  echo $mission;
                endif;

               ?>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form box">
              <div class="title">
                Sign Up for Email Updates
              </div>
              <div class="form little">
                <?php

                $form = get_field('sign_up_for_emails_form', 'option');

                if (! empty($form)) :
                  echo do_shortcode($form );
                endif;

               ?>
              </div>
            </div>
          </div>
      </div>
    </div>

      <!-- ============  main navigation  ============ -->
      
    <section id="nav">
      <div class="container nav_main">
        <div class="row">
          <div class="col-sm-5 col-md-4">
            <div class="menu left">
              <?php wp_nav_menu( array( 'theme_location' => 'left-nav')); ?>
            </div>
          </div>
          <div class="col-sm-2 col-md-4">
            <div class="logo">
              <a href="<?php bloginfo('url' ); ?>"><img src="<?php the_field('logo', 'option'); ?>" alt=""></a>
            </div>
          </div>
          <div class="col-sm-5 col-md-4">
            <div class="menu right">
              <?php wp_nav_menu( array( 'theme_location' => 'right-nav')); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

      <!-- ============  mobile navigation  ============ -->
      
       <div class="navbar navbar-default" role="navigation"> 
        <div class="container menu_container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div>
              <a href="#">

              <?php if(get_field('logo', 'option')) { ?>

                <img src="<?php the_field('logo', 'option') ?>" alt="" class="logo">

              <?php } ?>  

              </a>
            </div>
          </div>
            <?php
              wp_nav_menu( array(
                  'menu'              => 'mobile_menu',
                  'theme_location'    => 'mobile-nav',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'navbar-collapse collapse',
                  'container_id'      => 'navbar',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
            ?>

        </div>
      </div>

      <!-- ============ main top fixed banner ============ -->

      <div class="container banner background mobile">
        <div class="row">
          <div class="col-xs-12">
            <div class="btn_box">
                  <?php 

                $program      = get_field('program_button_text', 'option');
                $involved     = get_field('get_involved_text', 'option');
                $donate       = get_field('donate_now_text', 'option');
                $programURL   = get_field('program_button_url', 'option');
                $involvedURL  = get_field('get_involved_url', 'option');
                $donateURL    = get_field('donate_now_url', 'option');

               ?>

                <ul>

                  <?php if(! empty($program)) : ?>

                  <li>
                    <div class="btn program">
                      <a href="<?php echo $programURL; ?>"><?php echo $program; ?> <i class="fa fa-globe"></i></a>
                    </div>
                  </li>

                  <?php endif; ?>

                  <?php if(! empty($involved)) : ?>

                  <li>
                    <div class="btn involved">
                      <a href="<?php echo $involvedURL; ?>"><?php echo $involved; ?> <i class="fa fa-users"></i></a>
                    </div>
                  </li>
                  
                  <?php endif; ?>

                  <?php if(! empty($donate)) : ?>

                  <li>
                    <div class="btn donate">
                      <a href="<?php echo $donateURL; ?>"><?php echo $donate; ?> <i class="fa fa-heart-o"></i></a>
                    </div>
                  </li>
                  
                  <?php endif; ?>

                </ul>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="mission">
              <?php

                $mission = get_field('mission', 'option');

                if (! empty($mission)) :
                  echo $mission;
                endif;

               ?>
            </div>
          </div>
        </div>
        <div class="row">
         <div class="form box">
            <div class="title">
              Sign Up for Email Updates
            </div>
            <div class="form little">
              <?php

                $form = get_field('sign_up_for_emails_form', 'option');

                if (! empty($form)) :
                  echo do_shortcode($form );
                endif;

               ?>
            </div>
          </div>
        </div>
      </div>
      
  </header>

  