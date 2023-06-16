<?php
    
    switch($page){
        case 'home':
            include('componer/duyetdonhang.php');
            echo '<script>let activeNav = 1;</script>';
            break;
        case 'logout':
            session_destroy();
            echo '<script>window.location.href = ".";</script>';
            break;
        case 'xacnhantraxeView':
            echo '<script>let activeNav = 2;</script>';
            include('componer/xacnhantraxe.php');
            break;
        case 'tatcadonhangView':
            echo '<script>let activeNav = 3;</script>';
            include('componer/tatcadonhang.php');
            break;
        case 'quanlytaikhoanView':
            echo '<script>let activeNav = 4 ;</script>';
            include('componer/quanlytaikhoan.php');
            break;
        // case 'quanlytaikhoanView':
        //     echo '<script>let activeNav = 4 ;</script>';
        //     include('componer/quanlytaikhoan.php');
        //     break;
        case 'thongtincanhanView':
            echo '<script>let activeNav = 6;</script>';
            
            include('componer/thongtincanhan.php');
            break;
        
        default:
            include('componer/duyetdonhang.php');
            echo '<script>let activeNav = 1;</script>';
            break;
        
    }

?>