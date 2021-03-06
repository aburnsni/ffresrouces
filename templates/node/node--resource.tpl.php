<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php // dpm($node); ?>
  <?php if ((!$page && !empty($title)) || !empty($title_prefix) || !empty($title_suffix) || $display_submitted): ?>
  <?php if ( node_access('update', $node) ) { ?>
    <div class="pull-right"><a href="/node/<?php print $node->nid;?>/edit">Edit this content</a></div>
  <?php } ?>
  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page && !empty($title)): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($display_submitted): ?>
      <span class="submitted">
        <?php print $submitted; ?>
      </span>
    <?php endif; ?>
  </header>
  <?php endif; ?>
  <?php
    // Hide comments, tags, and links now so that we can render them later.
//    hide($content['comments']);
//    hide($content['links']);
//    hide($content['field_tags']);
//    print render($content);
    ?>

    <?php if ($node->field_links) { ?>
      <div class="row link">
        <div class="col-sm-12">
          <a href='<?php print $node->field_links['und'][0]['url']; ?>' title='<?php print $node->field_links['und'][0]['title']; ?>'>
            <?php print $node->field_links['und'][0]['url']; ?>
          </a>
        </div>
      </div>
    <?php }  ?>
    <?php if ($node->field_files) { ?>
      <div class="row files">
        <div class="col-sm-12">
          <?php print render($content['field_files']); ?>
        </div>
      </div>
    <?php } ?>
    <?php if ($node->body) { ?>
      <div class="row body">
        <div class="col-sm-12">
          <?php print render($content['body']); ?>
        </div>
      </div>
    <?php } ?>
    <div class="row taxonomy">
      <div class="col-sm-6">
        <?php print render($content['field_subject']); ?>
      </div>
      <div class="col-sm-6">
        <?php print render($content['field_class']); ?>
      </div>
    </div>
  
  <?php
    // Only display the wrapper div if there are tags or links.
    $field_tags = render($content['field_tags']);
unset($content['links']['node']['#links']['node-readmore']);
    $links = render($content['links']);
    if ($field_tags || $links):
  ?>
   <footer>
     <?php print $field_tags; ?>
     <?php print $links; ?>
  </footer>
    <?php endif; ?>
  <?php print render($content['comments']); ?>
</article>
