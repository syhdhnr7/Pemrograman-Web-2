<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == "admin@gmail.com" AND $password == "admin"){
        header("location:admin/index.php");
    } else {
        header("location:form_login.php?login_error");
    }
}
?>