function validation() {
    if (bookname() && authorname() && booktypes() && isbn() && publication()) {
        return true;
    }
    else {
        return false;
    }
}

function bookname() {
    var bname = document.getElementById("bname").value;
    var patt = /[A-Z][a-z]+$/;
    var check = patt.test(bname)

    if (check == true) {
        document.getElementById("bnameerror").innerHTML = "";
        return true;
    }
    else {
        document.getElementById("bnameerror").innerHTML = "Must Contain Book Name";
        return false;
    }

}

function authorname() {
    var aname = document.getElementById("aname").value;
    var patt = /[A-Z][a-z]+$/;
    var check = patt.test(aname)

    if (check == true) {
        document.getElementById("anameerror").innerHTML = "";
        return true;
    }
    else {
        document.getElementById("anameerror").innerHTML = "Must Contain Author Name";
        return false;
    }

}


function booktypes() {


    if (document.getElementById("booktypes").value=="")
    {
      
        document.getElementById("booktypeserror").innerHTML = "Booktype Must Required";
        return false;     
    }
    else 
    {
        document.getElementById("booktypeserror").innerHTML = "";
        return true;
    }
     //var booktypes = document.getElementById("booktypes");
    // var bt1 = document.getElementById("None");
    // var bt2 = document.getElementById("Poetry");
    // var bt3 = document.getElementById("Thriller");
    // var bt4 = document.getElementById("Comics");
    // var bt5 = document.getElementById("Horror");
    // var bt6 = document.getElementById("Biography");
    // var bt7 = document.getElementById("Classic");
    // var bt8 = document.getElementById("Science Fiction");
    // var bt9 = document.getElementById("Cookbooks");
    // var bt10 = document.getElementById("Mystery");
    // var bt11 = document.getElementById("Action");
    // var bt12 = document.getElementById("Adeventure");
    // if (bt1.Checked == true || bt2.Checked == true || bt3.Checked == true || bt4.Checked == true || bt5.Checked == true || bt6.Checked == true || bt7.Checked == true || bt8.Checked == true || bt9.Checked == true || bt10.Checked == true || bt11.Checked == true || bt12.Checked == true) {
    //     alert("Booktypes");
    //     return true;
    // }
    // else {
    //     document.getElementById("booktypeserror").innerHTML = "Booktype Must Required";
    //     return false;
    // }
}

function isbn() {
    var isbn = document.getElementById("isbn").value;
    var patt = /^\d+$/;
    var cisbn = patt.test(isbn)
    if (cisbn == true) {
        document.getElementById("isbnerror").innerHTML = "";
        return true;
    }
    else {
        document.getElementById("isbnerror").innerHTML = "Must Contain ISBN Number";
        return false;
    }
}

function publication() {
    if (document.getElementById("pdate").value == "") {
        document.getElementById("pdateerror").innerHTML = "Publication Date Required";
        return false;
    }
    else {
        document.getElementById("pdateerror").innerHTML = "";
        return true;
    }
}


function searchbook()
{
    var book = document.getElementById("xyz").value;
    var obj = new XMLHttpRequest();

    obj.onreadystatechange = function()
    {
        if(this.readyState ==4 && this.status==200)
        {
            document.getElementById("search").innerHTML = this.responseText;
        }
    }
obj.open("GET","http://localhost/WT/controller/bup_process.php?isbn=" + book,true);
obj.send();
}