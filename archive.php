<?php
// Vida Medica
if (in_category(26) || in_category(25) || in_category(24)) {
    include(TEMPLATEPATH . '/assets/archive/vida-medica.php');

}else {
	include(TEMPLATEPATH . '/assets/archive/default.php');
}

?>
 