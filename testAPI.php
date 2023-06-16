<?php

include_once('CallAPi/xuly.php');
// Tạo một session cURL
$ch = curl_init();

// Cấu hình URL của API (bao gồm các tham số truy vấn nếu cần)
$url = 'http://localhost:5000/getAllUser';

curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8'));


// Thiết lập phương thức GET
curl_setopt($ch, CURLOPT_HTTPGET, true);

// Để nhận kết quả từ API
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Gửi yêu cầu và lấy kết quả
$response = curl_exec($ch);

// Kiểm tra và xử lý kết quả
if ($response === false) {
    echo 'Lỗi cURL: ' . curl_error($ch);
} else {
    $data=json_decode($response);
    $arr =  setDataUser($data->data);
    foreach($arr as $item){
        echo $item->getMaTaiKhoan().'<br>'; 
        echo $item->getTaiKhoan().'<br>';
    }
    
}

// Đóng session cURL
curl_close($ch);
?>