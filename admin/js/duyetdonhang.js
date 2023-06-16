



const tbDesOrder = document.getElementById('data-des-order').querySelector('tbody');





function toggleOverlay(){
    document.getElementById('overlay').classList.toggle("none");
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

//addrow
function addRowChiTiet(dataRows,maDH){
    //Show data
    dataRows.forEach(dataRow =>{
        const newRow=createElm('tr',[],null);
        const listColumn = ['maXe','tenXe','hangXe','loaiXe','bienSoXe','giaThue'];
        listColumn.forEach(colunm => {
            newRow.appendChild(createElm('td',[],dataRow[colunm]));
        });
        tbDesOrder.appendChild(newRow);
    })

    //add even

    //even submit
    const btnDuyetDon = document.getElementById('btn-submit-duyetdon');
    

    const actionSubmit = (e)=>{
        const maNVDuyet = "NV00000001";
        
        
        const data = {
            maNVDuyet: "NV00000001",
            maThue: maDH,
            trangThai: "Đã duyệt"
        };

        axios.post(apiUrl+"nvSetOrder", data)
        .then(response => {
            toggleOverlay();
            btnDuyetDon.removeEventListener('click',actionSubmit);
            showAlert(SUCCESS,'Thành công',`Đơn hàng ${maDH} đã được duyệt`)
        })
        .catch(error => {
            console.error(error);
        });
    }
    btnDuyetDon.addEventListener('click',actionSubmit);

    
}

function showAlert(type,messStrong,mess){


  const alert =  document.getElementById('alert');
  alert.classList.toggle('none');
  alert.classList.add(type);
  alert.querySelector('strong').innerText=messStrong
  alert.querySelector('span').innerText=mess



}

function showDonHang(data_id){
    tbDesOrder.innerHTML=''
    tbDesOrder.appendChild(addLoadingTalbe(6));
         
    toggleOverlay();    
    const btnCloseOverlay = document.getElementById("close-overlay");
    btnCloseOverlay.addEventListener('click',toggleOverlay)
     
    console.log(data_id)
    axios.get(apiUrl+"getOrder/"+data_id)
    .then(response => {
        
        if(response.data.status="success"){
            tbDesOrder.innerHTML=''
          addRowChiTiet(response.data.data.chiTiet,response.data.data.maThue);
        }
        
    })
    .catch(error => {
        console.error(error);
    });
      
}