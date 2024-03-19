# PHP Starter
A php structure to start a code using vanila php

## Usage
1. docker-compose up -d
2. docker-compose exec web bash
3. composer install

## Run
php -S 0.0.0.0:8060

### Code style
Using [oskarstark](https://github.com/OskarStark/php-cs-fixer-ga) to autofix phpcs
```
docker run --rm -it -w=/app -v ${PWD}:/app oskarstark/php-cs-fixer-ga:latest
```

## Debug
Update `xdebug.start_with_request=no` to yes in xdebug.ini