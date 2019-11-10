# Student-Finder
Student  Finder is a  Restful Api for managing Student Details and store it collectively which can further be used for analytics and is based on Laravel framework.   
## Features -  
* Supports CRUD operations of student records.  
* Including version control      

## Getting Started
First, clone the repo:
```bash
$ git clone https://github.com/jai-k-gohil/Student-Finder.git
```

#### Install dependencies
```bash
 composer install
 ```

#### Configure the Environment
Create `.env` file:
```
$ cat .env.example > .env
```
If you want you can edit database name, database username and database password.

#### Migrations and Seed the database with fake data
```bash
$ php artisan migrate --seed
```   
And also run
```bash
php artisan key:generate
```
 to generate an application key for this app to run and you are ready to go.
 
 ### API Routes
 ```php
 Route::prefix('v1')->group(function(){
     Route::apiResource('/student', 'Api\v1\StudentController')
         ->only(['show','destroy','update','store']);
 
     Route::apiResource('/students', 'Api\v1\StudentController')
         ->only('index');
 });
 
 Route::prefix('v2')->group(function(){
     Route::apiResource('/student', 'Api\v2\StudentController')
         ->only('show');
 });
 ```