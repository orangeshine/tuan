<?php
/*
Template Name:PC旅行团建
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>团建前哨站</title>
		<link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="32x32">
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <meta name="msapplication-TileImage" content="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  </head>
  <body>
      <?php include('nav.php'); ?>
      <div class="container">
      <div class="content tj_content">
        <?php query_posts('showposts=-1&cat=4');?>
				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" target="_blank">
						<div class="post content_component" id="post-<?php the_ID(); ?>">
							<div class="content_img post"><img src="<?php $src = get_post_meta($post->ID, "_meta_lunbotu_value", true);
						  echo$src; ?>"><span><?php $mudidi = get_post_meta($post->ID, "_meta_muididi_value", true);
							echo$mudidi; ?> | <?php $tianshu = get_post_meta($post->ID, "_meta_tianshu_value", true);
							echo$tianshu; ?>天 | <?php $renshu = get_post_meta($post->ID, "_meta_renshu_value", true);
							echo$renshu; ?>人</span></div>
						  <span class="content_title"><?php the_title(); ?></span>
						  <span class="content_price"><?php $qijia3 = get_post_meta($post->ID, "_meta_qijia3_value", true);
						  echo$qijia3; ?>元/场</span>
						</div>
					</a>
				<?php endwhile; ?>
				<?php endif; ?>
      </div>
    </div>
  </body>
</html>
