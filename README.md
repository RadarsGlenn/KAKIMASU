# 🖌 Projet d'un site internet fictif 🖌

## 📌 Résumé et Contexte 📌

Kakimasu est un projet de site e-commerce qui vise à vendre des t-shirts avec des designs uniques créés par des artistes abonnés au site. L'objectif de l'entreprise est de proposer des t-shirts de qualité supérieure et de devenir une plateforme reconnue pour les artistes afin qu'ils puissent générer des revenus grâce à leurs créations. Le marché cible comprend les jeunes adultes intéressés par la mode et les vêtements de qualité, ainsi que les amateurs d'art et de design.

## 👤 User Stories 👤

En tant que client : 
- parcourir une sélection de t-shirts avec des designs originaux et créatifs.  
- ajouter des t-shirts à mon panier d'achat et procéder facilement au paiement.  
- trier les t-shirts par catégories pour trouver des designs correspondant à mes préférences.

En tant qu'artiste :  
- créer un compte sur Kakimasu pour pouvoir publier mes œuvres et les vendre.  
- pouvoir recevoir des commentaires sur mes œuvres de la part des clients.  
- parcourir une sélection de t-shirts avec des designs originaux et créatifs.  
- ajouter des t-shirts à mon panier d'achat et procéder facilement au paiement.  
- trier les t-shirts par catégories pour trouver des designs correspondant à mes préférences. 


## 🔗 Prérequis et Dépendances 🔗

Une connexion Internet  
Un navigateur web compatible 
PHP (version compatible avec le code fourni)
Serveur MySQL
Les fichiers CSS et JavaScript mentionnés dans le code doivent être accessibles pour que les styles et les fonctionnalités de Bootstrap fonctionnent correctement.

## 📥 Installation 📥

En tant que client :  
L'accès au site Kakimasu se fait via un navigateur web. Aucune installation spécifique n'est requise.

En tant que créateur :  
Laravel
Installez PHP sur votre serveur.  
Configurez un serveur MySQL et créez une base de données nommée "formulaireartiste".  
Créez une table "users" dans la base de données "formulaireartiste" avec les colonnes appropriées pour stocker les informations des utilisateurs (email, mdp, etc.).  
Assurez-vous que les fichiers CSS et JavaScript référencés dans le code sont accessibles à partir de l'emplacement spécifié.  

## 💻 Utilisation 💻

En tant que client:  
- Parcourez la sélection de t-shirts disponibles.  
- Ajoutez des t-shirts à votre panier.  
- Procédez au paiement pour finaliser votre commande.  

En tant qu'artiste:  
- Créez un compte artiste sur Kakimasu.  
- Publiez vos œuvres et déterminez les prix (limités à 100 €).  
- Recevez des commentaires des clients.  
- Parcourez la sélection de t-shirts disponibles.  
- Ajoutez des t-shirts à votre panier.  
- Procédez au paiement pour finaliser votre commande.  

------------------------------------------------------------


Placez le code PHP dans un fichier avec une extension ".php".  
Assurez-vous que le fichier est accessible via le navigateur.  
Remplissez le formulaire de connexion avec les informations d'identification appropriées (email et mot de passe).  
Cliquez sur le bouton "Create My Account" pour créer un compte artiste ou client.  
Vous serez redirigé vers la page appropriée si les informations d'identification sont correctes.  

## 🪪 Authentification 🪪

Les artistes et les clients doivent créer des comptes distincts pour accéder aux fonctionnalités spécifiques.  
L'authentification se fait en utilisant un nom d'utilisateur et un mot de passe.  

Le code utilise une authentification basée sur des données stockées dans une base de données MySQL. Lorsque l'utilisateur soumet le formulaire de connexion, le code vérifie si les informations d'identification fournies correspondent à celles stockées dans la base de données. Si une correspondance est trouvée, l'utilisateur est redirigé vers la page appropriée (compte artiste ou client).

## 🏷 Licence 🏷

Under CC BY-NC-ND 3.0 licence

---------------------------------------------


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>  

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>  

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:  

- [Simple, fast routing engine](https://laravel.com/docs/routing).  
- [Powerful dependency injection container](https://laravel.com/docs/container).  
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.  
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).  
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).  
- [Robust background job processing](https://laravel.com/docs/queues).  
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).  

Laravel is accessible, powerful, and provides tools required for large, robust applications.  

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.  

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.  

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.  

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).  

### Premium Partners

- **[Vehikl](https://vehikl.com/)**  
- **[Tighten Co.](https://tighten.co)**  
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**  
- **[64 Robots](https://64robots.com)**  
- **[Cubet Techno Labs](https://cubettech.com)**  
- **[Cyber-Duck](https://cyber-duck.co.uk)**  
- **[Many](https://www.many.co.uk)**  
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**  
- **[DevSquad](https://devsquad.com)**  
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**  
- **[OP.GG](https://op.gg)**  
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**  
- **[Lendio](https://lendio.com)**  

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).  

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).  

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.  

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).  
