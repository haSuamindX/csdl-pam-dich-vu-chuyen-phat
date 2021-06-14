let form = document.getElementById("formAddBill")
let errNotMiss = "Không được để trống"
form.addEventListener("submit", (e) => {
    let idBill = document.getElementById("billId").value
    let cusSent = document.getElementById("customerSendname").value
    let cusPhone = document.getElementById("customerSendtel").value
    let receiveName = document.getElementById("customerReceivername").value
    let receivePhone = document.getElementById("customerReceivertel").value
    let sentAdd = document.getElementById("customerSendadr").value
    let receiveAdd = document.getElementById("customerReceiveradr").value
    let weight = document.getElementById("weight").value
    let fee = document.getElementById("fee").value
    let dateSent = document.getElementById("datesend").value
    let dateReceive = document.getElementById("datereceived").value

    let idBillCheck = [... idBill]
    let cusPhoneCheck = [... cusPhone]
    let receivePhoneCheck = [... receivePhone]
    let dateCheck = Date.parse(dateSent) - Date.parse(dateReceive)

    //---------- Check input not miss ----------
    if(!idBill){
        document.getElementById("idBillErr").style.display = "block"
        document.getElementById("idBillErr").innerHTML = errNotMiss
        e.preventDefault()
    }  
    if(!cusSent){
        document.getElementById("cusSentErr").style.display = "block"
        document.getElementById("cusSentErr").innerHTML = errNotMiss
        e.preventDefault()
    }   
    if(!cusPhone){
        document.getElementById("cusPhoneErr").style.display = "block"
        document.getElementById("cusPhoneErr").innerHTML = errNotMiss
        e.preventDefault()      
    }    
    if(!receiveName){
        document.getElementById("receiveNameErr").style.display = "block"
        document.getElementById("receiveNameErr").innerHTML = errNotMiss
        e.preventDefault()      
    }
    if(!receivePhone){
        document.getElementById("ReceivePhoneErr").style.display = "block"
        document.getElementById("ReceivePhoneErr").innerHTML = errNotMiss
        e.preventDefault()      
    }   
    if(!sentAdd){
        document.getElementById("sentAddErr").style.display = "block"
        document.getElementById("sentAddErr").innerHTML = errNotMiss
        e.preventDefault()      
    }    
    if(!receiveAdd){
        document.getElementById("receiveAddErr").style.display = "block"
        document.getElementById("receiveAddErr").innerHTML = errNotMiss
        e.preventDefault()      
    }    
    if(!weight){
        document.getElementById("weightErr").style.display = "block"
        document.getElementById("weightErr").innerHTML = errNotMiss
        e.preventDefault()      
    }
    if(!fee){
        document.getElementById("feeErr").style.display = "block"
        document.getElementById("feeErr").innerHTML = errNotMiss
        e.preventDefault()      
    }   
    if(!dateSent){
        document.getElementById("dateSentErr").style.display = "block"
        document.getElementById("dateSentErr").innerHTML = errNotMiss
        e.preventDefault()      
    }
    if(!dateReceive){
        document.getElementById("dateReceiveErr").style.display = "block"
        document.getElementById("dateReceiveErr").innerHTML = errNotMiss
        e.preventDefault()      
    }

    // ---------- Case check input ----------
    if(idBillCheck[0] == 0){
        document.getElementById("idBillErr").style.display = "block"
        document.getElementById("idBillErr").innerHTML = "Mã hóa đơn không được bắt đầu bằng số 0"
        e.preventDefault()
    }

    if(cusPhoneCheck[0] != 0 || cusPhoneCheck.length != 10){
        document.getElementById("cusPhoneErr").style.display = "block"
        document.getElementById("cusPhoneErr").innerHTML =  "Không đúng định dạng"
        e.preventDefault()      
    }

    // if(receivePhoneCheck[0] != "+"){
    //     document.getElementById("ReceivePhoneErr").innerHTML = "Chưa đúng định dạng SĐT quốc tế"
    //     e.preventDefault()
    // }

    if(weight > 30){
        document.getElementById("weightErr").style.display = "block"
        document.getElementById("weightErr").innerHTML = "Cân nặng tối đa là 30kg"
        e.preventDefault()   
    }

    if(weight < 0){
        document.getElementById("weightErr").style.display = "block"
        document.getElementById("weightErr").innerHTML = "Cân nặng không thể nhỏ hơn hoặc bằng 0!!!"
        e.preventDefault()  
    }

    if(dateCheck > 0){
        alert("Ngày nhận không thể trước ngày gửi!!!")
        e.preventDefault()  
    }

    form.action = "./addbillfetch.php"
})