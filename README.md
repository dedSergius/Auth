# Auth

Simple implementation of authorization and user registration on PHP.

### Tech

Auth uses a number of open source projects to work:

* [Twitter Bootstrap](http://twitter.github.com/bootstrap/) - great UI boilerplate for modern web apps
* [Flat UI](http://designmodo.github.io/Flat-UI/) - a beautiful theme for Bootstrap
* [jQuery](http://jquery.com) - JavaScript Library

### Installation
Auth is very easy to install and deploy in a Docker application.

```sh
cd auth
docker-compose up -d
```
This command will create a multi-container Docker application that includes Nginx, PHP, MySQL and phpMyAdmin.

Next, open phpMyAdmin, create a database, and import the **db_structure.sql** file from the **www\auth** folder.

If necessary, you can change the database connection settings in the **config.php** file in the **www\auth\app** directory.


License
----

MIT

