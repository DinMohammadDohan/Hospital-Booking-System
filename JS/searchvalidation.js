function validateForm() {
    var user = document.getElementById("user").value;  
  
  if (user == "") {
    document.getElementById("jsusererror").innerHTML=" Name must be filled out";
 
  return false;
  }
  }