


const tbDesOrder = document.getElementById('des-order').querySelector('tbody')

let newDataSubmit = null
let handleClickSubmitAddLoi
// document.getElementById('close-overlay-loi').addEventListener('click',(e)=>{
//     toggleOverlayLoi();
//     // document.getElementById('add-loi-submit').removeEventListener('click', handleClickSubmitAddLoi)
// })


// document.getElementById('btn-close-overlay-loi').addEventListener('click',(e)=>{
//     toggleOverlayLoi();
//     // document.getElementById('add-loi-submit').removeEventListener('click', handleClickSubmitAddLoi)
// })




function toggleOverlay(){
    document.getElementById('overlay').classList.toggle("none");    document.getElementById('add-loi-submit').removeEventListener('click', handleClickSubmitAddLoi)
    document.getElementById('add-loi-submit').removeEventListener('click', handleClickSubmitAddLoi)

}

//add row detail
function addRowChiTiet(dataRows){
    
    dataRows.forEach(dataRow =>{
        const newRow=createElm('tr',[{name:"id",value:dataRow['maXe']}],null);
        const listColumn = ['maXe','tenXe','bienSoXe','giaThue'];
        let checkBoxElm
        if(!dataRow.ngayTra){
            checkBoxElm = createElm('input',[ {name:"class",value:"form-check-input check-xe"}, {name:"type",value:"checkbox"}, {name:"value",value:dataRow['maXe']} ]).outerHTML
        }
        else{
            checkBoxElm =`<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>`   
        }
        

        newRow.appendChild(createElm('th',[{name:"scope",value:"col"}],checkBoxElm));

        listColumn.forEach(colunm => {
            newRow.appendChild(createElm('td',[],dataRow[colunm]));
        });
        // const loiElm = createElm('td',[{name:"class",value:"loi"}]);
        const loiElm = createElementLoi(dataRow['loi'])
        // dataRow['loi'].forEach(loi =>{          
        //     loiElm.appendChild(createElm('p',[],`${loi['noiDungLoi']}: ${loi['tienPhat']}đ`));
        // })

        newRow.appendChild(loiElm)
        if(!dataRow.ngayTra){
            newRow.appendChild(createElm('td',[],`<button data-id="${dataRow['maXe']}" type="button" class="btn btn-outline-info btn-add-loi" >Thêm lỗi</button>`))

        }else{
            newRow.appendChild(createElm('td',[],null))

        }


        tbDesOrder.appendChild(newRow);

        
    })
    //Click add loi show overlay add loi
    const listBtnAddLoi = tbDesOrder.querySelectorAll('.btn-add-loi');
    listBtnAddLoi.forEach(btnAddLoi=>{
        btnAddLoi.addEventListener('click',(e)=>{
            //idxe add loi
            const idXe=btnAddLoi.getAttribute('data-id');
            //select loi
            const slLoi = document.getElementById("select-loi");
            //span loi
            const spLoi = document.getElementById("span-loi");
            //submit add loi
            const btnSubmit = document.getElementById('add-loi-submit');

            //Open overlay loi
            toggleOverlayLoi();
            slLoi.addEventListener('change',(e)=>{
                const selectedOption = slLoi.options[slLoi.selectedIndex];
                const selectedText = selectedOption.text;

                spLoi.innerText=selectedText
            })

            
            //submit add loi 

            handleClickSubmitAddLoi = (e) => {
                
                const des = document.getElementById('des-loi').value;
                const price = document.getElementById('price-loi').value;
                const loi = document.getElementById("select-loi");
                

                const txtLoi = loi.options[loi.selectedIndex].text + " :   " + price;
                
                toggleOverlayLoi();
                
                const newLoi = {
                    maLoaiLoi:loi.options[loi.selectedIndex].value*1,
                    tienPhat:price*1,
                    ghiChu:des
                }

                newDataSubmit.xe.find(xe => xe.maXe === idXe).loi.push(newLoi)
                setShowPrice(getXeCheck(newDataSubmit))
                //set text loi
                document.getElementById(idXe).querySelector(".loi").replaceWith(createElementLoi(newDataSubmit.xe.find(xe => xe.maXe === idXe).loi,idXe))
                console.log(newDataSubmit)
                //set even delete loi
                deleteLoi();
                function deleteLoi(){
                    const btnCancelLois = document.getElementById(idXe).querySelector(".loi").querySelectorAll('div>svg')
                    btnCancelLois.forEach(btn=>{
                        
                        btn.addEventListener('click',(e)=>{
                            // console.log(e.target)
                            
                            // console.log(e.target.getAttribute('data-id'))
                            
                            const loiIndex  = btn.getAttribute('data-index')
                            
                            //Lấy xe có lỗi cẫn xóa
                            const loiXoa = newDataSubmit.xe.find((x) => x.maXe === idXe);
                            // console.log(loiXoa.loi)
                            if (loiXoa && loiXoa.loi.length > loiIndex) {
                                // Xóa lỗi từ mảng loi
                                loiXoa.loi.splice(loiIndex, 1);
                                document.getElementById(idXe).querySelector(".loi").replaceWith(createElementLoi(newDataSubmit.xe.find(xe => xe.maXe === idXe).loi,idXe))
                                deleteLoi();
                                setShowPrice(getXeCheck(newDataSubmit))
                                
                            }
                        })
                    })
                }
                
                
                // Remove the click event listener
                
            };

            btnSubmit.addEventListener('click', handleClickSubmitAddLoi);
            //close overlay loi
            // document.getElementById('close-overlay-loi').addEventListener('click',(e)=>{
            //     toggleOverlayLoi();
            //     // document.getElementById('add-loi-submit').removeEventListener('click', handleClickSubmitAddLoi)
            // })
            

            // document.getElementById('btn-close-overlay-loi').addEventListener('click',(e)=>{
            //     toggleOverlayLoi();
            //     // document.getElementById('add-loi-submit').removeEventListener('click', handleClickSubmitAddLoi)
            // })
        })
    })
    //click submit order
    const submitOrder = document.getElementById('submit-order');
    const handleClickSubmitOrder = (e) =>{
        
        
        const newData = JSON.parse(JSON.stringify(getXeCheck(newDataSubmit)))
        
        newData.xe.forEach((item) => {
            if ("giaThue" in item) {
                delete item.giaThue;
            }
        });
        newData['maNVNhanXe']='NV00000001';
        console.log(newData)
        axios.post(apiUrl+"payOrder", newData)
        .then(response => {
            console.log(response.data);
            toggleOverlayLoi();
        })
        .catch(error => {
            console.error(error);
        });
        
    }
    
    submitOrder.addEventListener('click',handleClickSubmitOrder)
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

function toggleOverlayLoi (){
    document.getElementById('overlay-loi').classList.toggle('none');
    document.getElementById('add-loi-submit').removeEventListener('click', handleClickSubmitAddLoi)
    
}

function createElementLoi(listLoi,idXe=null){
    
    const rowLois = createElm('td',[{name:"class",value:"loi d-flex justify-content-center flex-column align-items-center"}],null)
    
    if(listLoi.length==0){
        rowLois.appendChild(createElm('p',[],"Không có lỗi"));
    }
    listLoi.forEach((loiElm,index)=>{
        
        const pElm =  createElm('p',[],`${loiElm['ghiChu']}: ${loiElm['tienPhat']}đ`);
        const divElm =  createElm('div',[{name:"class",value:"loi-item d-flex align-items-center gap-2"}],null);
        divElm.appendChild(pElm)
        
        if(idXe){
            svgText = `<svg data-id="${idXe}"  data-index="${index}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill text" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg>`
            divElm.innerHTML+=svgText
        }
        rowLois.appendChild(divElm)
    })
    return rowLois;
    
}

function defaulOnLoad(){
    
}

function xacNhanTraXe(idOrder){
    
    // const btnChiTiet  = document.querySelectorAll('td>svg');
    const btnCloseOverlay = document.getElementById("close-overlay");
    setShowPrice()
    newDataSubmit = null
    //Close overlay detail
    btnCloseOverlay.addEventListener('click',toggleOverlay)

    //Even click

    const checkedAll = document.getElementById('check-all');
    checkedAll.checked=false
    
    
    toggleOverlay();
    tbDesOrder.innerHTML='';
    tbDesOrder.appendChild(addLoadingTalbe(7));
    //getdata order
    // data=getDataOrder()
    axios.get(apiUrl+"getOrder/"+idOrder)
    .then(response => {
        
        if(response.data.status="success"){
            
            data=response.data.data

            const {maThue,chiTiet} = data
            const newChiTiet = chiTiet.map(({ maXe, giaThue,maLoi,loi=[] }) => ({ maXe, giaThue, maLoi,loi }));

            newDataSubmit = {
                maThue,
                xe:newChiTiet
            }
            const dataRows = data.chiTiet
            tbDesOrder.innerHTML='';
            addRowChiTiet(dataRows,newDataSubmit);
            document.querySelector('.des-order').querySelectorAll('.check-xe').forEach(elm=>{
                elm.addEventListener('change',(e)=>{
                    setShowPrice(getXeCheck(newDataSubmit))
                })
            })
            checkedAll.addEventListener('change',(e)=>{
                const checkList = document.querySelector('.des-order').querySelectorAll('.check-xe')
                checkList.forEach(check=>{
                    check.checked=e.target.checked
                    setShowPrice(getXeCheck(newDataSubmit))
                })
            });


        }
        
    })   

    
}

function getXeCheck(dataSubmit){
    
    const listCheck = document.querySelector('.des-order').querySelectorAll('.check-xe')
    const checkedValues = []
    for (var i = 0; i < listCheck.length; i++) {
        if (listCheck[i].checked) {
            checkedValues.push(listCheck[i].value);
        }
    }
    let listXeCheck
    listXeCheck = dataSubmit.xe.filter(function(xe) {
        return checkedValues.includes(xe.maXe);
    });
    
    const newData = {...dataSubmit,xe:listXeCheck}
    
    return newData
}

function setShowPrice(dataSubmit){
    
    const elmShowPrice = document.getElementById('show-price').querySelector('.price');
    if(dataSubmit==null){
        elmShowPrice.innerHTML=''
        return
    }
    let tongTien = 0
    dataSubmit.xe.forEach((xe) => {
        const giaThue = xe.giaThue;
        const tienPhat = xe.loi.reduce((total, loi) => total + loi.tienPhat, 0);
        
        tongTien += giaThue + tienPhat;
      });
    
    elmShowPrice.innerHTML=tongTien;
}
