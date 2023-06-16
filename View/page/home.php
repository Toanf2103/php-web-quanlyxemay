<div class="slide-show">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://cdn.honda.com.vn/motorbikes/September2022/JCqCTLtm6ut04NB8btk1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://yenxephuquang.vn/wp-content/uploads/2021/11/hinh-anh-xe-do-dep-doc-dao-moi-nhat-2022-1-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://cdn.honda.com.vn/motorbikes/September2022/JCqCTLtm6ut04NB8btk1.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
    </div>
<link rel="stylesheet" href="public/css/user/index.css">
<div class="container">
        
        <nav aria-label="breadcrumb" class="nav-container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item " aria-current="page"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item " >Danh sách sản phẩm</li>          
            </ol>
          </nav>
        <!-- <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Tìm kiếm xe" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
          </div> -->
        <p class="row product-TxtTile col-sm-12 col-lg-12 col-md-12 col-lg-1">Lựa Chọn <br>Theo Sở Thích Bạn</p>
          <div class="list-type-moto d-flex align-items-center">
                <button>Tất cả</button>
                <button>Xe số</button>
                <button>Xe ga</button>
                <button>Xe tay côn</button>
                
          </div>
          <div class="product d-flex align-items-center flex-wrap">
          <?php foreach ($listXe as $item): ?>
            <!-- Item -->
            <div class="product-item d-flex flex-column">
                <div class="img-product-item">
                    <img src="<?php echo $item->getHinhAnh()[0]?>" alt="">
                </div>
                <div class="info-product-item">
                    <p><?php echo $item->getTenXe() ?></p>
                    <span class="w-100">Từ <?php echo $item->getGiaThueString() ?></span>
                </div>
                <div class="more"><a href=".?page=detail&idXe=<?php echo $item->getMaXe()?>">Xem chi tiết</a></div>
            </div>
            <!-- end-item -->
          <?php endforeach; ?>
            
            
            

            

            
            
            
          </div>
    </div>