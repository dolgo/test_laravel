Highload test code for [Laravel](https://laravel.com/) application

- Install Apache >= 2.2, PHP >= 5.4 and Composer
- Create virtual host, see vhosts.example.com
- Configure database connection (see config/database.php and .env.example)
- Install dependecies

    `composer update`

Example routes: 
GET [http://testlaravel.loc/nodb/messages?size=10](http://testlaravel.loc/nodb/messages?size=10)
GET [http://testlaravel.loc/db/messages?size=10](http://testlaravel.loc/db/messages?size=10)
GET [http://testlaravel.loc/images/like.png](http://testlaravel.loc/images/like.png)
POST [http://testlaravel.loc/nodb/messages](http://testlaravel.loc/nodb/messages)
POST [http://testlaravel.loc/db/messages](http://testlaravel.loc/db/messages)

