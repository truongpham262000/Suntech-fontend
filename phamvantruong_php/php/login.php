<?php
    session_start();
    require("connect.php");

    // Form Login
    $user_name = $password = "";
    $error = "";
    if(isset($_GET['logout'])){
        $logout = $_GET['logout'];
        if($logout == true){
            unset($_SESSION['user_permission']);
        }
    }

    if(isset($_POST['LogIn'])){
        $user_name = addslashes($_POST['Login_User']);
        $password_client = addslashes($_POST['Login_password']);

        if(!isset($user_name) && !isset($password_client)){
            $error = "Bạn chưa nhập đủ thông tin";
        } else {
            $sql_Login = "SELECT * FROM admin WHERE username='".$user_name."' and password='".$password_client."'";
            $check_data = mysqli_query($conn,$sql_Login);
            $chek_permission = mysqli_fetch_array($check_data);
            if($chek_permission){
                if($chek_permission['permission'] == 'Admin'){
                    header("location: admin.php");
                }
                if($chek_permission['permission'] == 'Khách Hàng') {
                    header("location: HomePage.php");
                }
            } else {
                $error = "Tài khoản hoặc mật khẩu không chính xác";
            }
            $_SESSION['user_permission'] = $user_name;
        }
    }

    // Form Register
    $Register_User = $Register_password = $Register_password_check = $Register_Name = $Register_Phone = $Register_Email = $Register_Address = $checkDK = "";
    $Register_Error_name = $Register_Error_name1 = $Register_Error_pass = $Register_Error_pass1 = $Register_Error_check = $success = "";
    if(isset($_POST['Register'])){
        $Register_User = $_POST['Register_User'];
        $Register_password = $_POST['Register_password'];
        $Register_password_check = $_POST['Register_password_check'];
        $Register_Name = $_POST['Register_Name'];
        $Register_Phone = $_POST['Register_Phone'];
        $Register_Email = $_POST['Register_Email'];
        $Register_Address = $_POST['Register_Address'];
        $checkDK = (!isset($_POST['checkDK'])) ? 0 : 1;

        $Check_name_inDB = "SELECT * FROM admin WHERE username='".$Register_User."'";
        $Check_inDB = mysqli_query($conn, $Check_name_inDB);
        $Check_user_inDB =  mysqli_fetch_assoc($Check_inDB);
        // check name user in Database

        if($Check_user_inDB > 0){
            $Register_Error_name1 = "<li>Tài khoản đã có người dăng ký. Vui lòng chọn tài khoản khác.</li>";
        } elseif(!preg_match('/^[^0-9]([a-zA-Z0-9_\.]{6,32})(\S)$/',$Register_User)) {
            // Regx user name
            $Register_Error_name1 = "";
            $Register_Error_name = "<li>Tên tài  khoản viết liền không dấu.Bắt đầu bằng ký tự</li>";
        } elseif(!preg_match("/([a-zA-Z])([a-zA-Z0-9])(\S)(?=.*[@,!,-,_,#,$,%,^,&,*,(,),?,<,>,;,:,\",{,\],\|]){6,}/",$Register_password)){
            // check password
            $Register_Error_name = "";
            $Register_Error_pass = "<li>Mật khẩu viết liền không dấu.Có ký tự đặc biệt.</li>";
        } elseif($Register_password != $Register_password_check){
            // Check password retype
            $Register_Error_pass = "";
            $Register_Error_pass1 = "<li>Mật khẩu nhập lại không chính xác.</li>";
        } elseif ($checkDK == 0) {
            // check agree service
            $Register_Error_pass = "";
            $Register_Error_check = "<li>Bạn chưa đồng ý với điều khoản của chúng tôi.</li>";
        } else {
            $Register_Error_check = "";
            $register_sql = "INSERT INTO admin VALUES('','".$Register_User."','".$Register_password."','".$Register_Name."','".$Register_Phone."','".$Register_Email."','".$Register_Address."',N'Khách Hàng')";
            $register_data_insert = mysqli_query($conn,$register_sql);
            if($register_data_insert)
                $success = "<script>alert('Đăng ký thành công');</script>";
            else
                $success = "<script>alert('Đăng ký không thành công');</script>";
        }
    }
?>