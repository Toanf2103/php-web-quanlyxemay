<div class="header-content-body">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đổi mật khẩu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="alert alert-warning alert-dismissible fade show none" role="alert" id="alert-change-pass">
                    <strong>Holy guacamole!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="old-pass" class="col-form-label">Mật khẩu hiện tại:</label>
                        <input type="password" class="form-control" id="old-pass">
                    </div>
                    <div class="mb-3">
                        <label for="new-pass" class="col-form-label">Mật khẩu mới:</label>
                        <input type="password" class="form-control" id="new-pass">
                    </div>
                    <div class="mb-3">
                        <label for="confirm-old-pass" class="col-form-label">Xác nhận mật khẩu mới:</label>
                        <input type="password" class="form-control" id="confirm-new-pass">
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-close-change-pass">Đóng</button>
                    <button type="button" class="btn btn-primary" id="btn-submit-change-pass">Đổi mật khẩu</button>
                </div>
                </div>
            </div>
            </div>



                 <p class="title">Thông tin cá nhân</p>
                 <div class="alert alert-success alert-dismissible fade show none" role="alert" id="alert">
                    <strong>Holy guacamole!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                 <div class="alert alert-danger alert-dismissible fade show none" role="alert">
                    You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                 <div class="info my-3 d-flex justify-content-between w-100">
                    
                    <div class="d-flex flex-wrap gap-3 ">
                        <div class="mb-3 info-item">                       
                            <label for="exampleFormControlInput1" class="form-label">Tên</label>
                            <div class="d-flex align-items-center gap-3">
                                <input disabled id="hoTen" type="text" class="form-control" value="<?php echo $_SESSION['hoTen'];?>">      
                                <svg data-target="hoTen" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill pencil-input" viewBox="0 0 16 16" >
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </div>
                                           
                        </div>
                        <div class="mb-3 info-item">                       
                            <label for="ngaySinh" class="form-label">Ngày sinh</label>
                            <div class="d-flex align-items-center gap-3">
                                <input disabled type="date" class="form-control" value="<?php echo $_SESSION['ngaySinh'];?>" id="ngaySinh">      
                                <svg data-target="ngaySinh" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill pencil-input" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </div>
                                           
                        </div>
                        <div class="mb-3 info-item">                       
                            <label for="exampleFormControlInput1" class="form-label">Căn cước công dân</label>
                            <div class="d-flex align-items-center gap-3">
                                <input disabled id="cccd" type="text" class="form-control" value="<?php echo $_SESSION['cccd'];?>">      
                                <svg data-target="cccd" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill pencil-input" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </div>
                                           
                        </div>
                        <div class="mb-3 info-item">                       
                            <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label>
                            <div class="d-flex align-items-center gap-3">
                                <input disabled id="sdt" type="text" class="form-control" value="<?php echo $_SESSION['sdt'];?>">      
                                <svg data-target="sdt" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill pencil-input" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </div>
                                           
                        </div>
                        <div class="mb-3 info-item">                       
                            <label for="exampleFormControlInput1" class="form-label">Giới tính</label>
                            <div class="d-flex align-items-center gap-3">
                                <select id="gioiTinh" class="form-select" aria-label="Disabled select example" disabled>
                                    
                                    <option value="M" <?php if($_SESSION['gioiTinhValue']=="M") echo "selected"; ?>>Nam</option>
                                    <option value="W" <?php if($_SESSION['gioiTinhValue']=="W") echo "selected"; ?>>Nữ</option>
                                    <option value="O" <?php if($_SESSION['gioiTinhValue']=="O") echo "selected"; ?>>Nam</option>

                                    
                                  </select>
                                <svg data-target="gioiTinh" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill pencil-input" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </div>
                                           
                        </div>
                        <div class="mb-3 info-item">  
                                                 
                            <label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
                            <div class="d-flex align-items-center gap-3">
                                <input disabled id="diaChi" type="text" class="form-control" value="<?php echo $_SESSION['diaChi'];?>">      
                                <svg data-target="diaChi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill pencil-input" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </div>
                                           
                        </div>
                    </div>
                    <div class="img-info">
                        <div>
                            <div class="d-flex justify-content-center mb-4">
                                
                                <img src="<?php echo $_SESSION['avatar']?$_SESSION['avatar']:'https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg';?>"
                                class="rounded-circle" alt="example placeholder" style="width: 200px;" id="img-avatar"/>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="btn btn-primary btn-rounded">
                                    <label class="form-label text-white m-1" for="ip-img-avatar">Chọn ảnh đại hiện</label>
                                    <input type="file" class="form-control d-none" id="ip-img-avatar" />
                                </div>
                            </div>
                        </div>
                        
                        
                        <input hidden type="file">
                        <input  hidden type="text" value="<?php echo $_SESSION['id_admin'] ;?>" id="maTaiKhoan">
                    </div>
                    
                 </div>
            
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Đổi mật khẩu</button>

                 <button type="button" class="btn btn-outline-primary" id="btn-submit-update-info" disabled>Cập nhật thông tin</button>
                 
            </div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    var check = false
    const svgs = document.querySelectorAll(".pencil-input");
    svgs.forEach(function(svg) {
        svg.addEventListener("click", function() {
            var targetId = svg.getAttribute("data-target");
            var input = document.getElementById(targetId);
            if (input) {
                input.disabled = !input.disabled;
            }
            document.getElementById('btn-submit-update-info').disabled=false;
            check=true

        });
    });
    
</script>
<script>
    var newAvatar=null
    
    const ipAvatar = document.getElementById('ip-img-avatar');
    ipAvatar.addEventListener('change',(e)=>{
        document.getElementById('img-avatar').src=URL.createObjectURL(e.target.files[0])
        newAvatar=e.target.files[0];
        document.getElementById('btn-submit-update-info').disabled=false;
        check=true
    })
    document.getElementById('btn-submit-update-info').addEventListener('click',(e)=>{
        const formData = new FormData();
        const hoten = document.getElementById('hoTen').value
        var ngaySinhElement = document.getElementById('ngaySinh');
        var ngaySinhValue = ngaySinhElement.value;

        // Chuyển đổi giá trị ngày sinh sang định dạng "dd-mm-yyyy"
        var ngaySinhParts = ngaySinhValue.split('-');
        var ngay = ngaySinhParts[2];
        var thang = ngaySinhParts[1];
        var nam = ngaySinhParts[0];
        var ngaySinh = ngay + '-' + thang + '-' + nam;

        const cccd = document.getElementById('cccd').value

        const sdt = document.getElementById('sdt').value
        const diaChi = document.getElementById('diaChi').value
        const gioiTinh = document.getElementById('gioiTinh').value


        console.log(hoten,ngaySinh,cccd,sdt,diaChi)
        
        
        formData.append('hoTen', hoten);
        formData.append('ngaySinh', ngaySinh);
        formData.append('cccd', cccd);
        formData.append('sdt', sdt);
        formData.append('diaChi', diaChi);
        formData.append('gioiTinh', gioiTinh);



        formData.append('maTaiKhoan', document.getElementById('maTaiKhoan').value);
        if(newAvatar!=null){
            formData.append('avatar', newAvatar);
            
        }
        
        axios.post('http://localhost:5000/updateInfoUser', formData, {
            headers: {
            'Content-Type': 'multipart/form-data'
            }
        })
        .then(response => {
        // Xử lý phản hồi thành công
        console.log('Yêu cầu POST thành công.');
        console.log('Phản hồi từ máy chủ:', response.data);
        if(response.data.status=="error"){
            showAlert(response.data.mess)
        }else{
            showAlert("Cập nhật thông tin thành công!");
            document.getElementById('btn-submit-update-info').disabled=true;
            xml = new XMLHttpRequest();
            {
                xml.onreadystatechange = function() {
                    if (xml.readyState == 4){
                       
                       console.log('set avatar thành công'); 
                       console.log(xml.responseText)       
                    }
                }
                const dataUpdate = response.data.data;
                
                const srtingURL = `hoTen=${dataUpdate.hoTen}&diaChi=${dataUpdate.diaChi}&sdt=${dataUpdate.sdt}&ngaySinh=${dataUpdate.ngaySinh}&email=${dataUpdate.email}&cccd=${dataUpdate.cccd}&gioiTinh=${dataUpdate.gioiTinh}&avatar=${dataUpdate.avatar}`;   
                url = `./xulyAjax.php?act=setSession&${srtingURL}`;      
                xml.open("GET", url, "false");
                xml.send();
            }
        }
        // document.getElementById('h2').innerHTML=response.data
        })
        .catch(error => {
        // Xử lý lỗi nếu có
        showAlert("Có lỗi vui lòng thửu lại sau!");
        console.error('Lỗi khi gửi yêu cầu POST:', error);
        });
    })
</script>
<script>
    const btnChangePass = document.getElementById('btn-submit-change-pass');
    const myModalEl = document.getElementById('exampleModal');
    btnChangePass.addEventListener('click',(e)=>{
        const oldPass = document.getElementById('old-pass').value
        const newPass = document.getElementById('new-pass').value
        const confirmNewPass = document.getElementById('confirm-new-pass').value
        if(oldPass=='' || newPass=='' || confirmNewPass==''){
            
            showAlertChangePass("Nhập đầy đủ thông tin")
        }else if(newPass!=confirmNewPass){
            showAlertChangePass("Mật khẩu mới không trùng khớp!");
        }else{
            document.getElementById('btn-submit-change-pass').innerHTML = `<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Loading...`;
            document.getElementById('btn-submit-change-pass').disabled =true
            const apiUrl = 'http://localhost:5000/changePass';
            const data = {
                maTaiKhoan: document.getElementById('maTaiKhoan').value,
                newPassword: newPass,
                oldPassword: oldPass
            };
            console.log(document.getElementById('maTaiKhoan').value)
            axios.post(apiUrl, data)
            .then(response => {
                console.log(response.data);
                if(response.data.status=="error"){
                    showAlertChangePass(response.data.mess)
                }else{
                    document.getElementById('btn-close-change-pass').click();
                    
                    showAlert('Đổi mật khẩu thành công!');
                }
                document.getElementById('btn-submit-change-pass').innerHTML="Đổi mật khẩu";
                document.getElementById('btn-submit-change-pass').disabled =false;
            })
            .catch(error => {
                console.error(error);
            });
        }
    })
    
    myModalEl.addEventListener('shown.bs.modal', function (event) {
        document.getElementById('old-pass').value=""
        document.getElementById('new-pass').value=""
        document.getElementById('confirm-new-pass').value=""
        document.getElementById('alert-change-pass').classList.add("none")
    })
</script>
<script>
    function showAlertChangePass(mess){
        document.getElementById('alert-change-pass').querySelector('strong').innerHTML=mess
        document.getElementById('alert-change-pass').classList.remove("none")
        
    }
    function showAlert(mess){
        document.getElementById('alert').querySelector('strong').innerHTML=mess
        document.getElementById('alert').classList.remove("none")
    }
</script>