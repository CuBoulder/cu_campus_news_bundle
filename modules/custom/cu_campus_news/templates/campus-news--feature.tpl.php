<?php $tag = isset($heading_tag['#tag']) ? $heading_tag['#tag'] : 'h3'; ?>
<div class="article-view-mode-feature node-view-mode-feature clearfix">
  <?php if(!empty($thumbnail)): ?>
    <?php print $thumbnail; ?>
  <?php endif; ?>
  <div class="article-view-mode-feature-content node-view-mode-feature-content">
    <<?php print $tag; ?>><?php print $title; ?></<?php print $tag; ?>>
    <div class="article-summary"><?php print $body; ?></div>

  </div>
</div>
