<?php
var_dump($_COOKIE);
session_start();
$fruits= ["pomme"=>1.50,"banane"=>0.50,"orange"=>0.75];
var_dump($_COOKIE);
var_dump($_SESSION);
$_SESSION['fruits']= $fruits;
var_dump($_COOKIE);
var_dump($_SESSION);