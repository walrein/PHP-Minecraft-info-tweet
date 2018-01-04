<?php
require 'vendor/autoload.php';


use Abraham\TwitterOAuth\TwitterOAuth;


require_once('config.php');

require_once('mcq.php');

$consumerKey = API_KEY;
$consumerSecret = API_SECRET;
$accessToken = ACCESS_TOKEN;
$accessTokenSecret = ACCESS_SECRET;

$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

//認証コードの下にこれ追加するだけ！
$result = $connection->post("statuses/update", array("status" => $message));

//返ってきた内容を確認してみる
// var_dump($result);
