<?php

$con = mysqli_connect('host', 'user_id', 'pass', 'db_name');

$Name = $_POST['txtName'];
$Phone = $_POST['txtPhone'];
$Email = $_POST['txtEmail'];
$Message = $_POST['txtMessage'];

$sql = "INSERT INTO `customer_details` (`fldName`, `fldPhone`, `fldEmail`, `fldMessage`) VALUES ('$Name', '$Phone', '$Email', '$Message') ";

$rs = mysqli_query($con, $sql);

if($rs){
    echo "Thankyou";
}

mysqli_close($con);

?>
