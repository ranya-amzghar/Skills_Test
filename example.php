<?php

declare(strict_types=1);

/**
 * =======================================================================
 * LAB : Approfondir les bases de PHP
 * Démonstration pratique des 3 notions clés :
 * 1. Gestion des erreurs et des exceptions
 * 2. Namespaces
 * 3. Traits
 *
 * Application au projet technique : Article, Section, Journaliste
 * Auteure : Ranya Amzghar | Encadrant : Essarraj Fouad
 * =======================================================================
 */

// -----------------------------------------------------------------------
// NOTION 1 : DÉFINITION DE L'EXCEPTION PERSONNALISÉE
// -----------------------------------------------------------------------
namespace App\Exceptions {
    use Exception;

    class ValidationException extends Exception
    {
        // Exception métier dédiée aux erreurs de validation des données
    }
}

// -----------------------------------------------------------------------
// NOTION 3 : DÉFINITION DU TRAIT
// -----------------------------------------------------------------------
namespace App\Traits {
    trait Slugifiable
    {
        /**
         * Transforme un texte brut en slug d'URL sécurisé
         */
        public function genererSlug(string $texte): string
        {
            // Remplace les caractères non alphabétiques par des tirets
            $texte = preg_replace('~[^\pL\d]+~u', '-', $texte);
            $texte = trim((string)$texte, '-');
            return strtolower($texte);
        }
    }
}

// -----------------------------------------------------------------------
// NOTION 2 : DÉFINITION DES CLASSES DANS LE NAMESPACE App\Models
// -----------------------------------------------------------------------
namespace App\Models {
    use App\Exceptions\ValidationException;
    use App\Traits\Slugifiable;

    /**
     * Classe Article : utilise le Trait Slugifiable
     */
    class Article
    {
        use Slugifiable;

        public function __construct(
            public string $titre,
            public string $contenu,
            public string $auteur = "Rédaction"
        ) {}

        public function getUrl(): string
        {
            return "/articles/" . $this->genererSlug($this->titre);
        }

        public function afficher(): string
        {
            return "Article : '{$this->titre}' par {$this->auteur} (" . strlen($this->contenu) . " car.)";
        }
    }

    /**
     * Classe Section : utilise également le Trait Slugifiable (Partage de code)
     */
    class Section
    {
        use Slugifiable;

        public function __construct(
            public string $nom,
            public string $description = ""
        ) {}

        public function getUrl(): string
        {
            return "/rubrique/" . $this->genererSlug($this->nom);
        }
    }

    /**
     * Classe Journaliste : applique la gestion des exceptions
     */
    class Journaliste
    {
        public function __construct(
            public string $nom,
            public string $email
        ) {
            // Validation stricte du nom
            if (trim($this->nom) === '') {
                throw new ValidationException("Le nom du journaliste ne peut pas être vide.");
            }

            // Validation stricte du format de l'e-mail
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                throw new ValidationException("Adresse e-mail invalide pour '{$this->nom}' : {$this->email}");
            }
        }

        public function getPresentation(): string
        {
            return "Journaliste : {$this->nom} <{$this->email}>";
        }
    }
}

// -----------------------------------------------------------------------
// SCRIPT PRINCIPAL D'EXÉCUTION ET DE TEST DES 3 NOTIONS
// -----------------------------------------------------------------------
namespace {
    use App\Exceptions\ValidationException;
    use App\Models\Article;
    use App\Models\Journaliste;
    use App\Models\Section;

    echo "========================================================\n";
    echo "  LAB PHP : DEMONSTRATION PRATIQUE DES NOTIONS CLES   \n";
    echo "========================================================\n\n";

    // -------------------------------------------------------------------
    // TEST 1 : NAMESPACES (Organisation et instanciation)
    // -------------------------------------------------------------------
    echo "[1] TEST DES NAMESPACES (App\\Models)\n";
    echo "--------------------------------------------------------\n";
    $article = new Article(
        "Nouveautes PHP 8 et Architecture Propre",
        "Dans ce lab, nous decouvrons les exceptions, les namespaces et les traits.",
        "Ranya Amzghar"
    );
    echo "Instance creee avec succes dans App\\Models\\Article\n";
    echo $article->afficher() . "\n\n";

    // -------------------------------------------------------------------
    // TEST 2 : TRAITS (Partage de la methode genererSlug entre 2 classes)
    // -------------------------------------------------------------------
    echo "[2] TEST DU TRAIT (App\\Traits\\Slugifiable)\n";
    echo "--------------------------------------------------------\n";
    $section = new Section("Sport & Technologie 2026", "Actualites tech et sportives");

    echo "Slug Article  : " . $article->getUrl() . "\n";
    echo "Slug Section  : " . $section->getUrl() . "\n";
    echo "-> La methode genererSlug() est partagee sans duplication de code !\n\n";

    // -------------------------------------------------------------------
    // TEST 3 : GESTION DES ERREURS ET EXCEPTIONS (try / catch / throw)
    // -------------------------------------------------------------------
    echo "[3] TEST DES EXCEPTIONS (App\\Exceptions\\ValidationException)\n";
    echo "--------------------------------------------------------\n";

    // Cas nominal (succès)
    try {
        $journalisteValide = new Journaliste("Ranya Amzghar", "ranya@solicode.co");
        echo "Succes : " . $journalisteValide->getPresentation() . "\n";
    } catch (ValidationException $e) {
        echo "Erreur inattendue : " . $e->getMessage() . "\n";
    }

    // Cas d'erreur contrôlée (échec intercepté)
    try {
        echo "\nTentative d'enregistrement avec un e-mail errone :\n";
        $journalisteInvalide = new Journaliste("Fouad", "email-invalide-sans-arobase");
        echo "Ce message ne doit pas s'afficher.\n";
    } catch (ValidationException $e) {
        echo "[OK] Exception interceptee avec succes :\n";
        echo "     --> " . $e->getMessage() . "\n";
        echo "     --> Le serveur continue de fonctionner sans interruption !\n";
    }

    echo "\n========================================================\n";
    echo "  TOUS LES TESTS SONT VALIDÉS AVEC SUCCÈS (PHP 8.5)   \n";
    echo "========================================================\n";
}

