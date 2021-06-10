# crms
College resource management

In order to run this project, please do the following:
- Install [PHP 8.0](https://php.net) or newer version
- Install required extensions: xml, mbstring, sqlite3
- Install [composer package manager](https://getcomposer.org)
- Clone or download repository
- Goto project dir
- Run `composer install` (It will install dependencies and also setup sqlite database)
- Goto public folder `cd public`
- Use PHP's built-in server to view application `php -S 127.0.0.1:3000`
- Goto http://localhost:3000 or http://127.0.0.1:3000


**Note:** In case you want to use any other datababse like mysql, please install required PHP drivers `pdo_mysql` and change `DATABASE_URL` in `.env` file.
