<?php
/**
 *  Created by olgaoskina
 *  11 May 2015
 */
?>
<input type="hidden" name="back_url" value="<?php
if (isset($_SERVER['HTTP_REFERER'])) {
    echo '' . $_SERVER['HTTP_REFERER'];
} else {
    echo 'index.php';
}
?>"/>