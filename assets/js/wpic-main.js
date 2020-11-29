
function wpicSettings(evt, cityName) {
  var i, wpicTabcontent, wpicTablinks;
  wpicTabcontent = document.getElementsByClassName("wpicTabcontent");
  for (i = 0; i < wpicTabcontent.length; i++) {
    wpicTabcontent[i].style.display = "none";
  }
  wpicTablinks = document.getElementsByClassName("wpicTablinks");
  for (i = 0; i < wpicTablinks.length; i++) {
    wpicTablinks[i].className = wpicTablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

