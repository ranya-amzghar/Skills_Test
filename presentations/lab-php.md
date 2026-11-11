---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #0f111a;
    color: #e2e8f0;
    font-family: 'Segoe UI', system-ui, sans-serif;
    padding: 50px 70px;
    font-size: 24px;
  }
  h1 {
    color: #818cf8;
    font-size: 40px;
    border-bottom: 2px solid #2e3456;
    padding-bottom: 10px;
    margin-bottom: 20px;
  }
  h2 {
    color: #818cf8;
    font-size: 30px;
    border-bottom: 1px solid #2e3456;
    padding-bottom: 6px;
    margin-bottom: 14px;
  }
  h3 {
    color: #a5b4fc;
    font-size: 22px;
    margin-bottom: 8px;
  }
  p {
    color: #e2e8f0;
    font-size: 22px;
    margin: 6px 0;
  }
  ul li, ol li {
    color: #e2e8f0;
    font-size: 20px;
    margin-bottom: 8px;
    line-height: 1.5;
  }
  strong {
    color: #fbbf24;
  }
  em {
    color: #c084fc;
  }
  code {
    background-color: #1e1b4b;
    color: #e0e7ff;
    font-family: 'Consolas', monospace;
    font-size: 17px;
    padding: 2px 6px;
    border-radius: 4px;
  }
  pre {
    background-color: #181829;
    border: 1px solid #2e3456;
    border-radius: 6px;
    padding: 12px 16px;
    font-size: 16px;
    margin: 10px 0;
  }
  pre code {
    background-color: transparent;
    padding: 0;
  }

  /* --- Table styling (Pleine largeur & Adaptatif Indigo sans écrasement) --- */
  table {
    width: 100% !important;
    max-width: 100% !important;
    display: table !important;
    align-self: stretch !important;
    table-layout: auto !important;
    border-collapse: collapse !important;
    margin: 16px 0 !important;
    border: 1px solid #2e3456 !important;
    border-radius: 6px !important;
    overflow: hidden !important;
  }
  th {
    background-color: #3730a3 !important;
    color: #ffffff !important;
    padding: 12px 18px !important;
    border: 1px solid #2e3456 !important;
    border-bottom: 2px solid #818cf8 !important;
    text-align: left !important;
    font-size: 19px !important;
    font-weight: 700 !important;
    letter-spacing: 0.03em !important;
    white-space: nowrap !important;
  }
  td {
    background-color: #13141f !important;
    color: #e2e8f0 !important;
    padding: 11px 18px !important;
    border: 1px solid #2e3456 !important;
    font-size: 18px !important;
  }
  tr:nth-child(even) td {
    background-color: #0f1019 !important;
  }
  tr:hover td {
    background-color: #1e1b4b !important;
  }

  /* --- Lead (slide finale) --- */
  section.lead {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    background: linear-gradient(160deg, #0f111a 60%, #1e1b4b 100%);
  }
  section.lead h1 {
    border-bottom: none;
    font-size: 46px;
    margin-bottom: 12px;
  }

  /* --- Cover (Page de garde : logos gauche/droite, texte à gauche, sans ombre) --- */
  section.cover {
    display: flex !important;
    flex-direction: column !important;
    justify-content: space-between !important;
    align-items: flex-start !important;
    text-align: left !important;
    background: #0f111a !important;
    padding: 50px 70px !important;
  }
  section.cover .cover-header {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    width: 100% !important;
    margin-bottom: 20px !important;
  }
  section.cover .cover-header img {
    height: 55px !important;
    object-fit: contain !important;
    filter: none !important;
    margin: 0 !important;
  }
  section.cover .cover-body {
    display: flex !important;
    flex-direction: column !important;
    align-items: flex-start !important;
    text-align: left !important;
    width: 100% !important;
    margin: auto 0 !important;
  }
  section.cover h1 {
    font-size: 44px !important;
    font-weight: 800 !important;
    color: #818cf8 !important;
    border: none !important;
    border-bottom: none !important;
    box-shadow: none !important;
    text-shadow: none !important;
    margin: 0 0 10px 0 !important;
    padding: 0 !important;
    text-align: left !important;
  }
  section.cover p.description {
    font-size: 24px !important;
    color: #e2e8f0 !important;
    border: none !important;
    box-shadow: none !important;
    text-shadow: none !important;
    background: transparent !important;
    margin: 0 !important;
    padding: 0 !important;
    text-align: left !important;
  }
  section.cover .meta {
    display: flex !important;
    flex-direction: column !important;
    align-items: flex-start !important;
    gap: 6px !important;
    margin-top: 25px !important;
    text-align: left !important;
  }
  section.cover .meta p {
    font-size: 20px !important;
    color: #94a3b8 !important;
    margin: 0 !important;
    padding: 0 !important;
    border: none !important;
    box-shadow: none !important;
    text-shadow: none !important;
    text-align: left !important;
  }
  section.cover .meta strong {
    color: #fbbf24 !important;
  }
---
<!-- _class: cover -->
<!-- _paginate: false -->

<div class="cover-header">
  <img src="logo_solicode.png" alt="Solicode">
  <img src="ofppt_logo.png" alt="OFPPT">
</div>

<div class="cover-body">
  <h1>LAB : APPROFONDIR LES BASES DE PHP</h1>
  <p class="description">Exceptions, Namespaces et Traits dans notre architecture projet</p>
  <div class="meta">
    <p><strong>Réalisé par :</strong> Ranya Amzghar</p>
    <p><strong>Encadré par :</strong> Essarraj Fouad</p>
  </div>
</div>

<!-- Je vais vous présenter ce Lab pour approfondir les bases du langage PHP. -->

---

# 02 — Plan

1. Stack technique & Positionnement
2. Définitions des notions clés
3. Problème et besoin
4. Solution et pratique
5. Résultats et conclusion

<!-- Voici les cinq parties de notre présentation pour découvrir ces concepts. -->

---

# 03 — Stack technique

### Technologies utilisées dans le projet technique

| # | Technologie | Rôle principal | Utilité |
|---|---|---|---|
| **1** | **Native PHP** | Moteur backend serveur | Base du développement, logique et algorithmique |
| **2** | **Laravel** | Framework web PHP | Architecture MVC et outillage avancé |
| **3** | **Alpine JS** | Framework JS léger | Interactivité réactive côté client |
| **4** | **Tailwind CSS** | Framework CSS utility-first | Mise en page moderne et responsive |
| **5** | **MySQL** | Base relationnelle | Persistance et intégrité des données |
| **6** | **Preline** | Composants d'interface UI | Bibliothèque de composants prêts à l'emploi |
| **7** | **Kotlin** | Langage d'application mobile | Application mobile connectée à notre API |

<!-- Notre stack technique repose sur sept technologies pour créer une solution web complète. -->

---

# 03 — Positionnement de PHP dans notre stack

```
[ Frontend Web : Alpine JS + Tailwind CSS / Preline ]
                         │
                         ▼ (Requêtes HTTP)
          ┌──────────────────────────────┐
          │   Laravel (Framework PHP)    │
          │              ▲               │
          │              │               │
          │    ▶ Native PHP (Socle) ◀    │ ──➔ [ Base de Données : MySQL ]
          └──────────────────────────────┘
                         ▲
                         │ (API REST)
             [ Mobile : Kotlin Android ]
```

- **Le socle backend :** Native PHP est la base de notre développement côté serveur.
- **Règle d'apprentissage :** Comprendre le fonctionnement du langage avant d'utiliser Laravel.
- **Bénéfice :** Maîtriser le code natif garantit une utilisation experte et sécurisée des frameworks.

<!-- PHP natif est la fondation serveur indispensable avant de passer au framework Laravel. -->

---

# 04 — Définitions : Erreurs et Exceptions

| Concept | Définition simple | Impact dans l'application |
|---|---|---|
| **Erreurs** | Problème détecté par le moteur PHP (syntaxe, mémoire, ressource absente) | Interrompt ou perturbe l'exécution standard du script |
| **Exceptions** | Objet représentant une anomalie, déclenché volontairement via `throw` | Peut être intercepté et traité sans faire planter le serveur |

```
Erreur non gérée   ──➔  Page blanche / Crash système / Fuite de données sensibles
Exception capturée ──➔  Message contrôlé + Journalisation + Continuité de service
```

<!-- Les erreurs et les exceptions permettent de contrôler le comportement du programme. -->

---

# 04 — Définitions : Namespaces et Traits

| Concept | Définition simple | Rôle dans l'architecture |
|---|---|---|
| **Namespace** | Espace de nommage virtuel pour organiser les classes | Évite les conflits de noms entre classes identiques |
| **Trait** | Module contenant des méthodes réutilisables | Partage du code horizontal entre plusieurs classes |

- **Namespace :** Compartimente logiquement les fichiers (ex: `App\Models` vs `Vendor\Library`).
- **Trait :** Solution élégante pour réutiliser des méthodes sans utiliser d'héritage multiple.

<!-- Les namespaces organisent les dossiers virtuels et les traits partagent des méthodes. -->

---

# 05 — Problème et besoin

### Description du problème
Pendant la réalisation de l'architecture de notre projet technique, nous avons découvert que nous devons maîtriser certaines notions importantes de PHP pour organiser notre code et améliorer sa qualité :
- **Gestion des erreurs et des exceptions** : Sécuriser les traitements et les formulaires.
- **Namespaces** : Éviter les collisions de noms de classes.
- **Traits** : Réutiliser du code transversal sans répétition.

### Identification du besoin & Importance
- **Besoin :** Comprendre ces notions et savoir les utiliser concrètement dans le projet.
- **Importance du Lab :** Écrire un code mieux organisé, réutilisable et plus facile à maintenir.

<!-- Notre projet technique grandit et exige une structure propre pour éviter les blocages. -->

---

# 06 — Solution et pratique — Vue d'ensemble

### Architecture inspirée du projet technique (News App)

```
                        [ Trait : App\Traits\Slugifiable ]
                                      │
                 ┌────────────────────┴────────────────────┐
                 ▼                                         ▼
      [ App\Models\Article ]                    [ App\Models\Section ]
                 │                                         │
                 └────────────────────┬────────────────────┘
                                      ▼
                        [ App\Models\Journaliste ]
                                      │
                                      ▼
                  Validation ──➔ throw new ValidationException()
                                      │
                                      ▼
                         try { ... } catch (Exception $e)
```

<!-- Ce schéma résume l'organisation conjointe de nos classes, du trait et des exceptions. -->

---

# 06 — 1. Gestion des erreurs et des exceptions

Comprendre les erreurs et découvrir `try`, `catch` et `throw` :

```php
namespace App\Exceptions;
use Exception;

class ValidationException extends Exception {}

// Déclenchement d'une exception dans Journaliste
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    throw new ValidationException("Format d'e-mail invalide : " . $email);
}
```

```php
try {
    $journaliste = new Journaliste("Ranya", "email_invalide");
} catch (ValidationException $e) {
    echo "Erreur interceptée : " . $e->getMessage();
}
```

- **`throw`** : Émet le signal d'erreur / **`catch`** : Isole et traite l'incident proprement

<!-- Le mot-clé throw signale une valeur incorrecte et catch permet de traiter le problème. -->

---

# 06 — 2. Namespace

Comprendre, déclarer et utiliser un namespace avec nos classes :

```php
namespace App\Models;

class Article 
{
    public function __construct(
        public string $titre,
        public string $contenu
    ) {}

    public function afficher(): string 
    {
        return $this->titre . " (" . strlen($this->contenu) . " caractères)";
    }
}
```

- **Déclaration :** `namespace App\Models;` isole la classe dans son propre espace
- **Importation :** `use App\Models\Article;` permet son appel dans d'autres modules
- **Protection :** Zéro collision même si une bibliothèque externe nomme aussi une classe `Article`

<!-- Déclarer un namespace place notre classe Article dans un dossier virtuel sans conflit. -->

---

# 06 — 3. Trait

Partager du code entre plusieurs classes (`Article` et `Section`) :

```php
namespace App\Traits;

trait Slugifiable 
{
    public function genererSlug(string $texte): string 
    {
        $texte = preg_replace('~[^\pL\d]+~u', '-', $texte);
        return strtolower(trim($texte, '-'));
    }
}
```

```php
namespace App\Models;
use App\Traits\Slugifiable;

class Section {
    use Slugifiable; // Intégration immédiate de genererSlug()
    public function __construct(public string $nom) {}
}
```

<!-- Le trait Slugifiable est partagé entre les classes Article et Section sans duplication. -->

---

# 06 — Lien avec le projet technique

### Application directe dans l'architecture de presse

| Composant du projet | Notion PHP appliquée | Rôle métier concret |
|---|---|---|
| **`Article` & `Section`** | Trait `Slugifiable` | Génération uniforme d'URLs propres pour le référencement |
| **`Journaliste`** | Exception `ValidationException` | Contrôle d'intégrité avant enregistrement en base MySQL |
| **Dossier `src/Models`** | Namespace `App\Models` | Rangement conforme au standard PSR-4 prêt pour Laravel |

- Les exemples complets et exécutables sont créés dans le fichier dédié **`example.php`**.

<!-- Ces trois notions sont directement appliquées sur les modèles de notre application de presse. -->

---

# 07 — Résultats et conclusion

### Résultats obtenus

- **Compréhension des trois notions :** Maîtrise des exceptions, namespaces et traits.
- **Réalisation d'exemples pratiques :** Code source complet et exécutable sous PHP 8.
- **Meilleure organisation :** Suppression totale des risques de collision de noms.
- **Réutilisation sans duplication :** Factorisation de la génération de slugs d'URL.
- **Amélioration de la fiabilité :** Traitement transparent des erreurs sans coupure de service.

<!-- Nos tests pratiques confirment la validation complète des objectifs fixés. -->

---

# 07 — Conclusion générale

### Bilan et perspectives

Ce Lab nous a permis d'approfondir nos connaissances en PHP et de découvrir des notions importantes pour développer des applications mieux organisées et plus faciles à maintenir.

```
PHP Natif Structuré  ──➔  Code Propre & Modulaire  ──➔  Passage Fluide vers Laravel
```

- **Acquis majeurs :** Rigueur architecturale, modularité, conformité aux standards modernes.
- **Continuité :** Ces compétences forment le cœur fonctionnel du framework Laravel.

<!-- Ce lab renforce nos compétences en programmation et nous prépare au framework Laravel. -->

---

<!-- _class: lead -->

# MERCI POUR VOTRE ATTENTION !

**LAB : Approfondir les bases de PHP — Validé avec succès**

### Des questions ou des échanges ?

<!-- Merci pour votre attention. Je suis à votre écoute pour vos questions. -->

