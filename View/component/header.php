<link rel="stylesheet" href="public/css/user/header.css">
<link rel="stylesheet" href="public/css/user/index.css">


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<style>
    .form-container {
  width: 100%;
  border-radius: 0.75rem;
  background-color: rgba(17, 24, 39, 1);
  padding: 2rem;
  color: rgba(243, 244, 246, 1);
}

.title {
  text-align: center;
  font-size: 1.5rem;
  line-height: 2rem;
  font-weight: 700;
}

.form {
  margin-top: 1.5rem;
}

.input-group {
  margin-top: 0.25rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.input-group label {
  display: block;
  color: rgba(156, 163, 175, 1);
  margin-bottom: 4px;
}

.input-group input {
  width: 100%;
  border-radius: 0.375rem;
  border: 1px solid rgba(55, 65, 81, 1);
  outline: 0;
  background-color: rgba(17, 24, 39, 1);
  padding: 0.75rem 1rem;
  color: rgba(243, 244, 246, 1);
}

.input-group input:focus {
  border-color: rgba(167, 139, 250);
}

.forgot {
  display: flex;
  justify-content: flex-end;
  font-size: 0.75rem;
  line-height: 1rem;
  color: rgba(156, 163, 175,1);
  margin: 8px 0 14px 0;
}

.forgot a,.signup a {
  color: rgba(243, 244, 246, 1);
  text-decoration: none;
  font-size: 14px;
}

.forgot a:hover, .signup a:hover {
  text-decoration: underline rgba(167, 139, 250, 1);
}

.sign {
  display: block;
  width: 100%;
  background-color: rgba(167, 139, 250, 1);
  padding: 0.75rem;
  text-align: center;
  color: rgba(17, 24, 39, 1);
  border: none;
  border-radius: 0.375rem;
  font-weight: 600;
}

.social-message {
  display: flex;
  align-items: center;
  padding-top: 1rem;
}

.line {
  height: 1px;
  flex: 1 1 0%;
  background-color: rgba(55, 65, 81, 1);
}

.social-message .message {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  color: rgba(156, 163, 175, 1);
}

.social-icons {
  display: flex;
  justify-content: center;
}

.social-icons .icon {
  border-radius: 0.125rem;
  padding: 0.75rem;
  border: none;
  background-color: transparent;
  margin-left: 8px;
}

.social-icons .icon svg {
  height: 1.25rem;
  width: 1.25rem;
  fill: #fff;
}

.signup {
  text-align: center;
  font-size: 0.75rem;
  line-height: 1rem;
  color: rgba(156, 163, 175, 1);
}
.modal-content{
    border-radius:0.75rem;
}
.none{
    display:none;
}
.calender>input{
    width:40%;
}

</style>
<script>
    const dateFormat = 'DD/MM/YYYY';
    var maKH=null
</script>
<?php
    if(isset($_SESSION['id_user'])){
        echo "<script>
                maKH = '{$_SESSION['id_user']}'
            </script>";
    }
?>

<header>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng Nhập</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <!-- <div class="modal-body"> -->
            <div class="form-container">
                <p class="title">Đăng nhập</p>
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                 </svg>
                <div class="none" id="warrper-alert-login">
                <div class="alert alert-danger d-flex align-items-center none"  role="alert" id="alert-login">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        An example danger alert with an icon
                    </div>
                </div>
                </div>
                <form class="form">
                    <div class="input-group">
                        <label for="username">Tài khoản</label>
                        <input type="text" name="username" id="username-login" placeholder="">
                    </div>
                    <div class="input-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password-login" placeholder="">
                        <div class="forgot">
                            <a rel="noopener noreferrer" href="#">Quên mật khẩu ?</a>
                        </div>
                    </div>
                    <button class="sign" id="btn-login-click">Đăng nhập</button>
                </form>
                <div class="social-message">
                    <div class="line"></div>
                    <p class="message">Đăng nhập với...</p>
                    <div class="line"></div>
                </div>
                <div class="social-icons">
                    <button aria-label="Log in with Google" class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
                            <path d="M16.318 13.714v5.484h9.078c-0.37 2.354-2.745 6.901-9.078 6.901-5.458 0-9.917-4.521-9.917-10.099s4.458-10.099 9.917-10.099c3.109 0 5.193 1.318 6.38 2.464l4.339-4.182c-2.786-2.599-6.396-4.182-10.719-4.182-8.844 0-16 7.151-16 16s7.156 16 16 16c9.234 0 15.365-6.49 15.365-15.635 0-1.052-0.115-1.854-0.255-2.651z"></path>
                        </svg>
                    </button>
                    <button aria-label="Log in with Twitter" class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
                            <path d="M31.937 6.093c-1.177 0.516-2.437 0.871-3.765 1.032 1.355-0.813 2.391-2.099 2.885-3.631-1.271 0.74-2.677 1.276-4.172 1.579-1.192-1.276-2.896-2.079-4.787-2.079-3.625 0-6.563 2.937-6.563 6.557 0 0.521 0.063 1.021 0.172 1.495-5.453-0.255-10.287-2.875-13.52-6.833-0.568 0.964-0.891 2.084-0.891 3.303 0 2.281 1.161 4.281 2.916 5.457-1.073-0.031-2.083-0.328-2.968-0.817v0.079c0 3.181 2.26 5.833 5.26 6.437-0.547 0.145-1.131 0.229-1.724 0.229-0.421 0-0.823-0.041-1.224-0.115 0.844 2.604 3.26 4.5 6.14 4.557-2.239 1.755-5.077 2.801-8.135 2.801-0.521 0-1.041-0.025-1.563-0.088 2.917 1.86 6.36 2.948 10.079 2.948 12.067 0 18.661-9.995 18.661-18.651 0-0.276 0-0.557-0.021-0.839 1.287-0.917 2.401-2.079 3.281-3.396z"></path>
                        </svg>
                    </button>
                    <button aria-label="Log in with GitHub" class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
                            <path d="M16 0.396c-8.839 0-16 7.167-16 16 0 7.073 4.584 13.068 10.937 15.183 0.803 0.151 1.093-0.344 1.093-0.772 0-0.38-0.009-1.385-0.015-2.719-4.453 0.964-5.391-2.151-5.391-2.151-0.729-1.844-1.781-2.339-1.781-2.339-1.448-0.989 0.115-0.968 0.115-0.968 1.604 0.109 2.448 1.645 2.448 1.645 1.427 2.448 3.744 1.74 4.661 1.328 0.14-1.031 0.557-1.74 1.011-2.135-3.552-0.401-7.287-1.776-7.287-7.907 0-1.751 0.62-3.177 1.645-4.297-0.177-0.401-0.719-2.031 0.141-4.235 0 0 1.339-0.427 4.4 1.641 1.281-0.355 2.641-0.532 4-0.541 1.36 0.009 2.719 0.187 4 0.541 3.043-2.068 4.381-1.641 4.381-1.641 0.859 2.204 0.317 3.833 0.161 4.235 1.015 1.12 1.635 2.547 1.635 4.297 0 6.145-3.74 7.5-7.296 7.891 0.556 0.479 1.077 1.464 1.077 2.959 0 2.14-0.020 3.864-0.020 4.385 0 0.416 0.28 0.916 1.104 0.755 6.4-2.093 10.979-8.093 10.979-15.156 0-8.833-7.161-16-16-16z"></path>
                        </svg>
                    </button>
	        </div>
	<p class="signup">Bạn chưa có tài khoản?
		<a rel="noopener noreferrer" href="#" class="">Đăng kí</a>
	</p>
</div>
            <!-- </div> -->
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
        </div>

        <nav class="d-flex align-items-center" >
            <div class="logo align-self-start">
               <a href="."><img src="https://www.lamborghini.com/sites/it-en/files/themes/custom/lambo_facelift_2019/images/logo.png" alt="" width="60px"></a> 
            </div>
            <ul class="d-flex">
                <li><a class="on-dark" href="."><span>Trang chủ</span></a></li>
                <li><a class="on-dark" href="."><span>Trang chủ</span></a></li>
                <li><a class="on-dark" href="."><span>Trang chủ</span></a></li>
            </ul>
            <div class="mid d-flex justify-content-center ">
                <div class="search d-flex align-items-center px-1 py-1">
                    <input class="serach-header " type="text d-block" placeholder="Tìm kiếm....">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search icon-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                </div>
            </div>
            <div class="d-flex right align-items-center header-icon">
                <div class="header-icon-cart" id="cart-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                </div>
                <div class="header-icon-login">
                    <div class="nav-header" id="login">
                        <?php
                            if(!isset($_SESSION['id_user'])){
                                echo '<a id="a-login" data-bs-toggle="modal" data-bs-target="#exampleModal">Đăng nhập</a>';
                            }else{
                                echo '<img src="https://img5.thuthuatphanmem.vn/uploads/2021/11/20/anh-cute-nguoi-that-dep-nhat_022606213.jpg" alt="">';

                            }
                        ?>                       
                        <i class="fas fa-sort-down"></i>
                    </div>
                    <?php
                        if(isset($_SESSION['id_user'])){
                            echo "<ul class='nav-content none'>
                                        <li>{$_SESSION['hoTen_user']}</li>
                                        <li><a href='.?page=xemDonHang'>Xem đơn hàng</a></li>
                                        <li><a id='logout-btn'>Đăng xuất</a></li>
                                    </ul>";
                        }
                    ?>
                    
                </div>
            </div>
        </nav>
        <div class="cart none" id="cart">
            <!-- title -->
            <div class="cart-title d-flex align-items-center">
                <p>Giỏ hàng</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" id="closeCart">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                </svg>
            </div>
            <!-- end title -->

            <!-- order -->
            <div class="cart-product d-flex flex-1" id="cart-elm">
                
                <div class="cart-product-item">
                    <!-- Header item -->
                    <div class="cart-product-item-header d-flex align-items-center">
                        <div class="calender d-flex gap-1">
                            
                            <input type="text" disabled value="28-06-2023">
                            
                            <input type="text" disabled value="28-06-2023">


                        </div>
                        <div class="check-box">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              </div>
                        </div>
                    </div>
                    <!-- End header item -->
                    
                   
                    <!-- body item -->
                    <div class="item-cart d-flex align-items-center justify-content-between px-3 py-1">
                        <div class="item-cart-img ">
                            <img src="https://cdn.honda.com.vn/motorbikes/February2023/dCC7xwQyQuRWszrYrT7F.jpg" class="rounded mx-auto d-block" alt="" width="100" >
                        </div>
                        <div class="item-cart-name flex-1">
                            <span>Honda winner X</span>
                        </div>
                        <div class="item-cart-price">
                            <span>130.000</span>
                        </div>
                        <div class="item-cart-clear">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                              </svg>
                        </div>
                    </div>
                    <!-- end body item -->   
                    <!-- body item -->
                    <div class="item-cart d-flex align-items-center justify-content-between px-3 py-1">
                        <div class="item-cart-img ">
                            <img src="https://cdn.honda.com.vn/motorbikes/February2023/dCC7xwQyQuRWszrYrT7F.jpg" class="rounded mx-auto d-block" alt="" width="100" >
                        </div>
                        <div class="item-cart-name flex-1">
                            <span>Honda winner X</span>
                        </div>
                        <div class="item-cart-price">
                            <span>130.000</span>
                        </div>
                        <div class="item-cart-clear">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                              </svg>
                        </div>
                    </div>
                    <!-- end body item -->
                </div>
                <!-- end order -->
                        
                <!-- btn-thanh-toan -->
                
                <!-- end btn-thanh-toan -->
                
            </div>
            <p class="mt-3" id="tong-tien-cart"></p>
            <button  type="button" class="btn btn-outline-primary w-100 mb-2 mt-3" disabled id="btn-submit-dang-ki-thue">Đăng kí thuê</button>

        </div>
        
    </header>
    
<script src="View/js/giohang.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <script>
        const btnLogin = document.getElementById("login");
        
        btnLogin.addEventListener("click",(e)=>{
            const tabLogin = document.getElementsByClassName("nav-content")[0];
            tabLogin.classList.toggle("none");
        });

        document.addEventListener('click', function(event) {
                const outsideClick = !document.getElementsByClassName('d-flex right align-items-center header-icon')[0].contains(event.target);
                if(outsideClick){
                     document.getElementsByClassName('nav-content')[0].classList.add('none');
                }
            });
    </script>
    <script>
        const cartIconBtn = document.getElementById("cart-icon");
        const cartBtn = document.getElementById("closeCart");
        
        function toggle(){
            document.getElementById("cart").classList.toggle("none"); 
        }
        cartIconBtn.addEventListener("click",()=>toggle());
        cartBtn.addEventListener("click",()=>toggle());

    </script>
    <script>
        const header = document.getElementsByTagName('header')[0];
        const  headerHeight=header.offsetHeight;
        window.onscroll = function() {scrollFunction()};

        function scrollFunction(){
            if(document.body.scrollTop > headerHeight || document.documentElement.scrollTop > headerHeight){
                header.classList.add('fixed');
            }else{
                header.classList.remove('fixed');
            }
        }
    </script>
    <script>
        const loginBtn= document.getElementById("btn-login-click");
        loginBtn.addEventListener('click',(e)=>{
            e.preventDefault();
            e.disabled=true;
            const username = document.getElementById("username-login").value;
            const password = document.getElementById("password-login").value;
            if(username==''||password==''){
                showAlertLogin('Nhập đầy đủ thông tin!');
            }else{
                console.log(username,password)
                xml = new XMLHttpRequest();
                {
                    xml.onreadystatechange = function() {
                        if (xml.readyState == 4 && xml.status === 200){
                            console.log(xml.responseText)
                            if(xml.responseText=='true'){
                                
                                location.reload();
                            }else{
                               
                                showAlertLogin(xml.responseText);
                            }

                            
                            // el = document.querySelector('tbody');
                            // el.innerHTML=;          
                        }
                    }   
                    url = './dieuHuongAjax.php?act=checkLogin&username='+username+'&password='+password;      
                    xml.open("GET", url, "false");
                    xml.send();
                }
            }
            

        })
    </script>
    <script>
        function showAlertLogin(mess) {
            document.getElementById("warrper-alert-login").classList.remove('none');
            document.getElementById("alert-login").querySelector('div').innerHTML=mess;
        }
    </script>
    <script>
        document.getElementById("logout-btn").addEventListener('click',(e)=>{
            
            xml = new XMLHttpRequest();
                {
                    xml.onreadystatechange = function() {
                        if (xml.readyState == 4 && xml.status === 200){
                            console.log(xml.responseText)
                            if(xml.responseText=='true'){
                                
                                location.reload();
                            }

                            
                            // el = document.querySelector('tbody');
                            // el.innerHTML=;          
                        }
                    }   
                    url = './dieuHuongAjax.php?act=logout';      
                    xml.open("GET", url, "false");
                    xml.send();
                }
        })
    </script>