<?php
/*
Template Name:PC前哨动态
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>前哨动态</title>
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="32x32">
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <meta name="msapplication-TileImage" content="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.juliedu.com/css/pc/iconfont.css">
    <script src="http://www.juliedu.com/jquery-2.2.2.min.js"></script>
    <style>
      .tj_content a{
        display:block;
        width: 1008px;
        margin:0 auto;
      }
      .content_component {
          text-align:left;
          display:block;
          position:relative;
          font-size: 16px;
          margin:20px auto;
          border: none;
          width: 1008px;
          height: 200px;
          padding: 10px;
          background: #fff;
          webkit-box-shadow: 0 2px 2px #ddd;
          box-shadow: 0 2px 2px #ddd;
      }
      .content_img {
          display: inline-block;
          float:left;
      }
      .content_title {
          text-align: left;
          font-size: 20px;
          display: inline-block;
          position: absolute;
          width: 30em;
          margin: 0 0 10px 20px;
          white-space: nowrap;
          text-overflow: ellipsis;
          -o-text-overflow: ellipsis;
          overflow: hidden;
      }
      .zhaiyao {
          color:#909090;
          width: 703px;
          margin-top: 40px;
          font-size: 14px;
          line-height: 15px;
          float: right;
      }
    </style>
  </head>
  <body>
    <?php include('nav.php'); ?>
      <div class="container">
      <div class="content tj_content">
        <?php query_posts('showposts=-1&cat=14');?>
				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" target="_blank">
					<div class="post content_component clearfix" id="post-<?php the_ID(); ?>">
						<div class="content_img post"><img src="<?php echo get_content_first_image(get_the_content()); ?>"></div>
						<span class="content_title"><?php the_title(); ?></span>
            <div class="zhaiyao"><?php the_excerpt(); ?></div>
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
