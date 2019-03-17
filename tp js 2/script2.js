

	var solution=Math.floor(Math.random()*50)+1;
	var coup=0;
	function randomMath(valeur)
	{
	coup=coup+1;
	if (coup>5) 
	    {
	    	partie=confirm("tu as perdu !\n Il fallait trouver :"+solution+"\n nouvelle partie?");
	    	if (partie) 
	    	{
	    		document.form1.commentaire.value="nouvelle partie...";
	    		coup=0;
	    		solution=Math.round(Math.random()*10)+1;
	    		document.form1.coup.value=0;
	    		valeur.value="";

            }
            else
            {
            	window.close();

            }

	    }
        else
        {
        if (valeur.value<solution) 
        	document.form1.commentaire.value="trop petit!";
        if(valeur.value>solution)
        	document.form1.commentaire.value="trop grand!";
        if(valeur.value==solution)
        	document.form1.commentaire.value="gagné!!!";
        document.form1.coup.value=coup;

        }
	
	}
