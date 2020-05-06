<?php
function ffresources_field__field_subject(&$variables) {
  $output = '';

  // Render the label if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';
  }

  // Render the items.
  $index = 0;
  $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
  foreach ($variables['items'] as $delta => $item) {
    $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even') . (!$index ? ' first' : '');
    $output .= ($index ? '' : '') . '<button disabled="disabled" class="btn btn-primary btn-xs ' . $classes . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</button>';
    $index++;
  }
  $output .= '</div>';

  // Render the top-level div.

  $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';

  return $output;
}

function ffresources_field__field_class(&$variables) {
  $output = '';

  // Render the label if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';
  }

  // Render the items.
  $index = 0;
  $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
  foreach ($variables['items'] as $delta => $item) {
    $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even') . (!$index ? ' first' : '');
    $output .= ($index ? '' : '') . '<button class="btn btn-primary btn-xs ' . $classes . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</button>';
    $index++;
  }
  $output .= '</div>';

  // Render the top-level div.

  $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';

  return $output;
}
