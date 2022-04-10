<?php
/**
 * Created by PhpStorm.
 * User: Billy
 * Date: 15/04/2016
 * Time: 23:05
 */

include "../connect.php";

$id = $_GET['id'];

$query=mysql_query("delete from dftr_animasi where id='$id'");


if ($query==true){
    echo "
            <meta http-equiv='refresh' content='0; url=uploadDataAnimasi.php'>
            ";
}
else{
    echo "
            <meta http-equiv='refresh' content='0; url=uploadDataAnimasi.php'>
            ";
}

?>