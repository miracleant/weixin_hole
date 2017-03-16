<?php
require('../inc/config.php');
require('../inc/setsmarty.php');
$yzblog = new smarty_yzblog();
$yzblog->setTemplateDir('../tpl/m/');

$yzblog->assign('title','发布-洋子的博客');




$yzblog->display('adn.html');

?>