$(document).ready(function() {
    // Listen for form submission
    $("#registrationForm").on("submit", function(event) {
      event.preventDefault(); // Prevent the default form submission
  
      // Retrieve form data
      var formData = new FormData(this);
  
      // Validate form data (add your validation logic here)
  
      // If there are no errors, proceed with sending data to the server
      if (!hasErrors) {
        // Send the form data to the server using AJAX
        $.ajax({
          url: "process-registration.php", // Add the URL for the process-registration.php file
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
            // Handle the response from the server (e.g., display a success message or redirect the user)
            console.log(response);
            if (response === "success") {
              // Registration successful, redirect the user or display a success message
              window.location.href = "success.html";
            } else {
              // Display error messages returned from the server
              $("#errorMessages").html(response);
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            // Handle any errors during the AJAX request
            console.error(textStatus, errorThrown);
          }
        });
      } else {
        // Display error messages if there are any validation errors
        for (var error in errors) {
          console.error(errors[error]);
        }
      }
    });
  });