<?php
if (isset($_POST['submit'])) {
    $sName=$_POST['username'];
    $address=$_POST['Address'];
  

    $host ='localhost';
    $user ='root';
    $pass ='';
    $dbname ='stadium';
    $conn=mysqli_connect($host,$user,$pass,$dbname);
    $sql= "insert into booking (username,address,) values('$sName',$address)";
    mysqli_query($conn,$sql);
}

?>
  