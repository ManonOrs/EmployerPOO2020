<?php

class projet{
    protected string $codeProjet;
    protected string $nomProjet;
    protected int $dureePrevue;
    
    function __construct(string $codeProjet, string $nomProjet, int $dureePrevue) {
        $this->codeProjet = $codeProjet;
        $this->nomProjet = $nomProjet;
        $this->dureePrevue = $dureePrevue;
    }

    function getCodeProjet(): string {
        return $this->codeProjet;
    }

    function getNomProjet(): string {
        return $this->nomProjet;
    }

    function getDureePrevue(): int {
        return $this->dureePrevue;
    }

    public function __toString(): string {
        return "Projet: " .$this->getCodeProjet() . " - " .$this->getNomProjet() . " - " .$this->getDureePrevue();
    }

}