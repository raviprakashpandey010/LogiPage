
<?php
if(isset($_POST['btnsubmit']))
{
$id=$_POST['txtid'];
$name=$_POST['txtname'];
$post=$_POST['txtpost'];
$salary=$_POST['txtsalary'];
  
$mycon=mysqli_connect("localhost","root","","information");
echo"<font color=green size=5>Connection Seccess<br>";
$sql="insert into emp values(?,?,?,?)";
$ps=$mycon->prepare($sql);
$ps->bind_param("issi",$id,$name,$post,$salary);
$ps->execute();
echo"Record Inserted";
}
?>