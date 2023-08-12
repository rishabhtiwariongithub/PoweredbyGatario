

<div class="topbar">
  <div class="topbar__title-desktop">
    <img src="<?= $config->url('_assets/images/facebook-icon.webp') ?>">
    <div class="form-input">
      <span class="material-icons">search</span>
      <input type="text" placeholder="Search Facebook" id="search" name="Search">
    </div>
  </div>

  <div class="topbar__title-mobile pt-2 pb-1 px-2" style="margin: 0 -18px; border-bottom: 1px solid #ddd;">
    <h1 class="text-primary" style="font-size: 1.6em;">Facebook</h1>
    <div class="d-flex ml-auto">
      <button type="button" class="icon-round mr-2">
        <span class="material-icons">search</span>
      </button>
      <button type="button" class="icon-round">
        <span class="material-icons">menu</span>
      </button>
    </div>
  </div>

  <div class="card p-2 border-radius-0" id="search-results"></div>


  <div class="topbar__navigation">
    <button type="button" class="active">
      <span class="material-icons">home</span>
    </button>
    <button type="button">
      <span class="material-icons">flag</span>
    </button>
    <button type="button">
      <span class="material-icons">subscriptions</span>
    </button>
    <button type="button">
      <span class="material-icons">storefront</span>
    </button>
    <button type="button">
      <span class="material-icons">supervised_user_circle</span>
    </button>
  </div>

  <div class="topbar__toolbar">
    <a href="" class="icon-round">
      <span class="material-icons">apps</span>
    </a>
    <a href="" class="icon-round">
      <span class="material-icons">forum</span>
    </a>
    <a href="" class="icon-round">
      <span class="material-icons">notifications</span>
    </a>
    <button type="button" class="icon-round" onclick="toggleTooltipProfile(this)">
      <img class="avatar w-100 h-100" src="<?= $config->url('_storage/' . $userPhoto) ?>" alt="User Photo">
    </button>
  </div>

  <div class="card p-2 border-radius-0" id="tooltip-profile">
    <div class="d-flex align-items-center">
      <img src="<?= $config->url('_storage/' . $userPhoto) ?>" class="avatar avatar-medium mr-2" alt="User Photo">
      <span><?= $userName ?></span>
    </div>

    <hr class="my-2">
   <a href="<?= $config->url('#') ?>">
      <span class="material-icons mr-2">notifications</span>
      <span>Notification</span>
      <span class="material-icons ml-auto">chevron_right</span>
    </a>
    <a href="<?= $config->url('#') ?>">
      <span class="material-icons mr-2">upload</span>
      <span>Upload</span>
      <span class="material-icons ml-auto" value='<input type="file" name="img" id="img" style="display:none;">'>upload</span>
    </a>
    <a href="<?= $config->url('#') ?>">
      <span class="material-icons mr-2">settings</span>
      <span>Settiings</span>
      <span class="material-icons ml-auto">chevron_right</span>
    </a>
    <a href="<?= $config->url('#') ?>">
      <span class="material-icons mr-2">logout</span>
      <span>Log Out</span>
      <span class="material-icons ml-auto">chevron_right</span>
    </a>
  </div>
</div>
