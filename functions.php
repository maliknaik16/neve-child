<?php

/**
 * Removes the Copyright message from the parent theme.
 */
function nc_remove_copyright() {
    return '';
}

// Alter the copyright filter.
add_filter('ti_wl_copyright', 'nc_remove_copyright');
