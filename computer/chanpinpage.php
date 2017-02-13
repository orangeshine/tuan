<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="32x32">
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <meta name="msapplication-TileImage" content="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
	<meta name="viewport" content="width=640,user-scalable=no, minimal-ui">

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="stylesheet" href="http://www.juliedu.com/wp-content/themes/computer/article2.css">

	<script src="http://www.juliedu.com/jquery-2.2.2.min.js"></script>
	<script type="text/javascript" src="http://www.juliedu.com/swiper.jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://www.juliedu.com/swiper.css">
</head>
<body>
<?php include("nav.php") ?>
<div class="main_content">
  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="swiper-container" id="lunbo">
					<div class="swiper-wrapper">
						<?php if(get_post_meta($post->ID, "_meta_lunbotu_value",true)){
											include('lunbo1.php');};?>
						<?php if(get_post_meta($post->ID, "_meta_lunbotu2_value",true)){
											include('lunbo2.php');};?>
						<?php if(get_post_meta($post->ID, "_meta_lunbotu3_value",true)){
											include('lunbo3.php');};?>
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-prev swiper-button-white"></div>
					<div class="swiper-button-next swiper-button-white"></div>
			</div>
			 <div class="pricetag">
				 <span class="biaoti"><?php the_title(); ?></span>
         <span class="prices"><?php $jiage = get_post_meta($post->ID, "_meta_jiage_value", true);echo$jiage; ?></span>
			 </div>

			 <div class="entry"><?php the_content(); ?>
			 </div>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php include('footer.php'); ?>
<script>
	$(document).ready(function () {
	  var mySwiper = new Swiper ('.swiper-container', {
	    direction: 'horizontal',
	    loop: true,
	    autoplay : 4000,
	    autoplayDisableOnInteraction : false,
	    pagination: '.swiper-pagination',
	    nextButton: '.swiper-button-next',
	    prevButton: '.swiper-button-prev',

	  })
	  })
  </script>
</body>
</html>
