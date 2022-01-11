function validateForm() {
    var x = document.forms["form"]["stdName"].value;
    var y = document.forms["form"]["stdRegNum"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    if (y == "") {
        alert("Reg Number Name must be filled out");
        return false;
      }
  }