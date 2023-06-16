<?php
    $time = 60 * 60 * 24 * 7;
    session_set_cookie_params($time, '/');
    session_start();
    $page = isset($_REQUEST['page'])?$_REQUEST['page']:'home';
    if(!isset($_SESSION['id_admin'])){
        if($page !="checkLogin"){
            header("Location: login.php");
            exit();
        }
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../logo.png">


</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <div class="wrapper d-flex">
        <?php include('componer/navbar.php'); ?>
        <div class="content d-flex flex-column flex-1" >
            <?php include('componer/header.php'); ?>
            <?php include('dieuhuong.php'); ?>            
            
        </div>
    </div>
    <script>
        const navActives = document.querySelectorAll('aside>a');
        navActives[activeNav-1].classList.add('active');
    </script>
    <script>
        const ERROR  ="alert-danger";
        const WARNING  ="alert-warning";
        const SUCCESS  ="alert-success";

        const apiUrl = 'http://localhost:5000/'
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        function addLoadingTalbe(numRowColspan){
            const rowLoad = document.createElement('tr');
            rowLoad.innerHTML=`<td colspan="${numRowColspan}">
                                    <div class="loader">
                                        <div class="loader-text">Loading...</div>
                                        <div class="loader-bar"></div>
                                        </div>
                                </td>`
            return rowLoad
        }
        
    </script>
    

</body>
</html>