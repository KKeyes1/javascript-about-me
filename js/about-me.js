window.onload = function () {
	generate();
}

function generate() {
	let creative = ["ambitious", "artistic", "creative", "dependable", "intelligent", "industrious", "reliable", "sympathetic", "sensible", "astute", "fastidious", "assimilator", "sagacious"];
	let criticalThinking = ["critical thinking", "contemplation", "meditation", "deliberation", "problem solving", "free thinking", "conceptualizing", "extreme ownership"];
	let adept = ["adept"];
	let incredible = ["incredible"];
	let desire = ["desire"];
	let understand = ["understand"];
	let interests = ["fencing", "karate'", "violin", "trumpet", "piano", "drums", "guitar", "locksmithing", "graphic design", "web development", "app development", "software development", "construction", "architecture", "engineering", "film", "lifeguarding", "personal training", "jewelry making", "coaching lacrosse", "yo-yoing", "carpentry", "set design", "forensics", "Muay Thai", "tutoring", "teaching", "painting", "sculpting", "olympic weightlifting", "powerlifting", "crossfit", "magic"];
	let love = ["love"];
	let spacial = ["spacial"];
	let mechanical = ["mechanical"];
	let valuable = ["valuable"];
	let foray = ["foray"];
	let webDev = ["web development"];
	let webSkillz = ["html", "html5", "web development", "full stack web development", "CSS", "JavaScript", "PHP", "Angular", "Object Oriented Programming", "mySQL", "database design", "digital security", "git", "version control", "project management"];
	let projects = ["bacon ipsum generator", "ROT 13 encoder", "anagram maker", "javascript animations", "bootstrap static pages", "palindrome checker", "capstone"];
	let quote = ["\"If you put water into a cup, it becomes the cup. You put water into a bottle and it becomes the bottle. You put it in a teapot, it becomes the teapot. Now, water can flow or it can crash. Be water, my friend.\" - Bruce Lee", "\"Here's to the crazy ones, the misfits, the rebels, the troublemakers, the round pegs in the square holes... the ones who see things differently -- they're not fond of rules... You can quote them, disagree with them, glorify or vilify them, but the only thing you can't do is ignore them because they change things... they push the human race forward, and while some may see them as the crazy ones, we see genius, because the ones who are crazy enough to think that they can change the world, are the ones who do.\" -Steve Jobs", "\"On ne tue point les idees: Ideas cannot be killed\" -"];
	let signOff = ["Thank you"];
	let name = ["Ken", "Kenneth", "Ken Keyes", "Kenneth Keyes", "Doodle", "KC", "Case", "Bro", "Dude", "Little Brother", "Son", "Friend"];


// window.onload = generate();

		let newCreative = creative[Math.floor(Math.random() * creative.length)];
		let newCriticalThinking = criticalThinking[Math.floor(Math.random() * criticalThinking.length)];
		let newAdept = adept[Math.floor(Math.random() * adept.length)];
		let newIncredible = incredible[Math.floor(Math.random() * incredible.length)];
		let newDesire = desire[Math.floor(Math.random() * desire.length)];
		let newUnderstand = understand[Math.floor(Math.random() * understand.length)];
		let newInterests = interests[Math.floor(Math.random() * interests.length)];
		let newLove = love[Math.floor(Math.random() * love.length)];
		let newSpacial = spacial[Math.floor(Math.random() * spacial.length)];
		let newMechanical = mechanical[Math.floor(Math.random() * mechanical.length)];
		let newValuable = valuable[Math.floor(Math.random() * valuable.length)];
		let newForay = foray[Math.floor(Math.random() * foray.length)];
		let newWebDev = webDev[Math.floor(Math.random() * webDev.length)];
		let newWebSkillz = webSkillz[Math.floor(Math.random() * webSkillz.length)];
		let newProjects = projects[Math.floor(Math.random() * projects.length)];
		let newQuote = quote[Math.floor(Math.random() * quote.length)];
		let newSignOff = signOff[Math.floor(Math.random() * signOff.length)];
		let newName = name[Math.floor(Math.random() * name.length)];

		document.getElementById("creative").innerHTML = newCreative;
		document.getElementById("criticalThinking").innerHTML = newCriticalThinking;
		document.getElementById("adept").innerHTML = newAdept;
		document.getElementById("incredible").innerHTML = newIncredible;
		document.getElementById("desire").innerHTML = newDesire;
		document.getElementById("understand").innerHTML = newUnderstand;
		document.getElementById("interests").innerHTML = newInterests;
		document.getElementById("love").innerHTML = newLove;
		document.getElementById("spacial").innerHTML = newSpacial;
		document.getElementById("mechanical").innerHTML = newMechanical;
		document.getElementById("valuable").innerHTML = newValuable;
		document.getElementById("foray").innerHTML = newForay;
		document.getElementById("webDev").innerHTML = newWebDev;
		document.getElementById("webSkillz").innerHTML = newWebSkillz;
		document.getElementById("projects").innerHTML = newProjects;
		document.getElementById("quote").innerHTML = newQuote;
		document.getElementById("signOff").innerHTML = newSignOff;
		document.getElementById("name").innerHTML = newName;

	}