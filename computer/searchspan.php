<div class="tjlabel">
  <span><?php $mudidi = get_post_meta($post->ID, "_meta_muididi_value", true);
  echo$mudidi; ?> | </span>
  <span><?php $tianshu = get_post_meta($post->ID, "_meta_tianshu_value", true);
  echo$tianshu; ?> | </span>
  <span><?php $renshu = get_post_meta($post->ID, "_meta_renshu_value", true);
  echo$renshu; ?></span>
</div>
