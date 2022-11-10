function enableButton()
{
	if(document.getElementById("policy").checked)
	{
		document.getElementById("sbtn1").disabled=false;
	}
	
	else
	{
		document.getElementById("sbtn1").disabled=true;
		
	}
	
}