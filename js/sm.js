function validation() {
    if (dept() && fname() && id() && email() && research() && club()) {
        return true;
    }
    else {
        return false;
    }
}

function dept() {
    if (document.getElementById("dept").value == "") {
        document.getElementById("depterror").innerHTML="Department Name Needed";
        return false;
    }
    else
    {
        document.getElementById("depterror").innerHTML="";
        return true;   
    }

    // var d1 = document.getElementById("none");
    // var d2 = document.getElementById("cse");
    // var d3 = document.getElementById("eee");
    // var d4 = document.getElementById("archi");
    // var d5 = document.getElementById("ipe");
    // var d6 = document.getElementById("bba");
    // var d7 = document.getElementById("eng");
    // if (d1.checked == true || d2.checked == true || d3.checked == true || d4.checked == true || d5.checked == true || d6.checked == true || d7.checked == true) {
    //     alert("Department");
    //     document.getElementById("depterror").innerHTML = "";
    //     return true;
    // }
    // else {
    //     document.getElementById("depterror").innerHTML = "Department Name Needed";
    //     return false;
    // }
}


function fname() {
    var name = document.getElementById("name").value;
    var patt = /[A-Z][a-z]+$/;
    var check = patt.test(name)
    if (check == true) {
        document.getElementById("nameerror").innerHTML = "";
        return true;
    }
    else {
        document.getElementById("nameerror").innerHTML = "Name Must be Required";
        return false;
    }
}

function id() {
    var id = document.getElementById("id").value;
    var patt = /^\d+$/;
    var cid = patt.test(id)
    if (cid == true) {
        document.getElementById("iderror").innerHTML = "";
        return true;
    }
    else {
        document.getElementById("iderror").innerHTML = "ID Must Required";
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
        document.getElementById("emailerror").innerHTML = "Email Fill up Properly";
        return false;

    }

}

function research() {
    var r1 = document.getElementById("yes");
    var r2 = document.getElementById("no");
    if (r1.checked == true || r2.checked == true) {
        document.getElementById("rscherror").innerHTML = "";
       // alert("Research");
        return true;
    }
    else {
        document.getElementById("rscherror").innerHTML = "Fill the Research Section";
        return false;
    }

}

function club() {
    if (document.getElementById("Club").value == "") {
        document.getElementById("cluberror").innerHTML="Club Name Needed";
        return false;
    }
    else
    {
        document.getElementById("cluberror").innerHTML="";
        return true;   
    }

}

function searchstudent()
{
    var student = document.getElementById("Search").value;
    var obj = new XMLHttpRequest();

    obj.onreadystatechange = function()
    {
        if(this.readyState ==4 && this.status==200)
        {
            document.getElementById("search").innerHTML = this.responseText;
        }
    }
obj.open("GET","http://localhost/WT/controller/studentdb_process.php?Student=" + student,true);
obj.send();
}