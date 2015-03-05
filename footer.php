    <footer>
      <div class="end">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="donation">
                <div class="title">
                   <?php 
                      $donationTitle = get_field('donations_text','option');

                      if (! empty($donationTitle)) : echo $donationTitle; ?>

                    <?php endif; ?>
                </div>
                <div class="donation msg">
                  <?php 
                      $donationMsg = get_field('donations_msg','option');

                      if (! empty($donationMsg)) : echo $donationMsg; ?>

                    <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="social">
                <div class="title">
                  Follow Us
                </div>
                <div class="links">
                  <ul>
                    <?php 

                      $facebook   = get_field('facebook','option');
                      $twitter    = get_field('twitter', 'option');
                      $linkedin   = get_field('linkedin', 'option');
                      $instagram  = get_field('instagram', 'option');
                      $rss        = get_field('rss', 'option');
                      $youtube    = get_field('youtube', 'option');
                      $pinterest  = get_field('pinterest', 'option');
                      $dribble    = get_field('dribble', 'option');
                      $google     = get_field('google', 'option');
                      $skype      = get_field('skype', 'option');

                    ?>
                       
                  <?php if (! empty($facebook)) : ?>
                    <li>
                      <div class="btn facebook">
                        <a href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a>
                      </div>
                    </li>
                  <?php endif; ?>
                  <?php if (! empty($twitter)) : ?>
                    <li>
                      <div class="btn twitter">
                        <a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
                      </div>
                    </li>
                  <?php endif; ?>
                  <?php if (! empty($linkedin)) : ?>
                    <li>
                      <div class="btn linkedin">
                        <a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a>
                      </div>
                    </li>
                  <?php endif; ?>
                  <?php if (! empty($instagram)) : ?>
                    <li>
                      <div class="btn instagram">
                        <a href="<?php echo $instagram; ?>"><i class="fa fa-instagram"></i></a>
                      </div>
                    </li>
                  <?php endif; ?>
                  <?php if (! empty($rss)) : ?>
                    <li>
                      <div class="btn rss">
                        <a href="<?php echo $rss; ?>"><i class="fa fa-rss"></i></a>
                      </div>
                    </li>
                  <?php endif; ?>
                  <?php if (! empty($youtube)) : ?>
                    <li>
                      <div class="btn youtube">
                        <a href="<?php echo $youtube; ?>"><i class="fa fa-youtube"></i></a>
                      </div>
                    </li>
                  <?php endif; ?>
                  <?php if (! empty($pinterest)) : ?>
                    <li>
                      <div class="btn pinterest">
                        <a href="<?php echo $pinterest; ?>"><i class="fa fa-pinterest"></i></a>
                      </div>
                    </li>
                  <?php endif; ?>
                  <?php if (! empty($dribble)) : ?>
                    <li>
                      <div class="btn dribble">
                        <a href="<?php echo $dribble; ?>"><i class="fa fa-dribbble"></i></a>
                      </div>
                    </li>
                  <?php endif; ?>
                  <?php if (! empty($google)) : ?>
                    <li>
                      <div class="btn google">
                        <a href="<?php echo $google; ?>"><i class="fa fa-google"></i></a>
                      </div>
                    </li>
                  <?php endif; ?>
                  <?php if (! empty($skype)) : ?>
                    <li>
                      <div class="btn skype">
                        <a href="<?php echo $skype; ?>"><i class="fa fa-skype"></i></a>
                      </div>
                    </li>
                  <?php endif; ?>
      
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact meta">
                <div class="title">
                  Conatct
                </div>
                <div class="address">
                  <?php 
                      $address = get_field('address','option');

                      if (! empty($address)) : echo $address; ?>

                    <?php endif; ?>
                </div>
                <div class="phone">
                  <?php 
                      $phone = get_field('phone','option');

                      if (! empty($phone)) : echo $phone; ?>

                    <?php endif; ?>
                </div>
                <div class="email">
                  <?php 
                      $email = get_field('email','option');

                      if (! empty($email)) : echo $email; ?>

                    <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="lvlymb">
                &copy; 2014 Texas Honor Ride. All Rights Reserved.
              </div>
            </div>
            <div class="col-md-9">
              <div class="footer">
                <?php wp_nav_menu( array( 'theme_location' => 'mobile-nav')); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  
	</body>
</html> 