<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Hotlink
 * @subpackage Hotlink Theme
 */

// 検索结果用
$search_query =& new WP_Query("s=$s & showposts=-1");?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>团建前哨站</title>
 <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="32x32">
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <meta name="msapplication-TileImage" content="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
 <link rel="stylesheet" href="http://www.juliedu.com/wp-content/themes/computer/style.css">
</head>
<body>
<?php include('nav.php'); ?>
<section class="main clearfix content_container content tj_content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <a href="<?php the_permalink(); ?>" target="_blank">
      <div class="post content_component" id="post-<?php the_ID(); ?>">
        <div class="content_img post"><img src="<?php if(get_post_meta($post->ID, "_meta_lunbotu_value", true)){$src = get_post_meta($post->ID, "_meta_lunbotu_value", true);
        echo$src;} else {echo get_content_first_image(get_the_content());} ?>">
        <?php if(get_post_meta($post->ID, "_meta_muididi_value",true)){
                  include('searchspan.php');};?>
  			</div>
        <span class="content_title"><?php the_title(); ?></span>

        <?php if(get_post_meta($post->ID, "_meta_qijia3_value",true)){
            include('searchprice.php');};?>
      </div>
    </a>
    <?php endwhile; else: ?>
    <div class="search_text">
      <p class="errinfo">您要搜索的内容不存在</p>
      <a href="http://www.juliedu.com/wp-content/themes/computer/baoming.html" target="_blank"><p>如果还没有发现满意的团建方案，欢迎给我们留言，</br>专业的团建顾问将会在2小时之内联系您，提交满足您团队建设需求的方案</p><span>点击留言</a>
    </div>
    <?php endif; ?>
    <div class="nav-previous">
      <?php previous_posts_link(__('« Older Entries', 'kubrick')); ?>
    </div>
    <div class="nav-next">
      <?php next_posts_link(__('Newer Entries »', 'kubrick')); ?>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
