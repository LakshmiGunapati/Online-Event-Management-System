<?php
$conn=mysqli_connect("localhost","root","","phplearning");
$id=$_POST['id'];
$sql="delete from event where id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
echo "deleted";
}
else{
echo "not deleted";
}
?>