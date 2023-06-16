<div class="overlay-wrapper none" id="overlay">
        <div class="overlay">
            <div class="header-overlay d-flex align-items-center">
                <h5 class="flex-1">Duyệt đơn</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" id="close-overlay">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                  </svg>
                  
            </div>
            <hr>
            <table class="table table-striped" id="data-des-order">
                <thead>
                    <tr>
                      <th scope="col">ID xe</th>
                      <th scope="col">Tên xe</th>
                      <th scope="col">Hãng xe</th>
                      <th scope="col">Loại xe</th>
                      <th scope="col">Biển số xe</th>
                      <th scope="col">Giá thuê</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
              </table>
              <div class="button-submit d-flex justify-content-end gap-3">
                <button type="button" class="btn btn-outline-success" id="btn-submit-duyetdon">Duyệt</button>
                <button type="button" class="btn btn-outline-danger" onclick="toggleOverlay()">Hủy</button>
              </div>
        </div>
    </div>
<div class="header-content-body">

                 <p class="title">Duyệt đơn</p>
                 <div id="alert" class="alert alert-dismissible fade show none" role="alert">
                    <strong>Holy guacamole!</strong> <span>You should check in on some of those fields below.</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                 <div class="filter my-3 d-flex justify-content-between">
                    <!-- <div class="filter-select w-30">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    
                      <button type="button" class="btn btn-outline-info">Thêm</button> -->
                 </div>
                 <table class="table data">
                    <thead>
                      <tr>
                        <th scope="col">Mã đơn thuê</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Ngày bắt đầu</th>
                        <th scope="col">Ngày kết thúc</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Giá thuê</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <th scope="row">DH000002</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td class="status-order "><span class="success">Đã duyệt</span></td>
                        <td>Otto</td>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16" data-id="DH00000001" onclick="showDonHang('DH00000001')">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                          </svg></td>
                      </tr>

                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td class="status-order "><span class="cancel">Đã duyệt</span></td>
                        <td>Otto</td>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16" data-id="DH00000003" onclick="showDonHang('DH00000002')">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                          </svg></td>
                      </tr>

                      <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td class="status-order "><span class="wait">Đã duyệt</span></td>
                        <td>Otto</td>
                        <td><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16" data-id="DH00000005" onclick="showDonHang('DH00000006')">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                          </svg></td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>

            <!-- <script>
        const btnCloseOverlay = document.getElementById("close-overlay");
        const btnChiTiet  = document.querySelectorAll('td>svg');
        for (let i=0;i<btnChiTiet.length;i++){
            btnChiTiet[i].addEventListener('click',(e)=>{
                closeOverlay();
            })
        }
        function closeOverlay(){
            document.getElementById('overlay').classList.toggle("none");
        }
        btnCloseOverlay.addEventListener('click',closeOverlay)
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/duyetdonhang.js"></script>