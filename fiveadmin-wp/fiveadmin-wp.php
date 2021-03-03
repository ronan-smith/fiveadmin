<?php

// If this file is accessed directly (via URL, and not by WordPress), kill the script.
if (!defined('WPINC')) die;

defined('FIVEADMIN_SITE_DEV') or define('FIVEADMIN_SITE_DEV', 'Example Company');
defined('FIVEADMIN_SITE_DEV_URL') or define('FIVEADMIN_SITE_DEV_URL', 'https://www.example.com/');

class fiveadmin_wp {
  function __construct() {
    // Swap out the admin footer text if the developer name constant is defined.
    !defined('FIVEADMIN_SITE_DEV') or add_filter('admin_footer_text', array($this, 'fiveadmin_footer_credit'));
  }

  function fiveadmin_footer_credit() {
    // Create a link if the developer URL is defined, if not, just use the developer name.
    $credit_text = (defined('FIVEADMIN_SITE_DEV_URL')) ? "<a href=\"" . FIVEADMIN_SITE_DEV_URL . "\">" . FIVEADMIN_SITE_DEV . '</a>' : FIVEADMIN_SITE_DEV;

    // Echo the site name along with the credit generated from the previous check.
    echo '<b>' . get_bloginfo('name') . ', </b>a website designed by ' . $credit_text;
  }
}

// Run the main plugin class.
new fiveadmin_wp();
