function Done()
{
    var email = document.getElementById("Email");
    if(ValidateEmail(email) == true && VallidateFields() == true)
    {
        alert("Successful Contact");
    }
}

function VallidateFields()
{
    var name = document.getElementById("FName");
    var textarea = document.getElementById("Textarea");
    var subject = document.getElementById("Subject");
    var message2 = document.getElementById("Message2");
    var message3 = document.getElementById("Message3");
    var message4 = document.getElementById("Message4");
    if(name.value == "")
    {       
        message2.style.display = "inline-block";
        name.focus();
    }
    else
    {
        message2.style.display = "none";
    }
    if(subject.value == "")
    {       
        message4.style.display = "inline-block";
        subject.focus();
    }
    else
    {
        message4.style.display = "none";
    }
    if(textarea.value == "")
    {
        message3.style.display = "inline-block";
        textarea.focus();
    }
    else
    {
        message3.style.display = "none";
    }
    if(name.value == "" || subject.value == "" || textarea.value == "")
    {
        return false;
    }
    else
    {
        return true;
    }
}

