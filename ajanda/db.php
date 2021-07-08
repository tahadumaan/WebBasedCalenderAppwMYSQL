<?php
ob_start();

$db = new mysqli("localhost","root","","ajanda");

if($db -> connect_errno){
    echo "Connection is failed dawg: (".$db->connect_errno.")".$db->connect_error;
}
