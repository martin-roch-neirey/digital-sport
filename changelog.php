﻿<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Changelog</title>
  <link rel="stylesheet" href="https://stackedit.io/style.css" />
</head>

<body class="stackedit">
  <div class="stackedit__html"><h1 id="digital-sport---projet-rt1---retour-au-site">Digital Sport - Projet RT1 - <a href="https://srv-prj.iut-acy.local/RT/1projet17/mvc/public/index.php?controller=admin&amp;action=index">Retour au site</a></h1>
<h2 id="changelog-05.06.2020-">Changelog 05.06.2020 <img src="https://livevox.com/wp-content/uploads/2017/05/resources-gear-icon.png" alt="en" width="40" height="40"></h2>
<p><img src="https://cdn2.iconfinder.com/data/icons/documents-files-2/48/31-512.png" alt="img" width="15"> <strong>Récapitulatif :</strong></p>
<ul>
<li>Le message de déconnexion de l’interface membre n’interfère plus avec le formulaire de contact.</li>
<li>Création d’une requête préparée <em>“SELECT INNER JOIN”</em>.</li>
<li>Ajout d’une redirection vers le panel admin depuis la page Changelog.</li>
<li>Amélioration de la gestion du Trello.</li>
<li>Amélioration de la gestion de la page d’inscription pour fixer des bugs de listes déroulantes et pour éviter des erreurs SQL.</li>
<li>La page de connexion est désormais entièrement responsive.</li>
<li>Un client peut désormais résilier son abonnement.</li>
</ul>
<blockquote>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1200px-Circle-icons-dev.svg.png" alt="DEV" width="14" height="14"> Développeurs  : Martin &amp; Malo</p>
</blockquote>
<h2 id="changelog-04.06.2020-">Changelog 04.06.2020 <img src="https://livevox.com/wp-content/uploads/2017/05/resources-gear-icon.png" alt="en" width="40" height="40"></h2>
<p><img src="https://cdn2.iconfinder.com/data/icons/documents-files-2/48/31-512.png" alt="img" width="15"> <strong>Récapitulatif :</strong></p>
<ul>
<li>Retour à l’accueil depuis la page de connexion possible en cliquant sur l’image d’haltère.</li>
<li>Page membre : édition désormais possible des informations du membre.
<ul>
<li>Note : un membre ne peut pas modifier son pseudonyme, son nom et son prénom.</li>
<li>Note : le formulaire affiche les données actuelles du client (y compris pour les listes déroulantes).</li>
</ul>
</li>
<li>Page inscription : ajout d’un lien sur la RGPD s’ouvrant dans un nouvel onglet avant le formulaire d’inscription.</li>
<li>La gestion des messages reçus et la gestion du matériel sur le panel admin sont désormais réactives aux actions en direct (affichage en direct des modifications).</li>
<li>Refonte du code (WIP).</li>
<li>Autres.</li>
</ul>
<blockquote>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1200px-Circle-icons-dev.svg.png" alt="DEV" width="14" height="14"> Développeurs  : Martin &amp; Malo</p>
</blockquote>
<h2 id="changelog-01.06.2020-">Changelog 01.06.2020 <img src="https://livevox.com/wp-content/uploads/2017/05/resources-gear-icon.png" alt="en" width="40" height="40"></h2>
<p><img src="https://cdn2.iconfinder.com/data/icons/documents-files-2/48/31-512.png" alt="img" width="15"> <strong>Récapitulatif :</strong></p>
<ul>
<li>La page membre est désormais connectée au reste du site depuis le header : Profil.</li>
<li>Le bouton <em>“Pas de compte ? Inscrivez-vous !”</em> renvoie désormais vers la page d’inscription.</li>
<li>Création de 2 fonctions qui vérifient si il existe déjà le mail ou le pseudo entré en paramètre dans la BDD.</li>
<li>A l’inscription et à la connexion, une fonction force désormais l’adresse mail entrée en minuscule (fonction strtolower($_POST[‘email’]))</li>
<li>Refonte du CSS avec les unités vh et vw (WIP).</li>
<li>Checkbox de l’inscription sur l’acceptation d’enregistrement des données réparée.</li>
<li>Ajout de plusieurs nouvelles requêtes préparées.</li>
<li>Modification du cookie de connexion : désormais 1 heure.</li>
<li>Design de la page d’erreur 404 avec utilisation de l’API giphy pour avoir un GIF random de catégorie “fail”.</li>
<li>Page de connexion fonctionnelle.</li>
<li>Refonte du code (WIP).</li>
<li>Autres.</li>
</ul>
<blockquote>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1200px-Circle-icons-dev.svg.png" alt="DEV" width="14" height="14"> Développeurs  : Martin &amp; Malo</p>
</blockquote>
<h2 id="changelog-27.05.2020-">Changelog 27.05.2020 <img src="https://livevox.com/wp-content/uploads/2017/05/resources-gear-icon.png" alt="en" width="40" height="40"></h2>
<p><img src="https://cdn2.iconfinder.com/data/icons/documents-files-2/48/31-512.png" alt="img" width="15"> <strong>Récapitulatif :</strong></p>
<ul>
<li>Il est désormais possible d’éditer toutes les informations d’un client depuis le panel admin.</li>
<li>Ajout d’un identifiant de session lors de l’authentification du client.</li>
<li>Ajout de plusieurs nouvelles requêtes préparées.</li>
<li>Meilleure lisibilité du panel admin avec une alternance de couleurs.</li>
<li>Grande avancée du panel admin.</li>
<li>Refonte du code (WIP).</li>
<li>Autres.</li>
</ul>
<blockquote>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1200px-Circle-icons-dev.svg.png" alt="DEV" width="14" height="14"> Développeurs  : Martin &amp; Malo</p>
</blockquote>
<h2 id="changelog-20.05.2020-">Changelog 20.05.2020 <img src="https://livevox.com/wp-content/uploads/2017/05/resources-gear-icon.png" alt="en" width="40" height="40"></h2>
<p><img src="https://cdn2.iconfinder.com/data/icons/documents-files-2/48/31-512.png" alt="img" width="15"> <strong>Récapitulatif :</strong></p>
<ul>
<li>Le header et le footer sont maintenant centralisés.</li>
<li>Bug d’accès à la BDD corrigé.</li>
<li>Requêtes préparées terminées.</li>
<li>Retrait du header dans la page de connexion.</li>
<li>Anti injection-SQL sur l’ensemble du site avec les requêtes préparées.</li>
<li>Passage de la majeure partie du site sur l’architecture MVC.
<ul>
<li>Note : JavaScript de l’inscription non passé.</li>
</ul>
</li>
<li>Création d’un serveur Discord pour faciliter la communication avec des canaux utiles à différentes tâches :
<ul>
<li>Canal de discussion.</li>
<li>Canal changelog.</li>
</ul>
</li>
<li>Autres.</li>
</ul>
<blockquote>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1200px-Circle-icons-dev.svg.png" alt="DEV" width="14" height="14"> Développeurs  : Martin &amp; Malo</p>
</blockquote>
<h2 id="changelog-15.05.2020-">Changelog 15.05.2020 <img src="https://livevox.com/wp-content/uploads/2017/05/resources-gear-icon.png" alt="en" width="40" height="40"></h2>
<p><img src="https://cdn2.iconfinder.com/data/icons/documents-files-2/48/31-512.png" alt="img" width="15"> <strong>Récapitulatif :</strong></p>
<ul>
<li>L’inscription utilise désormais la méthode POST.</li>
<li>Formulaire de contact terminé.</li>
<li>Page de connexion créée.</li>
<li>Requête préparée SELECT terminée.</li>
<li>Requêtes préparées en développement.</li>
<li>Création du repository Bitbucket pour du versioning.</li>
<li>La page d’inscription propose désormais une liste déroulante pour le niveau et le préfixe de téléphone.</li>
<li>Création de l’architecture MVC.</li>
<li>Création du panel admin.</li>
<li>Autres.</li>
</ul>
<blockquote>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1200px-Circle-icons-dev.svg.png" alt="DEV" width="14" height="14"> Développeurs  : Martin &amp; Malo</p>
</blockquote>
<h2 id="changelog-07.05.2020-">Changelog 07.05.2020 <img src="https://livevox.com/wp-content/uploads/2017/05/resources-gear-icon.png" alt="en" width="40" height="40"></h2>
<p><img src="https://cdn2.iconfinder.com/data/icons/documents-files-2/48/31-512.png" alt="img" width="15"> <strong>Récapitulatif :</strong></p>
<ul>
<li>Ajout des champs NOT NULL et UNIQUE nécessaires sur la BDD.</li>
<li>Création du formulaire de contact (footer).</li>
<li>Requêtes préparées en développement.</li>
<li>Refonte esthétique de la page d’accueil.</li>
<li>Bug du JavaScript lors de la vérification des mots de passe sur l’inscription résolu.</li>
<li>Autres.</li>
</ul>
<blockquote>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1200px-Circle-icons-dev.svg.png" alt="DEV" width="14" height="14"> Développeurs  : Martin &amp; Malo</p>
</blockquote>
<h2 id="changelog-01.05.2020-">Changelog 01.05.2020 <img src="https://livevox.com/wp-content/uploads/2017/05/resources-gear-icon.png" alt="en" width="40" height="40"></h2>
<p><img src="https://cdn2.iconfinder.com/data/icons/documents-files-2/48/31-512.png" alt="img" width="15"> <strong>Récapitulatif :</strong></p>
<ul>
<li>BDD :
<ul>
<li>Bug d’accès à la BDD résolu (indépendant de nous).</li>
<li>Graphe BDD, MCD et MLD officiellement validés.</li>
<li>Ajout des tables dans la BDD.</li>
<li>Ajout de valeurs dans les tables BDD.</li>
</ul>
</li>
<li>Nettoyage du code.</li>
<li>Création des requêtes d’insertion basiques.</li>
<li>Création du Trello.</li>
<li>Réflexion sur les noms des abonnements sportifs proposés :
<ul>
<li>Start</li>
<li>Sport+</li>
</ul>
</li>
<li>Autres.</li>
</ul>
<blockquote>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1200px-Circle-icons-dev.svg.png" alt="DEV" width="14" height="14"> Développeurs  : Martin &amp; Malo</p>
</blockquote>
<h2 id="changelog-24.04.2020-">Changelog 24.04.2020 <img src="https://livevox.com/wp-content/uploads/2017/05/resources-gear-icon.png" alt="en" width="40" height="40"></h2>
<p><img src="https://cdn2.iconfinder.com/data/icons/documents-files-2/48/31-512.png" alt="img" width="15"> <strong>Récapitulatif :</strong></p>
<ul>
<li>Modification du graphe BDD, MCD et création du MLD.</li>
<li>Ébauche d’un formulaire de contact.</li>
<li>Le header possède désormais un effet de scroll développé en JavaScript.</li>
<li>Modification globale de la page d’accueil :
<ul>
<li>Création d’un fond personnalisé.</li>
<li>Mise en place de différents éléments créés auparavant.</li>
</ul>
</li>
<li>La page de présentation des abonnements représente désormais une partie de la page d’accueil.</li>
<li>Autres.</li>
</ul>
<blockquote>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1200px-Circle-icons-dev.svg.png" alt="DEV" width="14" height="14"> Développeurs  : Martin &amp; Malo</p>
</blockquote>
<h2 id="changelog-16.04.2020-">Changelog 16.04.2020 <img src="https://livevox.com/wp-content/uploads/2017/05/resources-gear-icon.png" alt="en" width="40" height="40"></h2>
<p><img src="https://cdn2.iconfinder.com/data/icons/documents-files-2/48/31-512.png" alt="img" width="15"> <strong>Récapitulatif :</strong></p>
<ul>
<li>BDD inaccessible (problème commun à plusieurs groupes).</li>
<li>Création du header et de la page d’accueil.</li>
<li>Création de la page de présentation des abonnements.</li>
<li>Modification du graphe BDD et MCD.</li>
</ul>
<blockquote>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1200px-Circle-icons-dev.svg.png" alt="DEV" width="14" height="14"> Développeurs  : Martin &amp; Malo</p>
</blockquote>
<h2 id="changelog-05.04.2020-">Changelog 05.04.2020 <img src="https://livevox.com/wp-content/uploads/2017/05/resources-gear-icon.png" alt="en" width="40" height="40"></h2>
<p><img src="https://cdn2.iconfinder.com/data/icons/documents-files-2/48/31-512.png" alt="img" width="15"> <strong>Récapitulatif :</strong></p>
<ul>
<li>Choix d’une salle de sport multisport comme projet.</li>
<li>Ébauche du graphe BDD et MCD.</li>
</ul>
<blockquote>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1200px-Circle-icons-dev.svg.png" alt="DEV" width="14" height="14"> Développeurs  : Martin &amp; Malo</p>
</blockquote>
</div>
</body>

</html>
