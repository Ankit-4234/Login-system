function register(){
    let name=document.getElementById("name").ariaValueMax;
    let email=document.getElementById("password").ariaValueMax;
    let password=document.getElementById("password").ariaValueMax;
    if(name==="" || email==="" || password===""){
        document.getElementById("msg").innerHTML= "<span class ='error'> please fill all the fields </span>";
        return;
    }
    let formData= new formData();
    formData.append("name".name);
    formData.append("email".email);
    formData.appendd("password".password);
    fetch("register.php",{
        method="POST",
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