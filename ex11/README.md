# ex08 - MVC

Le but de ce mini-projet est de vous familiariser avec l'architecture MVC.

Vous devez créer un site d'article avec l'architecture MVC.


Le dossier `models` contiendra des classes qui représenteront le modèle de données.

Le dossier `controllers` contiendra des classes qui s'occuperont d'appeler un model avec une fonction spécifique.

Le dossier `views` contiendra les vues du site.

#

Vous devez implémenter:

### Model
- Un modèle Post qui contiendra toutes les fonctions pour créer, supprimer, récupéré un ou plusieurs article.

### Vues
- Une vue `home` qui contiendra une home page.

- Une vue `/posts/index` qui contiendra une liste de tous les articles qui ont été posté (en affichant uniquement le titre), ainsi qu'un formulaire pour soumettre un nouvel article avec la méthode `POST`.

  - Dans la liste d'articles, pour ligne il y aura deux boutons: un pour voir en detail l'article et un autre qui supprimera l'article.

- Une vue `/posts/show` qui sera le résultat de l'action d'un clic sur le bouton pour voir le detail sur la liste d'article.
Cette vue contiendra le detail de l'article sélectionner précédement.

- Pour chaque type de vues (`posts` et `pages`) vous devez prendre en compte les erreurs et afficher les vues "erreur" losqu'un problème survient. (mauvaise url, formulaire mal rempli etc).

### Controllers
- Deux contrôlleurs: Posts et Pages
  - Posts: contiendras les fonctions pour créer, supprimer récupéré un ou plusieurs article et mettera à jours le post courrant utilisé dans les vues

  - Pages: contiendra les fonctions utiles pour afficher la homepage


### BDD
La base de données devra s'appeler: `php_mvc`
Elle aura une table nommée: `posts`
Qui contiendra trois champs:
- `id` => Qui sera un autoincrement
- `author` => Qui contiendra le nom de l'auteur de l'article
- `content` => Qui contiendra le contenu de l'article.

Vous ne devez ajouter aucun fichier au projet.
Vous devez gérer les erreurs.
