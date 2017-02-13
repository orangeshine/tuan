<?php

if ( in_category(4)||in_category(5)||in_category(6)||in_category(7)||in_category(8) ) {

include(TEMPLATEPATH . '/zhuti.php');

}

else if ( in_category(17) ) {
	include(TEMPLATEPATH . '/chanpin.php');
}
else if ( in_category(16) ) {
	include(TEMPLATEPATH . '/zhiku.php');
}
else
 {
include(TEMPLATEPATH . '/cate.php');
}

?>
