<?php
/*
Template Name:团队福利
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=640, target-densitydpi=device-dpi, user-scalable=no, minimal-ui">
	<title>团建前哨站</title>
	<link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="32x32">
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <meta name="msapplication-TileImage" content="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
	<link rel="stylesheet" type="text/css" href="http://www.juliedu.com/wp-content/themes/phone/chanpin.css">
</head>
<body>
<div id="container">
	<?php include('header.php') ?>
		<div class="content_container">
				<?php query_posts('showposts=-1&cat=17');?>
				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" target="_blank">
						<div class="post content_component" id="post-<?php the_ID(); ?>">
							<div class="content_img post"><img src="<?php $src = get_post_meta($post->ID, "_meta_lunbotu_value", true);
						  echo$src; ?>"></div>
						  <span class="content_title"><?php the_title(); ?></span>
						  <span class="content_price"><?php $qijia3 = get_post_meta($post->ID, "_meta_jiage_value", true);
						  echo$qijia3; ?>元</span>
						</div>
					</a>
				<?php endwhile; ?>
				<?php endif; ?>
		</div>
	<?php include('footer.php') ?>
</div>
</body>
</html>
