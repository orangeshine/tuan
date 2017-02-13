<?php
/*
Template Name:PC团建资讯
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>团建资讯</title>
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
        <?php query_posts('showposts=-1&cat=16');?>
				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" target="_blank">
					<div class="post content_component" id="post-<?php the_ID(); ?>">
						<div class="content_img post"><img src="<?php echo get_content_first_image(get_the_content()); ?>"></div>
						<span class="content_title"><?php the_title(); ?></span>
					</div>
				</a>
				<?php endwhile; ?>
				<?php endif; ?>
      </div>
    </div>
    <?php include('footer.php'); ?>
  </body>
   <script>
        $(document).ready(function () {
          $(".top_nav a").filter(function()
          {
            return $(this).children("span").text().indexOf($("title").text())!=-1;
          }).children("span").addClass("now");
        })
      </script>
</html>
