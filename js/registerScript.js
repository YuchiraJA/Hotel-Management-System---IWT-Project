/*Register page Password check javascript*/
function checkPassword(){
	if(document.getElementById("pwd").value != document.getElementById("cnfrmpwd").value){
        alert("Password Mismatch");
		return false;
    }else{
        alert("Success");
		return true;
    }	
}

/*check box javascript*/
function enableButton(){
	if(document.getElementById("checkBox").checked){
	 document.getElementById("submitBtn").disabled=false;
	}
	else{
		 document.getElementById("submitBtn").disabled=true;
	}
}

/*register page bottom buttons javascript*/
function loadData(name){
	
   if(name =="button2") {
  	document.getElementById("pic1").src="../images/logo.png";
	document.getElementById("para").innerHTML="<p><b>Terms and Conditions</b></p><p>By accessing and placing an order with example,you confirm that you are in agreement with and bound by the terms of service contained in the Terms & Conditions outlined below. These terms apply to the entire website and any email or other type of communication between you and Example.</p><p>Seacoast hotel grants you a revocable, non-exclusive,non-transferable,limited license to use our service strictly in accordance with the terms of this Agreement."

  }else if (name =="button3"){
  	document.getElementById("pic1").src="../images/logo.png";
	document.getElementById("para").innerHTML="<p><b>Privacy Policy</p></b><p>Seacoast is committed to protecting your privacy.Privacy policy applies to our website, and its associated subdomains.By accessing or using our collection, storage, use, and disclosure of your personal information."
  }else if (name==""){
  	document.getElementById("").src="";
}else if (name==""){alert("invalid");}
}
