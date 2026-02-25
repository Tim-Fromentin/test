# PROCÉDURE DE DÉPLOIEMENT
- [Read english version](./DEPLOY.md)

Ce document détaille les étapes nécessaires pour mettre à jour l'application **Caf'Thé** de l'environnement de développement local vers le serveur de production (Plesk).

## 1. Versionnage et envoi sur GitHub
Avant toute mise à jour, les modifications doivent être versionnées et envoyées sur le dépôt distant :

```shell

# Ajouter toutes les modifications
git add .

# Créer un commit avec un message descriptif
git commit -m "Description des modifications (ex: fix(navbar flexbox))"

# Envoyer le code sur le dépôt GitHub
git push
````
## 2. Mise à jour sur le panneau de contrôle (Plesk) 
L'hébergement est géré via Plesk. Pour déployer les modifications sur le serveur de production, suivez ces étapes :

- Accédez à l'outil Git dans la liste des "Sites Web & Domaines".

- Cliquez sur le bouton Exécuter le Pull pour synchroniser les fichiers depuis GitHub.

- Vérifiez que la date et le message du dernier commit correspond bien à votre dernier envoi.

- Cliquez sur Déployer maintenant. Cette action mettra à jour les fichiers de l'application sur le serveur et lancera les commandes configurées.
## 3. Commandes 
Ces commandes sont exécutées automatiquement par le serveur lors du déploiement de l'application :
````shell

# Installation et optimisation des dépendances PHP
composer install --no-dev --optimize-autoloader

# Installation des dépendances JS et compilation des assets Front-end
npm install
npm run build

# Mise à jour de la structure de la base de données MySQL
# --force est indispensable pour l'exécution en environnement de production
php artisan migrate --force

# Optimisation globale (Mise en cache de la configuration, des routes et des vues)
php artisan optimize
````
