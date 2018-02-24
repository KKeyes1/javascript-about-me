let jobTitle = ["programmer", "carpenter", "locksmith", "guy"];
let colleagues = ["business owner's", "people"];
let products = ["websites", "logos", "furniture", "things"];
let jobTitleVerb = ["building", "designing", "taking things apart", "tinkering", "doing work stuff"];
let hobbies = ["picking locks", "staying active", "learning new things", "doing other stuff"];

function generate() {
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