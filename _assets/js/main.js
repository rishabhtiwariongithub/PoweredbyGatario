// Main Javascript
// =======================================================


function postAddLike(elem) {
  // add "active" class or remove it instead if exist
  if (elem.classList.contains('active')) {
    elem.classList.remove('active');
  } else {
    elem.classList.add('active');
  }

  // write ajax here..
}

