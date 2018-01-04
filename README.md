# 入れないといけないもの

- php-cli
- php-curl
- php-auth

## flow

1. install PHP

2. install Composer

> curl -sS https://getcomposer.org/installer | php

> sudo mv composer.phar /usr/local/bin/composer

3. install `twitteroauth` & `PHP-Minecraft-Query`

> composer require abraham/twitteroauth

> composer require xPaw/PHP-Source-Query

4. Edit `config.php.init

Change name config.php.init => config.php  
Edit API key .  
Twitter API

5. php tweet.php

## if other server 

Edit mcq.php  
LINE:14

```mcq.php

$Query->Connect( 'localhost', 25565 );

```
