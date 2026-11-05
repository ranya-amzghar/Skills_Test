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
    font-size: 24px;
  }
  h1 {
    color: #58a6ff;
    font-size: 40px;
    border-bottom: 2px solid #30363d;
    padding-bottom: 10px;
    margin-bottom: 20px;
  }
  h2 {
    color: #58a6ff;
    font-size: 30px;
    border-bottom: 1px solid #30363d;
    padding-bottom: 6px;
    margin-bottom: 14px;
  }
  h3 {
    color: #79c0ff;
    font-size: 22px;
    margin-bottom: 8px;
  }
  p {
    color: #e6edf3;
    font-size: 22px;
    margin: 6px 0;
  }
  ul li, ol li {
    color: #e6edf3;
    font-size: 20px;
    margin-bottom: 8px;
    line-height: 1.5;
  }
  strong {
    color: #79c0ff;
  }
  em {
    color: #3fb950;
  }
  code {
    background-color: #21262d;
    color: #f0f6fc;
    font-family: 'Consolas', monospace;
    font-size: 16px;
    padding: 2px 6px;
    border-radius: 4px;
  }
  pre {
    background-color: #161b22;
    border: 1px solid #30363d;
    border-radius: 6px;
    padding: 12px 16px;
    font-size: 16px;
  }
  pre code {
    background-color: transparent;
    padding: 0;
  }
  blockquote {
    border-left: 4px solid #58a6ff;
    background: #161b22;
    padding: 10px 16px;
    border-radius: 0 6px 6px 0;
    margin: 10px 0;
  }
  blockquote p {
    color: #c9d1d9;
    font-size: 18px;
  }
  /* --- Table styling (Pleine largeur & nouvel en-tête) --- */
  table {
    width: 100% !important;
    max-width: 100% !important;
    display: table !important;
    align-self: stretch !important;
    table-layout: fixed !important;
    border-collapse: collapse !important;
    margin: 20px 0 !important;
    border: 1px solid #30363d !important;
    border-radius: 6px !important;
    overflow: hidden !important;
  }
  th {
    background-color: #0c2d6b !important;
    color: #ffffff !important;
    padding: 12px 18px !important;
    border: 1px solid #30363d !important;
    border-bottom: 2px solid #1f6feb !important;
    text-align: left !important;
    font-size: 19px !important;
    font-weight: 700 !important;
    letter-spacing: 0.03em !important;
  }
  td {
    background-color: #161b22 !important;
    color: #e6edf3 !important;
    padding: 12px 18px !important;
    border: 1px solid #30363d !important;
    font-size: 18px !important;
    word-wrap: break-word !important;
  }
  th:first-child, td:first-child {
    width: 32% !important;
  }
  th:last-child, td:last-child {
    width: 68% !important;
  }
  tr:nth-child(even) td {
    background-color: #0d1117 !important;
  }
  tr:hover td {
    background-color: #21262d !important;
  }

  /* --- Lead (slide finale) --- */
  section.lead {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    background: linear-gradient(160deg, #0d1117 60%, #1a2332 100%);
  }
  section.lead h1 {
    border-bottom: none;
    font-size: 46px;
    margin-bottom: 12px;
  }
  section.lead p {
    font-size: 22px;
    color: #c9d1d9;
  }

  /* --- Cover (Page de garde : Logos gauche/droite, texte à gauche, sans ombre ni bordure) --- */
  section.cover {
    display: flex !important;
    flex-direction: column !important;
    justify-content: space-between !important;
    align-items: flex-start !important;
    text-align: left !important;
    background: #0d1117 !important;
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
    font-size: 54px !important;
    font-weight: 800 !important;
    color: #58a6ff !important;
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
    color: #e6edf3 !important;
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
    color: #c9d1d9 !important;
    margin: 0 !important;
    padding: 0 !important;
    border: none !important;
    box-shadow: none !important;
    text-shadow: none !important;
    text-align: left !important;
  }
  section.cover .meta strong {
    color: #79c0ff !important;
  }
---
<!-- _class: cover -->
<!-- _paginate: false -->

<div class="cover-header">
  <img src="logo_solicode.png" alt="Solicode">
  <img src="ofppt_logo.png" alt="Ofppt">
</div>

<div class="cover-body">
  <h1>LAB STARTER</h1>
  <p class="description">Configuration de l'environnement de développement</p>
  <div class="meta">
    <p><strong>Réalisée par :</strong> Ranya Amzghar</p>
    <p><strong>Encadrée par :</strong> Essarraj Fouad</p>
  </div>
</div>  

<!-- Je vais vous présenter le Lab Starter et la préparation de mon environnement de travail. -->

---

# Plan

1. Introduction
2. Stack technique
3. Définitions
4. Problème et besoin
5. Solution et pratique
6. Résultats et conclusion

<!-- Voici les différentes parties de ce Lab. -->

---

# 1. Introduction

Le Lab Starter permet de préparer un ordinateur pour le développement web.

**Objectifs :**

- Configurer Windows.
- Installer les extensions utiles.
- Préparer un environnement de travail.

<!-- Ce Lab permet de préparer notre ordinateur pour programmer. -->

---

# 2. Stack

| Outil | Rôle |
|---|---|
| Windows | Système d'exploitation |
| Visual Studio Code | Éditeur de code |
| Git | Gestion des versions du code |
| Live Server | Lancer un site web localement |
| Marp for VS Code | Créer des présentations |
| Todo Highlight | Repérer les tâches dans le code |
| Markdownlint | Vérifier les fichiers Markdown |

<!-- Cette partie présente les outils utilisés pour préparer notre environnement. -->

---

# 3. Définitions

- **IDE :** Environnement pour écrire et organiser le code.
- **Extension :** Outil qui ajoute une fonction à VS Code.
- **Git :** Outil pour suivre les modifications du code.
- **Terminal :** Espace pour écrire et exécuter des commandes.
- **Serveur local :** Serveur qui permet de tester un site sur son ordinateur.
- **Markdown :** Langage simple pour écrire des documents.

<!-- Cette partie explique les mots importants de ce Lab. -->

---

# 4. Problème et besoin

## Problèmes rencontrés

- Le projet n'était pas initialisé avec Git.
- Les fichiers cachés comme `.gitignore` et `.env` n'étaient pas visibles.
- Les extensions des fichiers n'étaient pas affichées.
- Les tâches TODO étaient difficiles à retrouver.
- Les pages HTML devaient être actualisées manuellement.

## Besoin

Préparer un environnement organisé pour faciliter le développement web.

<!-- Cette partie présente les difficultés rencontrées et les besoins identifiés. -->

---

# 5. Solution et pratique

## Solutions proposées

| Problème | Solution |
|---|---|
| Projet non initialisé | Initialiser Git |
| Fichiers cachés | Afficher les éléments masqués |
| Extensions invisibles | Afficher les extensions |
| TODO difficiles à retrouver | Better Todo Tree |
| Actualisation manuelle | Live Server |

<!-- Voici les solutions utilisées pour répondre aux problèmes rencontrés. -->

---

# 5. Solution et pratique

## 01 — Initialiser Git

1. Ouvrir le projet dans VS Code.
2. Ouvrir **Source Control** avec `Ctrl + Shift + G`.
3. Cliquer sur **Initialize Repository**.

**Alternative dans le terminal :**

```bash
git init
```

<!-- Cette étape permet de commencer à suivre les modifications du projet avec Git. -->

---

# 5. Solution et pratique

## 02 — Afficher les fichiers cachés

1. Ouvrir l'Explorateur de fichiers avec `Win + E`.
2. Cliquer sur **Affichage**.
3. Choisir **Afficher**.
4. Activer **Éléments masqués**.

## 03 — Afficher les extensions

1. Ouvrir **Affichage → Afficher**.
2. Activer **Extensions de noms de fichiers**.
3. Vérifier le nom complet des fichiers, comme `README.md`.

<!-- Ces réglages permettent de voir les fichiers cachés et leurs extensions. -->

---

# 5. Solution et pratique

## 04 — Installer Better Todo Tree

**Rôle :** rechercher et regrouper les commentaires TODO et FIXME dans le projet.

1. Ouvrir les extensions avec `Ctrl + Shift + X`.
2. Rechercher **Better Todo Tree**.
3. Installer l'extension.
4. Ajouter des commentaires dans le code :

```js
// TODO: ajouter la validation
// FIXME: corriger cette erreur
```

5. Ouvrir Better Todo Tree dans la barre latérale.

<!-- Better Todo Tree permet de retrouver facilement les tâches et les problèmes dans le code. -->

---

# 5. Solution et pratique

## 05 — Installer Live Server

1. Ouvrir les extensions avec `Ctrl + Shift + X`.
2. Rechercher **Live Server**.
3. Installer l'extension.
4. Ouvrir le projet contenant `index.html`.
5. Cliquer sur **Go Live**.

La page s'ouvre dans le navigateur et s'actualise après l'enregistrement des modifications.

> Live Server prévisualise les pages HTML statiques. Il n'exécute pas le code PHP.

<!-- Live Server permet de prévisualiser les pages HTML et de voir les modifications automatiquement. -->

---

# 6. Résultats et conclusion

## Résultats

- Git permet de suivre les modifications du projet.
- Les fichiers cachés sont visibles.
- Les extensions de fichiers sont affichées.
- Les tâches TODO sont regroupées.
- Les pages HTML sont prévisualisées avec Live Server.

## Conclusion

Ce Lab nous a permis de mieux organiser notre environnement de développement et de découvrir des outils utiles pour travailler efficacement.

<!-- Ce Lab m'a permis de préparer un environnement plus organisé pour le développement web. -->

---
<!-- _class: lead -->
<!-- _paginate: false -->

# Merci pour votre attention !

