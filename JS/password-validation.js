function ValidatePassword()
{
    var myInput = document.getElementById("Password");
    var message2 = document.getElementById("Message2");
    var letter = document.getElementById("Letter");
    var capital = document.getElementById("Capital");
    var number = document.getElementById("Number");
    var length = document.getElementById("Length");
    var specialChar = document.getElementById("SpecialChar");

    if(FirstPasswordValidation() == false)
    {
        message2.style.display = "inline-block";
        letter.style.display = "inline-block";
        capital.style.display = "inline-block";
        number.style.display = "inline-block";
        length.style.display = "inline-block";
        specialChar.style.display = "inline-block";
        myInput.focus();
        return false;
    }
    else
    {
        message2.style.display = "none";
        letter.style.display = "none";
        capital.style.display = "none";
        number.style.display = "none";
        length.style.display = "none";
        specialChar.style.display = "none";
        return true;
    }
}

function FirstPasswordValidation()
{
    var myInput = document.getElementById("Password");
    var message = document.getElementById("Message2");
    var letter = document.getElementById("Letter");
    var capital = document.getElementById("Capital");
    var number = document.getElementById("Number");
    var length = document.getElementById("Length");
    var specialChar = document.getElementById("SpecialChar");

    message.style.display = "inline-block";
    letter.style.display = "inline-block";
    capital.style.display = "inline-block";
    number.style.display = "inline-block";
    length.style.display = "inline-block";
    specialChar.style.display = "inline-block";

    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) 
    {  
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } 
    else 
    {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) 
    {  
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } 
    else 
    {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
  
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) 
    {  
      number.classList.remove("invalid");
      number.classList.add("valid");
    } 
    else 
    {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    
    if(myInput.value.length >= 8) 
    {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } 
    else 
    {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }

    var sChars = /(?=.*[!@#$%^&*])/;
    if(myInput.value.match(sChars)) 
    {
      specialChar.classList.remove("invalid");
      specialChar.classList.add("valid");
    } 
    else 
    {
      specialChar.classList.remove("valid");
      specialChar.classList.add("invalid");
    }

    if(letter.classList == "valid" && capital.classList == "valid" &&
        number.classList == "valid" && length.classList == "valid" &&
        specialChar.classList == "valid")
    {
        return true;
    }
    return false;
  }

  function MatchCheck()
  {
    var myInput = document.getElementById("Password");
    var retypedInput = document.getElementById("Retype_Password");
    var message3 = document.getElementById("Message3");
    if(myInput.value != retypedInput.value)
    {       
        message3.style.display = "inline-block";
        retypedInput.focus();
        return false;
    }
    else
    {
        message3.style.display = "none";
        return true;
    }  
  }
