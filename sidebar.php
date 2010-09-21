<div id="sidebar">

<?php get_search_form(); ?>

  <div id="nav"><div class="inner">
  
    <h2>Archives</h2>
	<?php /**/ ?>
    <ul id='archives'>
      <li<?php if (is_home()) echo ' class="current"'; ?>><a href="<?php bloginfo('url'); ?>/">Home (recent tweets) <span class="count">ALL</span></a></li>
    <?php $archives = ozh_ta_get_month_archives('show_post_count=1&echo=0');
          echo $archives; ?>
	</ul>
	<?php /**/ ?>
	
	<h2>Stats</h2>
	<?php /**/ ?>
	<ul id="stats" class="block">
	<li class="stats">Tweets <span class="count"><?php do_action('ozh_ta_total_tweets'); ?></span></li>
	<li class="stats">Followers <span class="count"><?php do_action('ozh_ta_total_followers'); ?></span></li>
	<li class="stats">Following <span class="count"><?php do_action('ozh_ta_total_following'); ?></span></li>
	<li class="stats">Listed <span class="count"><?php do_action('ozh_ta_total_listed'); ?></span></li>
	<li class="stats">Link ratio <span class="count"><?php do_action('ozh_ta_link_ratio'); ?></span></li>
	<li class="stats">Reply ratio <span class="count"><?php do_action('ozh_ta_reply_ratio'); ?></span></li>
	<li class="stats">Tweeting since <span class="count"><?php do_action('ozh_ta_tweeting_since'); ?></span></li>
	</ul>
	<?php /**/ ?>

	<h2>Hashtags</h2>
	<?php wp_tag_cloud('format=list'); ?>
	
	<h2>Bleh</h2>
	<ul class="block">
	<li>Tweets archive every <span class="count"><?php global $ozh_ta; echo ozh_ta_seconds_to_words( $ozh_ta['refresh_interval'] ); ?></span></li>
	<li>Next update in <span class="count"><?php echo ozh_ta_next_update_in(); ?></span></li>
	<li><?php wp_loginout(); ?></li>
	</ul>


  <?php //endif; // no dynamic sidebar?>
	
  </div></div>

</div>
