
function isAnneeBissextile(annee){
	
	var annee = prompt('Entrez une année');
	if ((annee%4==0) && ((annee%100!=0)||(annee%400==0))) {
		
		alert(annee + "est une année bissextile");
	}
	else {
		alert(annee + "n'est une année bissextile");
	}

} 