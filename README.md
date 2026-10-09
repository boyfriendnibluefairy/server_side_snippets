## TypeScript-specific Guides

* How to use JavaScript to fetch data from WEB API
* Nuances of TypeScript over JavaScript
* How to use TypeScript to edit Document Object Model (DOM)
* How to use TypeScript to access REST APIs

----

## Laravel-specific Guide (updated to Laravel 13)

1. To create a new laravel project, execute the ff
   ```.sh
   composer create-project laravel/laravel app_name --prefer-dist
   ```
  * Clear laravel configuration cache:
    ```.sh
    php artisan config:clear
    ```
  * For local development, just use your local mysql by running MAMP.
  * Configure routes in `routes/web.php`.
  * `view()` function looks for files in `resources/views/` folder.
  * `asset()` function looks for files in `public/` folder.

2. Connect to database
* Update details in `.env` and `configure/database.php` like the default database, i.e. use `mysql` instead of `sqlite`, or the database name created from `myPhpAdmin`. See GMO comments for the changes.
* Another name for database structure is `schema`. So check Laravel Schema builder on how to create tables. To see my examples, go to `routes/web.php` to build the schema using `Schema::create()` inside `Route::get()` but uncomment this once this is run. In other words, this is run once to build the schema or table structure. Don't forget to migrate your code to mysql:
  ```.sh
  php artisan migrate
  ```


