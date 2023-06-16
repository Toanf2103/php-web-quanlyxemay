<?php
    include("CallApi/xuly.php");
    include("Model/Curl.php");

    $action = isset($_REQUEST['act'])?$_REQUEST['act']:'none';
    switch($action){
        case 'checkLogin':
            $rs = checkLoginAdmin($_REQUEST['username'],$_REQUEST['password']);
            
            if($rs['status']=='success'){
                if($rs['data']['trangThai']!="Hoạt động"){
                    echo "Tài khoản đã bị khóa";
                }elseif($rs['data']['phanQuyen']!="Khách hàng"){
                    echo "Không có quyền truy cập";
                }
                else{
                    session_start();
                    $_SESSION['id_user'] = $rs['data']['maTaiKhoan'];
                    $_SESSION['hoTen_user'] = $rs['data']['hoTen'];
                    $_SESSION['avatar_user'] = "http://localhost:5000/".$rs['data']['avatar'];
                    $_SESSION['cccd_user'] = $rs['data']['cccd'];
                    $_SESSION['diaChi_user'] = $rs['data']['diaChi'];
                    $_SESSION['email_user'] = $rs['data']['email'];
                    if($rs['data']['gioiTinh']=="M"){
                        $_SESSION['gioiTinh_user']="Nam";
                    }elseif($rs['data']['gioiTinh']=="W"){
                        $_SESSION['gioiTinh_user']="Nữ";
                    }else{
                        $_SESSION['gioiTinh_user']="Khác";
                    }                
                    $_SESSION['ngaySinh_user'] = date("Y-m-d", strtotime($rs['data']['ngaySinh']));                   
                    $_SESSION['sdt_user'] = $rs['data']['sdt'];
                    echo 'true';
                }          
            }else{
                echo 'Sai tài khoản mật khẩu.';
            }            
            break;
        case 'logout':
            session_start();
            session_destroy();
            echo 'true';
            break;
        
    }
?>