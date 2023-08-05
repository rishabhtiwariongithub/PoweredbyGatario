<div class="card mb-3">
  <div class="d-flex align-items-center px-2 pt-2 mb-1">
    <img class="avatar avatar-small mr-2" src="<?= $config->url('_storage/' . $userPhoto) ?>" alt="Author Photo">
    <div class="d-flex w-100 justify-content-between">
      <div><?= $userName ?></div>
      <span><?= $postDate ?></span>
    </div>
  </div>

  <div class="mb-1 px-2">
    <p class="text-small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laboriosam maxime, neque consequuntur.</p>
  </div>

  <div class="mb-1">
    <img class="w-100" src="<?= $config->url('_storage/' . $postImage) ?>" alt="Post Image">
  </div>

  <hr>

  <div class="post-widget__bottom">
    <button type="button" class="scale-hitbox" onclick="postAddLike(this)">
      <span class="material-symbols-outlined scale">thumb_up</span>
      <span>Like</span>
    </button>
    <button type="button">
      <span class="material-symbols-outlined">comment</span>
      <span>Comment</span>
    </button>

    <button type="button" class="fb-share-button" onclick="s.showSettingsDialog()">
      <span class="material-symbols-outlined">share</span>
      <span>Share</span>
    </button>
    <!-- <div class="fb-comments" data-href="" data-width="" data-numposts="1"></div> -->
  </div>
</div>