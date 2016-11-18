function validateForm(){
	var radio=document.getElementsByName("type");
	var nob=document.getElementById("numberofbags").value;
	var ad=document.getElementById("arrivaldate").value;
	var name=document.getElementById("name").value;
	var address=document.getElementById("address").value;
	var city=document.getElementById("city").value;
	var state=document.getElementById("state").value;
	var zip=document.getElementById("zip").value;
	var phone=document.getElementById("phone").value;
	var chk=document.getElementsByName("catalog");
	
	if(radio[0].checked==false && radio[1].checked==false){
		alert("Choose a type!");
		return false;
	}
	else if(parseInt(nob)==NaN || nob==""){
		alert("Enter a valid number for \"Number of bags:\"");
		return false;
	}
	else if(!ad.match(/(\d{4})[-\/](\d{2})[-\/](\d{2})/)){
		alert('Enter a valid date:\n(yyyy-mm-dd)');
		return false;
	}
	else if(!name.match(/^[A-Za-z ]+$/)){
		alert('Invalid name');
		return false;
	}
	else if(!address.match(/^[0-9A-Za-z,-_.() /]+$/)){
		alert('Invalid address');	
		return false;
	}
	else if(!city.match(/^[A-Za-z ]+$/)){
		alert('Invalid city');	
		return false;
	}
	else if(!state.match(/^[A-Za-z ]+$/)){
		alert('Invalid state');	
		return false;
	}
	else if(!zip.match(/^[0-9]{6}$/)){
		alert('Invalid zip');
		return false;
	}
	else if(!phone.match(/^[0-9]{10}$/)){
		alert('Invalid phone number');
		return false;
	}
	return true;
}