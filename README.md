# Eskimi Solutions

The following step will be taken to run the algorithm class in the repo.

1. Clone the repository
3.  Run ````cd laradock````
4.  Run ````cd docker-compose up -d nginx mysql phpmyadmin redis workspace````
5.  Run ````cd docker-compose exec workspace bash````
5.  Run ````cd out laradock````
5.  Run ````npm install````
6.  Run ````npm run watch````




#Database Seeder

To run Migration and most be inside the docker container

1. ````php artisan migrate:fresh --seed````
2. ``http://localhost/``
3. Wait for the expected result


