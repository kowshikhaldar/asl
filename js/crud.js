function data_Delete(id, row) {
  // console.log(row,"Delete is pressed for id",id);
  var z = window.confirm("Are you Sure?");
  if (z) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == 1) {
          $("tr#" + row).hide();
        }
      }
    };
    xhttp.open(
      "GET",
      "../controller/process_crud_operation.php?del=1&id=" + id,
      true
    );

    xhttp.send();
  }

  console.log(row);
}

function data_Update(id, row) {
  $(document).ready(function(){
    
      $("table#update").slideToggle("slow");
    
  });

    // console.log(row,"Data Update is pressed for",id);
    var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          
              
             zdata = JSON.parse(this.responseText);
              console.log(zdata)
         
  
        }
      };
      xhttp.open(
        "GET",
        "../controller/process_crud_operation.php?up=1&id=" + id,
        true
      );
      
      xhttp.send();console.log(zdata);

  
  
}

function member_profile(id, row) {
  window.location.href="it_s_users_profile.php?id="+id;
  console.log(row);
}



