<?php
if (isset($_POST['username']) && isset($_POST['address'])) {
include 'connect.php';
function validate($data){
    $data = trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;

}
$username = validate($_POST['username']);
$address = validate($_POST['Address']);
echo "hello";
}else {
    header("Location:booking.html");
}

