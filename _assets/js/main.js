// Main Javascript
// =======================================================


// Function to open the file picker when the "Photo" option is clicked
function openFilePicker() {
  const fileInput = document.getElementById('file-input');
  fileInput.click();
}

// Function to handle the selected file
function handleFileSelected(event) {
  const selectedFile = event.target.files[0];
  console.log('Selected file:', selectedFile.name);
}

// Function to fetch search results
function fetchSearchResults(searchTerm) {
  $.ajax({
    url: `${window.projectUrl}_ajax/search-user.php`,
    type: "POST",
    data: {search: searchTerm},
    success: function(data) {
      $("#search-results").html(data).addClass('active');
    }
  });
}


function toggleTooltipProfile(event) {
  $("#tooltip-profile").toggleClass('active');
}


function postAddLike(event) {
  // add "active" class or remove it instead if exist
  if (event.classList.contains('active')) {
    event.classList.remove('active');
  } else {
    event.classList.add('active');
  }

  // write ajax here..
}

document.getElementById('upload-link').addEventListener('click', function() {
document.getElementById('img').click();
});

// to remove the "active" class if click are outside the element
$(document).mouseup(function(e) {
  const elements = [
    $("#search-results"),
    $("#tooltip-profile")
  ];

  elements.forEach(function (elem) {
    // if the target of the click isn't the container nor a descendant of the container
    if (!elem.is(e.target) && elem.has(e.target).length === 0) {
      elem.removeClass('active');
    }
  });
});