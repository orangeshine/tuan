<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta name="viewport" content="width=640,user-scalable=no, minimal-ui">

	<link rel="stylesheet" href="http://www.juliedu.com/wp-content/themes/phone/article.css">
	<link rel="stylesheet" type="text/css" href="http://www.juliedu.com/css/iconfont.css">

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script src="http://www.juliedu.com/jquery-2.2.2.min.js"></script>
	<script type="text/javascript" src="http://www.juliedu.com/swiper.jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://www.juliedu.com/swiper.css">

</head>
<body>
<?php include('header.php') ?>
<div class="post" id="post-<?php the_ID(); ?>">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
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
<div class="container">
		<div class="jianjie">
		    <h2 class="biaoti"><?php the_title(); ?></h2>
		    <p class="yinyu"><?php $fubiaoti = get_post_meta($post->ID, "_meta_fubiaoti_value", true);
			echo$fubiaoti; ?></p>
		    <div class="discription">
		    	<span>
			    	<?php $shtd1 = get_post_meta($post->ID, "_meta_shtd_value", true);
					echo$shtd1; ?>
			    </span>
			    <span>
			    	<?php $shtd2 = get_post_meta($post->ID, "_meta_shtd1_value", true);
					echo$shtd2; ?>
				</span>
				<span>
			    	<?php $shtd2 = get_post_meta($post->ID, "_meta_shtd2_value", true);
					echo$shtd2; ?>
				</span>
			</div>
		    <div class="discription anpai"><h5>活动计划:</h5><p class="route">
					<?php $mudidi = get_post_meta($post->ID, "_meta_muididi_value", true);
				echo$mudidi; ?> - <?php $tianshu = get_post_meta($post->ID, "_meta_tianshu_value", true);
			echo$tianshu; ?> - <?php $jiaitong = get_post_meta($post->ID, "_meta_jiaotong_value", true);
	echo$jiaitong; ?> - <?php $renshu = get_post_meta($post->ID, "_meta_renshu_value", true);
echo$renshu; ?></p></div>
		</div>
	    <div class="jianjie nav">
	    	<ul>
	    		<a href="#tese"><li>活动背景</li></a>
	    		<a href="#neirong"><li>团建内容</li></a>
				<a href="#luxian"><li>场地介绍</li></a>
	    		<a href="#feiyong"><li>费用说明</li></a>
	    		<a href="#tixing"><li>团建贴士</li></a>
	    	</ul>
	    </div>
	    <div class="jianjie tese" id="tese"><h3>活动背景</h3>
		    <div class="details">
		    	<?php $ashu_editor = get_post_meta($post->ID, "_meta_eidtor_value", true);
				$ashu_editor = apply_filters('the_content', $ashu_editor);
				$ashu_editor = str_replace(']]>', ']]&gt;', $ashu_editor);
				echo $ashu_editor; ?>
		    </div>
	    </div>
	    <div class="jianjie jieshao" id="neirong">
			<h3>团建内容</h3>
			<div class="details">
	    	<?php $day1content = get_post_meta($post->ID, "day1content_value", true);
						$day1content = apply_filters('the_content', $day1content);
						$day1content = str_replace(']]>', ']]&gt;', $day1content);
					echo$day1content; ?>
			</div>
	    </div>

		<div class="jianjie feiyong" id="luxian"><h3>场地介绍</h3>
		    <div class="details">
		    	<?php $fysm = get_post_meta($post->ID, "_meta_lxjs_value", true);
					$fysm = apply_filters('the_content', $fysm);
					$fysm = str_replace(']]>', ']]&gt;', $fysm);
				echo$fysm; ?>
		    </div>
	    </div>
			
	    <div class="jianjie feiyong" id="feiyong"><h3>费用说明</h3>
		    <div class="details">
		    	<?php $fysm = get_post_meta($post->ID, "_meta_fysm_value", true);
					$fysm = apply_filters('the_content', $fysm);
					$fysm = str_replace(']]>', ']]&gt;', $fysm);
				echo$fysm; ?>
		    </div>
	    </div>
	    <div class="jianjie tixing" id="tixing"><h3>团建贴士</h3>
	    <div class="details">
	    	<?php $tbtx = get_post_meta($post->ID, "_meta_tbtx_value", true);
				$tbtx = apply_filters('the_content', $tbtx);
				$tbtx = str_replace(']]>', ']]&gt;', $tbtx);
			echo$tbtx; ?>
	    </div>
	    </div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<a class="bottom_bm" href="tel:02867870768" target="_blank">团建预约</a>
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
