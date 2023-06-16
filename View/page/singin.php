<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.flex-r,
.flex-c {
  justify-content: center;
  align-items: center;
  display: flex;
}
.flex-c {
  flex-direction: column;
}
.flex-r {
  flex-direction: row;
}

.wrapper {
  width: 100%;
  min-height: 100vh;
  padding: 20px 10px;
  background: #e5e5e5;
}

.login-text {
  background-color: #f6f6f6;
  max-width: 400px;
  min-height: 500px;
  border-radius: 10px;
  padding: 10px 20px;
}

.logo {
  margin-bottom: 20px;
}
.logo span,
.logo span i {
  font-size: 25px;
  color: #0d8aa7;
}

.login-text h1 {
  font-size: 25px;
}
.login-text p {
  font-size: 15px;
  color: #000000b2;
}

form {
  align-items: flex-start !important;
  width: 100%;
  margin-top: 15px;
}

.input-box {
  margin: 10px 0px;
  width: 100%;
}
.label {
  font-size: 15px;
  color: black;
  margin-bottom: 3px;
}
.input {
  background-color: #f6f6f6;
  padding: 0px 5px;
  border: 2px solid rgba(216, 216, 216, 1);
  border-radius: 10px;
  overflow: hidden;
  justify-content: flex-start;
}

input {
  border: none;
  outline: none;
  padding: 10px 5px;
  background-color: #f6f6f6;
  flex: 1;
}
.input i {
  color: rgba(0, 0, 0, 0.4);
}

.check span {
  color: #000000b2;
  font-size: 15px;
  font-weight: bold;
  margin-left: 5px;
}

.btn {
  color: #ffffff;
  border-radius: 30px;
  padding: 10px 15px;
  background: linear-gradient(122.33deg, #68bed1 30.62%, #1e94e9 100%);
  margin-top: 30px;
  margin-bottom: 10px;
  font-size: 16px;
  transition: all 0.3s linear;
}

.btn:hover {
  transform: translateY(-2px);
}
.extra-line {
  font-size: 15px;
  font-weight: 600;
}
.extra-line a {
  color: #0095b6;
}
input[type=text]{
    min-width: 50vh;
}
input[type=submit]{
    margin-top: 1rem;
    cursor: pointer;
}

    </style>
</head>
<body>
    <body>
        <div class="wrapper flex-r">
          <div class="flex-r login-wrapper">
            <div class="login-text">
              <div class="logo">
                <!-- <span><i class="fab fa-speakap"></i></span> -->
                <!-- <span>Toanf shop</span> -->
              </div>
              <div class="alert alert-danger" role="alert">
                This is a danger alert—check it out!
              </div>
              <h1>Đăng ký</h1>
              
      
              <form method="POST" action=".?checkSingin" class="flex-c">
                <div class="input-box">
                  <span class="label">Tài khoản</span>
                  <div class=" flex-r input">
                    <input type="text" placeholder="name@abc.com">
                    <i class="fas fa-at"></i>
                  </div>
                </div>
      
                <div class="input-box">
                  <span class="label">Mật khẩu</span>
                  <div class="flex-r input">
                    <input type="password" placeholder="8+ (a, A, 1, #)">
                    <i class="fas fa-lock"></i>
                  </div>
                </div>
                <div class="input-box">
                    <span class="label">Xác nhận mật khẩu</span>
                    <div class="flex-r input">
                      <input type="password" placeholder="8+ (a, A, 1, #)">
                      <i class="fas fa-lock"></i>
                    </div>
                  </div>
      
                <!-- <div class="check">
                  <input type="checkbox" name="" id="">
                  <span>Tôi đồng y</span>
                </div> -->
      
                <input class="btn" type="submit" value="Tạo tài khoản">
                <span class="extra-line">
                  <span>Bạn có tài khoản rồi ư?</span>
                  <a href=".?page=login">Đăng nhập</a>
                </span>
              </form>
      
            </div>
          </div>
        </div>
      </body>
</body>
</html>