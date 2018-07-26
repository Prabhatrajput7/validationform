function checking() {
    var x = document.forms["fform"]["name"].value;
    var y = document.forms["fform"]["email"].value;
    var c = document.forms["fform"]["dob"].value;
    var z = document.forms["fform"]["comment"].value;
    var d = document.forms["fform"]["gender"].value;
    var e = document.getElementsByName('chkbox[]');
    var a = document.forms["fform"]["city"].value;
    var b = document.forms["fform"]["zc"].value;
    var atpos = y.indexOf("@");
    var bar = false;

    if (x == "") 
{
    name_error.textContent = "Name is required";
    document.forms["fform"]["name"].focus();
    return false;
}


    if(x.length < 3)
{
    name_error.textContent = "Name must be at least 3 characters";
    document.forms["fform"]["name"].focus();
    return false;
}
    if(!isNaN(x))
{
    name_error.textContent = "Please Enter Only Characters";
    document.forms["fform"]["name"].focus();
    return false;
}
    if(y == "")
{
    name_error.textContent = "";
    email_error.textContent = "Email is required";
    document.forms["fform"]["email"].focus();
    return false;
}
    if (atpos<1) 
{
    email_error.textContent = "Not a valid e-mail address";
    document.forms["fform"]["email"].focus();
    return false;
}
    if (c == "") 
{
    name_error.textContent = "";
    email_error.textContent = "";
    dob_error.textContent = "Date is required";
    document.forms["fform"]["dob"].focus();
    return false;
} 
    if(z == "")
{
    name_error.textContent = "";
    email_error.textContent = "";
    dob_error.textContent = "";
    add_error.textContent = "Address is required";
    document.forms["fform"]["comment"].focus();
    return false;
}
    if (d == "") 
{
    name_error.textContent = "";
    email_error.textContent = "";
    dob_error.textContent = "";
    add_error.textContent = "";
    gender_error.textContent = "Gender is required";
    document.forms["fform"]["gender"].focus();
    return false;
}
for (var i = 0;i<e.length; i++)
{	
if(e[i].checked)
{
bar = true;
break;
}
}
if(bar == false)
{   gender_error.textContent = "";
    stream_error.textContent = "This is a required field";
    document.forms["fform"]["chkbox[]"].focus();
    return false;
}
    if(a == "")
{
    name_error.textContent = "";
    email_error.textContent = "";
    dob_error.textContent = "";
    add_error.textContent = "";
    gender_error.textContent = "";
    stream_error.textContent = "";
    city_error.textContent = "City is required";
    document.forms["fform"]["city"].focus();
    return false;
}
    if(!isNaN(a))
{
    city_error.textContent = "Please Enter Only Characters";
    document.forms["fform"]["city"].focus();
    return false;
}
    if(b == "")
{
    name_error.textContent = "";
    email_error.textContent = "";
    dob_error.textContent = "";
    add_error.textContent = "";
    gender_error.textContent = "";
    stream_error.textContent = "";
    city_error.textContent = "";
    zc_error.textContent = "Zip Code is required";
    document.forms["fform"]["zc"].focus();
    return false;
}
    if (isNaN(b))
{
    zc_error.textContent = "Enter Number Only";
    document.forms["fform"]["zc"].focus();
    return false;
}
document.fform.submit();
}
