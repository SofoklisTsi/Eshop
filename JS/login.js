function Done()
{
    var email = document.getElementById("Email");
    if(ValidateEmail(email) == true && VallidateFields() == true)
    {
        document.getElementById("LoginForm").submit();
    }
}

function VallidateFields()
{
    var password = document.getElementById("Password");
    var message2 = document.getElementById("Message2");
    if(password.value == "")
    {       
        message2.style.display = "inline-block";
        password.focus();
        return false;
    }
    else
    {
        message2.style.display = "none";
        return true;
    }
}