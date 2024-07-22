'use strict';

(function () {
  // Init custom option check
  window.Helpers.initCustomOptionCheck();

  // Bootstrap validation example
  const flatPickrList = [].slice.call(document.querySelectorAll('.flatpickr-validation'));
  if (flatPickrList) {
    flatPickrList.forEach(flatPickr => {
      flatPickr.flatpickr({
        monthSelectorType: 'static'
      });
    });
  }

  const bsValidationForms = document.querySelectorAll('.needs-validation');
  Array.prototype.slice.call(bsValidationForms).forEach(function (form) {
    form.addEventListener(
      'submit',
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        } else {
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
    const fv = FormValidation.formValidation(document.getElementById('formValidationExamples'), {
      fields: {
        itemID: {
          validators: {
            notEmpty: {
              message: 'The item ID is required'
            }
          }
        },
        claimerID: {
          validators: {
            notEmpty: {
              message: 'The claimer ID is required'
            }
          }
        },
        claimStatus: {
          validators: {
            notEmpty: {
              message: 'The claim status is required'
            }
          }
        },
        verificationStatus: {
          validators: {
            notEmpty: {
              message: 'The verification status is required'
            }
          }
        },
        proof: {
          validators: {
            notEmpty: {
              message: 'The proof is required'
            }
          }
        },
        'proofImage[]': {
          validators: {
            notEmpty: {
              message: 'Uploading a proof image is required'
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
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          eleValidClass: '',
          rowSelector: function (field, ele) {
            switch (field) {
              case 'itemID':
              case 'claimerID':
              case 'claimStatus':
              case 'verificationStatus':
              case 'proof':
              case 'proofImage[]':
                return '.col-md-6, .col-md-12';
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
            location.assign('../.../admin/add-claim.php');
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

    const addItemIDSelect = jQuery('#item-id');
    addItemIDSelect.wrap('<div class="position-relative"></div>');

    // Preselect the existing item ID
    const existingItemID = addItemIDSelect.find('option:selected').val();

    addItemIDSelect.select2({
      placeholder: 'Select an Item ID',
      dropdownParent: addItemIDSelect.parent(),
      ajax: {
        url: 'fetch-itemids.php',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
          return {
            results: $.map(data, function (item) {
              return {
                id: item.Item_ID,
                text: item.Item_Name + ' (' + item.Type + ')',
                type: item.Type
              };
            })
          };
        },
        cache: true
      }
    });

    // If there's an existing item ID, set it as the selected value in Select2
    if (existingItemID) {
      $.ajax({
        url: 'fetch-itemids.php',
        dataType: 'json'
      }).then(function(data) {
        let item = data.find(function(item) {
          return item.Item_ID == existingItemID;
        });

        if (item) {
          // Create a new option element and append it to the select
          let option = new Option(item.Item_Name + ' (' + item.Type + ')', item.Item_ID, true, true);
          addItemIDSelect.append(option).trigger('change');

          // Optionally, manually trigger the 'select2:select' event
          addItemIDSelect.trigger({
            type: 'select2:select',
            params: {
              data: item
            }
          });
        }
      });
    }

    addItemIDSelect.on('change', function () {
      fv.revalidateField('itemID');

      const selectedOption = addItemIDSelect.select2('data')[0];
      const itemType = selectedOption.type;

      const claimStatusSelect = $('#claim-status');

      if (itemType === 'found') {
        claimStatusSelect.append(new Option('Claiming', 'Claiming'));
        claimStatusSelect.append(new Option('Claimed', 'Claimed'));
        claimStatusSelect.append(new Option('Returning', 'Returning'));
        claimStatusSelect.append(new Option('Returned', 'Returned'));
      } else if (itemType === 'lost') {
        claimStatusSelect.append(new Option('Claiming', 'Claiming'));
        claimStatusSelect.append(new Option('Claimed', 'Claimed'));
        claimStatusSelect.append(new Option('Retrieving', 'Retrieving'));
        claimStatusSelect.append(new Option('Retrieved', 'Retrieved'));
      }
    });

    const verificationStatusSelect = $('#verification-status');
    if (verificationStatusSelect.length) {
      verificationStatusSelect.wrap('<div class="position-relative"></div>');
      verificationStatusSelect
        .select2({
          placeholder: 'Select Verification Status',
          dropdownParent: verificationStatusSelect.parent()
        })
        .on('change', function () {
          fv.revalidateField('verificationStatus');
        });
    }

    const claimStatusSelect = $('#claim-status');
    if (claimStatusSelect.length) {
      claimStatusSelect.wrap('<div class="position-relative"></div>');
      claimStatusSelect
        .select2({
          placeholder: 'Select Verification Status',
          dropdownParent: claimStatusSelect.parent()
        })
        .on('change', function () {
          fv.revalidateField('claimStatus');
        });
    }

     const claimAgainSelect = $('#claim-again');
    if (claimAgainSelect.length) {
      claimAgainSelect.wrap('<div class="position-relative"></div>');
      claimAgainSelect
        .select2({
          placeholder: 'Select',
          dropdownParent: claimAgainSelect.parent()
        })
        .on('change', function () {
          fv.revalidateField('claimAgain');
        });
    }

    const addIDNumberSelect = jQuery('#claimer-id');
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
    addIDNumberSelect.on('change', function () {
      fv.revalidateField('claimerID');
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
