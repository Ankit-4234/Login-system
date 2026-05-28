function register(){
    let name=document.getElementById("name").value;
    let email=document.getElementById("password").value;
    let password=document.getElementById("password").value;
    if(name==="" || email==="" || password===""){
        document.getElementById("msg").innerHTML= "<span class ='error'> please fill all the fields </span>";
        return;
    }
    let formData= new FormData();
    formData.append("name",name);
    formData.append("email",email);
    formData.append("password",password);
    fetch("register.php",{
        method:"POST",
        body :formData
    })
    .then(function(response){
        return response.text();
    })
    .then(function(data){
        document.getElementById("msg").innerHTML=data;

    })
    .catch(function(){
        document.getElementById("msg").innerHTML="<span class='error'> something went wround</span>";

    });
}
 function login(){
    let email= document.getElementById("email").value;
    let password=document.getElementById("password").value;
    if(email==="" || password===""){
        document.getElementById("msg").innerHTML="<span class='error'>Please fill all the fields.</span> "
         return;
    }
       

 let formData = new FormData();
 formData.append("email",email);
 formData.append("password",password);
 fetch("login.php",{
    method :"POST",
    body :formData
 })
 .then(function(response){
    return response.text();
 })
 .then(function(data){
    document.getElementById("msg").innerHTML=data;
 })
 .catch(function(){
    document.getElementById("msg").innerHTML="<span class='error'>Something went wrong</span>";
 });
 }