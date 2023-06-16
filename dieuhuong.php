<?php
    include('CallApi/xuly.php');
    include_once('Model/Curl.php');
    include_once('Model/Moto.php');
    include_once('Model/Order.php');

    $page = isset($_REQUEST['page'])?$_REQUEST['page']:'home';

    switch($page){
        case 'home':
            $listXe = getAllXe();
            include('View/page/home.php');
            break;
        case 'login':
            include('View/page/login.php');
            break;
        case 'checkLogin':
            $_SESSION['id'] = true;
            echo '<script>window.location.href = ".";</script>';
            break;
        case 'logout':
            session_destroy();
            echo '<script>window.location.href = ".";</script>';
            break;
        case 'singin':
            include('View/page/singin.php');
            break;
        case 'checkSingin':
            include('View/page/singin.php');
            break;
        case 'detail':
            $maXe = $_REQUEST['idXe'];
            $xe = getXe($maXe);
            include('View/page/chitiet.php');
            break;
        case 'xemDonHang':
            $id_user=$_SESSION['id_user'];
            $trangThai='';
            if(isset($_REQUEST['trangThai'])){
                $trangThai=$_REQUEST['trangThai'];
            }else{
                $trangThai='Chưa duyệt';
            }
            $listOrder = getOrder($id_user,$trangThai);
            include('View/page/donhang.php');
            break;
        default:
            include('View/page/home.php');
            break;
        
    }
?>