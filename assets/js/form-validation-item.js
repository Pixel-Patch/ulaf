'use strict';

(function () {
  // Init custom option check
  window.Helpers.initCustomOptionCheck();

  // Bootstrap validation example
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
    
    let currentLocationValidators = {
      notEmpty: {
        message: 'The current location is required'
      }
    };

    const fv = FormValidation.formValidation(formValidationExamples, {
        fields: {
          posterID: {
            validators: {
              notEmpty: {
                message: 'The poster ID is required'
              }
            }
          },
          itemType: {
            validators: {
              notEmpty: {
                message: 'The item type is required',
              }
            }
          },
          itemName: {
            validators: {
              notEmpty: {
                message: 'The item name is required'
              }
            }
          },
          itemCategory: {
            validators: {
              notEmpty: {
                message: 'The item category is required'
              }
            }
          },
          'itemImages[]': {
            validators: {
              notEmpty: {
                message: 'Uploading an image is required'
              },
              file: {
                extension: 'jpg,jpeg,png',
                type: 'image/jpeg,image/png',
                message: 'The selected file must be a JPG or PNG image'
              },
              fileSize: {
                max: 5 * 1024 * 1024,
                message: 'The file must be less than 5MB'
              },
              imageDimensions: {
                minWidth: 300,
                minHeight: 200,
                message: 'The image dimensions must be at least 300x200 pixels'
              },
              callback: {
                message: 'You can upload up to 3 images',
                callback: function(value, validator, $field) {
                  if ($field[0].files.length > 3) {
                    return {
                      valid: false,
                      message: 'You can upload up to 3 images only'
                    };
                  }
                  return true;
                }
              }
            }
          },
          itemStatus: {
            validators: {
              notEmpty: {
                message: 'The item status is required'
              }
            }
          },
          itemDescription: {
            validators: {
              notEmpty: {
                message: 'The description is required'
              }
            }
          },
          pinLocation: {
            validators: {
              notEmpty: {
                message: 'The pin location is required'
              }
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            eleValidClass: '',
            rowSelector: function (field, ele) {
              switch (field) {
                case 'itemType':
                case 'itemName':
                case 'itemCategory':
                case 'itemImages[]':
                case 'itemStatus':
                case 'itemDescription':
                case 'pinLocation':
                  return '.col-md-6, .col-md-12';
                default:
                  return '.row';
              }
            }
          }),
          submitButton: new FormValidation.plugins.SubmitButton(),
          autoFocus: new FormValidation.plugins.AutoFocus(),
          // Submit the form when all fields are valid
          defaultSubmit: new FormValidation.plugins.DefaultSubmit(null, {
            onSuccess: function(event) {
              event.preventDefault();
              location.assign('../.../admin/add-item.php');
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

    // Revalidation third-party libs inputs on change trigger
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

    const itemCurrentLocationSelect = $('#item-current-location');
    if (itemCurrentLocationSelect.length) {
      itemCurrentLocationSelect.wrap('<div class="position-relative"></div>');
      itemCurrentLocationSelect
        .select2({
          placeholder: 'Select Current Location',
          dropdownParent: itemCurrentLocationSelect.parent()
        })
        .on('change', function () {
          fv.revalidateField('itemCurrentLocation');
        });
    }

    const itemTypeSelect = $('#item-type');
    if (itemTypeSelect.length) {
      itemTypeSelect.wrap('<div class="position-relative"></div>');
      itemTypeSelect
        .select2({
          placeholder: 'Select an Item Type',
          dropdownParent: itemTypeSelect.parent()
        })
        .on('change', function () {
          fv.revalidateField('itemType');
          
          const itemStatusSelect = $('#item-status');
          const pinLocationLabel = $('#pin-location-label');
          const currentLocationField = $('#current-location-field');
          itemStatusSelect.empty();
          
          if (itemTypeSelect.val() === 'found') {
            itemStatusSelect.append(new Option('Posted', 'Posted'));
            itemStatusSelect.append(new Option('Claiming', 'Claiming'));
            itemStatusSelect.append(new Option('Claimed', 'Claimed'));
            itemStatusSelect.append(new Option('Returning', 'Returning'));
            itemStatusSelect.append(new Option('Returned', 'Returned'));
            pinLocationLabel.text('Found at');
            currentLocationField.show();
            fv.addField('itemCurrentLocation', { validators: currentLocationValidators });
          } else if (itemTypeSelect.val() === 'lost') {
            itemStatusSelect.append(new Option('Posted', 'Posted'));
            itemStatusSelect.append(new Option('Claiming', 'Claiming'));
            itemStatusSelect.append(new Option('Claimed', 'Claimed'));
            itemStatusSelect.append(new Option('Retrieving', 'Retrieving'));
            itemStatusSelect.append(new Option('Retrieved', 'Retrieved'));
            pinLocationLabel.text('Last found at');
            currentLocationField.hide();
            fv.removeField('itemCurrentLocation');
          }
        });
    }

    const itemStatusSelect = $('#item-status');
    if (itemStatusSelect.length) {
      itemStatusSelect.wrap('<div class="position-relative"></div>');
      itemStatusSelect
        .select2({
          placeholder: 'Select Item Status',
          dropdownParent: itemStatusSelect.parent()
        })
        .on('change', function () {
          fv.revalidateField('itemStatus');
        });
    }

    const addIDNumberSelect = jQuery('#adduserid');
    addIDNumberSelect.wrap('<div class="position-relative"></div>');
    addIDNumberSelect.select2({
      placeholder: 'Select an ID Number',
      dropdownParent: addIDNumberSelect.parent(),
      ajax: {
        url: 'fetch-userids.php',
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

    const itemCategorySelect = $('#item-category');
    itemCategorySelect.wrap('<div class="position-relative"></div>');
    itemCategorySelect.select2({
      placeholder: 'Select a Category',
      dropdownParent: itemCategorySelect.parent(),
      ajax: {
        url: 'fetch-categories.php',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
          return {
            results: $.map(data, function (item) {
              return {
                id: item.Category_ID,
                text: item.Category_Name
              };
            })
          };
        },
        cache: true
      }
    });
    itemCategorySelect.on('change', function () {
      fv.revalidateField('itemCategory');
    });

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

    if (isRtl) {
      const typeaheadList = [].slice.call(document.querySelectorAll('.typeahead'));
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

    let formValidationLangTagify = new Tagify(formValidationLangEle);
    formValidationLangEle.addEventListener('change', function() {
      fv.revalidateField('formValidationLang');
    });

    formValidationHobbiesEle.on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
      fv.revalidateField('formValidationHobbies');
    });
  })();
});

// Custom validation for image upload limit
document.getElementById('itemImages').addEventListener('change', function() {
    const files = this.files;
    if (files.length > 3) {
        alert('You can upload up to 3 images only');
        this.value = ''; // Clear the input
    }
});
