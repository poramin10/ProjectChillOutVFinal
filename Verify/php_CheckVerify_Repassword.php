<?php
session_start();
include_once('../database/connectDB.php');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    if($_SESSION['numberOTP']==$_POST['otp'] AND $_SESSION['numberOTP'] != NULL ){
        $_SESSION['numberOTP'] = NULL;

        // CheckVerify เช็คว่าผ่านรึเปล่า
        $_SESSION['CheckVerify'] = true;

        $_SESSION['Warning'] = "กรุณาแก้ไขรหัสผ่าน";
        header("location: ./Page_Verify_Repassword.php?email=".$email);
    }else{
        
        // CheckVerify เช็คว่าผ่านรึเปล่า
        $_SESSION['CheckVerify'] = false;

        $_SESSION['Failed'] = "รหัส OTP ไม่ถูกต้อง";
        header("location: ./Page_VerifyOTP_Repassword.php?email=".$email);
    }
}

?>