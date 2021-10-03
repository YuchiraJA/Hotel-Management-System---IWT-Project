function checkPasswords(){


			if(document.getElementById("pwd").value !=document.getElementById("rpwd").value)
			alert("Password are mismatched!!");
			return false;
		}
		else{
			alert("Password matched!!");
			return true;
		    } 

		}