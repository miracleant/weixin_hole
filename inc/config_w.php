<?php
#基本信息
define('SITE_NAME','沅陵表白墙');//微信墙名称
define('COPY_INFO','点我测试沅陵话水平');//版权信息
define('LOWCSS',FALSE);//是否让低端手机（安卓4.0及以下）也显示背景图。低端机浏览器性能低，不建议开启
define('IP_ACCESS_INTERVAL', 5);//重复发布帖子最小间隔，防止刷帖

#栏目名称，最多3个栏目。如果某个栏目不要请设为空字符串
define('CLASS_1','表白');//栏目1
define('CLASS_2','心愿');//栏目2
define('CLASS_3','小目标');//栏目3



#数据库

#虚拟主机
#/*
define('DATABASE','weixin');//数据库名
define('HOST','127.0.0.1');//主库
define('HOST_S','127.0.0.1');//从库，没有和主库写一样
define('PORT','3306');//端口
define('USER','root');//用户名
define('PASSWORD','hcf1443497615..');//密码
#*/
date_default_timezone_set('Asia/Shanghai');
#Bae
/*
define('DATABASE','cKZpiOwOhYOhAcfyzcZN');//数据库
define('HOST',getenv('HTTP_BAE_ENV_ADDR_SQL_IP'));//主库
define('HOST_S',getenv('HTTP_BAE_ENV_ADDR_SQL_IP'));//从库
define('PORT',getenv('HTTP_BAE_ENV_ADDR_SQL_PORT'));//端口
define('USER',getenv('HTTP_BAE_ENV_AK'));//用户名
define('PASSWORD',getenv('HTTP_BAE_ENV_SK'));//密码
*/

#Sae
/*
#重要：使用 Sae 请开启 Sae 的 Memcache 服务，然后把 inc/setsmarty.php 第 13 行取消注释
define('DATABASE',SAE_MYSQL_DB);//数据库
define('HOST',SAE_MYSQL_HOST_M);//主库
define('HOST_S',SAE_MYSQL_HOST_S);//从库
define('PORT',SAE_MYSQL_PORT);//端口
define('USER',SAE_MYSQL_USER);//用户名
define('PASSWORD',SAE_MYSQL_PASS);//密码
*/


#下面是数据表
define('WALL','wechat_wall_content');
define('WALL_COMMENT','wechat_wall_comment');
