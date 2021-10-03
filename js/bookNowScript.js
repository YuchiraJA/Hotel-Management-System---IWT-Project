

function validateForm() {
  var x = document.forms["guest"]["fname"].value;
  if (x == "") {
    alert("Name must be filled");
    return false;
  }
}



function myFunction() {
     document.getElementById("book").submit();
	 }