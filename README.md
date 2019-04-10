# CP476 project: Teach-It

## Project structure
`/old-design` - Our original design

`/bootstrap-design` - Version 2 of our design implemented in bootstrap

`/laravel` - Our final project built on laravel.

## Running the project
First, clone or download the project from github.

### Install composer
https://getcomposer.org/doc/00-intro.md

### Install laravel
https://laravel.com/docs/5.8/installation

### Import DB
Import the SQL file from git into your local DB.

You must update the following section in the `.env` file to match your DB credentials.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=teach-it
DB_USERNAME=root
DB_PASSWORD=root
```

### Install dependencies
In order for our project to work, we need to install the various dependencies being used. 

In command promp, `cd` into the laravel folder.

Run: `composer install`

### Run server
The final step to get the website to run locally is starting the virtual server.

In command promp, `cd` into the laravel folder.

Run: `php artisen serve`
