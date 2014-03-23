
<?php
$con=mysqli_connect("localhost","root","ashr1y","coppr");
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$branch =$_GET['branch_sel'];
//print_r($_GET);
$sql = "SELECT subname FROM subject s,branch b where s.branchid = b.branchid AND b.branchid=(select branchid from branch where branch ='$branch')";

$result = mysqli_query($con,$sql);

$b=""; 
while($row = mysqli_fetch_object($result))
{
	$b .= "<option  value='".$row->subname."'>'".$row->subname."'</option>";
}
if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}

echo $b;
?>  


