var departements = [ 49, 6, 75 ];
var situations = [ 'campagne', 'ville' ];
var extensions = {
	'garage' : 0.5,
	'piscine' : 1,
}

function Localisation(dpt, sit) {
	if(arguments.length==0){
		dpt=49;
		sit='campagne';
	}

	if (departements.includes(dpt)) {
		this.departement = dpt;
	}
	if (situations.includes(sit)) {
		this.situation = sit;
	}
	
	this.toText = () => {
		return "Departement : "+this.departement+"\nSituation :"+this.situation;
	}
}

function Maison (loc, ext) {
	var D = {
		49 : 0,
		6 : 2,
		75 : 4
	}
	var S = {
		'campagne' : 0,
		'ville' : 1.5
	}


	this.loc = loc;

	ext.foreach( function (e) {
		if (extensions.includes(e)){
			this.extensions.push(e);
		}
	});

	this.surcout = D[this.loc.departement]+S[this.loc.situation];

	this.toText = () => {
		return "Departement : "+this.loc.departement+"\nSituation :"+this.loc.situation+"\nExtentions :"+this.ext+"\nSurcout :"+this.surcout;
	}	
}

// Question 1
var l6c = new Localisation(6, 'campagne');
console.log(l6c.toText());
// Departement : 6
// Situation : campagne

// Question 2
var lDefaut = new Localisation();
console.log(lDefaut.toText());
// Departement : 49
// Situation : campagne

// Question 3
var m75vgp = new Maison(new Localisation(75, 'ville'), [ 'garage', 'piscine' ]);
console.log(m75vgp.toText());
// Departement : 75
// Situation : ville
// Extensions : garage, piscine
// Surcoût : 7


/*

// Question 4
var mDefaut = new Maison();
console.log(mDefaut.toText());
// Departement : 49
// Situation : campagne
// Extensions :
// Surcoût : 0

// Questions 5 & 6
var maisons = [];
for(var d=0; d<3; ++d) {
	let dpt = departements[d];
	for(var s=0; s<2; ++s) {
		let sit = situations[s];
		for(var e=0; e<4; ++e) {
			let exts = Object.entries(extensions).map(v => v[0]).filter(function(v,k) { return ((k+1) & e) != 0; });
			let maison = new Maison(new Localisation(dpt,sit),exts);
			// console.log(maison.toText());
			maisons.push(maison);
		}
	}
}
/**/
