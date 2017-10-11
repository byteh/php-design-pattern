<?php
spl_autoload_register(function ($class_name) {
    //echo "Want to load $class_name.\n";
    require_once $class_name . '.php';
});

#require_once 'CommonConf.php';
$commConfA = new CommonConf();
$commConfA->initConf(AbstractPhoneConf::PROVIDER_NAME_A);
$commConfA->createConf();
$commConfA->closeConf();
var_dump($commConfA);

$commConfB = new CommonConf();
$commConfB->initConf(AbstractPhoneConf::PROVIDER_NAME_B);
$commConfB->createConf();
$commConfB->closeConf();
var_dump($commConfB);
