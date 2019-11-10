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
 | HTTP Method	| Path | Action | Scope | Desciption  |
 | ----- | ----- | ----- | ---- |------------- |
 | GET      | /students | index | students:list | Get all students
 | POST     | /student | store | student:create | Create an student
 | GET      | /student/{student_id} | show | student:read |  Fetch an student by id
 | PUT      | /student/{student_id} | update | student:write | Update an student by id
 | DELETE      | /student/{student_id} | destroy | student:delete | Delete an student by id

