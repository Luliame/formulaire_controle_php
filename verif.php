<?php
require 'Personne.php';
function verif(string $type, $chaine):string{
	switch ($type) {
		case 'email':
			if (!filter_var($chaine, FILTER_VALIDATE_EMAIL)) {
				throw new Exception("### Err saisie: mail invalide".$chaine, 1);
			}
			break;
		case 'nom':
			$chaine=strip_tags($chaine);
			break;
		case 'prenom':
			$chaine=strip_tags($chaine);
			break;
		case 'ddn':
			if (!preg_match("/[0-3][0-9]\/[0-1][0-9]\/[0-9]{4}/",$chaine)) {
				throw new Exception("### Err saisie: date invalide".$chaine, 1);
			}
			break;
		default:
			throw new Exception("### Err: saisie non valide", 1);
			break;
	}
	return $chaine;
}

$cpt=0;
$kPost=array_keys($_POST);
try {
	foreach ($_POST as $i) {
		if (empty($i)) {
			throw new Exception("### Err saisie: champ(s) nul".$i, 1);
		}
		verif($kPost[$cpt], $i);
		$cpt+=1;
	}

	$nom = strtoupper(htmlspecialchars($_POST["nom"]));
	$prenom = ucfirst(htmlspecialchars($_POST["prenom"]));
	$ddn = htmlspecialchars($_POST["ddn"]);
	$email = htmlspecialchars($_POST["email"]);

	$p = new Personne($nom, $prenom, $ddn, $email);
	echo $p->toString().'<br>';
} catch (Exception $e) {
	echo $e->getMessage().'<br>';
}
?>
