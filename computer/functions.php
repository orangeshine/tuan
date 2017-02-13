<?php

function my_custom_login_logo() {
    echo '<style type="text/css">
        .login h1 a {
            background-image:url("http://www.juliedu.com/img/logo.png") !important;
        height: 90px; //修改为图片的高度
        width: 90px; //修改为图标的宽度
        -webkit-background-size: 90px; //修改为图标的宽度
        background-size: 90px; //修改为图标的宽度
        }
    </style>';
}
add_action('login_head', 'my_custom_login_logo');

add_filter('login_headerurl', create_function(false,"return get_bloginfo('url');"));

add_filter('login_headertitle', create_function(false,"return get_bloginfo('name');"));

include('metabox.php');
add_filter( 'gettext_with_context', 'wpdx_disable_open_sans', 888, 4 );
function wpdx_disable_open_sans( $translations, $text, $context, $domain )
{
  if ( 'Open Sans font: on or off' == $context && 'on' == $text )
  {
    $translations = 'off';
  }
  return $translations;
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
function remove_width_attribute( $html ) {
  $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
  return $html;
}
function get_content_first_image($content){
	if ( $content === false ) $content = get_the_content();

	preg_match_all('|<img.*?src=[\'"](.*?)[\'"].*?>|i', $content, $images);

	if($images){
		return $images[1][0];
	}else{
		return false;
	}
}

function custom_excerpt_length($length){
return 300;
}
add_filter('excerpt_length','custom_excerpt_length',99);

function cf_search_join( $join ) {
  global $wpdb;
  if ( is_search() ) {
    $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
  }
  return $join;
}
add_filter('posts_join', 'cf_search_join' );
function cf_search_where( $where ) {
  global $pagenow, $wpdb;
  if ( is_search() ) {
    $where = preg_replace(
      "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
      "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
  }
  return $where;
}
add_filter( 'posts_where', 'cf_search_where' );
function cf_search_distinct( $where ) {
  global $wpdb;
  if ( is_search() ) {
    return "DISTINCT";
  }
  return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

function add_editor_buttons($buttons) {
$buttons[] = 'fontselect';
$buttons[] = 'fontsizeselect';
$buttons[] = 'cleanup';
$buttons[] = 'styleselect';
$buttons[] = 'hr';
$buttons[] = 'del';
$buttons[] = 'sub';
$buttons[] = 'sup';
$buttons[] = 'copy';
$buttons[] = 'paste';
$buttons[] = 'cut';
$buttons[] = 'undo';
$buttons[] = 'image';
$buttons[] = 'anchor';
$buttons[] = 'backcolor';
$buttons[] = 'wp_page';
$buttons[] = 'charmap';
return $buttons;
}
add_filter("mce_buttons_3", "add_editor_buttons");

function remove_menus(){
remove_menu_page( 'index.php' ); //仪表盘
// remove_menu_page( 'upload.php' ); //多媒体
remove_menu_page( 'edit.php?post_type=page' ); //页面
remove_menu_page( 'edit-comments.php' ); //评论
remove_menu_page( 'plugins.php' ); //插件
remove_menu_page( 'tools.php' ); //工具
remove_menu_page( 'themes.php' ); //主题
remove_menu_page( 'users.php' ); //用户
remove_menu_page( 'options-general.php' ); //设置

add_filter('automatic_updater_disabled', '__return_true');	// 彻底关闭自动更新

remove_action('init', 'wp_schedule_update_checks');	// 关闭更新检查定时作业
wp_clear_scheduled_hook('wp_version_check');			// 移除已有的版本检查定时作业
wp_clear_scheduled_hook('wp_update_plugins');		// 移除已有的插件更新定时作业
wp_clear_scheduled_hook('wp_update_themes');			// 移除已有的主题更新定时作业
wp_clear_scheduled_hook('wp_maybe_auto_update');		// 移除已有的自动更新定时作业

remove_action( 'admin_init', '_maybe_update_core' );		// 移除后台内核更新检查

remove_action( 'load-plugins.php', 'wp_update_plugins' );	// 移除后台插件更新检查
remove_action( 'load-update.php', 'wp_update_plugins' );
remove_action( 'load-update-core.php', 'wp_update_plugins' );
remove_action( 'admin_init', '_maybe_update_plugins' );

remove_action( 'load-themes.php', 'wp_update_themes' );		// 移除后台主题更新检查
remove_action( 'load-update.php', 'wp_update_themes' );
remove_action( 'load-update-core.php', 'wp_update_themes' );
remove_action( 'admin_init', '_maybe_update_themes' );

add_filter ('pre_site_transient_update_core', '__return_null');

remove_action ('load-update-core.php', 'wp_update_plugins');
add_filter ('pre_site_transient_update_plugins', '__return_null');

remove_action ('load-update-core.php', 'wp_update_themes');
add_filter ('pre_site_transient_update_themes', '__return_null');
if ( ! function_exists( 'modify_footer_admin' ) ) :


function modify_footer_admin () {

echo '';

}

add_filter('admin_footer_text', 'modify_footer_admin');

endif;
if ( ! function_exists( 'remove_dashboard_widgets' ) ) :

/**

 * Remove dashboard widgets

 */

function remove_dashboard_widgets(){

 global $wp_meta_boxes;

 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);

 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);

 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);

 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);

 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);

 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);

 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);

 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

endif;
remove_action('welcome_panel', 'wp_welcome_panel');

if ( ! function_exists( 'add_dashboard_widgets' ) ) :
function welcome_dashboard_widget_function() {
echo "<ul><li><a href='post-new.php'>发布内容</a></li><li><a href='edit.php'>修改内容</a></li></ul>";
}
function add_dashboard_widgets() {
wp_add_dashboard_widget('welcome_dashboard_widget', '常规任务', 'welcome_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'add_dashboard_widgets' );
endif;
}

add_action( 'admin_menu', 'remove_menus' );

function remove_logo($wp_toolbar) {
    $wp_toolbar->remove_node('wp-logo'); //去掉Wordpress LOGO
}
add_action('admin_bar_menu', 'remove_logo', 999);

?>
