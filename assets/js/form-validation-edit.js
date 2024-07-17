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
              url: 'edit-user-check.php',
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
              url: 'edit-user-check.php',
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
              url: 'edit-user-check.php',
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
        

        editcollege: {
          validators: {
            notEmpty: {
              message: 'The college is required',
              enabled: function() {
                const selectedUserType = userTypeSelect.val();
                return selectedUserType === 'Student';
              }
            }
          }
        },
        
        editcourse: {
          validators: {
            notEmpty: {
              message: 'The course is required',
              enabled: function() {
                const selectedUserType = userTypeSelect.val();
                return selectedUserType === 'Student';
              }
            }
          }
        },

        editclsuidimage: {
          validators: {
              file: {
                  extension: 'jpg,jpeg,png',
                  type: 'image/jpeg,image/png',
                  message: 'The selected file must be a JPG or PNG image'
              },
              fileSize: {
                  max: '5MB',
                  message: 'The file must be less than 5MB'
              },
              imageDimensions: {
                  minWidth: 300,
                  minHeight: 200,
                  message: 'The image dimensions must be at least 300x200 pixels'
              }
          }
      },
      editclsuaddress: {
        validators: {
          notEmpty: {
            message: 'CLSU address is required'
          },
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
                max: '5MB',
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
    edithomeaddress: {
      validators: {
        notEmpty: {
          message: 'Address is required'
        },
      }
    },
    editlinks: {
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
          eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: function (field, ele) {
            switch (field) {
              case 'editrole':
              case 'edituserid':
              case 'editfullname':
              case 'editusername':
              case 'editpassword':
              case 'formValidationConfirmPass':
              case 'editemail':
              case 'editcollege':
              case 'editcourse':
              case 'editclsuidimage':
              case 'editclsuaddress':
              case 'editavatar':
              case 'editcontact':
              case 'edithomeaddress':
              case 'editlinks':
                return '.col-12';
              default:
                return '.row';
            }
          }
        }),
      
        submitButton: new FormValidation.plugins.SubmitButton(),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        
        defaultSubmit: new FormValidation.plugins.DefaultSubmit(null, {
          onSuccess: function(event) {
            event.preventDefault();
            location.assign('../.../admin/edit-user.php');
          }
        }),
      },
      init: instance => {
        instance.on('plugins.message.placed', function (e) {
          if (e.element.parentElement.classList.contains('input-group')) {
            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
          }
          if (e.element.parentElement.parentElement.classList.contains('custom-option')) {
            e.element.closest('.row').insertAdjacentElement('afterend', e.messageElement);
          }
        });
      }
    });

    const flatpickrDate = document.querySelector('[name="formValidationDob"]');

    if (flatpickrDate) {
      flatpickrDate.flatpickr({
        enableTime: false,
        dateFormat: 'Y/m/d',
        onChange: function () {
          fv.revalidateField('formValidationDob');
        }
      });
    }

    const userTypeSelect = jQuery(formValidationExamples.querySelector('[name="editrole"]'));

    if (userTypeSelect.length) {
      userTypeSelect.wrap('<div class="position-relative"></div>');

      userTypeSelect.select2({
        placeholder: 'Select a user type',
        dropdownParent: userTypeSelect.parent(),
      });

      userTypeSelect.on('change', function () {
        const selectedUserType = this.value;

        fv.enableValidator('edituserid', 'stringLength', selectedUserType === 'Student');
        fv.enableValidator('edituserid', 'regexp', selectedUserType === 'Student');

        if (selectedUserType !== 'Student') {
          fv.disableValidator('edituserid', 'stringLength');
          fv.disableValidator('edituserid', 'regexp');
        }

        if (selectedUserType === 'Student') {
          fv.enableValidator('editcollege', 'notEmpty');
          fv.enableValidator('editcourse', 'notEmpty');
        } else {
          fv.disableValidator('editcollege', 'notEmpty');
          fv.disableValidator('editcourse', 'notEmpty');
        }

        fv.revalidateField('editrole');
      });
    }

    const editcollegeSelect = jQuery(formValidationExamples.querySelector('[name="editcollege"]'));
    if (editcollegeSelect.length) {
      editcollegeSelect.wrap('<div class="position-relative"></div>');
      editcollegeSelect
        .select2({
          placeholder: 'Select a college',
          dropdownParent: editcollegeSelect.parent()
        })
        .on('change', function () {
          fv.revalidateField('editcollege');
        });
    }

    const editcourseSelect = jQuery(formValidationExamples.querySelector('[name="editcourse"]'));
    if (editcourseSelect.length) {
      editcourseSelect.wrap('<div class="position-relative"></div>');
      editcourseSelect
        .select2({
          placeholder: 'Select a course',
          dropdownParent: editcourseSelect.parent()
        })
        .on('change', function () {
          fv.revalidateField('editcourse');
        });
    }

    const collegeDropdown = jQuery(formValidationExamples.querySelector('[name="editcollege"]'));
    const courseDropdown = jQuery(formValidationExamples.querySelector('[name="editcourse"]'));
    const currentCourse = jQuery(formValidationExamples.querySelector('#currentcourse')).val();

    collegeDropdown.select2({
      placeholder: 'Select a college',
      dropdownParent: collegeDropdown.parent()
    });

    courseDropdown.select2({
      placeholder: 'Select a course',
      dropdownParent: courseDropdown.parent()
    });

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
          break;
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
        
        default:
          newOptions = [];
          break;
        }

      courseDropdown.empty().trigger('change');
      newOptions.forEach(option => {
        courseDropdown.append(new Option(option.text, option.id));
      });

      if (currentCourse) {
        courseDropdown.val(currentCourse).trigger('change');
      }
    });

    if (collegeDropdown.val()) {
      collegeDropdown.trigger('change');
    }

  })();
});
