<html>
<head>
<title>Details</title>
</head>
<body bgcolor='crimson'>
<?php

  $name=$_REQUEST['name'];
  $num=$_REQUEST['num'];
  $email=$_REQUEST['email'];
  $address=$_REQUEST['address'];



	$dbh=mysql_connect('localhost','root','') or
	die(mysql_error());
	mysql_select_db('const') or die(mqsql_error());

	$query="INSERT INTO details VALUES('$name','$num','$email','$address')";
	$result=mysql_query($query) or die(mysql_error());

	echo "Data Inserted Successfully!!!!";

	$var=mysql_query("select * from details");

	echo"<table border size=5>";
	echo"<tr><th>details name</th> <th>details num</th> <th>details email</th> <th>details address</th> </tr>";


	while ($arr=mysql_fetch_row($var))
	{
	    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
	}

	echo"</table>";


  ?>

</body>
</html>
