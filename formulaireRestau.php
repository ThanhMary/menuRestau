<!doctype html>
<html lang="fr">
      <HEAD>
		<meta charset="utf-8">
		<TITLE> Menu </TITLE>
		<link rel="stylesheet" type="text/css" href="styleformulaire.css">
     </HEAD>
	<BODY>
	<h1>
	<center><legend> VOTRE MENU DU JOUR </legend> 
	</h1>
<center><?php
$entree = array("Foie Gras Maison"=>14.00, 
				"Saumon Fumé"=>12.00, 
				"Terrine Maison et confiture d'oignons"=>9.00, 
				"Escargots de Bourgogne"=>12.00); 
	
$plat = array("Entrecôte Poêlé"=>14.80, 			
				"Gigot d'Agneau"=>14.50,
				"Confit de Canard"=>14.00, 			
				"Faux Filet Poêlé"=>13.00);
	
$dessert = array("Mousse au Chocolat"=>6.00, 			
				"Ile Flottante"=>6.00, 			
				"Fondant au Chocolat"=>6.50, 			
				"Crème Caramel"=>6.00, 			
				"Tarte Normande"=>6.50,
				"Tarte à l'Abricot"=>6.50);


if(!isset($_POST["valider"]))
				{
					//affichage formulaire
					echo '<h1>Faites votre choix (entrée, plat et dessert)   </h1>';
					// affichage du formulaire
					echo '<form method="post" action ="'.$_SERVER['PHP_SELF'].'">';
					// affichage menu déroulant entrée
					echo'<p><select name="entree">';
					foreach($entree as $choix=>$prix)
					{
						echo'<option value="'.$choix.'">'.$choix.' : '.$prix.'</option>';
					}
					echo'</select></p>';
					
					// affichage menu déroulant plat
					echo'<p><select name="plat">';
					foreach($plat as $choix1=>$prix1)
					{
						echo'<option value="'.$choix1.'">'.$choix1.' : '.$prix1.'</option>';
					}
					echo'</select></p>';
					
					// affichage menu déroulant dessert
					echo'<p><select name="dessert">';
					foreach($dessert as $choix2=>$prix2)
					{
						echo'<option value="'.$choix2.'">'.$choix2.' : '.$prix2.'</option>';
					}
					echo'</select></p>';
					
					
					echo'<input type="submit" name="valider" value="Valider" /></p>';
				}
else
				{
					echo '<h1> <table border = "5" width= 50% height= 10%  align="center">';
					// traitement formulaire
					$choix_entree = $_POST['entree'];
					$choix_plat   = $_POST['plat'];
					$choix_dessert= $_POST['dessert'];
					$Total=0.00;
					echo '<h1>l\'Addition </h1>';
					echo '<h2> Rappel de votre choix : </h2>';
					echo '<tr><td>'.$choix_entree.'</td><td>'.$entree[$choix_entree].'</td></tr>';
					$Total=$Total+$entree[$choix_entree];
					
					echo '<tr><td>'.$choix_plat.'</td><td>'.$plat[$choix_plat].'</td></tr>';
					$Total=$Total+$plat[$choix_plat];
					
					echo '<tr><td>'.$choix_dessert.'</td><td>'.$dessert[$choix_dessert].'</td></tr>';
					$Total=$Total+$dessert[$choix_dessert];
					echo '</table>';
					echo '<h1> A payer : '.$Total.' € </h1>';
					
				}

?>
<p><a href="formulaireRestau.php" > <h1>Cliquez ici pour refaire votre choix! </h1></a></p>
<p>
<center><img src="image/bon apetit.jpg" width = "280"></center>
</p>
</BODY>
</html>