function validation() {
    if (firstname() && lastname() && email() && address() && dob() && gender() && experience() && eduback() && username() && newpass() && confirmpass() && phoneno()) {
        return true;
    }
    else {
        return false;
    }
}

function firstname() {
   var fname = document.getElementById("fname").value;
   var patt = /[A-Z][a-z]+$/;
   var cfname = patt.test(fname)
   if (cfname == true)
   {
    document.getElementById("fnameerror").innerHTML= "";
    return true;
   }
   else
   {
    document.getElementById("fnameerror").innerHTML= "First Name Required";
    return false;
   }
}

function lastname() {
    var lname = document.getElementById("lname").value;
   var patt = /[A-Z][a-z]+$/;
   var clname = patt.test(lname)
   if (clname == true)
   {
    document.getElementById("lnameerror").innerHTML= "";
    return true;
   }
   else
   {
    document.getElementById("lnameerror").innerHTML= "Last Name Required";
    return false;
   }
}

function email() {
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var check = patt.test(email);
    if (check == true) {
        document.getElementById("emailerror").innerHTML = "";
        return true;
    }
    else {
        document.getElementById("emailerror").innerHTML = "Fill up Properly";
        return false;

    }

}

function address() {
    if (document.getElementById("address").value == "") {
        document.getElementById("addresserror").innerHTML = "Address Required";
        return false;
    }
    else {
        document.getElementById("addresserror").innerHTML = "";
        return true;
    }
}

function dob() {
    if (document.getElementById("dob").value == "") {
        document.getElementById("doberror").innerHTML = "Date of Birth Required";
        return false;
    }
    else {
        document.getElementById("doberror").innerHTML = "";
        return true;
    }
}

function gender() {
    var rb1 = document.getElementById("male");
    var rb2 = document.getElementById("female");
    var rb3 = document.getElementById("other");
    if (rb1.checked == true || rb2.checked == true || rb3.checked == true) {
        document.getElementById("gendererror").innerHTML = "";
        
        //alert("Gender Required");
        return true;
    }
    else {
        document.getElementById("gendererror").innerHTML = "Gender Required";
        return false;

    }

}

function experience()
{
    if (document.getElementById("experience").value=="")
    {
        document.getElementById("experienceerror").innerHTML ="Please Write an Experience";
        return false;
    }
    else
    {
        document.getElementById("experienceerror").innerHTML ="";
        return true;
    }
}

function eduback()
{
    if (document.getElementById("edubac").value=="")
    {
        document.getElementById("edubacerror").innerHTML ="Please Write Your Educational Background";
        return false;
    }
    else
    {
        document.getElementById("edubacerror").innerHTML ="";
        return true;
    }
}




function username() {
    var uname = document.getElementById("uname").value;
    var patt = /[A-Z][a-z]+$/;
    var cuname = patt.test(uname)
    if (cuname == true)
    {
        document.getElementById("unameerror").innerHTML= "";
     return true;
    }
    else
    {
     document.getElementById("unameerror").innerHTML= "User Name Required";
     return false;
    }
 }


 function newpass()
 {
    var cnpass = document.getElementById("npass").value;
    if(cnpass.length < 8)
    {
        document.getElementById("passerror").innerHTML="Must Contain 8 Characters";
        return false;
    }
    else
    {
        document.getElementById("passerror").innerHTML="";
        return true;
    }
   
 }

 function confirmpass()
 {
    var cnpass = document.getElementById("cnpass").value;
    if(cnpass != true)
    {
        document.getElementById("cnpasserror").innerHTML="Password Does Not Match";
        return false;
    }
    else
    {
        document.getElementById("cnpasserror").innerHTML="";
        return true;
    }
   
 }


 function phoneno()
{
    var pno = document.getElementById("phone").value;
    var patt = /^\d+$/;
    var cpno = patt.test(pno)
    if(cpno == true)
    {
        document.getElementById("pnoerror").innerHTML="";
        return true;
    }
    else
    {
        document.getElementById("pnoerror").innerHTML="Phone Number Must Required";
        return false;
    }

}



function searchuser()
{
    var user = document.getElementById("show").value;
    var obj = new XMLHttpRequest();

    obj.onreadystatechange = function()
    {
        if(this.readyState ==4 && this.status==200)
        {
            document.getElementById("search").innerHTML = this.responseText;
        }
    }
obj.open("GET","http://localhost/WT/controller/Reg_process.php?User=" + user,true);
obj.send();
}