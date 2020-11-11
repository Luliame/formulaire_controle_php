<html>
<body>
	<?php
	require_once 'erreur.php';
	require_once 'q3.php';
	require_once 'Personne.php';

	echo "Q2<br>";
	$TMessage=array(
	"1"=>"Erreur inconnue",
	"2"=>"division par zero",
	"3"=>"valeur invalide"
	);
	lister($TMessage);

	echo "<br>Q3<br>";
	pourcentage('positif', 10, 40);
	pourcentage('negatif', 10, 40);
	pourcentage('lol', 10, 40);

	echo "<br><br>classe<br>";
	echo "Q1<br>";
	$gui = new Personne('valEntin','guillaume','17/04/2000','guillaume.valentin@etu.uca.fr');
	echo $gui->toString();
	?>
	<form action="verif.php" method="post">
		<br>
	    <label>Nom :</label>
	    <input type="text" name="nom">
	    <br>
	    <label>Prénom :</label>
	    <input type="text" name="prenom">
	    <br>
	    <label>Date de naissance :</label>
	    <input type="text" name="ddn">
	    <br>
	    <label>E-mail :</label>
	    <input type="text" name="email">
	    <br>
	    <input type="submit" value="SUBMIT">
	</form>
</body>
</html>
