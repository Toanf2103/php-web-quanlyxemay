var cartList = localStorage.getItem('cartList');
if (cartList) {
    

    cartList = JSON.parse(cartList); // Chuyển đổi từ JSON sang đối tượng JavaScript
    
    
} else {
    

    cartList = []; // Nếu không có thông tin giỏ hàng, tạo một mảng rỗng
}

function addCarToList(moto, startDate, endDate) {
    var existingObj = cartList.find(function (item) {
        return item.ngayBD === startDate && item.ngayKT === endDate;
    });
    if (existingObj) {
        var existingMoto = existingObj.moto.find(function (m) {
            return m.maXe === moto.maXe;
        });
        
        if (existingMoto) {
            return false; // Moto đã tồn tại trong giỏ hàng
        } else {
            existingObj.moto.push(moto);
        }
        
    } else {
        
        var newOrder = {
            moto: [moto],
            ngayBD: startDate,
            ngayKT: endDate
        };
        cartList.push(newOrder);
    }


    saveCart(); // Lưu giỏ hàng vào local storage
    return true
}



function removeMotoFromCart(index, maXe) {
    
    if (cartList[index]) {
      var motos = cartList[index].moto;
      var motoIndex = -1;
  
      motos.forEach(function (moto, idx) {
        if (moto.maXe === maXe) {
          motoIndex = idx;
        }
      });
  
      if (motoIndex > -1) {
        motos.splice(motoIndex, 1);
      }
  
      if (motos.length === 0) {
        cartList.splice(index, 1);
      }
    }
    if(cartList.length>0){
        setTongTien();
    }else{
        setTongTien(0)
    }
    saveCart();
  
   
  }

function saveCart() {
    
    localStorage.setItem('cartList', JSON.stringify(cartList));
    loadCart(); // Chuyển đổi từ đối tượng JavaScript sang JSON
}






if(cartList.length==0){
    
    document.getElementById('cart-elm').innerHTML="Giỏ hàng trống!"
}else{
    loadCart();
}
function clearCart() {
    cartList = [];
    saveCart(); // Lưu giỏ hàng vào local storage
}

function loadCart(){
    const cartElm = document.getElementById('cart-elm');
    cartElm.innerHTML=''
    cartList.forEach((order,index)=>{
        const itemCart = createElm('div',[{name:"class",value:"cart-product-item"}],'');
        const headerItemCart = createHeaderOrderElm(order.ngayBD,order.ngayKT,index);
        itemCart.appendChild(headerItemCart);
        order.moto.forEach(moto=>{
            const {maXe,giaThue,hinhAnh,tenXe} = moto
            itemCart.appendChild(createBodyOrderElm(tenXe,giaThue,hinhAnh,maXe,index));
        })
        cartElm.appendChild(itemCart);
    });
}
function createElm(name,attributeList,text){
    const newElm = document.createElement(name);
    attributeList.forEach(attribute => {
        newElm.setAttribute(attribute.name, attribute.value);
    });
    if(text){
        newElm.innerHTML = text;
    }  
    return newElm;
}
function createHeaderOrderElm(ngayBD,ngayKT,index){
    const contentElmOrder = createElm('div',[{name:"class",value:"cart-product-item-header d-flex align-items-center"}],'');
    contentElmOrder.innerHTML=`<div class="calender d-flex gap-1">                          
                                    <input type="text" disabled value="${ngayBD}">                                
                                    <input type="text" disabled value="${ngayKT}">
                                </div>
                                <div class="check-box">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="${index}" onchange="setTongTien()" >
                                    </div>
                                </div>`
    return contentElmOrder;
}

function createBodyOrderElm(tenXe,giaThue,linkImg,maXe,index){
    const bodyOrderElm =  createElm('div',[{name:'class',value:'item-cart d-flex align-items-center justify-content-between px-3 py-1'}],'');
    bodyOrderElm.innerHTML = `<div class="item-cart-img ">
                                <img src="${linkImg}" class="rounded mx-auto d-block" alt="" width="100" >
                            </div>
                            <div class="item-cart-name flex-1">
                                <span>${tenXe}</span>
                            </div>
                            <div class="item-cart-price">
                                <span>${formatCurrent(giaThue)}</span>
                            </div>
                            <div class="item-cart-clear">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16" onclick="removeMotoFromCart('${index}','${maXe}')">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                </svg>
                            </div>`
    return bodyOrderElm;
}

function getOrderCheck(){
    console.log("chayday")
    const newListOrder = []
    const ipCheck = document.querySelectorAll('input.form-check-input');
    const listIndexChecked =[]
    ipCheck.forEach(elm=>{
        if(elm.checked){
            listIndexChecked.push(elm.value*1)
        }
    });
   
    if (listIndexChecked.length > 0) {
        
        listIndexChecked.forEach(index=>{
            console.log(cartList)
            const newOrder = JSON.parse(JSON.stringify(cartList[index]));
            
            newListOrder.push(newOrder)
        })
    }
    
    document.getElementById('btn-submit-dang-ki-thue').disabled=!listIndexChecked.length>0;
    return newListOrder;
    
    
}
function setTongTien(tien=null){
    if(tien!=null){
        document.getElementById('tong-tien-cart').innerHTML="Tạm tính:"+ 0
        return
    }
    var tongTien=0
    const newListOrder = getOrderCheck();
    newListOrder.forEach(order=>{
        var tongGia = order.moto.reduce(function(tong,xe){
            return tong + xe.giaThue;
        },0);
        tongGia*=soNgay(order.ngayBD,order.ngayKT);
        tongTien+=tongGia
    })
    document.getElementById('tong-tien-cart').innerHTML="Tạm tính:"+ formatCurrent(tongTien)
}
function soNgay(ngayBD,ngayKT){
    const date1 = moment(ngayBD, dateFormat);
    const date2 = moment(ngayKT, dateFormat);
    
    return date2.diff(date1)/ (24 * 60 * 60 * 1000)
}

function formatCurrent(number){
    return number.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
}
document.getElementById('btn-submit-dang-ki-thue').addEventListener('click',(e)=>{
    if(maKH==null){
        showAlert('Vui lòg đăng nhập để thuê xe!',"error");

    }else{
        const apiUrl = 'http://localhost:5000/addOrder';
        const newListOrder = getOrderCheck();
        newListOrder.forEach(async order=>{
            var maXeArray = order.moto.map(function(item) {
                return item.maXe;
            });
            
            const dateStart =order.ngayBD;
            const dateEnd =order.ngayKT;

            const data = {
                maKH,
                ngayBD: dateStart.replace("/'/'/g", '-'),
                ngayKT: dateEnd.replace("/'/'/g", '-'),
                listMoto :maXeArray
            };
            await axios.post(apiUrl, data)
            .then(response => {
                
                
                

                if(response.data.status=='success'){
                    const indexCart = cartList.findIndex(
                        (item) => item.ngayBD == order.ngayBD && item.ngayKT == order.ngayKT
                      );
                    cartList.splice(indexCart, 1);

                    
                    console.log(cartList)
                    showAlert('Đơn hàng đã đượt đăng kí!','success');
                    saveCart();
                }else{
                    if(response.data.mess=="Xe đã được đặt thuê"){
                        
                        const listXeLoi = response.data.data
                        const indexCart = cartList.findIndex(
                            (item) => item.ngayBD == order.ngayBD && item.ngayKT == order.ngayKT
                          );
                        console.log(indexCart)
                        

                        for(let i=0;i<listXeLoi.length;i++){
                            
                            removeMotoFromCart(indexCart,listXeLoi[i]);
                        }
                        

                        
                        showAlert('Xe của bạn đặt đã được cho thuê!','error');

                    }else{
                        showAlert('Có lỗi!','error');
                    }
                }
            })
            .catch(error => {
                showAlert('Có lỗi!','error');
                console.error(error);
            });
            
            
        })
        
    
        
        

    }
    
})

