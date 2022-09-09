Description:
This project is a Json Api, it has the functionality to list, create, update, delete and paginate records
of a book, the book contains variables that must be provided by the user, including title, description, url, publisher, year_published and available, in addition all fields are validated through
a validator class.


Environment requirements:

-You must have a local server installed
-You must have postman installed
-The project uses the mysql database engine
-It is required to have version 7.4 of php installed, if you have a higher version, you must
to change the composer.json file and change the required version. The minimum version of php
required is version 7.3.0


Installation guide:

It is necessary to change the .env file, the necessary schema must be created in order to use the database
the schema name is defined in this file in "DB_DATABASE", "DB_USERNAME" should be changed,
"DB_PASSWORD" and "DB_PORT" corresponding to the local server you have.

In order to create the tables in the schema, the command "php artisan migrate" must be run.

You have to run the local server "php artisan serve"

In order to use the api json, you have to create an enviroment in postman
Use the routes in api.php and put in postman like this "http://127.0.0.1:8000/api/delete/2"





