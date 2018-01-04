<?php
require 'vendor/autoload.php';

//require __DIR__ . '/src/MinecraftQuery.php';
//require __DIR__ . '/src/MinecraftQueryException.php';

use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

$Query = new MinecraftQuery( );

try
{
	$Query->Connect( 'localhost', 25565 );

	$info = $Query->GetInfo();
        $message = 'SERVER正常稼働中'."\n".'Players[ '.$info['Players'].'/'.$info['MaxPlayers'].' ]';
}
catch( MinecraftQueryException $e )
{
    //echo $e->getMessage( );
    $message = '[ERROR]データの取得に失敗しました。';
}
    $message = date("Y-m-d H:i:s")."\n".$message;
    echo $message.PHP_EOL;
?>
