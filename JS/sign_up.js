function Done()
{
    var email = document.getElementById("Email");
    if(ValidateEmail(email) == true && ValidatePassword() == true
        && MatchCheck() == true && VallidateFields() == true)
    {
        document.getElementById("Mcontainer").submit();
    }
}

function VallidateFields()
{
    var name = document.getElementById("FName");
    var lName = document.getElementById("LName");
    var date = document.getElementById("Birthday");
    var phone = document.getElementById("Phone");
    
    var street = document.getElementById("Street");
    var streetNumber = document.getElementById("StreetNumber");
    var city = document.getElementById("City");
    var postalCode = document.getElementById("PostalCode");
    
    
    var nameM = document.getElementById("Message4");
    var lNameM = document.getElementById("Message5");
    var dateM = document.getElementById("Message6");
    var phoneM = document.getElementById("Message7");

    var streetM = document.getElementById("Message8");
    var streetNumberM = document.getElementById("Message9");
    var cityM = document.getElementById("Message10");
    var postalCodeM = document.getElementById("Message11");
    
    

    if(name.value == "")
    {       
        nameM.style.display = "inline-block";
        name.focus();
    }
    else
    {
        nameM.style.display = "none";
    }  
    if(lName.value == "")
    {       
        lNameM.style.display = "inline-block";
        lName.focus();
    }
    else
    {
        lNameM.style.display = "none";
    }  
    if(date.value == "")
    {       
        dateM.style.display = "inline-block";
        date.focus();
    }
    else
    {
        dateM.style.display = "none";
    }  
    if(phone.value == "")
    {       
        phoneM.style.display = "inline-block";
        phone.focus();
    }
    else
    {
        phoneM.style.display = "none";
    }  
    if(street.value == "")
    {       
        streetM.style.display = "inline-block";
        street.focus();
    }
    else
    {
        streetM.style.display = "none";
    }  
    if(streetNumber.value == "")
    {       
        streetNumberM.style.display = "inline-block";
        streetNumber.focus();
    }
    else
    {
        streetNumberM.style.display = "none";
    }  
    if(city.value == "")
    {       
        cityM.style.display = "inline-block";
        city.focus();
    }
    else
    {
        cityM.style.display = "none";
    }  
    if(postalCode.value == "")
    {       
        postalCodeM.style.display = "inline-block";
        postalCode.focus();
    }
    else
    {
        postalCodeM.style.display = "none";
    }  

    if(name.value == "" || lName.value == "" || date.value == "" || phone.value == "" 
        || street.value == "" || streetNumber.value == "" || city.value == "" || postalCode.value == "" 
        )
    {
        return false;
    }
    else
    {
        return true;
    }
}