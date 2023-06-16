<link rel="stylesheet" href="public/css/user/donhang.css">
<div class="container">
    <nav aria-label="breadcrumb" class="nav-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " aria-current="page"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item " >Đơn hàng</li>          
        </ol>
    </nav>
    <h3>Đơn hàng của tôi</h3>

    <div class="content">
        <div class="tab d-flex justify-content-between">
            <div class="tab-item active">
                Đang đăng kí
            </div>
            <div class="tab-item">
                Đã hủy
            </div>
            <div class="tab-item">
                Đang thuê
            </div>
            <div class="tab-item">
                Hoàn Tất
            </div>
            <div class="tab-item">
                Tất cả đơn
            </div>
        </div>
        <?php foreach ($listOrder as $order): ?>
            <div class="content-body">
            
                <div class="content-body-header d-flex align-items-center justify-content-between">
                    <div class="thoi-gian-thue  d-flex align-items-center gap-2">
                        <p>Thời gian thuê</p>
                        <p><?php echo $order->getNgayBD(); ?></p>
                        <p>-</p>
                        <p><?php echo $order->getNgayKT(); ?></p>
                        <p>(<?php echo $order->getSoNgayThue(); ?> ngày)</p>

                        



                    </div>
                    <div class="trang-thai">
                        <p>Đang chờ duyệt</p>
                    </div>
                </div>
                
                <div class="content-body-noidung">
                    <?php foreach ($order->getChiTiet() as $xe): ?>
                        <div class="item d-flex align-items-center justify-content-between">
                            <img class="item-img d-block" src="<?php echo $xe['hinhAnh'] ?>" alt="">
                            <div class="item-info d-flex flex-column gap-3">
                                <a href=".?page=detail&idXe=<?php echo $xe['maXe']?>"><p class="item-info-name"><?php echo $xe["tenXe"] ?></p></a>
                                <p class="item-info-type"><?php echo $xe["loaiXe"] ?></p>
                                <p class="item-info-type"><?php echo $xe["bienSoXe"] ?></p>

                            </div>
                            <div class="item-price">
                                <p><?php echo number_format($xe["giaThue"], 0, ',', '.').'đ'  ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                    <div class="thanh-tien d-flex align-items-center justify-content-end gap-2 mt-3">
                        <div class="thanh-tien-content">
                            <div class="d-flex align-items-center gap-2">
                                <p>
                                    Thành tiền:
                                </p>
                                <p class="thanh-tien-content-tien">
                                <?php echo $order->getTongTienString(); ?>
                                </p>
                            </div>
                            <div>
                                <button class="thanh-tien-content-btn">Hủy đơn</button>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        <?php endforeach; ?>

        
    </div>
    
</div>