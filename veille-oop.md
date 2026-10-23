---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #ffffff;
    color: #1e293b;
    font-family: 'Segoe UI', system-ui, sans-serif;
    padding: 45px 65px;
    font-size: 24px;
  }
  h1 {
    color: #4338ca;
    font-size: 44px;
    margin-bottom: 16px;
  }
  h2 {
    color: #4f46e5;
    font-size: 34px;
    border-bottom: 2px solid #e2e8f0;
    padding-bottom: 8px;
    margin-bottom: 18px;
  }
  p {
    color: #334155;
    font-size: 23px;
    line-height: 1.5;
    margin: 8px 0;
  }
  ul li, ol li {
    color: #1e293b;
    font-size: 23px;
    margin-bottom: 10px;
    line-height: 1.5;
  }
  strong {
    color: #4338ca;
  }
  pre {
    background-color: #f8fafc !important;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    font-size: 20px;
    padding: 12px 16px;
  }
  pre code {
    color: #0f172a !important;
    background: transparent !important;
    font-family: 'Consolas', monospace;
    font-size: 20px;
  }
  pre code span, pre code * {
    color: #0f172a !important;
  }
  code {
    background-color: #eef2ff;
    color: #4338ca;
    padding: 2px 6px;
    border-radius: 4px;
    font-size: 20px;
  }
  blockquote {
    border-left: 4px solid #4f46e5;
    background: #eef2ff;
    padding: 10px 16px;
    color: #312e81;
    font-size: 21px;
    margin: 14px 0;
    border-radius: 0 6px 6px 0;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 14px;
    font-size: 21px;
  }
  th {
    background-color: #4338ca;
    color: #ffffff;
    padding: 10px 14px;
    border: 1px solid #3730a3;
    text-align: left;
  }
  td {
    background-color: #f8fafc;
    color: #1e293b;
    padding: 9px 14px;
    border: 1px solid #e2e8f0;
  }
  section.cover {
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: linear-gradient(135deg, #eef2ff 0%, #e0e7ff 50%, #ffffff 100%) !important;
  }
  section.cover h1 {
    color: #3730a3 !important;
    font-size: 50px;
  }
  section.cover p {
    color: #334155 !important;
  }
  section.plan {
    background-color: #f8fafc !important;
  }
---
<!-- _class: cover -->
<!-- _paginate: false -->

# La Programmation Orientée Objet (POO)

Concepts fondamentaux, architecture logicielle et pratiques modernes

**Réalisée par :** Ranya Amzghar  
**Encadrée par :** Essarraj Fouad

---
<!-- _class: plan -->

## Veille Plan

1. Introduction
2. Problem
3. Solution

---

## 1. Introduction — Qu'est-ce que la POO ?

La **Programmation Orientée Objet** (POO / *OOP*) est un paradigme de programmation qui structure une application autour d'**objets** plutôt que de fonctions isolées.

- **Objet** : Une entité autonome associant un état interne (les **attributs** / données) et des comportements (les **méthodes** / fonctions).
- **Classe** : Le moule ou plan de conception définissant la structure et le comportement des objets instanciés.
- **Rôle central** : Standard d'ingénierie adopté par les principaux langages modernes (PHP, Java, C#, TypeScript, Python, C++).

---

## 1. Introduction — Les 4 Piliers Fondamentaux

La robustesse de la POO s'articule autour de quatre principes directeurs :

- **Encapsulation** : Protéger les données internes d'un objet en limitant leur accès direct via des visibilités (`private`, `public`, `protected`).
- **Abstraction** : Masquer la complexité d'implémentation pour n'exposer que l'interface essentielle nécessaire à l'utilisateur.
- **Héritage** : Créer de nouvelles classes basées sur des classes existantes pour factoriser et réutiliser du code commun.
- **Polymorphisme** : Capacité d'objets distincts à répondre à un même message ou appel de méthode selon leur propre implémentation.

---

## 2. Problem — Les Limites de l'Approche Procédurale

Dans les applications de grande envergure, l'approche impérative classique montre ses faiblesses :

- **Variables globales et effets de bord** : Les données sont accessibles et modifiables de partout, rendant le suivi d'état difficile à déboguer.
- **Couplage fort et fragilité** : Modifier la signature d'une fonction ou une structure de données impacte des dizaines de fichiers dépendants.
- **Difficulté de modélisation métier** : Les règles complexes du monde réel (ex. compte bancaire, panier d'achat) s'éparpillent dans des scripts disjoints.

---

## 2. Problem — Dette Technique et Évolutivité

Sans modèle objet structuré, l'évolution du logiciel devient risquée :

- **Duplication de code** : Multiplications de conditions `if / else` répétées à travers l'application au lieu de comportements polymorphes.
- **Absence de contrats stricts** : Les modules communiquent sans garantie formelle sur les types ou méthodes attendues.
- **Collaboration difficile en équipe** : Plusieurs développeurs modifiant les mêmes fichiers procéduraux génèrent des conflits constants.

---

## 3. Solution — L'Architecture Orientée Objet

La POO répond à ces contraintes en imposant une séparation nette des responsabilités :

- **Responsabilité unique** : Chaque classe encapsule une seule logique métier bien définie.
- **Contrats d'interface** : Utilisation d'**interfaces** et de **classes abstraites** pour découpler l'appelant de l'implémentation concrète.
- **Maintenance prédictible** : L'état d'un objet n'est modifié que par ses propres méthodes validées, évitant les corruptions de données.

---

## 3. Solution — Exemple Hello World en POO

Démonstration d'une classe encapsulée avec constructeur et méthode :

- **Prérequis** : Environnement d'exécution PHP 8+ installé en local.

```php
<?php
// Greeter.php
class Greeter {
    private string $message;

    public function __construct(string $name) {
        $this->message = "Hello, {$name} from OOP!";
    }

    public function greet(): string {
        return $this->message;
    }
}

$greeter = new Greeter("Monde");
echo $greeter->greet() . PHP_EOL;
```

**Exécution en terminal :** `php Greeter.php`  
**Résultat attendu :** `Hello, Monde from OOP!`
