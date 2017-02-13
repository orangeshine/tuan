<?php
/*
Template Name:团建智库
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
	<link rel="stylesheet" href="http://www.juliedu.com/wp-content/themes/phone/fenlei.css">
	<link rel="stylesheet" type="text/css" href="http://www.juliedu.com/css/iconfont.css">
</head>
<body>
	<?php include('header.php') ?>
	<div class="filtertab">
    <div class="tabpannel">
      <span id="fenleibutton">全部分类<i class="iconfont icon-unfold"></i></span>
      <!-- <span>综合排序</span>
      <span>筛选</span> -->
    </div>
  	<ul class="qbfl submenus" id="fenleicontent" style="display:none">
  			<?php wp_list_cats('sort_column=name&hierarchical=0'); ?>
  	</ul>
  </div>
<?php query_posts('showposts=-1&cat=16');?>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
  <a href="<?php the_permalink(); ?>" target="_blank">
    <div class="post content_component" id="post-<?php the_ID(); ?>">
      <div class="content_img post">
				<img src="<?php echo get_content_first_image(get_the_content()); ?>">
			</div>
      <span class="content_title"><?php the_title(); ?></span>
    </div>
  </a>
<?php endwhile; ?>
<?php endif; ?>
<script type="text/javascript">
window.onload = function()
{
  var fenleibutton = document.getElementById('fenleibutton');
  var fenleicontent = document.getElementById('fenleicontent');
  var fenleii = fenleibutton.getElementsByTagName('i')[0];
  fenleibutton.onclick = function(ev)
  {
    var oEvent = ev||event;
  	oEvent.cancelBubble = true;
  	if(fenleicontent.style.display == 'none')
  	{
  		fenleibutton.style.color = '#FF5722'
  		fenleicontent.style.display = 'block';
  		fenleii.className = '';
  		fenleii.className = 'iconfont icon-fold';
  	}
  	else
  	{
  		fenleibutton.style.color = '#000'
  		fenleicontent.style.display = 'none';
  		fenleii.className = '';
  		fenleii.className = 'iconfont icon-unfold';
  	}

  }

  document.body.onscroll = function()
  {console.log('a');
    fenleibutton.style.color = '#000'
    fenleicontent.style.display = 'none';
    fenleii.className = '';
    fenleii.className = 'iconfont icon-unfold';
  }
}
</script>
</body>
</html>
