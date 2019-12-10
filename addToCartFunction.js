var itemNo = 0;
var size = "";

//choose size
function choice(a){
	switch(a){
	//item1
		case 'item1_S':
			itemNo = 1;
			size = "S";
			break;
		case 'item1_M':
			itemNo = 1;
			size = "M";
			break;
		case 'item1_L':
			itemNo = 1;
			size = "L"
			break;
		case 'item1_XL':
			itemNo = 1;
			size = "XL";
			break;
	//item2
		case 'item2_S':
			itemNo = 2;
			size = "S";
			break;
		case 'item2_M':
			itemNo = 2;
			size = "M";
			break;
		case 'item2_L':
			itemNo = 2;
			size = "L";
			break;
		case 'item2_XL':
			itemNo = 2;
			size = "XL";
			break;
	//item3
		case 'item3_S':
			itemNo = 3;
			size = "S";
			break;
		case 'item3_M':
			itemNo = 3;
			size = "M";
			break;
		case 'item3_L':
			itemNo = 3;
			size = "L";
			break;
		case 'item3_XL':
			itemNo = 3;
			size = "XL";
			break;
	//item4
		case 'item4_S':
			itemNo = 4;
			size = "S";
			break;
		case 'item4_M':
			itemNo = 4;
			size = "M"
			break;
		case 'item4_L':
			itemNo = 4;
			size = "L";
			break;
		case 'item4_XL':
			itemNo = 4;
			size = "XL";
			break;
	//item5
		case 'item5_S':
			itemNo = 5;
			size = "S";
			break;
		case 'item5_M':
			itemNo = 5;
			size = "M";
			break;
		case 'item5_L':
			itemNo = 5;
			size = "L";
			break;
		case 'item5_XL':
			itemNo = 5;
			size = "XL";
			break;
	//item6
		case 'item6_S':
			itemNo = 6;
			size = "S";
			break;
		case 'item6_M':
			itemNo = 6;
			size = "M";
			break;
		case 'item6_L':
			itemNo = 6;
			size = "L";
			break;
		case 'item6_XL':
			itemNo = 6;
			size = "XL";
			break;
	//item7
		case 'item7_S':
			itemNo = 7;
			size = "S";
			break;
		case 'item7_M':
			itemNo = 7;
			size = "M";
			break;
		case 'item7_L':
			itemNo = 7;
			size = "L";
			break;
		case 'item7_XL':
			itemNo = 7;
			size = "XL";
			break;
	//item8
		case 'item8_S':
			itemNo = 8;
			size = "S";
			break;
		case 'item8_M':
			itemNo = 8;
			size = "M";
			break;
		case 'item8_L':
			itemNo = 8;
			size = "L";
			break;
		case 'item8_XL':
			itemNo = 8;
			size = "XL";
			break;
	//item9
		case 'item9_S':
			itemNo = 9;
			size = "S";
			break;
		case 'item9_M':
			itemNo = 9;
			size = "M";
			break;
		case 'item9_L':
			itemNo = 9;
			size = "L";
			break;
		case 'item9_XL':
			itemNo = 9;
			size = "XL";
			break;
	}
	return itemNo, size;
}

function qty(itemNo,size,sign){
	if  (itemNo == 0 || size == ""){
		alert("Please select size and quantity.");
	}else{
		if (sign =='plus'){
			var string = "item" + itemNo ;
			var currentQTY = parseInt(document.getElementById("item"+ itemNo).value);
			document.getElementById("item" + itemNo).value = currentQTY + 1;					
		}
		else if (sign=='minus'){
			var currentQTY = parseInt(document.getElementById("item"+ itemNo).value);
			if (currentQTY > 0){
				document.getElementById("item" + itemNo).value = currentQTY - 1;
			}	
			else{
				document.getElementById("item" + itemNo).value = 0;
			}
		}
	}
}

function addToCart(itemNo, size){
	var quantity = document.getElementById("item"+ itemNo).value;
	var name = document.getElementById("item"+ itemNo + "Name").innerHTML;
	var price = document.getElementById("item"+ itemNo + "Price").innerHTML.replace("S$","").replace("<b>","").replace("</b>","");
	var category = document.getElementById("category").innerHTML;
	if (quantity > 0){
		/*alert(name + " " + category +" " + price +" " +size+" " + quantity);*/
		document.getElementById("itemNameToPass").value = name;	
		document.getElementById("categoryToPass").value = category;					
		document.getElementById("itemPriceToPass").value = price;
		document.getElementById("itemSizeToPass").value = size;					
		document.getElementById("itemQtyToPass").value = quantity;	
		
	}
	else {
		alert("Please enter quantity.");
	}
}
function display(num) {
	for (i = 1; i < 10; i++) { 
		if (num == i){
			document.getElementById("firstpic" + i).style.display = "none";
			document.getElementById("secondpic" + i).style.display = "block";
		}
	}
 }
	  
function hide(){
	for (i = 1; i < 10; i++) { 
		document.getElementById("firstpic" + i).style.display = "block";
		document.getElementById("secondpic" + i).style.display = "none";
	}
}
	function validateForm(){
			var name = document.forms["myForm"]["custName"].value; 
			var regnameone = /[A-Z]+/g;
			var regnametwo = /.\s/g;
			var email = document.forms["myForm"]["custEmail"].value;
			var regemailone = /^[\w.-]+@([\w]+.){2,4}$/g;
			var regemailtwo = /\.[\w.]{2,3}$/g;
			var phone = document.forms["myForm"]["custPhone"].value;
			var regphone = /^[89]\d{7}/;
			
			if (name == "" || email == "" ) {
				alert("Name, email must be filled out");
				return false;
			} else if  (regnameone.test(name) == false || regnametwo.test(name) == false){
				alert("Name must have alpahabet & space");
				return false;
			} else if ( regemailone.test(email) == false || regemailtwo.test(email) == false){
				alert("Email : username must contain - & . , there must be 2 to 4 domain names, and the last domain name must be between 2 to 3 characters")
				return false;
			} else if ( regphone.test(phone) == false){
				alert("Phone number must contain 8 numbers start with 8 or 9.")
				return false;
			} else {
				return true;
			}
	}
function validateSignUp(){
	var username = document.getElementById("username");
	//sign up form
	var reguser = /^[\w.-_]+/;
	alert(username);
	
	if (reguser.test(username) == false){
		alert("Username can contain alphabets, numbers, periods, underscore and hyphens.");
		return false;
	}
}