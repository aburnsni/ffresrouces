<?php

/**
 * Implements template_preprocess_search_result
 * @param type $vars
 */
/** function ffresources_preprocess_search_result(&$vars) {
  $node = $vars['result']['node'];
  if ($node->nid) { // if the result is a node we can load the teaser
    $vars['teaser'] = node_view($node, 'teaser'); 
  }
}
*/
