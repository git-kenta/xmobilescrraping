<?php
//-------------------------------------データベース接続
global $dsn;
global $user;
global $password;
global $db;
//$dsn = 'mysql:dbname=zumi-llc_salon_kanri;host=mysql626.db.sakura.ne.jp;charset=utf8';
//$user = 'zumi-llc';
//$password = 'tomori1793';
$dsn = 'mysql:dbname=xmobile_customer_list;host=localhost;charset=utf8';
$user = 'root';
$password = '';
//$dsn = 'mysql:dbname=xmobile_customer_list;host=www11382ui.sakura.ne.jp;charset=utf8';
//$user = 'kenta';
//$password = 'kenta@zumi';
//$dsn = 'mysql:dbname=webtest_cell_kanri;host=mysql1020.db.sakura.ne.jp;charset=utf8';
//$user = 'webtest';
//$password = 'tarmo4290';
//$dsn = 'mysql:dbname=zumi-llc_xmobile_kanri;host=mysql57.zumi-llc.sakura.ne.jp;charset=utf8';
//$user = 'zumi-llc';
//$password = 'tomori1793';


$db = new PDO($dsn, $user, $password);
//--------------------------------------------------