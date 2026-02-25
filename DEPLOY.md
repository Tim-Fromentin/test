#  DEPLOYEMENT
- [lire la version française](./DEPLOYDFR.md)

# DEPLOYMENT PROCEDURE

This documents details the necessary steps for update the **Caf'Thé** application of local environment to server.

## 1. Versioning and send to Github 
Before all update, the modifications be versioning and send to local repository
```shell

# Add all modifications
git add .

# Create commit with descriptive message 
git commit -m "Description des modifications (ex: fix(navbar flexbox))"

# Envoyer le code sur le dépôt GitHub Push code in github repository
git push
````
## 2. Update in control panel (Plesk)
The hosting is manage by Plesk. For deployd the update follow this steps :
- Access to the tool Git in the list of "Website & Domains".

- Click to the button "Execute pull" for syncronise files since the last commit

- Check the date and message of last commit correspond to your last commit

- Click to the button "Deployd now". This button will update files and will launch the configured commands 

## 3. Commands
This commands will launch automatically by the server during the deployment  
````shell

# Installation and optimisation of dependency PHP 
composer install --no-dev --optimize-autoloader

# Install JS dependency and compile Front end assets
npm install
npm run build

# Update structure and data base Mysql
# --force is essential for execution in a production environment
php artisan migrate --force

# Global optimisation (Configuration caching, of routes and views)
php artisan optimize
````

