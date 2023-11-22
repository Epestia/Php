<?php
    class Personne {
        public int $idPersonne;
        public string $nomPersonne;
        public string $prenomPersonne;
        public string $mailPersonne;
        public int $numTelPersonne;
        public int $agesPersonne;
        public string $numNationalPersonne; 
        public string $dateNaissancePersonne;
        public string $passWordPersonne;
        public string $rolePersonne;

        public function __construct(int $idPersonne, string $nomPersonne, string $prenomPersonne, string $mailPersonne, int $numTelPersonne,
        int $agesPersonne, string $numNationalPersonne, string $dateNaissancePersonne, string $passWordPersonne, string $rolePersonne) 
        {

            $this->idPersonne = $idPersonne;
            $this->nomPersonne = $nomPersonne;
            $this->prenomPersonne = $prenomPersonne;
            $this->mailPersonne = $mailPersonne;
            $this->numTelPersonne = $numTelPersonne;
            $this->agesPersonne = $agesPersonne;
            $this->numNationalPersonne = $numNationalPersonne;
            $this->dateNaissancePersonne = $dateNaissancePersonne;
            $this->passWord = $passWordPersonne;
            $this->rolePersonne = $rolePersonne;
        }
    }
?>
