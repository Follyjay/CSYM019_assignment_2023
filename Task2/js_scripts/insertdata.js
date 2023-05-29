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

function toggleAll(source) {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach(function(checkbox) {
      checkbox.checked = source.checked;
  });
}