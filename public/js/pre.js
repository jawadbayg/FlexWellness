function mybuttonfunc1() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;

    if (name == "" || email == "" || phone == "") {
      alert("Please fill out all fields.");
      return false;
    }
    
    return true;
  }
  

  function signin() {
    var email = document.getElementById("email").value;
    var email = document.getElementById("psswd").value;

    if (email == "" || psswd == "") {
      alert("Please fill out all fields.");
      return false;
    }
    
    return true;
  }


    function checkAge() {
  if( parseInt(document.form1.age.value) < 12) {
    window.alert("Stop! You are younger than 12" ) ;
  }
  }

//   function byeOUL(){
//     windows.alert("Thankyou for visiting our site.");
//   }

    function checkInputLength(input) {
    if (input.value.length < 4) {
        alert("Password must be at least 4 characters long!");
        input.value = "";
    } else if (input.value.length > 8) {
        alert("Password must be no more than 8 characters long!");
        input.value = "";
    }
    }
    



  