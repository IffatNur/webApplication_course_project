
function validate(){
    var name= document.getElementById("name");
    var email= document.getElementById("email");
    var phone= document.getElementById("phone");
    var address= document.getElementById("address");
    var district= document.getElementById("district");

    if(name.value=="" || email.value=="" || phone.value=="" || address.value==""||district.value=="")
    {
        alert("Please fillup the form completely");
        return false; 
    }
    else{
      
    }
}
function updateCartTotal(){
    var cartItemContainer = document.getElementsByClassName('card')[0]
    
}
