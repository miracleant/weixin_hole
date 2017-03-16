<?php
ini_set("display_errors","On");
error_reporting(E_ALL);
header('Content-Type: text/html; utf-8');
require('../inc/config_w.php');

$link = mysql_connect(HOST.':'.PORT,USER,PASSWORD);

mysql_select_db(DATABASE,$link);

if ($_GET['type'] == 'ct'):
// 帖子
$sql = 'select *,
    case class
        when \'1\' then \'1\'
        when \'1001\' then \'3\'
        when \'2001\' then \'2\'
    end as class_id,
    time as post_time,
    ctime as comment_time

from '.WALL.' order by time ASC';
$q=mysql_query($sql);

$result = array();

while($row = mysql_fetch_assoc($q)){
    $sql2 = 'select count(*) from '.WALL_COMMENT.' where eid = '.$row['id'];
    $t = mysql_fetch_array(mysql_query($sql2));
    $row['r_count'] = $t[0];
	$result[] = json_encode($row);

}
echo(implode(PHP_EOL, $result));

else:
// 评论
$sql = 'select * from '.WALL_COMMENT.' order by time ASC';
$q=mysql_query($sql);

$result = array();

while($row = mysql_fetch_assoc($q)){
	$result[] = json_encode($row);

}
echo(implode(PHP_EOL, $result));

endif;
