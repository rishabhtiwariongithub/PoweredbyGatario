<?php
session_start();

if (!isset($_SESSION['user_sno'])) {
    // User is not logged in, redirect them to the login page or show a login form.
    header("Location: index.php");
    exit();
}

$user_sno = $_SESSION['user_sno'];
$user_firstname = $_SESSION['user_firstname'];
$user_lastname = $_SESSION['user_lastname'];
$user_email = $_SESSION['user_email'];
$user_username = $_SESSION['user_username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/newdashboard.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Dashboard</title>
</head>
<body>
 <!-- header starts -->
    <div class="header">
        <div class="header__left">
            <img src="../img/Facebook_Logo_(2019).png.webp"/>
            <div class="header__input">
                <span class="material-icons"> search </span>
                <input type="text" placeholder="Search Facebook" id="search" name="Search">
            </div>
                 <div id="searchResultsContainer"></div>
        </div>

        <div class="header__middle">
            <div class="header__option active">
                <span class="material-icons"> home </span>
            </div>
            <div class="header__option">
                <span class="material-icons"> flag </span>
            </div>
            <div class="header__option">
                <span class="material-icons"> subscriptions </span>
            </div>
            <div class="header__option">
                <span class="material-icons"> storefront </span>
            </div>
            <div class="header__option">
                <span class="material-icons"> supervised_user_circle </span>
            </div>
        </div>

        <div class="header__right">
            <div class="header__info">
                <img class="user__avatar"
                    src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=2000"
                    alt="" />
                <h4><?php echo $user_firstname?></h4>
            </div>
            <span class="material-icons"> add </span>
            <span class="material-icons"> forum </span>
            <span class="material-icons"> notifications_active </span>
            <a class="material" id="material" href="../php/logout.php">Logout</a>
        </div>
    </div>
    <!-- header ends -->
    <!-- main body starts -->
<div class="main__body">
    <!-- sidebar starts -->
    <div class="sidebar" id="sidebarContainer">
        <div class="sidebarRow">
            <img class="user__avatar"
                src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=2000"
                alt="" />
            <h4><?php echo $user_firstname?></h4>
        </div>

        <div class="sidebarRow">
            <span class="material-icons"> local_hospital </span>
            <h4>Covid - 19 Information Center</h4>
        </div>

        <div class="sidebarRow">
            <span class="material-icons"> emoji_flags </span>
            <h4>Pages</h4>
        </div>

        <div class="sidebarRow">
            <span class="material-icons"> people </span>
            <h4>People</h4>
        </div>

        <div class="sidebarRow">
            <span class="material-icons"> chat </span>
            <h4>Messenger</h4>
        </div>

        <div class="sidebarRow">
            <span class="material-icons"> storefront </span>
            <h4>Marketplace</h4>
        </div>

        <div class="sidebarRow">
            <span class="material-icons"> video_library </span>
            <h4>Videos</h4>
        </div>

        <div class="sidebarRow">
            <span class="material-icons"> expand_more </span>
            <h4>More</h4>
        </div>
    </div>
    <!-- sidebar ends -->

       <div class="feed">
            <div class="storyReel">
                <!-- story starts -->
                <div style="background-image: url(../img/wp2301584-anime-4k-wallpapers.jpg);" class="story">
                    <img class="user__avatar story__avatar"
                        src="https://www.shareicon.net/data/2016/05/24/770139_man_512x512.png" alt="" />
                    <h4><?php echo $user_firstname?></h4>
                </div>
                <!-- story ends -->

                <!-- story starts -->
                <div style=" background-image: url(../img/wp2301643-anime-4k-wallpapers.jpg);" class="story">
                    <img class="user__avatar story__avatar"
                        src="../img/103960940_1636313769867969_452954297756824385_n.jpg"
                        alt="" />
                    <h4><?php echo $user_firstname?></h4>
                </div>
                <!-- story ends -->

                <!-- story starts -->
                <div style="background-image: url(../img/wp2301712-anime-4k-wallpapers.jpg);" class="story">
                    <img class="user__avatar story__avatar"
                        src="https://image.freepik.com/free-vector/businessman-avatar-cartoon-character-profile_18591-50584.jpg"
                        alt="" />
                    <h4><?php echo $user_firstname?></h4>
                </div>
                <!-- story ends -->

                <!-- story starts -->
                <div style="background-image: url(../img/wp2301702-anime-4k-wallpapers.jpg);" class="story">
                    <img class="user__avatar story__avatar"
                        src="https://image.freepik.com/free-vector/businessman-avatar-cartoon-character-profile_18591-50584.jpg"
                        alt="" />
                    <h4><?php echo $user_firstname?></h4>
                </div>
                <!-- story ends -->

                <!-- story starts -->
                <div style="background-image: url(../img/wp4089722-sakura-yamauchi-wallpapers.jpg);" class="story">
                    <img class="user__avatar story__avatar"src="../img/103960940_1636313769867969_452954297756824385_n.jpg" alt="" />
                    <h4><?php echo $user_firstname?></h4>
                </div>
                <!-- story ends -->

                <!-- story starts -->
                <div style="background-image: url(../img/wp4089734-sakura-yamauchi-wallpapers.jpg);" class="story">
                    <img class="user__avatar story__avatar" src="../img/103960940_1636313769867969_452954297756824385_n.jpg"
                        alt="" />
                    <h4><?php echo $user_firstname?></h4>
                </div>
                <!-- story ends -->
            </div>

            <!-- message sender starts -->
            <div class="messageSender">
                <div class="messageSender__top">
                    <img class="user__avatar"
                        src="https://image.freepik.com/free-vector/businessman-avatar-cartoon-character-profile_18591-50584.jpg"
                        alt="" />
                    <form>
                        <input class="messageSender__input" placeholder="What's on your mind?" type="text" />
                    </form>
                </div>

                <div class="messageSender__bottom">
                    <div class="messageSender__option">
                        <span style="color: red" class="material-icons"> videocam </span>
                        <h3>Live</h3>
                    </div>

                    <div class="messageSender__option" id="photo-option">
                        <span style="color: green" class="material-icons"> photo_library </span>
                        <h3>Photo</h3>
                    <form id="submitform">
                  <input type="file" name="Image" id="file-input" style="display:none;"/>
                  </form>
                    </div>
                  <input type="submit" name="upload" id="button-up" value="Upload" style="display:none;" />
                    <div id="image">
                    </div>
                    <div class="messageSender__option">
                        <span style="color: orange" class="material-icons"> insert_emoticon </span>
                        <h3>Feeling</h3>
                    </div>
                </div>
            </div>
            <!-- message sender ends -->

            <!-- post starts -->
            <div class="post">
                <div class="post__top">
                    <img class="user__avatar post__avatar"
                        src="https://image.freepik.com/free-vector/businessman-avatar-cartoon-character-profile_18591-50584.jpg"
                        alt="" />
                    <div class="post__topInfo">
                        <h3><?php echo $user_firstname?></h3>
                        <p>25 April at 20:30</p>
                    </div>
                </div>

                <div class="post__bottom">
                    <p>Message</p>
                </div>

                <div class="post__image">
                     <img src="../img/wp2301563-anime-4k-wallpapers.jpg"
                        alt="" />
                </div>

                <div class="post__options">
                        <span class="material-symbols-outlined">thumb_up</span>
                    </div>

                    <div class="post__option">
                        <div class="fb-comments" data-href="" data-width="" data-numposts="1"></div>
                    </div>

                    <div class="post__options">
                        <button class="fb-share-button" onclick="s.showSettingsDialog()">Share</button>
                    </div>
                </div>
            </div>
            <!-- post ends -->

            <!-- post starts -->
            <div class="post">
                <div class="post__top">
                    <img class="user__avatar post__avatar"
                        src="https://image.freepik.com/free-vector/businessman-avatar-cartoon-character-profile_18591-50584.jpg"
                        alt="" />
                    <div class="post__topInfo">
                        <h3><?php echo $user_firstname?></h3>
                        <p>25 April at 20:30</p>
                    </div>
                </div>

                <div class="post__bottom">
                    <p>Message</p>
                </div>

                <div class="post__image">
                    <img src="../img/wp2301572-anime-4k-wallpapers.jpg"
                        alt="" />
                </div>

                <div class="post__options">
                        <div class="fb-like" data-href="" data-width=""data-layout="button" data-action="like" data-size="small">
                    </div>

                    <div class="post__option">
                        <div class="fb-comments" data-href="" data-width="" data-numposts="1"></div>
                    </div>

                    <div class="post__options">
                        <button class="fb-share-button" onclick="s.showSettingsDialog()">Share</button>
                    </div>
                </div>
            </div>
            <!-- post ends -->

            <!-- post starts -->
            <div class="post">
                <div class="post__top">
                    <img class="user__avatar post__avatar"
                        src="../img/wp2123909-attack-on-titan-hd-wallpapers.jpg"
                        alt="" />
                    <div class="post__topInfo">
                        <h3><?php echo $user_firstname?></h3>
                        <p>25 April at 20:30</p>
                    </div>
                </div>

                <div class="post__bottom">
                    <p>Message</p>
                </div>

                <div class="post__image">
                    <img src="../img/wp1837539-attack-on-titan-hd-wallpapers.jpg"
                        alt="" />
                </div>

                <div class="post__options">
                        <div class="fb-like" data-href="" data-width=""data-layout="button" data-action="like" data-size="small">
                    </div>

                    <div class="post__option">
                        <div class="fb-comments" data-href="" data-width="" data-numposts="1"></div>
                    </div>

                    <div class="post__options">
                        <button class="fb-share-button" onclick="s.showSettingsDialog()">Share</button>
                    </div>
                </div>
            </div>
            <!-- post ends -->
        </div>
        <!-- feed ends -->
    </div>
        <!-- main body ends -->
<script>
$(document).ready(function(){
    $("#submitform").on("click",function(e){
        e.preventDefault();
        var formdata=new FormData(this);
        $.ajax({
           url:"upload.php",
           type:"POST",
           data:formdata,
           contentType:false,
           processData:false,
           success:function(data)
            {
                alert("Your Photo has been posted");
                $("#preview").show();
                $("#image").html(data);
                $("#file-input").val('');
            }
            error: function() {
           $("#error").html("An error occurred while processing your request.").slideDown().delay(1000).slideUp();
           $("#success").slideUp();
        }
        });
    })
    })    
</script>
<script type="text/javascript" src="../js/createjavascript.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/api.js"></script>
<script type="text/javascript">
    init = function() {
        s = new gapi.drive.share.ShareClient();
        s.setOAuthToken('<OAUTH_TOKEN>');
        s.setItemIds(['<FILE_ID>']);
    }
    window.onload = function() {
        gapi.load('drive-share', init);
    }
</script>
<script>
       const photoOption = document.getElementById('photo-option');
photoOption.addEventListener('click', openFilePicker);

// Function to open the file picker when the "Photo" option is clicked
function openFilePicker() {
    const fileInput = document.getElementById('file-input');
    fileInput.click();
}

// Add an event listener to the file input to handle the selected file
const fileInput = document.getElementById('file-input');
fileInput.addEventListener('change', handleFileSelected);

// Function to handle the selected file
function handleFileSelected(event) {
    const selectedFile = event.target.files[0];
    console.log('Selected file:', selectedFile.name);
}
    </script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
    <script src="../js/jquery.js"></script>
       <script>
       $(document).ready(function() {
    // Function to fetch search results
    function fetchSearchResults(searchTerm) {
        $.ajax({
            url: "../php/ajax_frnd_search.php",
            type: "POST",
            data: {search: searchTerm},
            success: function(data) {
                $("#searchResultsContainer").html(data).addClass('show');
            }
        });
    }

    // Function to handle keyup event on the search input
    $("#search").on("keyup", function(e) {
        var search_term = $(this).val().trim();
        if (search_term === "") {
            $("#searchResultsContainer").removeClass('show');
        } else {
            fetchSearchResults(search_term);
        }
    });

    // Close the search results container when clicking outside of it
    $(document).on('click', function(event) {
        if (!event.target.closest('#searchResultsContainer') && !event.target.matches('#search')) {
            $("#searchResultsContainer").removeClass('show');
        }
    });
});
    </script>
</body>
</html>
