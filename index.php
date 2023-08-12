<?php
  $pageTitle = 'Dashboard';
  require __DIR__ . '/_modules/components/header.php';

  session_start();

  if (!isset($_SESSION['user_sno'])) {
    // User is not logged in, redirect them to the login page or show a login form.
    header("Location: {$config->url('auth/login.php')}");
    exit();
  }

  // be sure to remove the "?? 'string here'" later
  $user_sno = $_SESSION['user_sno'];
  $user_firstname = $_SESSION['user_firstname'];
  $user_lastname = $_SESSION['user_lastname'];
  $user_email = $_SESSION['user_email'];
  $user_username = $_SESSION['user_username'];

  $user_photo = '103960940_1636313769867969_452954297756824385_n.jpg';

  // dummy array, change it to database user_posts table query
  $user_posts = [
    'wp2301563-anime-4k-wallpapers.jpg',
    'wp2301572-anime-4k-wallpapers.jpg',
    'wp2123909-attack-on-titan-hd-wallpapers.jpg'
  ];

  // dummy assoc array, change it to database user_posts from related friend
  $story_items = [
    [
      'user_photo' => '103960940_1636313769867969_452954297756824385_n.jpg',
      'user_name' => 'person name',
      'image' => 'wp2301584-anime-4k-wallpapers.jpg'
    ],
    [
      'user_photo' => '103960940_1636313769867969_452954297756824385_n.jpg',
      'user_name' => 'person name',
      'image' => 'wp2301643-anime-4k-wallpapers.jpg'
    ],
    [
      'user_photo' => '103960940_1636313769867969_452954297756824385_n.jpg',
      'user_name' => 'person name',
      'image' => 'wp2301712-anime-4k-wallpapers.jpg'
    ],
    [
      'user_photo' => '103960940_1636313769867969_452954297756824385_n.jpg',
      'user_name' => 'person name',
      'image' => 'wp2301702-anime-4k-wallpapers.jpg'
    ],
    [
      'user_photo' => '103960940_1636313769867969_452954297756824385_n.jpg',
      'user_name' => 'person name',
      'image' => 'wp4089722-sakura-yamauchi-wallpapers.jpg'
    ],
    [
      'user_photo' => '103960940_1636313769867969_452954297756824385_n.jpg',
      'user_name' => 'person name',
      'image' => 'wp4089734-sakura-yamauchi-wallpapers.jpg'
    ]
  ];
?>


<!-- header starts -->
<?php
  $userName = $user_firstname;
  $userPhoto = '103960940_1636313769867969_452954297756824385_n.jpg';
  require __DIR__ . '/_modules/components/dashboard/topbar.php';
?>
<!-- header ends -->

<!-- main body starts -->
<div class="d-flex mt-5 lg:mt-10 ">
  <!-- sidebar starts -->
  <?php
    $userName = $user_firstname;
    $userPhoto = '103960940_1636313769867969_452954297756824385_n.jpg';
    require __DIR__ . '/_modules/components/dashboard/sidebar.php';
  ?>
  <!-- sidebar ends -->

  <main class="container-basic">
    <div class="card p-2 story mb-4">
      <!-- story starts -->
      <?php
        // display card_story for each item in $story_items
        foreach ($story_items as $item) {
          $userName = $item['user_name'];
          $userPhoto = $item['user_photo'];
          $storyImage = $item['image'];
          require __DIR__ . '/_modules/components/card_story.php';
        }
      ?>
      <!-- story ends -->
    </div>

    <!-- post widget starts -->
    <div class="card mb-4">
      <div class="post-widget__top">
        <img class="avatar avatar-medium mr-2" src="<?= $config->url('_storage/' . $user_photo) ?>" alt="User Photo">
        <form class="form-input w-100">
          <input type="text" class="w-100" placeholder="What's on your mind?">
        </form>
      </div>

      <div class="post-widget__bottom">
        <div>
          <span style="color: red;" class="material-icons">videocam</span>
          <span>Live</span>
        </div>

        <div id="photo-option">
          <span style="color: green;" class="material-icons">photo_library</span>
          <span>Photo</span>
          <form id="submit-form">
            <input type="file" name="Image" id="file-input" style="display: none;"/>
          </form>
        </div>

        <!-- <input type="submit" name="upload" id="button-up" value="Upload" style="display: none;">
        <div id="image"></div> -->

        <div>
          <span style="color: orange;" class="material-icons">insert_emoticon</span>
          <span>Feeling</span>
        </div>
      </div>
    </div>
    <!-- post widget ends -->

    <!-- post starts -->
    <?php
      // display card_post for each item in $user_posts
      foreach ($user_posts as $item) {
        $userName = 'Person Name';
        $userPhoto = $user_photo;
        $postDate = '25 April at 20:30';
        $postImage = $item;
        require __DIR__ . '/_modules/components/card_post.php';
      }
    ?>
    <!-- post ends -->
  </main>
</div>
<!-- main body ends -->


<script>
  $(document).ready(function() {
    $("#submit-form").on("click",function(e){
      e.preventDefault();
      const formdata = new FormData(this);

      $.ajax({
        url: "<?= $config->url('_ajax/upload-image.php') ?>",
        type: "POST",
        data: formdata,
        contentType: false,
        processData: false,
        success: function(data) {
          alert("Your Photo has been posted");
          $("#preview").show();
          $("#image").html(data);
          $("#file-input").val('');
        },
        error: function() {
          $("#error").html("An error occurred while processing your request.").slideDown().delay(1000).slideUp();
          $("#success").slideUp();
        }
      });
    });

    // Function to handle keyup event on the search input
    $("#search").on("keyup", function(e) {
      const search_term = $(this).val().trim();
      if (search_term === "") {
        $("#search-results").removeClass('active');
      } else {
        fetchSearchResults(search_term);
      }
    });

    // Close the search results container when clicking outside of it
    $(document).on('click', function(event) {
      if (!event.target.closest('#search-results') && !event.target.matches('#search')) {
        $("#search-results").removeClass('show');
      }
    });
  });

  const init = function() {
    s = new gapi.drive.share.ShareClient();
    s.setOAuthToken('<OAUTH_TOKEN>');
    s.setItemIds(['<FILE_ID>']);
  }

  window.onload = function() {
    gapi.load('drive-share', init);
  }

  const photoOption = document.getElementById('photo-option');
  photoOption.addEventListener('click', openFilePicker);

  // Add an event listener to the file input to handle the selected file
  const fileInput = document.getElementById('file-input');
  fileInput.addEventListener('change', handleFileSelected);
</script>


<?php
  require __DIR__ . '/_modules/components/footer.php';
?>