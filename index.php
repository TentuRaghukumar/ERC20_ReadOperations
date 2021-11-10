<?php

require "vendor/autoload.php";

$eth = new \FurqanSiddiqui\Ethereum\Ethereum();
$infura = new \FurqanSiddiqui\Ethereum\RPC\InfuraAPI($eth, "27c60a2fc1dc488db25079beae676676", "2ae83ffe95dc40849caecae126bb7eba");
$infura->ignoreSSL(); // In case Infura.IO SSL errors

$erc20 = new \FurqanSiddiqui\Ethereum\ERC20\ERC20($eth);
$erc20->useRPCClient($infura);

$usdt = $erc20->token("0xdac17f958d2ee523a2206206994597c13d831ec7");


echo "Name :- ";
var_dump($usdt->name());
echo "Symbol :- ";
var_dump($usdt->symbol());
echo "Decimals :- ";
var_dump($usdt->decimals());
echo "Total Supply :- ";
var_dump($usdt->totalSupply());
echo "Balance_Of :-";
var_dump($usdt->balanceOf($eth->getAccount("0xdac17f958d2ee523a2206206994597c13d831ec7")));


?>
