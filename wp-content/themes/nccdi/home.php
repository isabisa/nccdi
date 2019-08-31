<?php

use Roots\Sage\Assets;

?>
<section class="challenge-approach-impact">
  <div class="slanted-photos">
    <div class="approach">
      <img class="background" src="<?php echo Assets\asset_path('images/puzzle.jpg'); ?>" />
      <div class="wrap-content">
        <div class="h2">
          <span class="skew">Our Approach</span>
        </div>
        <div class="hover">
          <ul>
            <li><img src="<?php echo Assets\asset_path('images/leadership.svg'); ?>" />Programs that nurture <strong>community-based leadership</strong> and stimulate <strong>social innovation</strong>.</li>
            <li><img src="<?php echo Assets\asset_path('images/policy.svg'); ?>" /><strong>Advocating for better policy</strong> at both the statewide and local government levels.</li>
            <li><img src="<?php echo Assets\asset_path('images/capital.svg'); ?>" />Providing access to the <strong>capital</strong> needed to finance the development of <strong>strong, vibrant and inclusive</strong> communities.</li>
          </ul>
        </div>
        <div class="solid-notch">
          We work with our partners across the state to <strong>transform their communities</strong> and <strong>increase access to opportunity</strong> for all North Carolinians.
        </div>
      </div>
    </div>

    <div class="spotlight">
      <?php
      $spotlight = get_posts(['numberposts' => 1, 'category_name' => 'current-opportunity']);
      $background = get_the_post_thumbnail_url($spotlight[0]->ID, 'medium');
      ?>
      <a href="<?php echo get_the_permalink($spotlight[0]->ID); ?>" aria-label="Read full post"></a>
      <img class="background" src="<?php echo $background ?>" alt="" />
      <div class="wrap-content">
        <h2>
          <span class="skew">Current Opportunity</span>
        </h2>
        <div class="spotlight-content"><?php echo get_the_title($spotlight[0]->ID); ?>
        </div>
      </div>
    </div>
  </div>


  <div class="challenge">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center extra-bottom-margin">
          <div class="h2">
            <span class="skew">The Challenge</span>
          </div>

          <p>Too many communities have been left behind in North Carolina.<br /><strong>We must address these challenges.</strong></p>
        </div>
      </div>

      <ul class="row">
        <li class="col-md-4">
          <img src="<?php echo Assets\asset_path('images/people.svg'); ?>" />
          <strong>1 in 6 adults</strong> and <strong>1 in 4 children</strong> live in poverty in North Carolina.
        </li>
        <li class="col-md-4">
          <img src="<?php echo Assets\asset_path('images/loans.svg'); ?>" />
          <strong>Little investment</strong> in communities and loans are <strong>difficult to obtain</strong>.
        </li>
        <li class="col-md-4">
          <img src="<?php echo Assets\asset_path('images/unemployment.svg'); ?>" />
          <strong>High unemployment rate</strong> in rural NC and many communities have <strong>no voice in Raleigh</strong>.
        </li>
      </ul>
    </div>
  </div>


  <div class="gradient-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center extra-bottom-margin">
          <div class="h2">
            <span class="skew">Our Impact</span>
          </div>
        </div>
      </div>

      <div class="row impact-blocks">
        <div class="col-md-4">
          <div class="row overlap">
            <div class="hidden-xs col-sm-6 col-md-12">
              <div class="notch-img">
                <div class="notch-inner">
                  <img src="<?php echo Assets\asset_path('images/leadership.jpg'); ?>" />
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-12">
              <div class="circle-stat">
                <div class="spacer"></div>
                <div class="circle">
                  <div class="wrap-content">
                    <span class="stat">252</span>
                    youth served through leadership program
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row overlap">
            <div class="col-sm-6 col-md-12">
              <div class="circle-stat">
                <div class="spacer"></div>
                <div class="circle">
                  <div class="wrap-content">
                    <span class="stat">$78M</span>
                    in capital investments since inception
                  </div>
                </div>
              </div>
            </div>

            <div class="hidden-xs col-sm-6 col-md-12">
              <div class="notch-img">
                <div class="notch-inner">
                  <img src="<?php echo Assets\asset_path('images/investment.jpg'); ?>" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row overlap">
            <div class="hidden-xs col-sm-6 col-md-12">
              <div class="notch-img">
                <div class="notch-inner">
                  <img src="<?php echo Assets\asset_path('images/public-policy.jpg'); ?>" />
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-12">
              <div class="circle-stat">
                <div class="spacer"></div>
                <div class="circle">
                  <div class="wrap-content">
                    <span class="stat">50K</span>
                    citizens became home owners &amp; learned financial skills
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="whats-new">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="striped-line">
          <div class="h2">What's New</div>
        </div>
      </div>
    </div>

    <div class="row">
      <?php
      $news = new WP_Query([
        'posts_per_page' => 2,
      ]);

      if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post();
        echo '<div class="col-md-6">';
        get_template_part('templates/layouts/block-overlay');
        echo '</div>';
      endwhile; endif; wp_reset_query();
      ?>
    </div>

    <div class="row">
      <div class="col-md-12">
        <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
        <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
        <ul class="juicer-feed" data-feed-id="ncinitiative" data-per="10" data-columns="5" data-gutter="15"></ul>
      </div>
    </div>
  </div>
</section>

<section class="sponsors">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="striped-line extra-bottom-margin">
          <h2>Many thanks to our sponsors</h2>
        </div>
        <img src="<?php echo Assets\asset_path('images/bbt-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/bbt-logo@2x.png'); ?> 2x" alt="BB&amp;T" />
        <img src="<?php echo Assets\asset_path('images/oak-foundation-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/oak-foundation-logo@2x.png'); ?> 2x" alt="Oak Foundation" />
        <img src="<?php echo Assets\asset_path('images/zsr-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/zsr-logo@2x.png'); ?> 2x" alt="Z Smith Reynolds Foundation" />
        <img src="<?php echo Assets\asset_path('images/wells-fargo-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/wells-fargo-logo@2x.png'); ?> 2x" alt="Wells Fargo" />
        <img src="<?php echo Assets\asset_path('images/pnc-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/pnc-logo@2x.png'); ?> 2x" alt="PNC" />
        <img src="<?php echo Assets\asset_path('images/suntrust-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/suntrust-logo@2x.png'); ?> 2x" alt="Suntrust" />
        <img src="<?php echo Assets\asset_path('images/kbr-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/kbr-logo@2x.png'); ?> 2x" alt="Kate B Reynolds Charitable Trust" />
        <img src="<?php echo Assets\asset_path('images/first-bank-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/first-bank-logo@2x.png'); ?> 2x" alt="Local First Bank" />
        <img src="<?php echo Assets\asset_path('images/fifth-third-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/fifth-third-logo@2x.png'); ?> 2x" alt="Fifth Third Bank" />
        <img src="<?php echo Assets\asset_path('images/first-tenn-logo.png'); ?>" srcset="<?php echo Assets\asset_path('images/first-tenn-logo@2x.png'); ?> 2x" alt="First Tennessee Bank" />
      </div>
    </div>
  </div>
</section>
