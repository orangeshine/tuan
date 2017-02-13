<div class="tjlabel">
  <span>地点：<?php $mudidi = get_post_meta($post->ID, "_meta_muididi_value", true);
  echo$mudidi; ?></span>
  <span>天数：<?php $tianshu = get_post_meta($post->ID, "_meta_tianshu_value", true);
  echo$tianshu; ?></span>
  <span>适合人数：<?php $renshu = get_post_meta($post->ID, "_meta_renshu_value", true);
  echo$renshu; ?></span>
</div>
