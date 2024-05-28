(function() {
    const addNewUserForm = document.getElementById('addNewUserForm');
  
    const fv = FormValidation.formValidation(addNewUserForm, {
      fields: {
        adduserid: {
          validators: {
            notEmpty: {
              message: 'Please enter a username'
            }
          }
        },
        addusername: {
          validators: {
            notEmpty: {
              message: 'Please enter a username'
            }
          }
        },
        addfullname: {
          validators: {
            notEmpty: {
              message: 'Please enter your full name'
            }
          }
        },
        addrole: {
          validators: {
            notEmpty: {
              message: 'Please select a user role'
            }
          }
        },
        addclsuaddress: {
          validators: {
            notEmpty: {
              message: 'Please enter a CLSU address'
            }
          }
        },
        addhomeaddress: {
          validators: {
            notEmpty: {
              message: 'Please enter a home address'
            }
          }
        },
        addpassword: {
          validators: {
            notEmpty: {
              message: 'Please enter a password'
            },
            identical: {
              compare: function() {
                return document.getElementById('add-user-confirm-password').value;
              },
              message: 'Passwords do not match'
            }
          }
        },
        confirmPassword: {
          validators: {
            notEmpty: {
              message: 'Please confirm your password'
            },
            identical: {
              compare: function() {
                return document.getElementById('addpassword').value;
              },
              message: 'Passwords do not match'
            }
          }
        },
        addemail: {
          validators: {
            notEmpty: {
              message: 'Please enter your email'
            },
            emailAddress: {
              message: 'The value is not a valid email address'
            },
          }
        },
        addclsuidimage: {
          validators: {
            notEmpty: {
              message: 'Please upload a CLSU ID image'
            },
            file: {
              extension: 'jpeg,jpg,png,gif',
              type: 'image/jpeg,image/png,image/gif',
              message: 'The selected file is not a valid image. The allowed extensions are: jpeg, jpg, png, gif.'
            }
          }
        },
        addavatar: {
          validators: {
            notEmpty: {
              message: 'Please upload an avatar image'
            },
            file: {
              extension: 'jpeg,jpg,png,gif',
              type: 'image/jpeg,image/png,image/gif',
              message: 'The selected file is not a valid image. The allowed extensions are: jpeg, jpg, png, gif.'
            }
          }
        },
        addcontact: {
          validators: {
            notEmpty: {
              message: 'Please enter a contact number'
            },
            phone: {
              country: 'US',
              message: 'The value is not a valid phone number'
            }
          }
        },
        addlinks: {
          validators: {
            uri: {
              message: 'The value is not a valid URL'
            }
          }
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          eleValidClass: '',
          rowSelector: function(field, ele) {
            return '.col-sm-6, .col-sm-12';
          }
        }),
        autoFocus: new FormValidation.plugins.AutoFocus()
      }
    });
  
    // Remote validation for User ID, Username, and Email
    function checkValues(field, value) {
      return new Promise(function(resolve, reject) {
        $.ajax({
          url: 'add-user-check.php',
          type: 'POST',
          data: {
            field: field,
            value: value
          },
          success: function(response) {
            resolve(response === 'true');
          },
          error: function() {
            console.log('An error occurred while checking the values. Please try again.');
            reject();
          }
        });
      });
    }
  
    // Add event listeners to the input fields to check the values when they change
    $('#adduserid').on('change keyup paste', function() {
      checkValues('adduserid', $(this).val())
        .then(function(isValid) {
          if (!isValid) {
            $('#userIDFeedback').text('The User ID typed in already exists in the database. Please try again.');
          } else {
            $('#userIDFeedback').text('');
          }
        });
    });
  
    $('#addusername').on('change keyup paste', function() {
      checkValues('addusername', $(this).val())
        .then(function(isValid) {
          if (!isValid) {
            $('#usernameFeedback').text('The Username typed in already exists in the database. Please try again.');
          } else {
            $('#usernameFeedback').text('');
          }
        });
    });
  
    $('#addemail').on('change keyup paste', function() {
      checkValues('addemail', $(this).val())
        .then(function(isValid) {
          if (!isValid) {
            $('#emailFeedback').text('The Email typed in already exists in the database. Please try again.');
          } else {
            $('#emailFeedback').text('');
          }
        });
    });
  
   // Add an event listener to the submit button
$('#submitFeedback').on('click', function(event) {
  event.preventDefault(); // Prevent default form submission

  fv.validate().then(function(status) {
    if (status == 'Valid') {
      console.log('Form data is valid');

      // Serialize form data
      var formData = new FormData(editUserForm);

      // Submit the form data to the server using jQuery
      $.ajax({
        url: 'add_user.php', // Replace with your server-side script URL
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          console.log('Form submitted successfully');
          console.log(response);

          // Clear the form
          editUserForm.reset();

          // Display a success message in the submitFeedback div
          $('#submitFeedback').text('User edited successfully!');
          $('#submitFeedback').removeClass('invalid-feedback');
          $('#submitFeedback').addClass('valid-feedback');
        },
        error: function() {
          console.log('An error occurred while submitting the form. Please try again.');

          // Display an error message in the submitFeedback div
          $('#submitFeedback').text('An error occurred while editing the user. Please try again.');
        }
      });
    } else {
      // Display an error message or perform other actions if the fields are not satisfied
      console.log('Form is not valid. Please check the fields.');
    }
  });
});

})();
