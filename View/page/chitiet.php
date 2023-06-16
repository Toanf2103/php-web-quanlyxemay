<link rel="stylesheet" href="public/css/user/chitiet.css">

<style>
    .input-ngay-thue{
        height:100%;
    }
    .cartBtn-fake {
  
  height: 50px;
  border: none;
  border-radius: 0px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 7px;
  color: white;
  font-weight: 500;
  position: relative;
  background-color: rgb(29, 29, 29);
  box-shadow: 0 20px 30px -7px rgba(27, 27, 27, 0.219);
  transition: all 0.3s ease-in-out;
  cursor: pointer;
  overflow: hidden;
  margin-top:1.5rem;
}

.cart-fake {
  z-index: 2;
}

.cartBtn-fake:active {
  transform: scale(0.96);
}

.product-fake {
  position: absolute;
  width: 12px;
  border-radius: 3px;
  content: "";
  left: 23px;
  bottom: 23px;
  opacity: 0;
  z-index: 1;
  fill: rgb(211, 211, 211);
}

.cartBtn-fake:hover .product-fake {
  animation: slide-in-top 1.2s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

@keyframes slide-in-top {
  0% {
    transform: translateY(-30px);
    opacity: 1;
  }

  100% {
    transform: translateY(0) rotate(-90deg);
    opacity: 1;
  }
}

.cartBtn-fake:hover .cart {
  animation: slide-in-left 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

@keyframes slide-in-left {
  0% {
    transform: translateX(-10px);
    opacity: 0;
  }

  100% {
    transform: translateX(0);
    opacity: 1;
  }
}
.btn-add{
    width:100%;
}
.overlay-alert{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.6);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    padding: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
    z-index: 10000;
    color:#fff;
    display: none;
}
.overlay-alert-icon{
    /* background-color:#fff;
        border-radius: 50%; */
}
.overlay-alert-content>h3{
    color:#fff;
}
</style>
<div class="overlay-alert flex-column align-items-center justify-content-center gap-4" id="overlay-alert">
    <div class="overlay-alert-icon">
        <svg  xmlns="http://www.w3.org/2000/svg" height="3.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#30b566}</style><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
    </div>
    <div class="overlay-alert-content">
        <h5>
            Thêm vào giỏ hàng thành công
        </h5>
    </div>
</div>
<div class="container">
        <nav aria-label="breadcrumb" class="nav-container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item " aria-current="page"><a href=".">Trang chủ</a></li>
              <li class="breadcrumb-item " aria-current="page"><a href=".">Danh sách xe</a></li>
              <li class="breadcrumb-item active" ><?php echo $xe->getTenXe() ?></li>

                           
            </ol>
          </nav>
        <!-- <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Tìm kiếm xe" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
          </div> -->
        <div class="moto w-100 d-flex align-items-center mt-3 ">
            <div class="moto-img d-flex flex-column ">
                <div class="moto-img-show">
                    <img src="<?php echo $xe->getHinhAnh()[0] ?>" class="img-fluid" alt="Responsive image d-block" id="img-product">
                </div>
                <div class="btn-img d-flex flex-wrap my-1" id="btn-img">
                <?php foreach ($xe->getHinhAnh() as $item): ?>
                    <img src="<?php echo $item ?>
                    " alt="..." class="img-thumbnail">
                <?php endforeach; ?>
                    
                    
                    
                </div>
            </div>
            <div class="moto-info flex-1 d-flex flex-column align-self-start">
                <h2>
                    <?php echo $xe->getTenXe() ?>
                </h2>
                <p>Loại xe: <?php echo $xe->getLoaiXe() ?></p>
                <p>Hãng xe: <?php echo $xe->getHangXe() ?></p>
                <p>Trạng thái: <?php echo $xe->getTrangThai() ?></p>
                <p>Biển số: <?php echo $xe->getBienSoXe() ?></p>
                <!-- <p>Chi tiết: <span><?php echo $xe->getMoTa() ?></span></p> -->
                
                <h3>
                    Giá: <?php echo $xe->getGiaThueString() ?> / 1 ngày
                </h3>
                <div  class="d-flex align-items-center gap-2">
                    <label for="date-range">Chọn ngày</label>
                    <input class="input-ngay-thue flex-1" type="text" id="date-range" name="date-range" />

                </div>

                <div class="d-flex align-items-center gap-2 btn-add gap-3">
                    <button class="cartBtn-fake" id="add-gio-hang">
                        <svg class="cart-fake" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                        Thêm vào giỏ hàng
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product-fake"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                    </button>
                    
                
                </div>
                

            </div>

        </div>
        <div class="dieu-khoan mt-5">
            <h3>Thủ tục khi thuê xe</h3>
            <ul>
                <li>Cần 1 trong các loại giấy sau: Chứng minh nhân dân, Hộ chiếu, Passport, Hộ khẩu hoặc giấy tờ tuỳ thân có hình khác.</li>
                <li>Bằng lái xe bắt buộc
                </li>
                <li>Không cần đặt cọc</li>
                <li>Thanh toán khi trả xe</li>
            </ul>
            <span>Có giao nhận xe tận nơi miễn phí tại sân bay, bến xe, bến tàu và các quận huyện nội thành Đà Nẵng. Thời gian thuê được tính 1 ngày là 24 tiếng, quá thời gian 6 tiếng sẽ tính thêm 1 ngày(được trể 1 tiếng). Khi thuê xe sẽ làm hợp đồng có 2 bản , mỗi bên giữ 1 bản có ký tên đóng dấu công ty. Thời gian giao nhận xe: từ 7h00 - 19h30 hàng ngày, tất cả các ngày lễ tết vv…</span>
            
        </div>
          
    </div>
    <script>
        
        const imgElm = document.getElementById("img-product");
        const imgBtnElms = document.getElementById("btn-img").getElementsByTagName('img');
        var ngayBD=null
        var ngayKT=null

        for (var i = 0; i < imgBtnElms.length; i++) {
           imgBtnElms[i].addEventListener('click',(e)=>{
                imgElm.src=e.target.src;
           });
          
        }
    </script>

    <script>
        function showAlert(mess,type) {
            var cartAlert = document.getElementById("overlay-alert");
            
            document.getElementsByClassName("overlay-alert-content")[0].querySelector('h5').innerHTML=mess
            if(type=="success"){
                document.getElementsByClassName("overlay-alert-icon")[0].innerHTML=`<svg  xmlns="http://www.w3.org/2000/svg" height="3.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#30b566}</style><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>`
            }else{
                document.getElementsByClassName("overlay-alert-icon")[0].innerHTML=`<svg xmlns="http://www.w3.org/2000/svg" height="3.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#d90808}</style><path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>`
            }
            cartAlert.style.display = "flex";
            setTimeout(function() {
                cartAlert.style.display = "none";
            }, 3000); // 2 giây sau khi hiển thị, thông báo sẽ biến mất
        }

    </script>
    <script>
        const maXe="<?php echo $xe->getMaXe(); ?>";
        const tenXe="<?php echo $xe->getTenXe(); ?>";
        const giaThue="<?php echo $xe->getGiaThue(); ?>"*1;
        const hinhAnh="<?php echo $xe->getHinhAnh()[0]; ?>";

    </script>
    <script>
        const disabledDates=[]
        <?php foreach ($xe->getLich() as $item): ?>
            disabledDates.push({
                startDay: "<?php echo $item['ngayBD']?>",
                endDay: "<?php echo $item['ngayKT']?>"

            })
                
        <?php endforeach; ?>
       
    </script>

    <script>
        
        $(document).ready(function() {
        
        function isDateInRange(date) {
            var selectedDate = date.startOf('day'); // Định dạng ngày thành ngày bắt đầu của ngày
            
            for (var i = 0; i < disabledDates.length; i++) {
                var start = moment(disabledDates[i].startDay, dateFormat).startOf('day');
                var end = moment(disabledDates[i].endDay, dateFormat).endOf('day');
                
                if (selectedDate.isBetween(start, end, null, '[]')) {
                    return true;
                }
            }
            
            return false;
        }
        
        $('#date-range').daterangepicker({
            opens: 'right',
            autoUpdateInput: false,
            locale: {
            cancelLabel: 'Xóa',
            applyLabel: 'Chọn',
            daysOfWeek: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
            monthNames: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            firstDay: 1
            },
            buttonText: {
            apply: 'Chọn'
            },
            minDate: moment().startOf('day'),
            isInvalidDate: isDateInRange
           
            
        });

        function checkDate(startDay,endDay){
            for (let i = 0; i < disabledDates.length; i++) {
                const disabledStartDate = moment(disabledDates[i].startDay, 'DD-MM-YYYY').startOf('day');
                const disabledEndDate = moment(disabledDates[i].endDay, 'DD-MM-YYYY').endOf('day');

                if (disabledStartDate.isBetween(startDay, endDay, null, '[]') || disabledEndDate.isBetween(startDay, endDay, null, '[]')) {
                    return false
                } 
            }
            return true
        }

        $('#date-range').on('apply.daterangepicker', function(ev, picker) {
            const startDay=moment(picker.startDate, dateFormat)
            const endDay=moment(picker.endDate, dateFormat)

            if(!checkDate(startDay,endDay)){
                showAlert('Ngày bạn chọn đã có người thuê!',"error");
            }else{
                $(this).val(picker.startDate.format(dateFormat) + ' - ' + picker.endDate.format(dateFormat));
                ngayBD=picker.startDate.format(dateFormat)
                ngayKT=picker.endDate.format(dateFormat)

            }

        });
    })
       
        
    </script>

    <script src="View/js/chitiet.js"></script>
    
    