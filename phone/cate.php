<?php
/*
Template Name:分类页
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=640, target-densitydpi=device-dpi, user-scalable=no, minimal-ui">
	<title>团建前哨站</title>
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
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
  <a href="<?php the_permalink(); ?>" target="_blank">
    <div class="post content_component" id="post-<?php the_ID(); ?>">
      <div class="content_img post"><img src="<?php $src = get_post_meta($post->ID, "_meta_lunbotu_value", true);
      echo$src; ?>">
				<div class="tjlabel calabel">
					<span>地点：<?php $mudidi = get_post_meta($post->ID, "_meta_muididi_value", true);
		      echo$mudidi; ?></span>
					<span>天数：<?php $tianshu = get_post_meta($post->ID, "_meta_tianshu_value", true);
		      echo$tianshu; ?>天</span>
					<span>适合人数：<?php $renshu = get_post_meta($post->ID, "_meta_renshu_value", true);
		      echo$renshu; ?>人</span>
				</div>
			</div>
      <span class="content_title"><?php the_title(); ?></span>
      <span class="content_price"><?php $qijia3 = get_post_meta($post->ID, "_meta_qijia3_value", true);
      echo$qijia3; ?>元/人</span>
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
