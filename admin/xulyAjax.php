<?php
    include("../CallApi/xuly.php");
    include("../Model/Curl.php");

    $action = isset($_REQUEST['act'])?$_REQUEST['act']:'none';
    switch($action){
        case 'checkLogin':
            $rs = checkLoginAdmin($_REQUEST['username'],$_REQUEST['password']);
            if($rs['status']=='success'){
                if($rs['data']['trangThai']!="Hoạt động"){
                    echo "Tài khoản đã bị khóa";
                }elseif($rs['data']['phanQuyen']=="Khách hàng"){
                    echo "Không có quyền truy cập";
                }
                else{
                    session_start();
                    $_SESSION['id_admin'] = $rs['data']['maTaiKhoan'];
                    $_SESSION['hoTen'] = $rs['data']['hoTen'];
                    $_SESSION['avatar'] = "http://localhost:5000/".$rs['data']['avatar'];
                    $_SESSION['cccd'] = $rs['data']['cccd'];
                    $_SESSION['diaChi'] = $rs['data']['diaChi'];
                    $_SESSION['email'] = $rs['data']['email'];
                    if($rs['data']['gioiTinh']=="M"){
                        

                        $_SESSION['gioiTinh']="Nam";
                    }elseif($rs['data']['gioiTinh']=="W"){
                        $_SESSION['gioiTinh']="Nữ";
                    }else{
                        $_SESSION['gioiTinh']="Khác";
                    }
                    $_SESSION['gioiTinhValue']=$rs['data']['gioiTinh'];
                    
                    $_SESSION['ngaySinh'] = date("Y-m-d", strtotime($rs['data']['ngaySinh']));
                    
                    $_SESSION['sdt'] = $rs['data']['sdt'];

                    echo 'true';
                }
                
                
                
            }else{
                echo 'Sai tài khoản mật khẩu.';
            }            
            break;
        case 'setSession':
            session_start();
            

            
            $_SESSION['hoTen'] = $_REQUEST['hoTen'];
            $_SESSION['avatar'] = "http://localhost:5000/".$_REQUEST['avatar'];
            $_SESSION['cccd'] = $_REQUEST['cccd'];
            $_SESSION['diaChi'] = $_REQUEST['diaChi'];
            $_SESSION['email'] = $_REQUEST['email'];
            if($_REQUEST['gioiTinh']=="M"){
                

                $_SESSION['gioiTinh']="Nam";
            }elseif($_REQUEST['gioiTinh']=="W"){
                $_SESSION['gioiTinh']="Nữ";
            }else{
                $_SESSION['gioiTinh']="Khác";
            }
            $_SESSION['gioiTinhValue']=$_REQUEST['gioiTinh'];
            
            $_SESSION['ngaySinh'] = date("Y-m-d", strtotime($_REQUEST['ngaySinh']));
            
            $_SESSION['sdt'] = $_REQUEST['sdt'];

            echo $_REQUEST['sdt'].'  '.$_REQUEST['ngaySinh'].'  '.$_REQUEST['hoTen'];
            
            break;
        default:
            include('componer/duyetdonhang.php');
            break;
        
    }
?>