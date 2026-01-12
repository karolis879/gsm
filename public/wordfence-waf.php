<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/webhome/gsmanagement.ch/www/public/old_website/wp-content/plugins/wordfence/waf/bootstrap.php')) {
    define("WFWAF_LOG_PATH", '/webhome/gsmanagement.ch/www/public/old_website/wp-content/wflogs/');
    include_once '/webhome/gsmanagement.ch/www/public/old_website/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>
