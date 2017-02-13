<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=640, target-densitydpi=device-dpi, user-scalable=no, minimal-ui">
	<title>
<?php
	global $page, $paged;
 
	wp_title( '|', true, 'right' );
 
	// 博客名称.
	bloginfo( 'name' );
 
	// 博客描述.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
 
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
 
	?>
</title>
	<link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/logo3.jpg" sizes="32x32">
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/logo3.jpg" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="http://www.juliedu.com/wp-content/uploads/2017/01/logo3.jpg">
    <meta name="msapplication-TileImage" content="http://www.juliedu.com/wp-content/uploads/2017/01/logo3.jpg">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=1">
	<link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_wtja2qbhm66zjjor.css">
	<script src="http://www.juliedu.com/jquery-2.2.2.min.js"></script>
	<script type="text/javascript" src="http://www.juliedu.com/swiper.jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://www.juliedu.com/swiper.css">
</head>
<body>
<div id="container">
	<div class="header" id="header">
		<div id="logo"><img src="http://www.juliedu.com/img/logo.png" alt=""></div>
		<div class="search">
			<form id="searchform" name="formsearch" method="get" action="<?php bloginfo('home'); ?>">
			<div class="form">
			<input name="s" id="s" type="text" class="search-keyword" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索团建方案/游戏/主题';}" value="搜索团建方案/游戏/主题" />
			<button type="submit" class="search-submit" ><?php _e("Search"); ?></button>
			</div>
			</form>
		</div>
	</div>
	<div class="swiper-container" id="lunbo">
      <div class="swiper-wrapper">
          <?php query_posts('showposts=-1&cat=18');?>
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="swiper-slide">
              <a href="<?php the_permalink(); ?>" target="_blank">
               <img src="<?php $src = get_post_meta($post->ID, "_meta_carousel_value", true);echo$src; ?>" alt="<?php the_title_attribute(); ?>" />
              </a>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
      </div>
      <div class="swiper-pagination"></div>
       <div class="swiper-button-prev swiper-button-white"></div>
      <div class="swiper-button-next swiper-button-white"></div> 
    </div>
    <div id="jy_content">
    	<a href="http://www.juliedu.com/wp-content/themes/phone/baoming.html" target="_blank">
	    	<div class="jy_content_wrap">
				<div class="submit_font">
					<span>我要团建</span>
				</div>
	    		<div class="jy_icon jy_icon3"><i class="iconfont icon-canyuxiangmu"></i></div>
	    	</div>
    	</a>

    </div>
	<div id="tj_tb">
		<div id="tab_menu_fixed" class="tab_menu">
			<ul>
				<li id="cate01" class="selceted_menu">团建资讯</li>
				<li id="cate02">主题团建</li>
				<li id="cate03">团队福利</li>
			</ul>
		</div>

		<div class="tj_content" id="cate1">
			<div class="tags tjtag">
				<ul class="qbfl submenus" id="fenleicontent">
				<li class="alltj alltjzx">全部</li>
				<?php wp_list_cats('sort_column=name&hierarchical=0&child_of=9'); ?>
				</ul>
			</div>
			<?php query_posts('showposts=-1&cat=9');?>
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<a class="zttj" href="<?php the_permalink(); ?>" target="_blank" title="<?php
foreach((get_the_category()) as $category) {
    echo '' . $category->cat_name . ' ';
}
?>">
					<div class="post content_component" id="post-<?php the_ID(); ?>">
						<div class="content_img post"><img src="<?php echo get_content_first_image(get_the_content()); ?>"></div>
						<span class="content_title"><?php the_title(); ?></span>
					</div>
				</a>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="tj_content" id="cate2">
			<div class="tags tjtag">
				<ul class="qbfl submenus" id="fenleicontent">
				<li class="alltj alltjnr">全部</li>
				<?php wp_list_cats('sort_column=name&hierarchical=0&child_of=4'); ?>
				</ul>
			</div>
				<?php query_posts('showposts=-1&cat=4');?>
				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					<a class="zttj" href="<?php the_permalink(); ?>" target="_blank" title="<?php
foreach((get_the_category()) as $category) {
    echo '' . $category->cat_name . ' ';
}
?>">
						<div class="post content_component" id="post-<?php the_ID(); ?>">
							<div class="content_img post"><img src="<?php $src = get_post_meta($post->ID, "_meta_lunbotu_value", true);
						  echo$src; ?>"><span><?php $mudidi = get_post_meta($post->ID, "_meta_label1_value", true);
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

		<div class="tj_content" id="cate3">
			<?php query_posts('showposts=-1&cat=17');?>
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<a href="<?php the_permalink(); ?>" target="_blank">
						<div class="post content_component" id="post-<?php the_ID(); ?>">
							<div class="content_img post"><img src="<?php $src = get_post_meta($post->ID, "_meta_lunbotu_value", true);
						  echo$src; ?>"></div>
						  <span class="content_title"><?php the_title(); ?></span>
						  <span class="content_price"><?php $qijia3 = get_post_meta($post->ID, "_meta_jiage_value", true);
						  echo$qijia3; ?></span>
						</div>
					</a>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>

		
	<div id="site_info">
		<span id="info_title"> 团建前哨站</span>
		<a href="tel:02867870768" target="_blank"><span class="info_phone">客服: 028-67870768</span></a>
		<span class="info_phone">邮箱: tuanjian@juliedu.com</span>
	</div>
</div>
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
	  	$(".tjtag li a").attr("href","javascript:void(0);");
		$("#cate1 .tjtag li a").click(function(){
			var thisa = $(this);
			$("#cate1 .zttj").filter(function(element)
			{
				return $(this).attr("title").indexOf(thisa.text())==-1;
			}).css("display","none");
			$("#cate1 .zttj").filter(function(element)
			{
				return $(this).attr("title").indexOf(thisa.text())!=-1;
			}).css("display","inline-block");
		});
		$("#cate1 .alltj").click(function()
		{
			$("#cate1 .zttj").css("display","inline-block");
		});

		$("#cate2 .tjtag li a").click(function(){
			var thisa = $(this);
			$("#cate2 .zttj").filter(function(element)
			{
				return $(this).attr("title").indexOf(thisa.text())==-1;
			}).css("display","none");
			$("#cate2 .zttj").filter(function(element)
			{
				return $(this).attr("title").indexOf(thisa.text())!=-1;
			}).css("display","inline-block");
		});
		$("#cate2 .alltj").click(function()
		{
			$("#cate2 .zttj").css("display","inline-block");
		});
	  })
  </script>
 <script src=http://www.juliedu.com/wp-content/themes/phone/js.js?ver=1"></script>
</body>
</html>
