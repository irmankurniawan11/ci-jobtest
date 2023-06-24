# CodeIgniter 4 Application : Auth & CRUD Implementation

## Installation

`git clone -b dev-pjpk https://github.com/irmankurniawan11/ci-jobtest.git`

copy the `.env` to the project root.

`composer update` whenever there is a new release of the framework.

`php spark migrate` to run the migration.

`php spark serve` to run the app.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
