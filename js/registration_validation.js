function formValidate() {
  ret_var = false;
  console.log("This is registration Validation Block");
  if (txtAreaValidate()&&
    termsValid() &&
    filesValidate() &&
    fnameValid() &&
    lnameValid() &&
    dobValid() &&
    phoneValid() &&
    genderValid() &&
    emailValid() &&
    countryValid() &&
    cityValid()
  ) {
    ret_var = true;
  }

  return ret_var;
}



//this is for firstname validation
function fnameValid() {
  z = document.getElementById("fname");
  if (z.value.length != 0) {
    pattern = /[\d]+|\s|\W/i;
    if (z.value.length < 30 && !pattern.test(z.value)) {
      return true;
    }
    window.alert(
      "Firstname must not Any digit,special charecter,spaces not allowed"
    );
    return false;
  }
  window.alert("first name Cannot be Blank!");
  return false;
}



//this is for lastname validation
function lnameValid() {
  z = document.getElementById("lname");
  if (z.value.length != 0) {
    pattern = /[\d]+|\s|\W/i;
    if (z.value.length < 30 && !pattern.test(z.value)) {
      return true;
    }
    window.alert(
      "Lastname must not contain Any digit,special charecter,spaces not allowed"
    );
    return false;
  }
  window.alert("Last name Cannot be Blank!");
  return false;
}



//this is for date of birth validation

function dobValid() {
  z = document.getElementById("dob");

  if (z.value == "") {
    window.alert("Please select any date");
    return false;
  }

  return true;
}
//this is for country validation
function countryValid() {
  z = document.getElementById("country");
  if (z.value == "") {
    window.alert("Country Cannot be Blank!");
    return false;
  }
  return true;
}




//this is for phone validation
function phoneValid() {
  z = document.getElementById("phone");
  if (z.value == "") {
    window.alert("phone Cannot be Blank!");
    return false;
  } else {
    pattern = /\s|\W|[a-z]/i;
    if (z.value.length > 8 && !pattern.test(z.value.substring(1))) {
      return true;
    }
    window.alert(
      "Phone number must be minimum 8 digit and can not contain any word,special charected,spaces"
    );
  }
  return false;
}




//this is for gender validation

function genderValid() {
  gf = document.getElementById("gf");
  gm = document.getElementById("gm");
  if (gf.checked || gm.checked) {
    return true;
  }
  window.alert("Gender Cannot be Blank!");
  return false;
}



//this is for email validation
function emailValid() {

  
  z = document.getElementById("email");
  if (z.value.length != 0) {
    pattern = /[0-9]*[a-z]+[0-9]*@[a-z]+[0-9]*\.[a-z]+/i;
    if (pattern.test(z.value)) {
      return true;
    }
    window.alert("Please write the correct email!");

    return false;
  }
  window.alert("email Cannot be Blank!");
  return false;
}



//this is for city validation
function cityValid() {
  z = document.getElementById("city");
  if (z.value.length != 0) {
    pattern = /[\d]+|\s|\W/i;
    if (!pattern.test(z.value) && z.value.length < 30) {
      return true;
    }
    window.alert(
      "City must not contain Any digit,special charecter,spaces not allowed"
    );

    return false;
  }
  window.alert("City can not be Blanked!");
  return false;
}



//all file field validation
function filesValidate() {
  files_id = ["pro_pic", "cv", "aq", "cert"];
  var z = 0;
  files_id.forEach(function (element) {
    if (document.getElementById(element).files.length != 0) {
      z = 1;
    }
  });

  if (z == 1) {
    return true;
  } else {
    window.alert("Please Upload All files");
    return false;
  }
}



//validate all txtArea
function txtAreaValidate() {
  files_id = ["addrs", "exp", "edu", "skill", "reason", "reference"];
  var z = 1;
  files_id.forEach(function (element) {
    if (document.getElementById(element).value.length == 0) {
       
      z = 0;
    }
  });

  if (z == 1) {
    return true;
  } else {
    window.alert("Any field cannot be empty!");
    return false;
  }
}


//Terms accept check
function termsValid() {
  if (document.getElementById("terms").checked) {
    return true;
  }
  window.alert("Please Accept Terms and condition");
  return false;
}

