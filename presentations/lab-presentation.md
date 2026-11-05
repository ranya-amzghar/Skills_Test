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
    font-size: 26px;
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
    font-size: 32px;
    border-bottom: 1px solid #30363d;
    padding-bottom: 8px;
    margin-bottom: 16px;
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
  table {
    width: 100%;
    border-collapse: collapse;
    margin: 10px 0;
  }
  th {
    background-color: #1f6feb;
    color: #ffffff;
    padding: 8px 14px;
    border: 1px solid #30363d;
    text-align: left;
    font-size: 16px;
  }
  td {
    background-color: #161b22;
    color: #e6edf3;
    padding: 8px 14px;
    border: 1px solid #30363d;
    font-size: 16px;
  }
  section.cover {
    background: linear-gradient(160deg, #0d1117 60%, #1a2332 100%);
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  section.cover h1 {
    font-size: 46px;
    color: #58a6ff;
    border-color: #30363d;
    margin-bottom: 20px;
  }
  section.cover p {
    color: #c9d1d9;
    font-size: 22px;
    margin: 6px 0;
  }
  section.plan h2 {
    color: #3fb950;
    font-size: 34px;
    border-color: #21262d;
  }
  section.plan ol li {
    color: #e6edf3;
    font-size: 22px;
    margin-bottom: 12px;
  }
---
<!-- _class: cover -->
<!-- _paginate: false -->

# Préparer et Présenter un Lab Technique

Méthodologie et plan générique pour les Labs du projet technique

**Réalisée par :** Ranya Amzghar  
**Encadrée par :** Essarraj Fouad  

<!-- Voici le titre du lab avec le nom de l'auteure et de l'encadrant. -->

---
<!-- _class: plan -->

## Plan de présentation

1. Stack technique
2. Définitions clés
3. Problème et besoin
4. Le plan générique expliqué
5. Exemple concret : Lab « Modèles News »
6. Résultats et conclusion
7. Dépôt GitHub

<!-- Voici le plan de la présentation pour apprendre à structurer un Lab. -->

---

## 1. Stack technique

Les outils mobilisés pour préparer et présenter les Labs :

| Outil | Rôle |
|:------|:-----|
| **Markdown** | Rédaction simple du contenu et de la structure |
| **Marp** | Génération automatique des diapositives professionnelles |
| **VS Code** | Environnement d'édition avec prévisualisation directe |
| **Git & GitHub** | Suivi des versions et partage des livrables |

> Ces outils permettent de produire des supports légers, versionnés et réutilisables.

<!-- Voici les technologies et outils utilisés pour préparer les présentations de Labs. -->

---

## 2. Définitions clés

- **Lab technique** : exercice pratique qui permet de tester une solution et d'apprendre un outil.
- **Plan générique** : modèle commun de 7 diapositives pour présenter tous les Labs de façon homogène.
- **Livrable** : résultat concret produit à la fin du travail (code source, fichier Markdown, export PDF).
- **Marp directive** : balise spéciale permettant de contrôler le style et la pagination des diapositives.

<!-- Voici les explications des mots importants pour bien comprendre le sujet. -->

---

## 3. Problème et besoin

### Problème rencontré
- Sans structure commune, les présentations sont hétérogènes et incomplètes.
- L'apprenant oublie souvent de justifier le besoin ou de montrer le résultat réel.
- L'évaluation par l'encadrant devient longue et peu lisible.

### Besoin identifié
- Un **modèle standard en 7 diapositives** simple à mémoriser.
- Une démarche guidée : du problème jusqu'au résultat vérifié.
- Une facilité d'adaptation selon le sujet (base de données, API, interface).

<!-- Présentation des difficultés sans plan commun et du besoin d'une méthode claire. -->

---

## 4. Le Plan Générique expliqué (7 Slides)

Le plan standard à appliquer pour chaque Lab du projet :

1. **Slide 1 — Page de garde :** Titre, apprenant et encadrant.
2. **Slide 2 — Plan :** Liste claire des étapes abordées.
3. **Slide 3 — Stack technique :** Technologies utilisées et leur rôle précis.
4. **Slide 4 — Définitions :** Notions clés pour faciliter la compréhension.
5. **Slide 5 — Problème et besoin :** Difficulté rencontrée et utilité du Lab.
6. **Slide 6 — Solution et pratique :** Démarche, code, commandes et tests réels.
7. **Slide 7 — Résultats et conclusion :** Démonstration du résultat et compétences acquises.

<!-- Voici les sept étapes du modèle standard pour construire n'importe quel Lab. -->

---

## 5. Exemple concret : Lab « Modèles News »

Application du plan standard au projet **Application de News** :

- **Stack :** Laravel 11 (Eloquent ORM) et MySQL 8.
- **Définitions :** *Migration* (schéma versionné), *Modèle* (classe PHP liée à la table).
- **Problème :** Relier chaque article à sa section pour classer les actualités.
- **Solution & Code :**
  ```php
  // app/Models/Article.php
  public function section(): BelongsTo {
      return $this->belongsTo(Section::class);
  }
  ```
- **Test :** Exécution réussie de `php artisan migrate --seed`.

<!-- Démonstration pratique du plan générique appliqué à la création de modèles Laravel. -->

---

## 6. Résultats et conclusion

### Résultats obtenus
- Une présentation homogène, structurée et facile à lire sur grand écran.
- Une progression claire qui met en valeur la démarche autant que le code.
- Un gain de temps pour l'apprenant lors de la préparation des prochains Labs.

### Ce que nous avons appris
- Structurer une démonstration technique de manière pédagogique.
- Justifier les choix d'outils et valider chaque étape avec des tests concrets.

<!-- Bilan des compétences acquises et des bénéfices apportés par ce plan de présentation. -->

---

## 7. Dépôt GitHub

Sauvegarder et partager le livrable dans le dépôt officiel :

```bash
# Ajouter et valider le livrable
git add lab-presentation.md
git commit -m "feat: méthodologie et plan générique de présentation de Lab"

# Pousser sur le dépôt distant
git push origin main
```

> Chaque Lab finalisé doit être archivé dans le dépôt GitHub du projet technique.

<!-- Voici les commandes simples pour envoyer le travail sur GitHub. -->

