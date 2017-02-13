<?php
/*
Template Name:PC主题团建
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>主题团建</title>
    	<link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="32x32">
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <meta name="msapplication-TileImage" content="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="stylesheet" type="text/css" href="http://www.juliedu.com/css/pc/iconfont.css">
		 <script src="http://www.juliedu.com/jquery-2.2.2.min.js"></script>
  </head>
  <body>
      <?php include('nav.php'); ?>
      <div class="container">
      <div class="content tj_content">
        <?php query_posts('showposts=-1&cat=15');?>
				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" target="_blank">
						<div class="post content_component" id="post-<?php the_ID(); ?>">
							<div class="content_img post"><img src="<?php $src = get_post_meta($post->ID, "_meta_lunbotu_value", true);
						  echo$src; ?>"><span class="tjlabel"><?php $mudidi = get_post_meta($post->ID, "_meta_label1_value", true);
							echo$mudidi; ?> | <?php $tianshu = get_post_meta($post->ID, "_meta_label2_value", true);
							echo$tianshu; ?> | <?php $renshu = get_post_meta($post->ID, "_meta_label3_value", true);
							echo$renshu; ?></span></div>
						  <span class="content_title"><?php the_title(); ?></span>
						  <span class="content_price"><?php $qijia3 = get_post_meta($post->ID, "_meta_qijia3_value", true);
						  echo$qijia3; ?></span>
						</div>
					</a>
				<?php endwhile; ?>
				<?php endif; ?>
      </div>
    </div>
		 <?php include('footer.php'); ?>
		  <script>
        $(document).ready(function () {
          $(".top_nav a").filter(function()
          {
            return $(this).children("span").text().indexOf($("title").text())!=-1;
          }).children("span").addClass("now");
        })
      </script>
  </body>
</html>
