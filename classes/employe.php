<?php

class employe {
    protected int $numero;
    protected string $nom;
    protected string $prenom;
    protected DateTime $dateDeNaissance;
    protected float $salaireM;
    
    public function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire) {
        $this->numero = $pnum;
        $this->nom = $pnom;
        $this->prenom = $pprenom;
        $this->dateDeNaissance = $pddn;
        $this->salaireM = $psalaire;
    }
    
    function getNumero(): int {
        return $this->numero;
    }

    function getNom(): string {
        return $this->nom;
    }

    function getPrenom(): string {
        return $this->prenom;
    }

    function getDateDeNaissance(): DateTime {
        return $this->dateDeNaissance;
    }

    function getSalaireM(): float {
        return $this->salaireM;
    }

    function setSalaireM(float $salaireM): void {
        $this->salaireM = $salaireM;
    }

    public function __toString(): string {
        return $this->numero . " - " .$this->getNom() . " - " .$this->getPrenom() . " - " .$this->dateDeNaissance->format('d/m/Y') . " - " .$this->getSalaireM();
    }
    
}