<?php

ini_set('display_errors', 1);
// connecting to Redis server on localhost
echo "\r\n<br/>";
$redis = new Redis();
$redis->connect('10.48.14.3', 6379);
echo "Redis connection to 127.0.0.1 port 6379 is successful!\r\n<br/>";
echo "\r\n<br/>";

// get info
$info = $redis->info();
print_r("Master host {$info['master_host']}!\n<br/>");
print_r("Connected slaves {$info['connected_slaves']}\n<br/>");
print_r("Redis v{$info['redis_version']}\n<br/>");
echo "\r\n<br/>";

//echo "Redis set key 'foo' and var 'bar'\r\n<br/>";
//$redis->set("foo", "bar");
echo "Redis get key 'foo':\r\n<br/>";
$data = $redis->get("foo");
print_r("value: $data\n<br/>");
echo "\r\n<br/>";

// print full array
echo '<pre>'; print_r($info); echo '</pre>';
