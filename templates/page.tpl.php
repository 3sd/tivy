<div class="tivy-flex">
  <div class="tivy-main">
    <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php if ($messages): ?><?php print $messages; ?><?php endif; ?>
    <?php print render($page['main']); ?>
  </div>
  <div class="tivy-right">
    <?php print render($page['right']); ?>
  </div>
</div>
