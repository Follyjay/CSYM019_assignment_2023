$(document).ready(function() {
  $("#courseregistration").submit(function(e) {
    e.preventDefault();
    $.ajax({
      url: "savedata.php",
      method: "POST",
      data: $(this).serialize(),
      success: function(response) {
        alert("You Have Successfully Added a New Course," + '<br>' + "Thank You!");
        $("#courseregistration")[0].reset();
      },
      error: function(xhr, status, error) {
        alert("Registration failed: " + error);
      }
    });
  });
});