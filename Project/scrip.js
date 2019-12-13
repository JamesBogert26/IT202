var initialAmt = actualamt = 1000.00;

var actions = [];

var incVal = 0;

var actions = new Array();

var accountTypes = {1:"Saving", 2:"Checking"};


function depositAmt(){

var amtval = document.getElementById("amntinfo").value;

var accType = document.getElementsByName("acctype");

if (amtval == ""){

alert("Please enter the amount to deposit!");

return false;

}else if(isNaN(amtval)){

alert('Invalid amount is given. Please enter the valid amount!');

return false;

}

else{

var result = parseFloat(amtval) + parseFloat(initialAmt);

actions[incVal] = [];

actions[incVal]["title"] = "Deposit";

actions[incVal]["amountval"] = amtval;

actions[incVal]["balance"] = result;

initialAmt = result;

incVal++;

return true;

}

}

function withdrawAmt(){

var amtval = document.getElementById("amntinfo").value;

var accType = document.getElementsByName("acctype");

if (amtval == ""){

alert("Please enter the amount to deposit!");

return false;

}else if(isNaN(amtval)){

alert('Invalid amount is given. Please enter the valid amount!');

return false;

}

else{

var result = parseFloat(initialAmt) - parseFloat(amtval);

actions[incVal] = [];

actions[incVal]["title"] = "Withdraw";

actions[incVal]["amountval"] = amtval;

actions[incVal]["balance"] = result;

initialAmt = result;

incVal++;

return true;

}

}

function transferAmt(){

var amtval = document.getElementById("amntinfo").value;

var accType = document.getElementsByName("acctype");

var transfrm = document.getElementById("transFrm").value;

var transto = document.getElementById("transTo").value;

if (amtval == ""){

alert("Please enter the amount to deposit");

return false;

}else if(isNaN(amtval)){

alert('Invalid amount is given. Please enter the valid amount');

return false;

}

else if(transfrm == 0 && transto == 0){

alert("Please select the transfer from account and to account");

return false;

}

else if(transfrm == transto){

alert("The transfer accounts must be different");

return false;

}else if(transfrm == 0 && transto > 0){ //-- transfer to

var result = parseFloat(initialAmt) - parseFloat(amtval);

actions[incVal] = [];

actions[incVal]["title"] = "Transfer To "+accountTypes[transto];

actions[incVal]["amountval"] = amtval;

actions[incVal]["balance"] = result;

initialAmt = result;

incVal++;

}

else if(transfrm > 0 && transto == 0){ //-- transfer to

var result = parseFloat(initialAmt) + parseFloat(amtval);

actions[incVal] = [];

actions[incVal]["title"] = "Transfer From "+accountTypes[transfrm];

actions[incVal]["amountval"] = amtval;

actions[incVal]["balance"] = result;

initialAmt = result;

incVal++;

}
else{
	alert("something went wrong");
}

return true;

}

function viewTransaction(){

var username = document.getElementById("accountinfo").value;

var accType = document.querySelector('input[name="acctype"]:checked').value;

var htmlVal = "Name: "+username+" <br> Account: "+accountTypes[accType]+" <br> Initial Balance: $"+actualamt+" <br>";

htmlVal += "<table cellpadding=\"2\" cellpadding=\"2\" border=\"1\" width=\"100%\">";

htmlVal += "<tr> <th>Description</th><th>Amount</th><th>Balance</th> </tr>";

var i;

if(actions.length > 0){

for (i=0; i<actions.length; i++){

htmlVal += "<tr><td>"+actions[i]["title"]+"</td><td>$"+actions[i]["amountval"]+"</td><td>$"+actions[i]["balance"]+"</td></tr>";

}

}else{

htmlVal += "<tr><td colspan=\"3\" align=\"center\"> No actions found </td></tr>";

}

htmlVal += "</table>";

document.getElementById("accDesc").innerHTML = htmlVal;

}
