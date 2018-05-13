<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function mobolify_theme(&$existing, $type, $theme, $path) {
  bootstrap_include($theme, 'includes/registry.inc');
  return _bootstrap_theme($existing, $type, $theme, $path);
}