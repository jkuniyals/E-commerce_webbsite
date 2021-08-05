<?php
$con = mysqli_connect('localhost','root');
if($con){
  mysqli_select_db($con, 'e_commerce');
}else {
    echo " no connection" or die(mysql_error());
}


?>