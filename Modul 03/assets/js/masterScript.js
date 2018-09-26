loginCount = 2;

function login() {
	if (loginCount != 0){
		username = document.getElementById("user").value;
		password = document.getElementById("pass").value;
		if (username == "michael" && password == "1202160197") {	
			window.location="nilai.php";
		}
		else {
			
			alert("Kamu memiliki kesempatan login "+loginCount+" kali lagi");
			loginCount--;
		}	
	}
	else {
		alert("Kamu tidak memiliki kesempatan login lagi");
		document.getElementById("user").disabled=true;
		document.getElementById("pass").disabled= true;
		document.getElementById("loginBtn").disabled=true;
	}
}