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
    <!-- <script type='text/javascript' src='<?php bloginfo('url' ); ?>/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script> -->


<!--     <?php wp_get_archives('type=monthly&format=link'); ?>
 -->    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>


    <!-- js -->

    <link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet' type='text/css'>

    <!-- type kit -->
    <script src="//use.typekit.net/msc0fac.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <!-- bootstrap css -->

    <link href="<?php bloginfo('template_directory' ); ?>/css/bootstrap.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory' ); ?>/js/bootstrap.js" type='text/javascript'></script>

    <!-- fancybox     -->

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62741160-1', 'auto');
  ga('send', 'pageview');

</script>
  
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
          <div class="col-sm-5 col-md-5">
            <div class="menu left">
              <?php 
                wp_nav_menu( 
                  array( 
                    'theme_location' => 'left-nav',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => 'nav',
                    'walker' => new wp_bootstrap_navwalker()
                    )
                  ); 
              ?>
            </div>
          </div>
          <div class="col-sm-2 col-md-2">
            <div class="logo">
              <a href="<?php bloginfo('url' ); ?>"><img src="<?php the_field('logo', 'option'); ?>" alt=""></a>
            </div>
          </div>
          <div class="col-sm-5 col-md-5">
            <div class="menu right">
              <?php 
                wp_nav_menu( 
                  array( 
                    'theme_location' => 'right-nav',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => 'nav',
                    'walker' => new wp_bootstrap_navwalker()
                    )
                  ); 
              ?>
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
              <a href="<?php bloginfo('url' ); ?>">

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

  