---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #121316;
    color: #e2e8f0;
    font-family: 'Segoe UI', system-ui, sans-serif;
    padding: 50px 70px;
    font-size: 24px;
  }
  h1 {
    color: #ff4438;
    font-size: 40px;
    border-bottom: 2px solid #2d2629;
    padding-bottom: 10px;
    margin-bottom: 20px;
  }
  h2 {
    color: #ff4438;
    font-size: 30px;
    border-bottom: 1px solid #2d2629;
    padding-bottom: 6px;
    margin-bottom: 14px;
  }
  h3 {
    color: #fb7185;
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
    color: #f43f5e;
  }
  code {
    background-color: #211c20;
    color: #fecdd3;
    font-family: 'Consolas', monospace;
    font-size: 17px;
    padding: 2px 6px;
    border-radius: 4px;
  }
  pre {
    background-color: #1a161a;
    border: 1px solid #2d2629;
    border-radius: 6px;
    padding: 12px 16px;
    font-size: 17px;
    margin: 12px 0;
  }
  pre code {
    background-color: transparent;
    padding: 0;
  }

  /* --- Table styling (Pleine largeur & Adaptatif sans écrasement) --- */
  table {
    width: 100% !important;
    max-width: 100% !important;
    display: table !important;
    align-self: stretch !important;
    table-layout: auto !important;
    border-collapse: collapse !important;
    margin: 16px 0 !important;
    border: 1px solid #2d2629 !important;
    border-radius: 6px !important;
    overflow: hidden !important;
  }
  th {
    background-color: #881337 !important;
    color: #ffffff !important;
    padding: 11px 16px !important;
    border: 1px solid #2d2629 !important;
    border-bottom: 2px solid #ff4438 !important;
    text-align: left !important;
    font-size: 19px !important;
    font-weight: 700 !important;
    letter-spacing: 0.03em !important;
    white-space: nowrap !important;
  }
  td {
    background-color: #17181c !important;
    color: #e2e8f0 !important;
    padding: 10px 16px !important;
    border: 1px solid #2d2629 !important;
    font-size: 18px !important;
  }
  tr:nth-child(even) td {
    background-color: #111215 !important;
  }
  tr:hover td {
    background-color: #241a20 !important;
  }

  /* --- Lead (slide finale) --- */
  section.lead {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    background: linear-gradient(160deg, #121316 60%, #201317 100%);
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
    background: #121316 !important;
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
    font-size: 48px !important;
    font-weight: 800 !important;
    color: #ff4438 !important;
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
  <h1>LAB LARAVEL</h1>
  <p class="description">Découvrir et comprendre le framework Laravel</p>
  <div class="meta">
    <p><strong>Réalisé par :</strong> Ranya Amzghar</p>
    <p><strong>Encadré par :</strong> Essarraj Fouad</p>
  </div>
</div>

<!-- Je vais vous présenter les bases de Laravel en expliquant simplement son fonctionnement. -->

---

# Plan

1. Introduction à Laravel
2. C'est quoi un framework ?
3. Comment fonctionne Laravel ?
4. Route & Controller
5. View (Blade) & Model
6. Migration & Artisan
7. Composer & Structure
8. Résumé

<!-- Voici les différentes parties pour comprendre Laravel de manière simple et progressive. -->

---

# 1. Introduction à Laravel

| Pilier | Définition |
|---|---|
| **Outil** | Framework web moderne pour **PHP** |
| **Objectif** | Développement rapide, propre et sécurisé |
| **Applications** | Gestion d'école, boutiques en ligne, réseaux, API |
| **Atouts** | Syntaxe expressive, sécurité native, communauté active |

<!-- Laravel est un outil populaire en PHP pour créer facilement des sites et applications web. -->

---

# 2. C'est quoi un framework ?

### L'analogie de la maison

| Approche | Méthode | Résultat |
|---|---|---|
| **PHP seul** | Fabriquer ses briques et son ciment | Long, difficile, risque d'erreurs |
| **Avec Laravel** | Kit de construction prêt à monter | Rapide, solide, règles claires |

- **Rôle :** Éviter de réinventer la roue
- **Gain :** Outils prêts à l'emploi et organisation standardisée

<!-- Un framework donne des outils prêts à l'emploi au lieu de tout recoder à la main. -->

---

# 3. Comment fonctionne Laravel ?

```
Utilisateur  ➔  [Route]  ➔  [Controller]  ➔  [Model]  ➔  BDD
                                 │
                                 └──➔  [View]  ➔  Utilisateur
```

### L'analogie du restaurant

| Composant | Rôle dans le restaurant |
|---|---|
| **Route** | Le menu (adresse demandée) |
| **Controller** | Le serveur (organise la commande) |
| **Model** | Le cuisinier (cherche les ingrédients/données) |
| **View** | L'assiette présentée (page HTML affichée) |

<!-- Ce schéma montre comment les composants travaillent ensemble pour répondre à l'utilisateur. -->

---

# 4. C'est quoi une Route ?

Point d'entrée web : `routes/web.php`

```php
Route::get('/bonjour', function () {
    return 'Bonjour tout le monde !';
});
```

- **`Route::get`** : Action HTTP GET (demande de page)
- **`'/bonjour'`** : Adresse URL dans le navigateur
- **`function()`** : Action exécutée lors de la visite
- **`return`** : Message affiché à l'écran

<!-- Une route associe une adresse web à une action précise pour afficher un message. -->

---

# 5. C'est quoi un Controller ?

Le chef d'orchestre : `app/Http/Controllers/EtudiantController.php`

```php
namespace App\Http\Controllers;

class EtudiantController extends Controller
{
    public function index()
    {
        return view('etudiants');
    }
}
```

- **Rôle :** Reçoit la requête et prépare la réponse
- **`return view('etudiants')`** : Appelle le fichier `etudiants.blade.php`

<!-- Le contrôleur reçoit la demande et appelle la bonne vue pour afficher le résultat. -->

---

# 6. C'est quoi une View ?

Fichier visuel : `resources/views/accueil.blade.php`

```html
<!DOCTYPE html>
<html lang="fr">
<head><title>Mon École</title></head>
<body>
    <h1>Bienvenue dans notre école</h1>
    <p>Bonjour, {{ $nom }} !</p>
</body>
</html>
```

- **Vue :** Ce que l'utilisateur voit (HTML + CSS)
- **Blade :** Moteur de template simple (`{{ $nom }}`)

<!-- La vue contient le code HTML et Blade permet d'afficher les variables facilement. -->

---

# 7. C'est quoi un Model ?

Gestion des données : `app/Models/Etudiant.php`

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['nom', 'email', 'classe'];
}
```

- **Rôle :** Représente la table `etudiants` en base de données
- **Eloquent ORM :** Manipulation des données sous forme d'objets PHP
- **`$fillable`** : Colonnes autorisées à l'enregistrement

<!-- Le modèle représente une table de données et permet de lire les informations en PHP. -->

---

# 8. C'est quoi une Migration ?

Carnet de bord du schéma : `database/migrations/..._table.php`

```php
Schema::create('etudiants', function (Blueprint $table) {
    $table->id();
    $table->string('nom');
    $table->string('email');
    $table->string('classe');
    $table->timestamps();
});
```

- **Rôle :** Créer et faire évoluer les tables en code PHP
- **Équipe :** Schéma identique partagé sans fichier SQL externe

<!-- Les migrations définissent la structure des tables directement en code PHP. -->

---

# 9. C'est quoi Artisan ?

Console d'automatisation intégrée à Laravel :

| Commande | Rôle |
|---|---|
| `php artisan serve` | Lance le serveur local de test |
| `php artisan route:list` | Affiche toutes les adresses enregistrées |
| `php artisan make:model Etudiant -m` | Génère le Modèle et sa Migration en 1 seconde |
| `php artisan migrate` | Crée les tables réelles dans la base de données |

<!-- Artisan est l'assistant en ligne de commande pour automatiser la création des fichiers. -->

---

# 10. C'est quoi Composer ?

Gestionnaire de dépendances officiel de PHP :

```bash
composer create-project laravel/laravel ecole-projet
```

- **Rôle :** Magasin d'applications pour télécharger Laravel et ses bibliothèques
- **Action :** Télécharge et installe le projet complet dans le dossier `ecole-projet`

<!-- Composer installe automatiquement Laravel et toutes les bibliothèques utiles. -->

---

# 11. Structure d'un projet Laravel

| Dossier | Contenu |
|---|---|
| **`app/`** | Cœur du code : Models, Controllers |
| **`routes/`** | Points d'entrée web (`web.php`) |
| **`resources/views/`** | Templates HTML et Blade |
| **`database/`** | Migrations et données de test |
| **`public/`** | Fichiers publics (images, CSS, JS) |
| **`config/`** | Options générales de configuration |
| **`vendor/`** | Bibliothèques externes (Composer) |

<!-- Ce tableau récapitule les sept dossiers principaux d'un projet Laravel. -->

---

# 12. Résumé

| Notion | Rôle essentiel |
|---|---|
| **Route** | Adresse URL demandée |
| **Controller** | Chef d'orchestre |
| **Model** | Données et base |
| **View (Blade)** | Interface HTML |
| **Migration** | Schéma de table |
| **Artisan / Composer** | Outils de développement |

> **À retenir :** Laravel sépare les responsabilités avec **MVC** pour coder plus vite et plus proprement.

<!-- En résumé, Laravel organise le code pour rendre les applications claires et faciles à maintenir. -->

---
<!-- _class: lead -->
<!-- _paginate: false -->

# Merci pour votre attention !
