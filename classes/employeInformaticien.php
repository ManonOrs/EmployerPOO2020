<?php

class employeInformaticien extends employer {
    protected projet $projet;

  public  function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire, projet $projet) { 
      parent:: __construct($pnum,$pnom,$pprenom,$pddn,$psalaire);
      $this->projet = $projet;
    }

}
