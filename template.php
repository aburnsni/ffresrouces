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
function ffresources_display_term_link_count($name, $tid, $count, $description) {
  if ($term = taxonomy_term_load($tid)) {
    $uri = entity_uri('taxonomy_term', $term);
    $uri['options']['attributes']['class'][] = 'tagclouds';
    $uri['options']['attributes']['title'] = decode_entities($description);
    return "<span class='tagclouds-term'>" . l($name, $uri['path'], $uri['options']) . " (<span class='count'>" . $count . "</span>)" . "</span>\n";
  }
}

