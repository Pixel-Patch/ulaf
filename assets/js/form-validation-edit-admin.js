'use strict';

(function () {
  // Init custom option check
  window.Helpers.initCustomOptionCheck();

  // Bootstrap validation example
  //------------------------------------------------------------------------------------------
  // const flatPickrEL = $('.flatpickr-validation');
  const flatPickrList = [].slice.call(document.querySelectorAll('.flatpickr-validation'));
  // Flat pickr
  if (flatPickrList) {
    flatPickrList.forEach(flatPickr => {
      flatPickr.flatpickr({
        monthSelectorType: 'static'
      });
    });
  }

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const bsValidationForms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(bsValidationForms).forEach(function (form) {
    form.addEventListener(
      'submit',
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          // Submit your form
          alert('Submitted!!!');
        }

        form.classList.add('was-validated');
      },
      false
    );
  });
})();
/**
 * Form Validation (https://formvalidation.io/guide/examples)
 * ? Primary form validation plugin for this template
 * ? In this example we've try to covered as many form inputs as we can.
 * ? Though If we've miss any 3rd party libraries, then refer: https://formvalidation.io/guide/examples/integrating-with-3rd-party-libraries
 */
//------------------------------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    const formValidationExamples = document.getElementById('formValidationExamples'),
      formValidationSelect2Ele = jQuery(formValidationExamples.querySelector('[name="formValidationSelect2"]')),
      formValidationTechEle = jQuery(formValidationExamples.querySelector('[name="formValidationTech"]')),
      formValidationLangEle = formValidationExamples.querySelector('[name="formValidationLang"]'),
      formValidationHobbiesEle = jQuery(formValidationExamples.querySelector('.selectpicker')),
      tech = [
        'ReactJS',
        'Angular',
        'VueJS',
        'Html',
        'Css',
        'Sass',
        'Pug',
        'Gulp',
        'Php',
        'Laravel',
        'Python',
        'Bootstrap',
        'Material Design',
        'NodeJS'
      ];
    
    const fv = FormValidation.formValidation(formValidationExamples, {
      fields: {

       
        editrole: {
          validators: {
            notEmpty: {
              message: 'The user type is required'
            }
          }
        },

        edituserid: {
          validators: {
            notEmpty: {
              message: 'The ID is required'
            },
            stringLength: {
              min: 7,
              max: 7,
              message: 'The ID must be 7 characters long',
              enabled: function() {
                const selectedUserType = userTypeSelect.val();
                return selectedUserType === 'Student';
              }
            },
            regexp: {
              regexp: /^[0-9]{2}-[0-9]{4}$/,
              message: 'The ID must be in the format XX-XXXX (e.g., 12-3456)',
              enabled: function() {
                const selectedUserType = userTypeSelect.val();
                return selectedUserType === 'Student';
              }
            },
            remote: {
              url: 'edit-admin-check.php',
              message: 'The ID already exists',
              data: function() {
                return {
                  field: 'edituserid',
                  value: $('#edituserid').val()
                };
              },
              dataType: 'json',
              success: function(response) {
                if (!response.valid) {
                  return {
                    valid: false,
                    message: response.message
                  };
                }
              }
            }
          }
        },
               
        editfullname: {
          validators: {
            notEmpty: {
              message: 'The fullname is required'
            },
            stringLength: {
              min: 10,
              message: 'Please enter your fullname ( eg. Firstname MI. Lastname Jr.)'
            },
            regexp: {
              regexp: /^[a-zA-Z\.\-\s]+$/,
              message: 'The name can only consist of alphabetical characters, period, hyphen, and space'
            } 
          }
        },

        editusername: {
          validators: {
            notEmpty: {
              message: 'The usernaFDGDFGme is required'
            },
            stringLength: {
              min: 4,
              max: 15,
              message: 'The name must be more than 4 and less than 15 characters long'
            },
            regexp: {
              regexp: /^[a-zA-Z0-9.-]+$/,
              message: 'The name can only consist of alphabetical characters, numbers, periods, and hyphens (with no spaces)'
            },
            remote: {
              url: 'edit-admin-check.php',
              message: 'The username already exists',
              data: function() {
                return {
                  field: 'editusername',
                  value: $('#editusername').val()
                };
              },
              dataType: 'json',
              success: function(response) {
                if (!response.valid) {
                  return {
                    valid: false,
                    message: response.message
                  };
                }
              }
            }
          }
        },
        

        editpassword: {
          validators: {
            stringLength: {
              min: 6,
              message: 'The password must be at least 6 characters long'
            }
          }
        },
        formValidationConfirmPass: {
          validators: {
            identical: {
              compare: function () {
                return formValidationExamples.querySelector('[name="editpassword"]').value;
              },
              message: 'The password and its confirm are not the same'
            }
          }
        },

        editemail: {
          validators: {
            notEmpty: {
              message: 'The Email is required'
            },
            emailAddress: {
              message: 'The value is not a valid email address'
            },
            regexp: {
              regexp: /^[^@]+@(clsu2\.edu\.ph|clsu\.edu\.ph)$/,
              message: 'The email address must end with @clsu2.edu.ph or @clsu.edu.ph'
            },
            remote: {
              url: 'edit-admin-check.php',
              message: 'The email address already exists',
              data: function() {
                return {
                  field: 'editemail',
                  value: $('#editemail').val()
                };
              },
              dataType: 'json',
              success: function(response) {
                if (!response.valid) {
                  return {
                    valid: false,
                    message: response.message
                  };
                }
              }
            }
          }
        },
        
      editavatar: {
        validators: {
            file: {
                extension: 'jpg,jpeg,png',
                type: 'image/jpeg,image/png',
                message: 'The selected file must be a JPG or PNG image'
            },
            fileSize: {
                max: '5MB', // 5MB is typically a reasonable upper limit for image uploads
                message: 'The file must be less than 5MB'
            },
            imageDimensions: {
                minWidth: 300,
                minHeight: 200,
                message: 'The image dimensions must be at least 300x200 pixels'
            }
        }
    },

    editcontact: {
      validators: {
        notEmpty: {
          message: 'The contact number is required'
        },
        regexp: {
          regexp: /^(\+\d{1,3}[-\s]?)?\d{11}$/,
          message: 'The contact number must be a phone number (e.g. +63 988 888 8888)'
        }
      }
    },
   
      },

      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: function (field, ele) {
            // field is the field name & ele is the field element
            switch (field) {
              case 'editrole':
              case 'edituserid':
              case 'editfullname':
              case 'editusername':
              case 'editpassword':
              case 'formValidationConfirmPass':
              case 'editemail':
              case 'editavatar':
              case 'editcontact':
                return '.col-12';
              default:
                return '.row';
            }
          }
        }),
      
        submitButton: new FormValidation.plugins.SubmitButton(),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        
        // Submit the form when all fields are valid
        defaultSubmit: new FormValidation.plugins.DefaultSubmit(null, {
          // Replace the 'success' callback function with your custom function
          onSuccess: function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();
        
            // You can process the form data if needed, and then redirect to add-user.php
            location.assign('../.../admin/edit-admin.php');
          }
        }),
      
        autoFocus: new FormValidation.plugins.AutoFocus()
        
      },
      init: instance => {
        instance.on('plugins.message.placed', function (e) {
          //* Move the error message out of the `input-group` element
          if (e.element.parentElement.classList.contains('input-group')) {
            // `e.field`: The field name
            // `e.messageElement`: The message element
            // `e.element`: The field element
            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
          }
          //* Move the error message out of the `row` element for custom-options
          if (e.element.parentElement.parentElement.classList.contains('custom-option')) {
            e.element.closest('.row').insertAdjacentElement('afterend', e.messageElement);
          }
        });
      }
    });

    //? Revalidation third-party libs inputs on change trigger

    // Flatpickr
    const flatpickrDate = document.querySelector('[name="formValidationDob"]');

    if (flatpickrDate) {
      flatpickrDate.flatpickr({
        enableTime: false,
        // See https://flatpickr.js.org/formatting/
        dateFormat: 'Y/m/d',
        // After selecting a date, we need to revalidate the field
        onChange: function () {
          fv.revalidateField('formValidationDob');
        }
      });
    }

   // Select2 (ID Number)
const addIDNumberSelect = jQuery('#edituserid');

addIDNumberSelect.wrap('<div class="position-relative"></div>');
addIDNumberSelect.select2({
  placeholder: 'Select an ID Number',
  dropdownParent: addIDNumberSelect.parent(),
  ajax: {
    url: 'fetch-userids.php', // Replace with your backend script URL
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results: $.map(data, function (item) {
          return {
            id: item.User_ID,
            text: item.User_ID
          };
        })
      };
    },
    cache: true
  }
});


// Revalidate the userIDnumber field when the Select2 control is changed
addIDNumberSelect.on('change', function () {
  fv.revalidateField('adduserid');
});
    

// Select2 (User Role)
const editroleSelect = jQuery(formValidationExamples.querySelector('[name="editrole"]'));
if (editroleSelect.length) {
  editroleSelect.wrap('<div class="position-relative"></div>');
  editroleSelect
    .select2({
      placeholder: 'Select a user role',
      dropdownParent: editroleSelect.parent()
    })
    .on('change', function () {
      // Revalidate the editrole field when an option is chosen
      fv.revalidateField('editrole');
    });
}



    // Typeahead

    // String Matcher function for typeahead
    const substringMatcher = function (strs) {
      return function findMatches(q, cb) {
        var matches, substrRegex;
        matches = [];
        substrRegex = new RegExp(q, 'i');
        $.each(strs, function (i, str) {
          if (substrRegex.test(str)) {
            matches.push(str);
          }
        });

        cb(matches);
      };
    };

    // Check if rtl
    if (isRtl) {
      const typeaheadList = [].slice.call(document.querySelectorAll('.typeahead'));

      // Flat pickr
      if (typeaheadList) {
        typeaheadList.forEach(typeahead => {
          typeahead.setAttribute('dir', 'rtl');
        });
      }
    }
    formValidationTechEle.typeahead(
      {
        hint: !isRtl,
        highlight: true,
        minLength: 1
      },
      {
        name: 'tech',
        source: substringMatcher(tech)
      }
    );

    // Tagify
    let formValidationLangTagify = new Tagify(formValidationLangEle);
    formValidationLangEle.addEventListener('change', onChange);
    function onChange() {
      fv.revalidateField('formValidationLang');
    }

    //Bootstrap select
    formValidationHobbiesEle.on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
      fv.revalidateField('formValidationHobbies');
    });
  })();
});
