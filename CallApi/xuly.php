<?php
    // include_once('../Model/Curl.php');
    $globalHosting = 'http://localhost:5000/';
    function diffDate($ngayBD,$ngayKT){
        global $globalHosting;
        $dateBD = DateTime::createFromFormat('d-m-Y', $ngayBD);
        $dateKT = DateTime::createFromFormat('d-m-Y', $ngayKT);

        // Tính khoảng cách ngày
        $interval = $dateBD->diff($dateKT);
        $khoangCachNgay = $interval->days;

        return $khoangCachNgay;
    }
    
    function setXe($xeData){
        global $globalHosting;

        $xe = new Xe();
        $xe->setMaXe($xeData['maXe']);

        $xe->setTenXe($xeData['tenXe']);

        $xe->setHangXe($xeData['hangXe']);

        $xe->setTrangThai($xeData['trangThai']);

        $xe->setBienSoXe($xeData['bienSoXe']);

        $xe->setLoaiXe($xeData['loaiXe']);

        $xe->setGiaThue($xeData['giaThue']);

        $xe->setMoTa($xeData['moTa']);

        $listHinhAnh=[];
        foreach($xeData['hinhAnh'] as $img){
            $listHinhAnh[]=$globalHosting.$img;
        }
        $listLich=[];
        if(isset($xeData['lich'])){

            foreach($xeData['lich'] as $lich){
                $listLich[]=array(
                    "ngayBD" => $lich['ngayBD'],
                    "ngayKT" => $lich['ngayKT'],
                    
                );
            } 
        }
        $xe->setHinhAnh($listHinhAnh);
        $xe->setLich($listLich);
        return $xe;
    }
    function setOrder($orderData){
        $order = new Order();
        $order->setMaThue($orderData['maThue']);
        $order->setMaKH($orderData['maKH']);
        $order->setTrangThai($orderData['trangThai']);
        $order->setMaNVDuyet($orderData['maNVDuyet']);
        $order->setNgayBD($orderData['ngayBD']);
        $order->setNgayKT($orderData['ngayKT']);
        $order->setNgayDuyet($orderData['ngayDuyet']);
        $order->setGhiChu($orderData['ghiChu']);
        $listChiTiet=[];
        $tongTien=0;
        foreach($orderData['chiTiet'] as $xe){
            $chiTiet = [
                "maXe" => $xe['maXe'],
                "giaThue" => $xe['giaThue'],
                "ngayTra" => $xe['ngayTra'],
                "maNVNhanXe" => $xe['maNVNhanXe'],
                "maLoi" => $xe['maLoi'],
                "tenXe" => $xe['tenXe'],
                "loaiXe" => $xe['loaiXe'],
                "hangXe" => $xe['hangXe'],
                "bienSoXe" => $xe['bienSoXe'],
                "hinhAnh" => $globalHosting.$xe['hinhAnh'][0]               

            ];
            $tongTien+=$xe['giaThue'];
            $listChiTiet[]=$chiTiet;
        }
        $order->setSoNgayThue(diffDate($orderData['ngayBD'],$orderData['ngayKT']));
        
        $order->setChiTiet($listChiTiet);
        $order->setTongTien($tongTien*diffDate($orderData['ngayBD'],$orderData['ngayKT']));

        return $order;
    }
    
    function setListXe($data){
        $listXe=[];
        foreach ($data as $item){
            

            $listXe[]=setXe($item);
        }
        return $listXe;
    }
    
    function getAllXe(){
        $listXe=[];
        $curl = new MyCurl();
        $api='getAllXe';
        $curl->setUrl($api);
        $curl->setOption(CURLOPT_RETURNTRANSFER, true);
        // Gửi request và lấy kết quả
        $response = $curl->execute();
        // Đóng cURL handle
        
        
        $data = json_decode($response, true);
        
        if($data['status']=='success'){           
            $listXe=setListXe($data['data']);
        }
        $curl->close();
        return $listXe;        
    }

    function getXe($maXe){
        $curl = new MyCurl();
        $api='getXe/'.$maXe;
        $curl->setUrl($api);
        $curl->setOption(CURLOPT_RETURNTRANSFER, true);
        // Gửi request và lấy kết quả
        $response = $curl->execute();
        $data = json_decode($response, true);
        $xe = new Xe();
        if($data['status']=='success'){           
            $xe=setXe($data['data']);
        }
        $curl->close();
        return $xe;
    }
    function checkLoginAdmin($username,$password){
        $curl = new MyCurl();
        // $data = "username={$username}&password={$password}";
        $data = array(
            'username' => $username,
            'password' => $password
        );
        $api='login';
        $curl->setUrl($api);
        // Thiết lập phương thức POST
        $curl->setOption(CURLOPT_POST, true);
        // Thiết lập dữ liệu POST
        $curl->setOption(CURLOPT_POSTFIELDS, json_encode($data));
        // Thiết lập tiêu đề Content-Type là application/json
        $curl->setOption(CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        // Thiết lập giá trị trả về như một chuỗi
        $curl->setOption(CURLOPT_RETURNTRANSFER, true);
        $response = $curl->execute();
        $curl->close();
        $data = json_decode($response, true);
        return $data;
    }

    function getOrder($id_user,$trangThai){
        $curl = new MyCurl();
        $api='getOrderByIdUser/'.$id_user;
        $curl->setUrl($api);
        $curl->setOption(CURLOPT_RETURNTRANSFER, true);
        // Gửi request và lấy kết quả
        $response = $curl->execute();
        $data = json_decode($response, true);
        $listOrder=[];
        
        if($data['status']=='success'){           
            $listData=$data['data'];
            $listOrder=[];
            foreach($listData as $order){
                $od = new Order();
                $od = setOrder($order);
                $listOrder[]=$od;
            }
        }
        $curl->close();
        return $listOrder;
    }
    
    
?>