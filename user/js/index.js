let form = document.querySelector("form")
let nameErr 
let passErr 

form.addEventListener("submit", (e)=>{
    let usName = document.getElementById("exampleInputEmail").value
    let usPass = document.getElementById("exampleInputPassword").value
    // alert(usName)
    if(usName === ""){
        nameErr = "Please enter your name!"
        document.getElementById("name-error").style.display = "block"
        document.getElementById("name-error").innerHTML = nameErr
        e.preventDefault()
    }
    if(!usPass){
        passErr = "Please enter your password!"
        document.getElementById("pass-error").style.display = "block"
        document.getElementById("pass-error").innerHTML = passErr
        e.preventDefault()
    }
    form.action= "./loginfetch.php"
})