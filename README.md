# Cool Framework by Sup'Internet DEV 2020

Installation
============

A virtual host must be set to the root of the document so the routing can work. Otherwise, URI will be misinterpreted and routing will fail.

Run
```cp config/parameters.yml.dist config/parameters.yml```

Add your config to parameters.yml
Run
```composer install```
or
```php composer.phar install```

You can get composer here : <https://getcomposer.org/download/>

During development, you can use (and you should) run `gulp watch` so `.scss` files will be compiled into `.css` files.