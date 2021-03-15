function validateForm() { 
  var id = document.getElementById("id").value; 
  var fname = document.getElementById("fname").value; 
  var lname = document.getElementById("lname").value; 
  var email = document.getElementById("email");
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var uname = document.getElementById("uname").value; 
  var password = document.getElementById("password").value;
  var cpassword = document.getElementById("cpassword").value;
  var gender = document.getElementsByName("gender");
  var bdate= document.getElementById("bdate").value;
  
  
  document.getElementById("button").onclick;

  if (id == "") {
    document.getElementById("jsiderror").innerHTML=" ID must be filled out";
  return false;
  }

  if (fname == "") {
    document.getElementById("jsfnameerror").innerHTML=" First Name must be filled out";
  return false;
  }

  if (lname == "") {
    document.getElementById("jslnameerror").innerHTML=" Last Name must be filled out";
  return false;
  }
  
  if(!filter.test(email.value)) {
    valid = 0;
    document.getElementById("jsemailerror").innerHTML= "Invalid Email address";
  return false;
  }

  if (uname == "") {
    document.getElementById("jsunameerror").innerHTML=" User Name must be filled out";
  return false;
  }
  
  if (password.length<3) {
    document.getElementById("jspasserror").innerHTML="Password must be more than 3 input";
  
  return false;
  }

  if (cpassword.length<3) {
    document.getElementById("jscpasserror").innerHTML=" Confirm Password must be more than 3 input";
  
  return false;
  }

  if (gender[0].checked == true) {
    document.getElementById("jsgendererror").innerHTML = "Male selected";
  } else if (gender[1].checked == true) {
    document.getElementById("jsgendererror").innerHTML = "Female selected";
  } else {
    // no checked
    document.getElementById("jsgendererror").innerHTML = "Gender must be selected";
    return false;
  }
    
  
  if (bdate == "") {
    document.getElementById("jsbdateerror").innerHTML="Date of Birth must be filled out";
  
  return false;
  }

  }