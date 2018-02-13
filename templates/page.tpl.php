    <?php if (!$panel_page): ?><div class="container"><?php endif; ?>
    <?php print render($title_prefix); ?>
    <div class="breadcrumb"><?php print render($breadcrumb);?></div>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($panel_page): ?><div class="container"><?php endif; ?>
      <?php if ($tabs['#primary'] || $tabs['#secondary']): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php if ($messages): ?><?php print $messages; ?><?php endif; ?>
    <?php if ($panel_page): ?></div><?php endif; ?>
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>
  <?php if (!$panel_page): ?></div><?php endif; ?>
