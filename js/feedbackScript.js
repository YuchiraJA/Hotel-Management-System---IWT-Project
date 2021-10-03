function validate(){
  var customer ID= document.getElementById(" customer ID").value;
  var Contact number = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if( customer ID.length < 8){
    text = "Please Enter valid ID,if you are not member  please register ";
    error_message.innerHTML = text;
    return false;
  }
  
  
  if(isNaN(Contact number) || Contact number != 10){
    text = "Please Enter valid Contact number";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 8){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 20){
    text = "Please describe more about your issue";
    error_message.innerHTML = text;
    return false;
  }
  alert("THANK YOU,WE WILL CONTAT YOU ASAP");
  return true;
}