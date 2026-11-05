---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #0d1117;
    color: #e6edf3;
    font-family: 'Segoe UI', system-ui, sans-serif;
    padding: 50px 70px;
    font-size: 28px;
  }
  h1 {
    color: #58a6ff;
    font-size: 44px;
    border-bottom: 2px solid #30363d;
    padding-bottom: 10px;
    margin-bottom: 20px;
  }
  h2 {
    color: #58a6ff;
    font-size: 34px;
    border-bottom: 1px solid #30363d;
    padding-bottom: 8px;
    margin-bottom: 18px;
  }
  h3 {
    color: #79c0ff;
    font-size: 24px;
    margin-bottom: 10px;
  }
  p {
    color: #e6edf3;
    font-size: 24px;
    margin: 6px 0;
  }
  ul li, ol li {
    color: #e6edf3;
    font-size: 22px;
    margin-bottom: 10px;
    line-height: 1.6;
  }
  strong {
    color: #79c0ff;
  }
  em {
    color: #3fb950;
  }
  code {
    background-color: #2d2d2d;
    color: #ffffff;
    font-family: 'Consolas', 'Courier New', monospace;
    font-size: 16px;
    padding: 2px 6px;
    border-radius: 4px;
  }
  blockquote {
    border-left: 4px solid #58a6ff;
    background: #161b22;
    padding: 12px 18px;
    border-radius: 0 6px 6px 0;
    margin: 12px 0;
  }
  blockquote p {
    color: #c9d1d9;
    font-size: 20px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th {
    background-color: #1f6feb;
    color: #ffffff;
    padding: 10px 16px;
    border: 1px solid #30363d;
    text-align: left;
    font-size: 18px;
  }
  td {
    background-color: #161b22;
    color: #e6edf3;
    padding: 8px 16px;
    border: 1px solid #30363d;
    font-size: 18px;
  }
  section.cover {
    background: linear-gradient(160deg, #0d1117 60%, #1a2332 100%);
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  section.cover h1 {
    font-size: 50px;
    color: #58a6ff;
    border-color: #30363d;
    margin-bottom: 24px;
  }
  section.cover p {
    color: #c9d1d9;
    font-size: 22px;
    margin: 6px 0;
  }
  section.plan h2 {
    color: #3fb950;
    font-size: 36px;
    border-color: #21262d;
  }
  section.plan ol li {
    color: #e6edf3;
    font-size: 26px;
    margin-bottom: 22px;
  }
  .badge {
    display: inline-block;
    background: #1f6feb;
    color: #fff;
    border-radius: 4px;
    padding: 2px 10px;
    font-size: 16px;
    font-weight: bold;
    margin-right: 6px;
  }
---
<!-- _class: cover -->
<!-- _paginate: false -->

# Labs & Stack Technique

Découvrir les Labs et les outils du projet technique

**Réalisée par :** Ranya Amzghar
**Encadrée par :** Essarraj Fouad

<!-- Voici le titre du lab, avec le nom de l'auteure et de l'encadrant. -->

---
<!-- _class: plan -->

## Plan de présentation

1. Projet technique
2. Stack technique
3. Comprendre les Labs
4. Liste des Labs

<!-- Voici le plan de la présentation en quatre parties. -->

---

## 1. Projet technique

**Application de News** — une plateforme web de consultation et de gestion d'actualités.

- Affichage des **articles** classés par **sections**
- Interface **visiteur** : parcourir et lire les actualités
- Interface **administrateur** : ajouter et gérer les articles
- Recherche d'articles et navigation par catégorie

> Le projet est réalisé progressivement à travers une série de Labs ciblés.

<!-- Le projet est une application de news pour lire et gérer des articles. -->

---

## 2. Stack technique

### Backend

| Outil | Rôle |
|:------|:-----|
| **Laravel** | Framework PHP — logique métier & API |
| **MySQL** | Base de données relationnelle |

### Frontend

| Outil | Rôle |
|:------|:-----|
| **Alpine.js** | Interactivité légère côté client |
| **Tailwind CSS** | Mise en page utility-first |

<!-- Voici les outils informatiques utilisés pour construire le projet. -->

---

## 3. Comprendre les Labs

### C'est quoi un Lab ?

Un Lab est un **exercice pratique ciblé** qui permet d'explorer un outil ou une fonctionnalité précise du projet.

<!-- Un Lab est un exercice pratique pour apprendre un outil du projet. -->

---

## Pourquoi réaliser des Labs ?

- **Découvrir** un outil ou une technologie de façon guidée
- **Tester** une solution avant de l'intégrer au projet
- **Réaliser** une partie concrète du projet technique
- **Progresser** par étapes maîtrisées, sans surcharge

> Chaque Lab = un objectif clair + un livrable concret.

<!-- Les Labs aident à tester des solutions et à progresser pas à pas. -->

---

## Lien avec le projet technique

```
Projet technique
     │
     ├── Lab 01 — Environnement & outils
     ├── Lab 02 — Base de données & modèles
     ├── Lab 03 — Routes & contrôleurs Laravel
     ├── Lab 04 — Vues & Tailwind CSS
     └── Lab N  — ...
```

Chaque Lab couvre une **brique du projet**, du setup initial jusqu'à la mise en production.

<!-- Chaque Lab permet de construire une brique du projet final. -->

---

## 4. Liste des Labs

| # | Lab | Objectif |
|:-:|:----|:---------|
| 01 | Environnement | Installer et configurer la stack |
| 02 | Base de données | Créer les modèles et migrations |
| 03 | API & Routes | Construire les endpoints Laravel |
| 04 | Interface | Développer les vues avec Tailwind |
| 05 | Authentification | Gérer les rôles et les accès |
| 06 | Déploiement | Mettre l'application en ligne |

<!-- Voici la liste des six Labs à réaliser pour réussir le projet. -->

