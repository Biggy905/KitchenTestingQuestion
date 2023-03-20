Install network for docker

~~~
make init
~~~

Launch project
~~~
make up
~~~

Install dependencies

~~~
make composer-install
~~~

Web-service available by<br/>
front
~~~
http://localhost:3200
~~~
rest front
~~~
http://localhost:3201
~~~
admin
~~~
http://localhost:3300
~~~
rest admin
~~~
http://localhost:3301
~~~

Launch Codeception
~~~
docker exec -it kit_php_fpm sh
~~~
~~~
php vendor/bin/codecept run
~~~