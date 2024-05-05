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

       
        addrole: {
          validators: {
            notEmpty: {
              message: 'The user type is required'
            }
          }
        },

        adduserid: {
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
              url: 'add-user-check.php',
              message: 'The ID already exists',
              data: function() {
                return {
                  field: 'adduserid',
                  value: $('#adduserid').val()
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
               
addfullname: {
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

        addusername: {
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
            },
            remote: {
              url: 'add-user-check.php',
              message: 'The username already exists',
              data: function() {
                return {
                  field: 'addusername',
                  value: $('#addusername').val()
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
        

        addpassword: {
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

        addemail: {
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
              url: 'add-user-check.php',
              message: 'The email address already exists',
              data: function() {
                return {
                  field: 'addemail',
                  value: $('#addemail').val()
                };
              },
              dataType: 'json',
              success: function(response) {
                if (!response.valid) {
                  return {
                    valid: false,
                    message: response.message || 'The email address already exists'
                  };
                }
              }
            }
          }
        },
        

        addcollege: {
          validators: {
            notEmpty: {
              message: 'The college is required',
              enabled: function() {
                // Return true to enable the validator, or false to disable it
                const selectedUserType = userTypeSelect.val();
                return selectedUserType === 'Student';
              }
            }
          }
        },
        
        addcourse: {
          validators: {
            notEmpty: {
              message: 'The course is required',
              enabled: function() {
                // Return true to enable the validator, or false to disable it
                const selectedUserType = userTypeSelect.val();
                return selectedUserType === 'Student';
              }
            }
          }
        },

        addclsuidimage: {
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
      addclsuaddress: {
        validators: {
          notEmpty: {
            message: 'CLSU address is required'
          },
        }
      },
      addavatar: {
        validators: {
            notEmpty: {
                message: 'Uploading avatar is required'
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

    addcontact: {
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
    addhomeaddress: {
      validators: {
        notEmpty: {
          message: 'Address is required'
        },
      }
    },
    addlinks: {
      validators: {
        notEmpty: {
          message: 'Social Links is required'
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
          rowSelector: function (field, ele) {
            // field is the field name & ele is the field element
            switch (field) {
              case 'addrole':
              case 'adduserid':
              case 'addfullname':
              case 'addusername':
              case 'addpassword':
              case 'formValidationConfirmPass':
              case 'addemail':
              case 'addcollege':
              case 'addcourse':
              case 'addclsuidimage':
              case 'addclsuaddress':
              case 'addavatar':
              case 'addcontact':
              case 'addhomeaddress':
              case 'addlinks':
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
        
            // You can process the form data if needed, and then redirect to add_user.php
            location.assign('../.../admin/add_user.php');
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

    
/// Select2 (User Type)
const userTypeSelect = jQuery(formValidationExamples.querySelector('[name="addrole"]'));

if (userTypeSelect.length) {
  userTypeSelect.wrap('<div class="position-relative"></div>');

  userTypeSelect.select2({
    placeholder: 'Select a user type',
    dropdownParent: userTypeSelect.parent(),
  });

  userTypeSelect.on('change', function () {
    const selectedUserType = this.value;

    // Enable/disable validators based on the selected user type
    fv.enableValidator('adduserid', 'stringLength', selectedUserType === 'Student');
    fv.enableValidator('adduserid', 'regexp', selectedUserType === 'Student');

    if (selectedUserType !== 'Student') {
      fv.disableValidator('adduserid', 'stringLength');
      fv.disableValidator('adduserid', 'regexp');
    }

    if (selectedUserType === 'Student') {
      fv.enableValidator('addcollege', 'notEmpty');
      fv.enableValidator('addcourse', 'notEmpty');
    } else {
      fv.disableValidator('addcollege', 'notEmpty');
      fv.disableValidator('addcourse', 'notEmpty');
    }

    // Revalidate the userType field when an option is chosen
    fv.revalidateField('addrole');
  });
}


// Select2 (College)
const addcollegeSelect = jQuery(formValidationExamples.querySelector('[name="addcollege"]'));
if (addcollegeSelect.length) {
  addcollegeSelect.wrap('<div class="position-relative"></div>');
  addcollegeSelect
    .select2({
      placeholder: 'Select a college',
      dropdownParent: addcollegeSelect.parent()
    })
    .on('change', function () {
      // Revalidate the addcollege field when an option is chosen
      fv.revalidateField('addcollege');
    });
}

// Select2 (Course)
const addcourseSelect = jQuery(formValidationExamples.querySelector('[name="addcourse"]'));
if (addcourseSelect.length) {
  addcourseSelect.wrap('<div class="position-relative"></div>');
  addcourseSelect
    .select2({
      placeholder: 'Select a course',
      dropdownParent: addcourseSelect.parent()
    })
    .on('change', function () {
      // Revalidate the addcourse field when an option is chosen
      fv.revalidateField('addcourse');
    });
}



const collegeDropdown = jQuery(formValidationExamples.querySelector('[name="addcollege"]'));
const courseDropdown = jQuery(formValidationExamples.querySelector('[name="addcourse"]'));

collegeDropdown.select2({
  placeholder: 'Select a college',
  dropdownParent: collegeDropdown.parent()
});

courseDropdown.select2({
  placeholder: 'Select a course',
  dropdownParent: courseDropdown.parent()
});

// Event listener for populating the course dropdown
collegeDropdown.on('change', function() {
  const selectedCollege = this.value;
  let newOptions = [];

  switch (selectedCollege) {
    case "College of Agriculture":
      newOptions = [
        { id: 'Bachelor of Science in Agribusiness (BSAb)', text: 'Bachelor of Science in Agribusiness (BSAb)' },
        { id: 'Bachelor of Science in Agriculture (BSA)', text: 'Bachelor of Science in Agriculture (BSA)' },
      ];
      break;
  
    case "College of Arts and Social Sciences":
      newOptions = [
        { id: 'Bachelor of Arts in Filipino (BAFil)', text: 'Bachelor of Arts in Filipino (BAFil)' },
        { id: 'Bachelor of Arts in Literature (BALit)', text: 'Bachelor of Arts in Literature (BALit)' },
        { id: 'Bachelor of Arts in Social Sciences (BASS)', text: 'Bachelor of Arts in Social Sciences (BASS)' },
        { id: 'Bachelor of Science in Development Communication (BSDC)', text: 'Bachelor of Science in Development Communication (BSDC)' },
        { id: 'Bachelor of Science in Psychology (BSPsych)', text: 'Bachelor of Science in Psychology (BSPsych)' },
      ];
      break;
  
    case "College of Business Administration and Accountancy":
      newOptions = [
        { id: 'Bachelor of Science in Accountancy (BSAc)', text: 'Bachelor of Science in Accountancy (BSAc)' },
        { id: 'Bachelor of Science in Business Administration (BSBA)', text: 'Bachelor of Science in Business Administration (BSBA)' },
        { id: 'Bachelor of Science in Entrepreneurship (BSEntrep)', text: 'Bachelor of Science in Entrepreneurship (BSEntrep)' },
        { id: 'Bachelor of Science in Management Accounting (BSMA)', text: 'Bachelor of Science in Management Accounting (BSMA)' },
      ];
      break;
  
    case "College of Education":
      newOptions = [
        { id: 'Bachelor of Culture and Arts Education (BCAEd)', text: 'Bachelor of Culture and Arts Education (BCAEd)' },
        { id: 'Bachelor of Early Childhood Education (BECEd)', text: 'Bachelor of Early Childhood Education (BECEd)' },
        { id: 'Bachelor of Elementary Education (BEEd)', text: 'Bachelor of Elementary Education (BEEd)' },
        { id: 'Bachelor of Physical Education (BPEd)', text: 'Bachelor of Physical Education (BPEd)' },
        { id: 'Bachelor of Secondary Education (BSEd)', text: 'Bachelor of Secondary Education (BSEd)' },
        { id: 'Bachelor of Technology and Livelihood Education (BTLEd)', text: 'Bachelor of Technology and Livelihood Education (BTLEd)' },
      ];
      break;
  
    case "College of Engineering":
      newOptions = [
        { id: 'Bachelor of Science in Agricultural and Biosystems Engineering (BSABE)', text: 'Bachelor of Science in Agricultural and Biosystems Engineering (BSABE)' },
        { id: 'Bachelor of Science in Civil Engineering (BSCE)', text: 'Bachelor of Science in Civil Engineering (BSCE)' },
        { id: 'Bachelor of Science in Information Technology (BSIT)', text: 'Bachelor of Science in Information Technology (BSIT)' },
        { id: 'Bachelor of Science in Meteorology (BSMet)', text: 'Bachelor of Science in Meteorology (BSMet)' },
      ];
      break;
  
    case "College of Fisheries":
      newOptions = [
        { id: 'Bachelor of Science in Fisheries (BSF)', text: 'Bachelor of Science in Fisheries (BSF)' },
      ];
      break;
  
    case "College of Home Science and Industry":
      newOptions = [
        { id: 'Bachelor of Science in Food Technology (BSFT)', text: 'Bachelor of Science in Food Technology (BSFT)' },
        { id: 'Bachelor of Science in Fashion and Textile Technology (BSFTT)', text: 'Bachelor of Science in Fashion and Textile Technology (BSFTT)' },
        { id: 'Bachelor of Science in Hospitality Management (BSHM)', text: 'Bachelor of Science in Hospitality Management (BSHM)' },
        { id: 'Bachelor of Science in Tourism Management (BSTM)', text: 'Bachelor of Science in Tourism Management (BSTM)' },
      ];
      break;
  
    case "College of Science":
      newOptions = [
        { id: 'Bachelor of Science in Biology (BSBio)', text: 'Bachelor of Science in Biology (BSBio)' },
        { id: 'Bachelor of Science in Chemistry (BSChem)', text: 'Bachelor of Science in Chemistry (BSChem)' },
        { id: 'Bachelor of Science in Environmental Science (BSES)', text: 'Bachelor of Science in Environmental Science (BSES)' },
        { id: 'Bachelor of Science in Mathematics (BSMath)', text: 'Bachelor of Science in Mathematics (BSMath)' },
        { id: 'Bachelor of Science in Statistics (BSStat)', text: 'Bachelor of Science in Statistics (BSStat)' },
      ];
      break;
  
    case "College of Veterinary Science and Medicine":
      newOptions = [
        { id: 'Doctor of Veterinary Medicine (DVM)', text: 'Doctor of Veterinary Medicine (DVM)' },
      ];
      break;// Graduate
      case "Doctor of Philosophy":
        newOptions = [
          { id: 'Doctor of Philosophy', text: 'Doctor of Philosophy' },
          { id: 'Doctor of Philosophy in Agricultural Engineering', text: 'Doctor of Philosophy in Agricultural Engineering' },
          { id: 'Doctor of Philosophy in Agricultural Entomology', text: 'Doctor of Philosophy in Agricultural Entomology' },
          { id: 'Doctor of Philosophy in Animal Science', text: 'Doctor of Philosophy in Animal Science' },
          { id: 'Doctor of Philosophy in Aquaculture', text: 'Doctor of Philosophy in Aquaculture' },
          { id: 'Doctor of Philosophy in Biology', text: 'Doctor of Philosophy in Biology' },
          { id: 'Doctor of Philosophy in Crop Science', text: 'Doctor of Philosophy in Crop Science' },
          { id: 'Doctor of Philosophy in Development Communication', text: 'Doctor of Philosophy in Development Communication' },
          { id: 'Doctor of Philosophy in Development Education', text: 'Doctor of Philosophy in Development Education' },
          { id: 'Doctor of Philosophy in Environmental Management', text: 'Doctor of Philosophy in Environmental Management' },
          { id: 'Doctor of Philosophy in Plant Breeding', text: 'Doctor of Philosophy in Plant Breeding' },
          { id: 'Doctor of Philosophy in Rural Development', text: 'Doctor of Philosophy in Rural Development' },
          { id: 'Doctor of Philosophy in Soil Science', text: 'Doctor of Philosophy in Soil Science' },
          { id: 'Doctor of Philosophy in Sustainable Food Systems by Research Program (DOTUni)', text: 'Doctor of Philosophy in Sustainable Food Systems by Research Program (DOTUni)' },
        ];
        break;
      
      case "Master of Science":
        newOptions = [
          { id: 'Master of Science in Agricultural Economics', text: 'Master of Science in Agricultural Economics' },
          { id: 'Master of Science in Agricultural Engineering', text: 'Master of Science in Agricultural Engineering' },
          { id: 'Master of Science in Animal Science', text: 'Master of Science in Animal Science' },
          { id: 'Master of Science in Aquaculture', text: 'Master of Science in Aquaculture' },
          { id: 'Master of Science in Biology', text: 'Master of Science in Biology' },
          { id: 'Master of Science in Biology Education', text: 'Master of Science in Biology Education' },
          { id: 'Master of Science in Chemistry Education', text: 'Master of Science in Chemistry Education' },
          { id: 'Master of Science in Crop Protection', text: 'Master of Science in Crop Protection' },
          { id: 'Master of Science in Crop Science', text: 'Master of Science in Crop Science' },
          { id: 'Master of Science in Development Communication', text: 'Master of Science in Development Communication' },
          { id: 'Master of Science in Education', text: 'Master of Science in Education' },
          { id: 'Master of Science in Environmental Management', text: 'Master of Science in Environmental Management' },
          { id: 'Master of Science in Grain Science', text: 'Master of Science in Grain Science' },
          { id: 'Master of Science in Guidance and Counselling', text: 'Master of Science in Guidance and Counselling' },
          { id: 'Master of Science in Rural Development', text: 'Master of Science in Rural Development' },
          { id: 'Master of Science in Soil Science', text: 'Master of Science in Soil Science' },
        ];
        break;
      
      case "Other Masteral Programs":
        newOptions = [
          { id: 'Master of Arts in Language and Literature', text: 'Master of Arts in Language and Literature' },
          { id: 'Master of Science in Renewable Energy Systems (DOTUni)', text: 'Master of Science in Renewable Energy Systems (DOTUni)' },
          { id: 'Master of Veterinary Studies', text: 'Master of Veterinary Studies' },
          { id: 'Master in Agribusiness Management', text: 'Master in Agribusiness Management' },
          { id: 'Master in Biology', text: 'Master in Biology' },
          { id: 'Master in Business Administration', text: 'Master in Business Administration' },
          { id: 'Master in Chemistry', text: 'Master in Chemistry' },
          { id: 'Master in Environmental Management (DOTUni)', text: 'Master in Environmental Management (DOTUni)' },
          { id: 'Master in Local Government Management (DOTUni)', text: 'Master in Local Government Management (DOTUni)' },
        ];
        break;
      
      // Other
      case "Distance, Open, and Transnational University (DOTUni)":
        newOptions = [
          { id: 'Diploma in Land Use Planning', text: 'Diploma in Land Use Planning' },
          { id: 'Diploma in Local Government Management', text: 'Diploma in Local Government Management' },
          { id: 'Certificate in Agricultural Research Management', text: 'Certificate in Agricultural Research Management' },
          { id: 'Certificate in Basic Environmental Impact Assessment', text: 'Certificate in Basic Environmental Impact Assessment' },
          { id: 'Certificate in Basic Local Governance', text: 'Certificate in Basic Local Governance' },
          { id: 'Certificate in Entrepreneurship', text: 'Certificate in Entrepreneurship' },
          { id: 'Certificate in Local Development Planning', text: 'Certificate in Local Development Planning' },
          { id: 'Certificate in Project Feasibility Preparation and Implementation', text: 'Certificate in Project Feasibility Preparation and Implementation' },
          { id: 'Certificate in Training Management', text: 'Certificate in Training Management' },
          { id: 'Certificate in Teaching', text: 'Certificate in Teaching' },
        ];
        break;
      
      case "Institute of Sports, Physical Education and Recreation":
        newOptions = [
          { id: 'Certificate in Physical Education', text: 'Certificate in Physical Education' },
        ];
        break;
      
      case "Vocational Course (1-Year Program)":
        newOptions = [
          { id: 'Certificate in Agricultural Mechanics', text: 'Certificate in Agricultural Mechanics' },
        ];
        break;
      
      // Add more cases as needed...
      
      default:
        newOptions = [];
        break;
      }

  courseDropdown.empty().trigger('change'); // Clear existing options and trigger Select2 to update
  courseDropdown.select2({ data: newOptions }); // Add new options and trigger Select2 to update
});


 


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
