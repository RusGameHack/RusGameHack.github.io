<?php

require "Coin.php";
require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => "mysql",
    'host' => "http://localhost:3000/index.php",
    'database' => "ad220219_donator",
    'username' => "ad22021998",
    'password' => "zaq!@#45"
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

require "Payment.php";

$coin = new CoinPaymentsAPI();
$coin->Setup("392a8abb3863825De61A3F30fbD12edd447068136aD9593dc6567f7A84CDC105","1fb52b359e7e5d4d4a037c245e9e3ece86b95b8ff6670e3afc724120f1e15bd0");