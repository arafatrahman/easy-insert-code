
function eicSettings(evt, cityName) {
  var i, eicTabcontent, eicTablinks;
  eicTabcontent = document.getElementsByClassName("eicTabcontent");
  for (i = 0; i < eicTabcontent.length; i++) {
    eicTabcontent[i].style.display = "none";
  }
  eicTablinks = document.getElementsByClassName("eicTablinks");
  for (i = 0; i < eicTablinks.length; i++) {
    eicTablinks[i].className = eicTablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

