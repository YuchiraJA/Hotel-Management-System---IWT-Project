/*Login page top greeting javascript*/

 var hour = new Date().getHours(); 
  var greeting;
  if (hour < 12) {
    greeting = "<center>Good Morning</center>";
  } else {
    greeting = "<center>Hello Customer</center>";
  }
  document.getElementById("demo").innerHTML = greeting;




