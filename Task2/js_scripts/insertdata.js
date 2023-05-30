// Ajax API that iserts data into the ddatabase
$(document).ready(function() {
  $("#courseregistration").submit(function(e) { // targets the button with id "courseregistration"
    e.preventDefault();
    $.ajax({ 
      url: "savedata.php",// specifies ithe script (target url)
      method: "POST",// specifies the method type (POST/GET)
      data: $(this).serialize(),
      success: function(response) { //displays a message to the user upon success of the function
        alert("You Have Successfully Added a New Course," + '<br>' + "Thank You!");
        $("#courseregistration")[0].reset();
      },
      error: function(xhr, status, error) {// display the error message the POST method is unsuccessful
        alert("Registration failed: " + error);
      }
    });
  });

});

// function to control checking and unchecking of all checkboxes on the report page.
function toggleAll(source) {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach(function(checkbox) {// looping through all checkboxes
      checkbox.checked = source.checked;
  });
}