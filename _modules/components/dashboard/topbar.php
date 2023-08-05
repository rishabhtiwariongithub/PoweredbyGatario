

<div class="topbar">
  <div class="topbar__title-desktop">
    <img src="<?= $config->url('_assets/images/facebook-icon.webp') ?>">
    <div class="form-input">
      <span class="material-icons">search</span>
      <input type="text" placeholder="Search Facebook" id="search" name="Search">
    </div>
    <div id="search-results"></div>
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
    <button type="button" class="icon-round">
      <img class="avatar w-100 h-100" src="<?= $config->url('_storage/' . $userPhoto) ?>" alt="User Photo">
    </button>
  </div>
</div>
