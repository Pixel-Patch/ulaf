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

       
        userRole: {
          validators: {
            notEmpty: {
              message: 'The user role is required'
            }
          }
        },
        userIDnumber: {
          validators: {
            notEmpty: {
              message: 'The ID is required' 
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
              message: 'Please enter your fullname ( eg. Firstname MI. Lastname Jr.)'
            },
            regexp: {
              regexp: /^[a-zA-Z\.\-\s]+$/,
              message: 'The name can only consist of alphabetical characters, period, hyphen, and space'
            } 
          }
        },
        formValidationUsername: {
          validators: {
            notEmpty: {
              message: 'The username is required'
            },
            stringLength: {
              min: 4,
              max: 15,
              message: 'The name must be more than 4 and less than 15 characters long'
            },
            regexp: {
              regexp: /^[a-zA-Z0-9.-]+$/,
              message: 'The name can only consist of alphabetical characters, numbers, periods, and hyphens (with no spaces)'
            }
          }
        },
        formValidationPass: {
          validators: {
            notEmpty: {
              message: 'Please enter your password'
            },
            stringLength: {
              min: 6,
              message: 'The password must be at least 6 characters long'
            }
          }
        },
        formValidationConfirmPass: {
          validators: {
            notEmpty: {
              message: 'Please confirm password'
            },
            identical: {
              compare: function () {
                return formValidationExamples.querySelector('[name="formValidationPass"]').value;
              },
              message: 'The password and its confirm are not the same'
            }
          }
        },
        formValidationEmail: {
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
              case 'userRole':
                case 'userIDnumber':
                case 'formValidationUsername':
                case 'formValidationEmail':
                case 'formValidationPass':
                case 'formValidationConfirmPass':
                return '.col-12';
              default:
                return '.row';
            }
          }
        }),
        submitButton: new FormValidation.plugins.SubmitButton(),
        // Submit the form when all fields are valid
        defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
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

    
    
/// Select2 (User Type)
const userTypeSelect = jQuery(formValidationExamples.querySelector('[name="userType"]'));

if (userTypeSelect.length) {
  userTypeSelect.wrap('<div class="position-relative"></div>');

  userTypeSelect.select2({
    placeholder: 'Select a user type',
    dropdownParent: userTypeSelect.parent(),
  });

  userTypeSelect.on('change', function () {
    const selectedUserType = this.value;

    // Enable/disable validators based on the selected user type
    fv.enableValidator('formValidationUserID', 'stringLength', selectedUserType === 'Student');
    fv.enableValidator('formValidationUserID', 'regexp', selectedUserType === 'Student');

    if (selectedUserType !== 'Student') {
      fv.disableValidator('formValidationUserID', 'stringLength');
      fv.disableValidator('formValidationUserID', 'regexp');
    }

    if (selectedUserType === 'Student') {
      fv.enableValidator('addCollege', 'notEmpty');
      fv.enableValidator('addCourse', 'notEmpty');
    } else {
      fv.disableValidator('addCollege', 'notEmpty');
      fv.disableValidator('addCourse', 'notEmpty');
    }

    // Revalidate the userType field when an option is chosen
    fv.revalidateField('userType');
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