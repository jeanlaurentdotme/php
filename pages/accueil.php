<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Accueil</title>
    </head>
    <body>
        <div>
        	<ul>
        	<li <?php if($p == "home"){ echo "active"; } ?>"><a href="?p=home">Accueil</a></li>
        	<li>
        		<a href="#">Exercices</a>
        			<ul>              
        				<li <?php if($p == "exo1"){ echo "active"; } ?>"><a href="?p=exo1">exercice 1</a>   
        		  		<li <?php if($p == "exo2"){ echo "active"; } ?>"><a href="?p=exo2">exercice 1</a>                 
        		  	</ul>
        	</li>
        	</ul>
        </div>
    </body>
</html>