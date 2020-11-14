# suivi-patient

Exemple d'une application avec Symfony
========================

Cette application est basée sur  https://rojas.io/creating-a-website-with-symfony-4-part-1/

Prérequis
------------

  * PHP 7.4.12 
  * Symfony 5.1.7 ;
  * activer l'extenèsion PDO-MySQL PHP;
  * MySQL 8.0.22

Utilisation 
------------

[Download Symfony][4] to install the `symfony` binary on your computer and run
this command:

```bash
$ git clone https://github.com/gmokolomboka/suivi-patient.git
$ cd suivi-patient
$ composer install
```

Usage
-----
```bash
Créer la base de données dans mysql : 
suivi-patient 
modifier le contenu du fichier .env avec les valeurs : <USER_BDD_MYSQL>, <PASSWORD>, <DATABASE_NAME>
DATABASE_URL=mysql://<USER_BDD_MYSQL>:<PASSWORD>@127.0.0.1:3306/<DATABASE_NAME>?serverVersion=8.0.22
```
```bash
$ symfony server:start
```

Accéder à l'application via l'url par défaut : (<https://localhost:8000).


Pour plus d'informations :

[1]: https://symfony.com/doc/current/best_practices.html
[2]: https://symfony.com/doc/current/reference/requirements.html
[3]: https://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html
[4]: https://symfony.com/download


La commande ci-dessous permet de connaître la version de cet qui a été installé sur votre machine locale:
```bash
$ php bin/console about
```

```bash
Exemple de projet développé avec Symfony 5.17 et PHP 7.4.12
Symfony
 -------------------- ---------------------------------
  Version              5.1.7
  Long-Term Support    No
  End of maintenance   01/2021
  End of life          01/2021
 -------------------- ---------------------------------
  Kernel
 -------------------- ---------------------------------
  Type                 App\Kernel
  Environment          dev
  Debug                true
  Charset              UTF-8
  Cache directory      ./var/cache/dev (28.1 MiB)
  Log directory        ./var/log (1.4 MiB)
 -------------------- ---------------------------------
  PHP
 -------------------- ---------------------------------
  Version              7.4.12
  Architecture         64 bits
  Intl locale          n/a
  Timezone             UTC (2020-11-14T17:36:46+00:00)
  OPcache              false
  APCu                 false
  Xdebug               false
 -------------------- ---------------------------------
 ```
