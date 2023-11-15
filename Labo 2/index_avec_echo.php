<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="data:;base64,iVBORw0KGgo="> 
    <title>Labo 2 : Serialization</title>
</head>
<body>
    <h1>Exercices Labo 2: Serialization</h1>
<?php
    //creation de la classe Serializator
    class Serializator {
        //creation de la fonction saveState (serialize)
        public function saveState($toSave, $filename) {
            $handle = fopen($filename, "w");
            fwrite($handle, serialize($toSave));
            fclose($handle);
        }
        //creation de la fonctionj RetrieveObject (unserialize)
        public function RetrieveObject($filename) {
            $handle = fopen($filename, "r");
            $filestring = fread($handle, filesize($filename));
            fclose($handle);
            return unserialize($filestring);
        }
    }

    //creation de la classe Etudiant
    class Etudiant {
        public string $nomEtudiant;
        public string $prenomEtudiant;
        public int $ageEtudiant;
        
        //constructeur
        public function __construct(string $nomEtudiant, string $prenomEtudiant, int $ageEtudiant) {
            $this->nomEtudiant = $nomEtudiant;
            $this->prenomEtudiant = $prenomEtudiant;
            $this->ageEtudiant = $ageEtudiant;
        }
    }

    //creation de la classe Classe
    class Classe {
        public string $nomClasse;
        public int $nbrEtudiants;
        public array $etudiants = [];

        //constructeur
        public function __construct(string $nomClasse, int $nbrEtudiants) {
            $this->nomClasse = $nomClasse;
            $this->nbrEtudiants = $nbrEtudiants;
        }

        //fonction pour ajouter un Etudiant dans la classe Classe
        public function ajouterEtudiant(Etudiant $etudiant): void {
            $this->etudiants[] = $etudiant;
        }

        //fonction pour afficher les information de la classe Classe
        public function afficherInformations(): void {
            echo "Nom de la classe: " . $this->nomClasse . "<br>";
            echo "Nombre d'étudiants: " . $this->nbrEtudiants . "<br>";
            echo "Liste des étudiants: <br>";
            foreach ($this->etudiants as $etudiant) {
                echo "Nom: " . $etudiant->nomEtudiant . "<br>";
                echo "Prénom: " . $etudiant->prenomEtudiant . "<br>";
                echo "Âge: " . $etudiant->ageEtudiant . "<br>";
                echo "<br>";
            }
        }
        
    }

    // Création d'une instance de la classe Classe
    $classe1 = new Classe("Classe A", 3);

    // Ajout d'étudiants à la classe
    $etudiant1 = new Etudiant("Dupont", "Jean", 20);
    $etudiant2 = new Etudiant("Martin", "Sophie", 22);
    $etudiant3 = new Etudiant("Lefevre", "Pierre", 21);

    $classe1->ajouterEtudiant($etudiant1);
    $classe1->ajouterEtudiant($etudiant2);
    $classe1->ajouterEtudiant($etudiant3);

    // Utilisation de Serializator pour sauvegarder la classe
    $serializator = new Serializator();
    $serializator->saveState($classe1, "classe_serialized.txt");

    // Utilisation de unserialize pour récupérer la classe
    $classeRecuperee = unserialize(file_get_contents("classe_serialized.txt"));

    // Affichage des informations de la classe récupérée
    $classeRecuperee->afficherInformations();

    // Vérification si la désérialisation a réussi 
    if (is_object($classeRecuperee)) {
        echo "Vérification apres désérialisation ";
        $classeRecuperee->afficherInformations();
    } else {
        echo "La désérialisation a échoué. Pignouf";
    }

    ?>
</body>
</html>