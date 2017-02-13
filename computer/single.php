<?php

if ( in_category(4)||in_category(5)||in_category(6)||in_category(7)||in_category(8)||in_category(15) ) {

include(TEMPLATEPATH . '/huodong.php');

}

else if( in_category(17) ){

include(TEMPLATEPATH . '/chanpinpage.php');

}
else {

include(TEMPLATEPATH . '/zhikupage.php');

}

?>
