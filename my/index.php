<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require './libs/Smarty.class.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;
$smarty->assign("test1","哈哈哈 有效?");
$smarty->assign("test2","哈哈哈 真的有效?");
$smarty->display('hello.html');
