
<?php
$con=mysqli_connect("localhost","root","ashr1y","coppr");
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$subject =$_GET['sub_sel'];
//print_r($_GET);
$sql = "SELECT t.topicname FROM topic t, subject s where t.subid = s.subid AND s.subid=(select subid from subject where subname ='$subject')";

$result = mysqli_query($con,$sql);
$c="";
 while($row = mysqli_fetch_object($result))
  {
   $c.="<option  value='".$row->topicname."'>'".$row->topicname."'</option>";
  }
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo $c;

?>  
