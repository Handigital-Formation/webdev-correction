<?php

// Les étapes peuvent être effectuées indépendament des autres.
// Si vous bloquez sur une étape, nous vous donnons des possibilités pour faire les étapes suivantes.
// Vous pouvez notamment commencer par l'étape 5 (intégration)


////////////
// Étape 1 (Base de donnée)
// Créer une base de donnée
// Créer une table article avec des colonnes que vous jugez nécessaire
// Créer des articles en base de donnée avec votre outil de gestion de base de donnée (ex: phpmyadmin, sqlitestudio)

///////////
// Étape 2 (Base de donnée et PHP)
// information de connection à la BDD -> SQLite ou MySQL comme vous préférez
// connection à la BDD
// récupération des articles en base de données (un tableau PHP contenant des objets Article)
// Si vous n'avez pas réussi cet étape vous pouvez utilisez le tableau ci dessous pour continuer

/* $articles = [
    [
      'titre' => 'lorem',
      'contenu' => 'lorem',
      'date' => '2022-03-13'
    ],
    [
      'titre' => 'lorem2',
      'contenu' => 'lorem2',
      'date' => '2022-01-04'
    ]
  ]; */

/////////////
// Étape 3 (Programmation orientée objet)
// création d'une classe Article (dans le fichier Article.php) avec des attributs, des getters et setters qui vous semblent appropriés (titre, contenu, date, etc)
require 'Article.php';

////////////
// Étape 4 (Programmation orientée objet, PHP et BDD)
// Création d'un tableau d'objets Article. Les attributs des objets Article vont contenir les informations récupérées en BDD précédemment

////////////
// Étape 5 (Intégration)
// Intégration de la maquette dans template.html
require 'template.html';

////////////
// Étape 6 (PHP)
// Rendre la section de la template qui affiche les articles dynamique. (il faudra renommer le template.html en template.php…)
// (Une boucle qui affiche les articles récupérés dans la BDD)
// Vous utiliserez votre tableau d'objet article créer à l'étape 4 ou si vous n'avez pas réussi cette étape vous pouvez utilisez le tableau de l'étape 5

////////////
// Étape 7 (Javascript)
// Ajouter un input et un button
// Lorsque le bouton est cliquer, récupérer la valeur de l'input et modifier le titre de la page (h1) avec cette valeur

///////////
// Étape 8
// Installer laravel et refaire la même chose dans laravel en respectant bien le MVC

//////////
// Étape supplémentaire
// Pouvoir cliquer sur un article et afficher la page de cet article
// Pouvoir lier des commentaires à cet article