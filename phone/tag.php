<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=640, target-densitydpi=device-dpi, user-scalable=no, minimal-ui">
 <title>团建前哨站</title>
 <link rel="stylesheet" href="http://hersheep.com/blog/wp-content/themes/cool/fenlei.css">
</head>
<body>
	<?php include('header.php') ?>
<section class="main clearfix content_container">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
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
<?php endwhile; ?>
<?php endif; ?>
</section>
</body>
</html>
