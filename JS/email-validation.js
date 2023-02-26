function ValidateEmail(inputText)
{
  var message = document.getElementById("Message1");
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(inputText.value.match(mailformat))
  {
    message.style.display = "none";
    return true;
  }
  else
  {
    message.style.display = "inline-block";
    return false;
  }
}