<?php

$con = mysqli_connect('localhost', 'id21058491_customer_support', 'Aashishnegi@24', 'id21058491_ampedupsupplies');

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