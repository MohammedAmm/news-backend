## News
This simple project you can use to dispaly news from Newsapi.org, you can easily add news to favorites or delete it from favorites And you can get your favorites back :).

## Basic Concept
* User authentication using JWT.
* Get new from Newsapi.
* Add/Delete news to/from favorites.
* User can fetch all favorites.


## Steps to run project
* Clone project.
* rename .env.example to .env.
* Composer install
* `php artisan key:generate`
* Generate secret key for JWT.
    * `php artisan jwt:secret`
* Use ur own newsapi key and file below field within .env:
    * `NEWS_API_KEY=`
* Using mailtrap for testing you can use ur own credentials key and fill below fields within .env:
    * `MAIL_USERNAME=`
    * `MAIL_PASSWORD=`
* Create a new mysql db and get ur connection parameters and fill below fields within .env.
    * `DB_DATABASE=`
    * `DB_USERNAME=`
    * `DB_PASSWORD=`
* `php artisan migrate`
* `php artisan serve`
* Don't forget to run a worker to execute the background jobs:
    * `php artisan queue:work`

* The project has postman zip file that contains both all backend apis and postman env variables.
