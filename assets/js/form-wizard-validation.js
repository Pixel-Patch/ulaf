/**
 *  Form Wizard
 */

'use strict';

(function () {
  const select2 = $('.select2'),
    selectPicker = $('.selectpicker');

  // Wizard Validation
  // --------------------------------------------------------------------
  const wizardValidation = document.querySelector('#wizard-validation');
  if (typeof wizardValidation !== undefined && wizardValidation !== null) {
    // Wizard form
    const wizardValidationForm = wizardValidation.querySelector('#wizard-validation-form');
    // Wizard steps
    const wizardValidationFormStep1 = wizardValidationForm.querySelector('#account-details-validation');
    const wizardValidationFormStep2 = wizardValidationForm.querySelector('#personal-info-validation');
    const wizardValidationFormStep3 = wizardValidationForm.querySelector('#social-links-validation');
    // Wizard next prev button
    const wizardValidationNext = [].slice.call(wizardValidationForm.querySelectorAll('.btn-next'));
    const wizardValidationPrev = [].slice.call(wizardValidationForm.querySelectorAll('.btn-prev'));

    const validationStepper = new Stepper(wizardValidation, {
      linear: true
    });

    // Account details
    const FormValidation1 = FormValidation.formValidation(wizardValidationFormStep1, {
      fields: {
        formValidationUserID: {
          validators: {
            notEmpty: {
              message: 'The ID is required'
            },
            stringLength: {
              min: 7,
              max: 7,
              message: 'The ID must be 7 characters long'
            },
            regexp: {
              regexp: /^[0-9]{2}-[0-9]{4}$/,
              message: 'The ID must be in the format XX-XXXX (e.g., 12-3456)'
            }
          }
        },
        formValidationUsername: {
          validators: {
            notEmpty: {
              message: 'The name is required'
            },
            stringLength: {
              min: 6,
              max: 30,
              message: 'The name must be more than 6 and less than 30 characters long'
            },
            regexp: {
              regexp: /^[a-zA-Z0-9 ]+$/,
              message: 'The name can only consist of alphabet, number and space'
            }
          }
        },
        formValidationFullname: {
          validators: {
            notEmpty: {
              message: 'The fullname is required'
            },
            stringLength: {
              min: 10,
              message: 'Please enter your fullname ( Firstname Middle Initial. Lastname )'
            },
            regexp: {
              regexp: /^[a-zA-Z0-9 ]+$/,
              message: 'The name can only consist of alphabet, number and space'
            }
          }
        },
        formValidationfullname: {
          validators: {
            notEmpty: {
              message: 'Name is required'
            },
            regexp: {
              regexp: /^[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/? ]+$/,
              message: 'The name can only consist of alphabetical, number, space and special characters'
            }
          }
        },
        
        User_Type: {
          validators: {
            notEmpty: {
              message: 'User Type is required'
            }
          }
        },
        formValidationPass: {
          validators: {
            notEmpty: {
              message: 'The password is required'
            }
          }
        },
        formValidationConfirmPass: {
          validators: {
            notEmpty: {
              message: 'The Confirm Password is required'
            },
            identical: {
              compare: function () {
                return wizardValidationFormStep1.querySelector('[name="formValidationPass"]').value;
              },
              message: 'The password and its confirm are not the same'
            }
          }
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.col-sm-6, col-sm-12'
        }),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        submitButton: new FormValidation.plugins.SubmitButton()
      },
      init: instance => {
        instance.on('plugins.message.placed', function (e) {
          //* Move the error message out of the `input-group` element
          if (e.element.parentElement.classList.contains('input-group')) {
            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
          }
        });
      }
    }).on('core.form.valid', function () {
      // Jump to the next step when all fields in the current step are valid
      validationStepper.next();
    });

    // Personal info
    const FormValidation2 = FormValidation.formValidation(wizardValidationFormStep2, {
      fields: {

        formValidationEmail: {
          validators: {
            notEmpty: {
              message: 'The Email is required'
            },
            emailAddress: {
              message: 'The value is not a valid email address'
            }
          }
        },
        
       
      formValidationIDImage: {
        validators: {
            notEmpty: {
                message: 'Uploading a CLSU ID image is required'
            },
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

    formValidationCLSUAddress: {
      validators: {
        notEmpty: {
          message: 'CLSU address is required'
        },
      }
    },
    
    
  
    
      },

      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.col-sm-6, col-sm-12'
        }),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        submitButton: new FormValidation.plugins.SubmitButton()
      }
    }).on('core.form.valid', function () {
      // Jump to the next step when all fields in the current step are valid
      validationStepper.next();
    });

    
 

    // Social links
    const FormValidation3 = FormValidation.formValidation(wizardValidationFormStep3, {
      fields: {
        
        

        formValidationContact: {
          validators: {
            notEmpty: {
              message: 'Required'
            },
          }
        },

        formValidationHomeAddress: {
          validators: {
            notEmpty: {
              message: 'Address is required'
            },
          }
        },
        

        formValidationIDImage: {
          validators: {
              notEmpty: {
                  message: 'Uploading aavatar is required'
              },
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
  


      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.col-sm-6'
        }),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        submitButton: new FormValidation.plugins.SubmitButton()
      }
    }).on('core.form.valid', function () {
      // You can submit the form
      // wizardValidationForm.submit()
      // or send the form data to server via an Ajax request
      // To make the demo simple, I just placed an alert
      alert('Submitted..!!');
    });

    wizardValidationNext.forEach(item => {
      item.addEventListener('click', event => {
        // When click the Next button, we will validate the current step
        switch (validationStepper._currentIndex) {
          case 0:
            FormValidation1.validate();
            break;

          case 1:
            FormValidation2.validate();
            break;

          case 2:
            FormValidation3.validate();
            break;

          default:
            break;
        }
      });
    });

    wizardValidationPrev.forEach(item => {
      item.addEventListener('click', event => {
        switch (validationStepper._currentIndex) {
          case 2:
            validationStepper.previous();
            break;

          case 1:
            validationStepper.previous();
            break;

          case 0:

          default:
            break;
        }
      });
    });
  }
})();