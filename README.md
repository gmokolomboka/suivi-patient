# suivi-patient

Exemple d'une application avec Symfony
========================

Cette application est basée sur  https://rojas.io/creating-a-website-with-symfony-4-part-1/

Requirements
------------

  * PHP 7.4.12 ou  higher;
  * PDO-MySQL PHP extension enabled;

Utilisation 
------------

[Download Symfony][4] to install the `symfony` binary on your computer and run
this command:

```bash
$ symfony new --demo my_project
```

Alternatively, you can use Composer:

```bash
$ composer create-project symfony/symfony-demo my_project
```

Usage
-----

There's no need to configure anything to run the application. If you have
[installed Symfony][4] binary, run this command:

```bash
$ cd my_project/
$ symfony serve
```

Then access the application in your browser at the given URL (<https://localhost:8000> by default).

If you don't have the Symfony binary installed, run `php -S localhost:8000 -t public/`
to use the built-in PHP web server or [configure a web server][3] like Nginx or
Apache to run the application.

Tests
-----

Execute this command to run tests:

```bash
$ cd my_project/
$ ./bin/phpunit
```

[1]: https://symfony.com/doc/current/best_practices.html
[2]: https://symfony.com/doc/current/reference/requirements.html
[3]: https://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html
[4]: https://symfony.com/download



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
