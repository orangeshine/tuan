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
    <div class="search_text">
      <p class="errinfo">您要搜索的内容不存在</p>
      <a href="http://www.juliedu.com/wp-content/themes/computer/baoming.html" target="_blank"><p>如果还没有发现满意的团建方案，欢迎给我们留言，</br>专业的团建顾问将会在2小时之内联系您，提交满足您团队建设需求的方案</p><span>点击留言</a>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
