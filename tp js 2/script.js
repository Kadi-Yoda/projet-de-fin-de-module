
var a="";
var b="";
var c="";

var z="";
var x="";
var y= "";



function jeux1(){
	a=document.getElementById('joueur1');
	b=prompt('entrez votre nom');
	c=prompt('entrez un nombre');
}
function jeux2(){
	z=document.getElementById('joueur2');
	x=prompt('entrez votre nom');
	y=prompt('entrez un nombre');
}
function gagnant(){
	if (c>y) {
		document.getElementById('reponse').innerHTML=b +'est le gagnant';
		
	}
	else if(c<y){
		document.getElementById('reponse').innerHTML=x +'est le gagnant';
	}
	else{
		document.getElementById('reponse').innerHTML= b +'est egal a '+ x;
	}
	
}
