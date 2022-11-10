function checkPasswords(){
	if(document.getElementById("pswrd").value != document.getElementById("rpswrd").value){
		alert("Password Mismatched!!!");
		return false;
	}
	else{
		alert("Successfully Registered !");
		return true;
	}
	}
	
function enableButton(){
	if(document.getElementById("policy").checked){
		document.getElementById("btn1").disabled=false;
	}
	else{
		document.getElementById("btn1").disabled=true;
	}
}