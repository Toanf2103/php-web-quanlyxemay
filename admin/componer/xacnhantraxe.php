<div class="overlay-wrapper none" id="overlay">
        <div class="overlay">
            <div class="add-loi none" id="overlay-loi">
                <div class="add-loi-content px-3">
                    <div class="add-loi-content-header d-flex justify-content-between align-items-center">
                        <span class="title">Thêm lỗi</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" id="close-overlay-loi"  onclick="toggleOverlayLoi()">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </div>
                    <div class="content-loi mt-3">
                        <input  type="text" class="form-control my-3" placeholder="Nội dung lỗi" id="des-loi">      
                        <input  type="number" class="form-control my-3" placeholder="Tiền phạt" id="price-loi">      
                        <div class="Loai-loi w-30 d-flex align-items-center">
                            <select class="form-select" aria-label="Default select example" id="select-loi">
      
                                <option value="1" selected>Mất xe</option>
                                <option value="2">Trễ hạn</option>
                                <option value="3">Hư phụ tùng</option>
                                <option value="4">Trầy xước xe</option>
                                <option value="5">Khác</option>
                              </select>
                              <span id="span-loi">
                                Mất xe
                              </span>
                        </div>
                        <div class="btn-submit my-3 d-flex justify-content-end gap-3">
                            <button type="button" class="btn btn-outline-success" id="add-loi-submit" >Thêm</button>

                            <button type="button" class="btn btn-outline-danger" id="btn-close-overlay-loi" onclick="toggleOverlayLoi()">Hủy</button>
                        </div>
                    </div>
                    <hr>
                    
                </div>
            </div>
            <div class="header-overlay d-flex align-items-center">
                <h5 class="flex-1">Duyệt đơn</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" id="close-overlay">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                  </svg>
                  
            </div>
            <hr>
            <table class="table table-striped align-middle des-order" id="des-order">
                <thead>
                    <tr>
                    <th scope="col"><input class="form-check-input" type="checkbox" value="" id="check-all">
                        </th>
                      <th scope="col">ID xe</th>
                      <th scope="col">Tên xe</th>
                      
                      <th scope="col">Biển số xe</th>
                      <th scope="col">Giá thuê</th>
                      <th scope="col">Lỗi</th>

                      <th scope="col">Thêm lỗi</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr id="XE-1">
                        <th scope="col">
                            <input class="form-check-input check-xe" type="checkbox" value="">
                        </th >
                            <th scope="row">1 </th>
                            
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td class="loi"><p>Hư xe : 100.000 đ</p>
                                <p>Hư xe : 100.000 đ</p>
                                <p>Hư xe : 100.000 đ</p></td>
                            <td>
                                <button data-id="XE-1" type="button" class="btn btn-outline-info btn-add-loi" >Thêm lỗi</button>
                            </td>                  
                    </tr>
                    
                    
                  </tbody>
              </table>
              <div class="button-submit d-flex justify-content-between gap-3 align-items-end">
                <div class="price-cal d-flex " id="show-price">
                    <div>
                      <span class="">Tổng thanh toán : </span> 
                    </div>
                    <div>
                      <span class="price">   1000.000 đ</span>
                    </div>
                    
                </div>
                <div class="btn">
                  <button type="button" class="btn btn-outline-success" id="submit-order">Thanh toán</button>

                  <button type="button" class="btn btn-outline-danger" onclick="toggleOverlay()">Hủy</button>
                </div>
              </div>
        </div>
    </div>
<div class="header-content-body">

                 <p class="title">Xác nhận trả xe</p>
                 <div class="filter my-3 d-flex justify-content-between">
                    <!-- <div class="filter-select w-30">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="One">One</option>
                            <option value="Two">Two</option>
                            <option value="Three">Three</option>
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
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16" onclick="xacNhanTraXe('DH00000004')">
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
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16" onclick="xacNhanTraXe('DH00000003')">
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
                        <td><svg data-id="DH002132" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16" onclick="xacNhanTraXe('DH00000008')">
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
                        <td><svg data-id="DH002132" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16" onclick="xacNhanTraXe('DH00000005')">
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
                        <td><svg data-id="DH002132" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16" onclick="xacNhanTraXe('DH00000006')">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                          </svg></td>
                      </tr>
                      

                      
                    </tbody>
                  </table>
            </div>
<script src="./js/xacnhantraxe.js"></script>
