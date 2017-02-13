<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="32x32">
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <meta name="msapplication-TileImage" content="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   
    <script src="http://www.juliedu.com/jquery-2.2.2.min.js"></script>
    <script type="text/javascript" src="http://www.juliedu.com/swiper.jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://www.juliedu.com/swiper.css">
    <style>
      .sub_title1
      {
        float:left;
        width:820px;
      }
      .sub_title2
      {
        float:right;
        width:304px;
      }
      .sub_title span
      {
        margin: 30px 0 0 0;
      }
      .dt_content{
        display:block;
        width: 800px;
        margin-bottom:30px;
      }
      .zt_content
      {
        display:block;
        height:220px;
        margin-bottom:30px;
      }
      .dt_content .content_component {
          text-align:left;
          display:block;
          position:relative;
          font-size: 16px;
          border: none;
          width: 800px;
          height: 200px;
          padding: 10px 20px 10px 10px;
          margin-left:0;
          background: #fff;
          webkit-box-shadow: 0 2px 2px #ddd;
          box-shadow: 0 2px 2px #ddd;
      }
      .dt_content .content_img {
          display: inline-block;
          float:left;
      }
      .dt_content .content_title {
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
      .dt_content .zhaiyao {
          color:#909090;
          width: 500px;
          margin-top: 40px;
          font-size: 14px;
          line-height: 1.7em;
          float: right;
      }
      .sub_title .more-dt
        {
          color:#adadad;
          float:right;
          font-size:15px;

        }
      .sub_title .more-dt:hover
        {
          color:#ff5722 !important;
          transition:0.4s;
        }
      .zt_content .content_component{
          height: 200px;
      }
      .zt_content .content_title {
          display: block;
          position: relative;
          height: 33px;
          width: 285px;
          text-align: center;
          color: #fff;
          line-height: 32px;
          top: -213px;
          width: 17.8em;
          font-size: 16px;
          white-space: nowrap;
          text-overflow: ellipsis;
          -o-text-overflow: ellipsis;
          overflow: hidden;
          background: rgba(0, 0, 0, 0.75);
      }
      .zt_content .content_img .tjlabel {
          display: block;
          margin: 0 auto;
          position: relative;
          height: 33px;
          font-size: 16px;
          width: 100%;
          text-align: center;
          color: #ffffff;
          -o-text-overflow: ellipsis;
          line-height: 32px;
          background: rgba(0, 0, 0, 0.75);
          top: -89px;
      }
    </style>
  </head>
  <body>
      <div class="top_sec clearfix">
      <a href="http://www.juliedu.com">
        <img class="logo" src="http://www.juliedu.com/img/logo2.png" alt="logo">
        <img class="logo" src="http://www.juliedu.com/img/logo.png" alt="logo">
      </a>
      <div class="search">
        <form id="searchform" name="formsearch" method="get" action="<?php bloginfo('home'); ?>">
        <div class="form">
        <input name="s" id="s" type="text" class="search-keyword" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索团建方案/游戏/主题';}" value="搜索团建方案/游戏/主题" />
        <button type="submit" class="search-submit" ><?php _e("Search"); ?></button>
        </div>
        </form>
      </div>
    </div>
      <div class="header">
        <div class="top_nav">
          <a href="http://www.juliedu.com"><span class="now">首页</span></a>
          <a href="http://www.juliedu.com/28-2/"><span>主题团建</span></a>
          <a href="http://www.juliedu.com/36-2/"><span>团建资讯</span></a>
          <a href="http://www.juliedu.com/34-2/"><span>团队福利</span></a>  
          <a href="http://www.juliedu.com/wp-content/themes/computer/baoming.html" target="_blank"><span>我要团建</span></a>
        </div>
      </div>
      <div class="container">
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
      <div class="filter_container">
        <div class="filters" id="filters">
          <div class="filter_sec">
            <div class="sec_title">天数</div>
            <span>半天</span>
            <span>一天</span>
            <span>两天</span>
            <span>三天及以上</span>
            <span>待定</span>
          </div>
          <div class="filter_sec">
            <div class="sec_title">人数</div>
            <span>19人及以下</span>
            <span>20-49人</span>
            <span>50-99人</span>
            <span>100人以上</span>
            <span>不确定</span>
          </div>
          <div class="filter_sec">
            <div class="sec_title">主题</div>
            <span>创意团建</span>
            <span>定向团建</span>
            <span>培训团建</span>
            <span>运动团建</span>
            <span>文化团建</span>

          </div>
        </div>
        <div class="filters_submit" id="filters_submit">
          <div class="submit_text">
            <span>查找方案</span>
            <span class="submit_en">search now</span>
          </div>
          <i class="iconfont icon-search"></i>
        </div>
      </div>
      <div class="sub_title clearfix">
        <div class="sub_title1 clearfix">
          <span>前哨动态</span><a href="http://www.juliedu.com/32-2/"><span class="more-dt">查看更多></span></a>
        </div>
        <div class="sub_title2 clearfix">
          <span>前哨推荐</span><a href="http://www.juliedu.com/28-2/"><span class="more-dt">查看更多></span></a>
        </div>
      </div>
      <div class="content tj_content clearfix">
        <div class="dt-container">
          <?php query_posts('showposts=20&cat=14&orderby=date');?>
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <a class="dt_content" href="<?php the_permalink(); ?>" target="_blank">
            <div class="post content_component clearfix" id="post-<?php the_ID(); ?>">
              <div class="content_img post"><img src="<?php echo get_content_first_image(get_the_content()); ?>"></div>
              <span class="content_title"><?php the_title(); ?></span>
              <div class="zhaiyao"><?php echo mb_strimwidth(strip_tags($post->post_content),0,400,'......'); ?></div>
              <span class="post-time">发布时间：<?php the_date('Y/m/d'); ?></span>
            </div>
          </a>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="zt-container">
          <?php query_posts('showposts=20&cat=15&orderby=date');?>
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <a class="zt_content" href="<?php the_permalink(); ?>" target="_blank">
              <div class="post content_component" id="post-<?php the_ID(); ?>">
                <div class="content_img post">
                  <img src="<?php $src = get_post_meta($post->ID, "_meta_lunbotu_value", true);echo$src; ?>">
                  <span class="content_title"><?php the_title(); ?></span>
                  <span class="tjlabel"><?php $mudidi = get_post_meta($post->ID, "_meta_label1_value", true);
                echo$mudidi; ?> | <?php $tianshu = get_post_meta($post->ID, "_meta_label2_value", true);
                echo$tianshu; ?> | <?php $renshu = get_post_meta($post->ID, "_meta_label3_value", true);
                echo$renshu; ?></span>
                </div>
              </div>
            </a>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php include('footer.php'); ?>
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
        var filters_submit = document.getElementById('filters_submit');
        var filters = document.getElementById('filters');
        var filters_item = filters.getElementsByTagName('span');
        var temp_items = [];
        for(var i=0;i<filters_item.length;i++)
        {
          filters_item[i].onclick = function()
          {
            if(this.className == 'item_selected')
            {
              this.setAttribute('class', '');
            }
            else
            {
              this.setAttribute('class', 'item_selected');
              temp_items.push(this.innerHTML);
            } 
          }
        }
        filters_submit.onclick = function()
        {
          var temp_items_string = temp_items.join("+");
          window.location.href = "http://www.juliedu.com/"+"tag/"+temp_items_string;
        }

        $(document).ready(function () {
          $(".top_nav a").filter(function()
          {
            return $(this).children("span").text().indexOf($("title").text())!=-1;
          }).children("span").addClass("now");
        })

      })
  </script>
  </body>
</html>
