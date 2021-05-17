<?php
//establishing connection with database.

mysqli_connect('localhost','root','') or die('Cannot connect to server');
mysqli_select_db('my_data') or die ('Cannot found database');

?>