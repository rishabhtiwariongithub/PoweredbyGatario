<?php
  $sidebar_items = [
    [
      'href' => '',
      'icon' => 'local_hospital',
      'label' => 'Covid - 19 Information Center'
    ],
    [
      'href' => '',
      'icon' => 'emoji_flags',
      'label' => 'Pages'
    ],
    [
      'href' => '',
      'icon' => 'people',
      'label' => 'People'
    ],
    [
      'href' => '',
      'icon' => 'chat',
      'label' => 'Messenger'
    ],
    [
      'href' => '',
      'icon' => 'storefront',
      'label' => 'Marketplace'
    ],
    [
      'href' => '',
      'icon' => 'video_library',
      'label' => 'Videos'
    ],
    [
      'href' => '',
      'icon' => 'expand_more',
      'label' => 'More'
    ]
  ];
?>


<div class="sidebar" id="sidebar">
  <div style="border-bottom: 1px solid #ddd; border-radius: 0;">
    <img src="<?= $config->url('_storage/' . $userPhoto) ?>" class="avatar avatar-small mr-2" alt="User Photo">
    <h4><?= $userName ?></h4>
  </div>

  <?php foreach($sidebar_items as $item): ?>
    <a href="<?= $config->url($item['href']) ?>">
      <span class="material-icons">
        <?= $item['icon'] ?>
      </span>
      <span>
        <?= $item['label'] ?>
      </span>
    </a>
  <?php endforeach ?>
</div>
