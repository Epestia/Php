<?php
    private class admin{
        public int $idAdmin;
        public string $nomAdmin;
        public string $prenomAdmin;
        public string $passWordAdmin;

        public function __construct(int $idAdmin, string $nomAdmin, string $prenomAdmin, string $passWordAdmin){
            $this->idAdmin = $idAdmin;
            $this->nomAdmin = $nomAdmin;
            $this->prenomAdmin = $prenomAdmin;
            $this->passWord = $passWordAdmin;
        }
    }
?>