Pokemon Project !
=======

Installation Guide :

1- Clone the Project : git clone --recursive https://github.com/Gartok/Pokemon.git <br />
2- Go On the project Folder : dir Pokemon <br />
3- On the project Folder make the next command : php ./composer.phar update <br />
4- Next Create the database : php ./bin/console doctrine:database:create (If you have already database drop the old database with :  php ./bin/console doctrine:database:drop --force <br />
5- Next Create the schema : php ./bin/console doctrine:schema:create  <br />
6- Populate de the database with : php ./bin/console doctrine:fixture:load <br />
7- Install asset with : php ./bin/console assets:install <br />
8- Finally launch server : php ./bin/console server:start <br />
9- Go to http://127.0.0.1:8000/ and you can login with the next Username/password : sacha/sacha for admin or pierre/pierre for standar user.  <br /> <br />

That's all ! Have Fun on my Pokemon Project.
