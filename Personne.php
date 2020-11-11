<?php
class Personne
{
	private $nom;
	private $prenom;
	private $ddn;
	private $email;

	function __construct(string $nom, string $prenom, string $ddn, string $email)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->ddn=$ddn;
		$this->email=$email;
	}

	public function toString() :string
	{
		return $this->nom.' '.$this->prenom.' né(e) le '.$this->ddn.' email: '.$this->email;
	}
}
?>