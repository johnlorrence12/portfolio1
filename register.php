<?php
    include "dbconn.php";
    if(isset($_POST['submit'])){
        $cid=$_POST['cid'];
        $cname=$_POST['cname'];
        $cstreet=$_POST['cstreet'];
        $ccity=$_POST['ccity'];
        $file_name=$_FILES['cimage']['name'];
        $file_temp=$_FILES['cimage']['tmp_name'];
        $file_size=$_FILES['cimage']['size'];
        $location='upload/'.$file_name;
        if($file_size<=1000000){
            move_uploaded_file($file_temp,$location);
            $sql="INSERT INTO customer(CID,CNAME,CSTREET,CCITY,CIMAGE)
            VALUES('$cid','$cname','$cstreet','$ccity','$location')";
            if($conn->query($sql)){
                $_SESSION['success']="Successfully added";
            }else{
                $_SESSION['error']="Error to save";
            }
        }else{
            $_SESSION['error']="Image is to large to save";
        }
    }
    $conn->close();
    header("location:index.php");
?>