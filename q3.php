<?php
function pourcentage(string $type, int $pos, int $neg) :void{
	try{
		switch ($type) {
			case 'positif':
				$p = $pos/($pos+$neg)*100;
				break;
			case 'negatif':
				$p = $neg/($pos+$neg)*100;
				break;
			default:
				throw new Exception("### Err: division par zero", 1);
				echo 'nope<br>';
				break;
		}
		echo 'le pourcentage de '.$type.' est '.$p.' %<br>';
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}
?>
