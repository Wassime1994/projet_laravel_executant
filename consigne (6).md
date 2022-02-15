``` Laravel_projet_executant```
nom du repo : Laravel_projet_executant
Avant toutes choses, vous devez **tout lire** avant d''entreprendre quoi que ce soit. C'est un projet à coder essentiellement au niveau du backoffice(admin) 

**Consigne :**
-Au moment de l'enregistrement : laisser les champs de base + ajouter prénom, âge, choix d'un avatar (select) parmi une liste d'avatar
-Sur la page Dashboard, afficher toutes les données de la personne connectée (possibilité de modifier les données perso) 
-Ajouter un sidebar avec 4 onglets dans un menu vertical qui comporte :

*avatars* :  Afficher simplement les avatars. Possibilité d'ajouter un avatar (une image) avec un champ pour le nom de l'avatar + un button pour le supprimer (crud delete). 
*catégories* : Afficher les la listes des catégories avec btn add , edit et delete. C'est une page qui va comporter des catégories qui seront connectés à des images.
*images* : C'est une page qui permet d'ajouter des 'images' (**ne pas confondre avec les images de l'onglet 'avatar'**), laisser la  possibilité de choisir dans quelle catégorie on enregistre l'image.
*Gallérie* :  Afficher les images sous forme de gallerie avec un button 'téléchargeables'
*Utilisateurs* : Afficher tout les utilisateurs. On peut changer leurs données( le rôle aussi) sauf les users dont le rôles est admin.

**Fonctionnement :**
-Au moment du register, l'user a la possibilité de choisir un avatar parmi une liste d'avatar. Son rôle sera 'membre' par défaut à l'enregistrement
-L'admin peut alimenter la liste des avatars
-L'admin peut alimenter la page avec les images
-L'admin peut créer de nouvelles catégorie d'image
-Middleware : 
Accès au back est refusé tant que l'user n'est pas connecté. 
Seulement l'*admin* à accès à la page *avatars* + *images* + *utilisateurs* + "catégories"  (caché les onglets pour les *membres*)
Le rôle *membre* peut voir seulement son Dashboard avec son profil et l'onglet gallérie

**A savoir: **
-2 rôles (admin et membre). Un utilisateur avec le rôle admin doit être créer par défaut dans le seeder. Plusieurs catégories d'imagesà créer également dans le seeder (voiture, animal, tec, art, etc.)
-On ne peut ajouter que 5 Avatars maximum
-Si on supprimes un avatars cela attribue un avatar par défaut "anonyme" a tous les users raccrochés a l'avatar que l'on vient de supprimer
-Si on supprimes un user cela ne supprime pas l'avatar raccroché
-Si on supprimes une catégorie d'image cela supprime toutes les images raccrochés a cette catégorie
-Le design du back être soigné
-validate, message d'erreur en FR
-Faire une pagination quand on a plus de 5 utilisateurs 

**Bonus:**
-On a le choix d'ajouter une image/avatar entre un input file ou un url
