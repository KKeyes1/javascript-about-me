let jobTitle = ["programmer", "carpenter", "locksmith", "guy", "TEST"];
let colleagues = ["business owner's", "people", "TEST"];
let products = ["websites", "logos", "furniture", "things", "TEST"];
let jobTitleVerb = ["building", "designing", "taking things apart", "tinkering", "doing work stuff", "TEST"];
let hobbies = ["picking locks", "staying active", "learning new things", "doing other stuff", "TEST"];

function generate() {
	let elem = document.getElementById("generate");
	if(elem.value == "Who Is Ken?") otherFunction();
	if(elem.value == "Who Is Ken?") elem.value = "Reset";
	else elem.value = "Who Is Ken?";

}


function otherFunction() {

	let newJobTitle = jobTitle[Math.floor(Math.random()*jobTitle.length)];
	let newColleagues = colleagues[Math.floor(Math.random()*colleagues.length)];
	let newProducts = products[Math.floor(Math.random()*products.length)];
	let newJobTitleVerb = jobTitleVerb[Math.floor(Math.random()*jobTitleVerb.length)];
	let newHobby = hobbies[Math.floor(Math.random()*hobbies.length)];

	document.getElementById('jobTitle').innerHTML = newJobTitle;
	document.getElementById('colleagues').innerHTML = newColleagues;
	document.getElementById('products').innerHTML = newProducts;
	document.getElementById('jobTitleVerb').innerHTML = newJobTitleVerb;
	document.getElementById('hobbies').innerHTML = newHobby;
}
