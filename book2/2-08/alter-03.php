<?php
 
	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    $tbname = "members";
    $field = "birth";
    $datatype = "datetime";
    
    // 필드를 추가합니다.
    $db->tableFieldADD($tbname, $field, $datatype,"FirstName");
 
?>