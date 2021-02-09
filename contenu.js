function openpage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;

}


// Get the element with id="defaultOpen" and click on it
function def()
{
document.getElementById("defaultOpen").click();
var d = new Date();
document.getElementById("demo").innerHTML =d.getDate()+'/'+(d.getMonth()+1) +'/'+d.getFullYear();
}

