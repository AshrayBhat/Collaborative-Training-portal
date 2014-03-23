<html>
<body>
<?php
$dbserver="localhost";
$username="root";
$password="ashr1y"; // if it is exist in your database other wise it will be null($password="")
$connection=mysql_connect("$dbserver","$username","$password")or die("could not connect to the server");
$databasename="coppr";
mysql_select_db("$databasename", $connection)or die("could not select database");
$a=$_POST['contact'];
if (!$a)
{
  echo "Input some points....";
   exit();
}
$str="INSERT INTO suggestion (suggest) VALUES('$a')";
$sql=mysql_query("$str");
if (mysql_errno() == 1062) {
    print 'Item already present';
}elseif(!$sql)
{
  echo"Invalid values";
}else
echo "suggetion is added sucessfully";
?>
<form action="contactus.html">
    <input type="submit" value="Go Back">
</form>
</body>
</html>
