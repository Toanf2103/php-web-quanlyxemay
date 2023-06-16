
document.getElementById('add-gio-hang').addEventListener('click',(e)=>{
    console.log(maXe)
    if(ngayBD==null||ngayKT==null){
        showAlert("Chọn ngày thuê!","error")      
    }else{
        moto={
            maXe,
            tenXe,
            hinhAnh,
            giaThue
        }
        const check = addCarToList(moto,ngayBD,ngayKT);
        if(!check){
            showAlert("Xe đã được thêm vào giỏ hàng!","error") 
        }else{
            showAlert("Thêm vào giỏ hàng thành công!","success")      
        }


    }
    
})
