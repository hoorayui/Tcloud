<?php
$redis = new redis();
$redis->connect('localhost');
var_dump($redis->info());
