var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navMenu").style.top = "0";
  } else {
    document.getElementById("navMenu").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}