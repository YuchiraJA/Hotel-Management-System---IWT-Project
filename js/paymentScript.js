


function loadData(card){
	var a = "Payoneer";
	var b = "PayPal";
	var c = "VISA";
	var d = "MasterCard";
	var e = "American Express";
	
	if (card == 1)
	{
		document.getElementById("card").src = "../images/1a.jpg"
		document.getElementById('details').innerHTML = a;
	}
	else if (card == 2)
	{
		document.getElementById("card").src = "../images/2a.png"
		document.getElementById('details').innerHTML = b;
	}
	else if (card == 3)
	{
		document.getElementById("card").src = "../images/3a.png"
		document.getElementById('details').innerHTML = c;
	}
	else if (card == 4)
	{
		document.getElementById("card").src = "../images/4a.png"
		document.getElementById('details').innerHTML = d;
	}


	else if (card == 5)
	{
		document.getElementById("card").src = "../images/5a.jpg"
		document.getElementById('details').innerHTML = e;
	}



}























