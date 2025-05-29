/*
      DEBUT DE PAGE
*/
/*
      script.js
*/
// open aside
function openAside() {
  document.getElementById("aside").style.display = "block";
}
// close aside
function closeAside() {
  document.getElementById("aside").style.display = "none";
}
// read more or less
function myFunction() {
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
    
    if (moreText.style.visibility === "visible") {
        btnText.innerHTML = "Read more"; 
        moreText.style.visibility = "hidden";
    } else {
        btnText.innerHTML = "Read less"; 
        moreText.style.visibility = "visible";
    }
}
/*
      FIN DE PAGE
*/