<?php
$host="localhost";
$user_id="root";
$db="status";
mysql_connect("$host","$user_id");
mysql_select_db($db);
if(isset(['user_id'])){
  $uid=$_POST['user_id];
 $sql="select * from login where user='".$uid."' limit 1"];

 $result=mysql_query($sql);
if(mysql_num_rows($result)==1){
  <a  href="aboutus.html">
<input type="button" value="login" name="B5" class="btn btn-default"  onclick="top.main.location='aboutus.html'";>
    echo "you have sucessfully logged in";
    exit();
}
 else
 {
  echo "you have enter incorrect Password";
   exit();
 }
}

?>
