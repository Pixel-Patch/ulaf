/**
 * Page User List
 */

'use strict';

// Datatable (jquery)
$(function () {
  let borderColor, bodyBg, headingColor;

  if (isDarkStyle) {
    borderColor = config.colors_dark.borderColor;
    bodyBg = config.colors_dark.bodyBg;
    headingColor = config.colors_dark.headingColor;
  } else {
    borderColor = config.colors.borderColor;
    bodyBg = config.colors.bodyBg;
    headingColor = config.colors.headingColor;
  }

  // Variable declaration for table
  var dt_user_table = $('.datatables-users'),
    select2 = $('.select2'),
    userView = 'app-user-view-account.php',
    statusObj = {
      1: { title: 'Pending', class: 'bg-label-warning' },
      2: { title: 'Active', class: 'bg-label-success' },
      3: { title: 'Inactive', class: 'bg-label-secondary' }
    };

  if (select2.length) {
    var $this = select2;
    $this.wrap('<div class="position-relative"></div>').select2({
      placeholder: 'Select User Type',
      dropdownParent: $this.parent()
    });
  }

  // Users datatable
if (dt_user_table.length) {
  var dt_user = dt_user_table.DataTable({
    ajax: assetsPath + 'json/user-end-list.json',// JSON file to add data''
    columns: [
      // columns according to JSON
      { data: '' },
      { data: 'fullname' },
      { data: 'user_type' },
      { data: 'user_id' },
      { data: 'course' },
      { data: 'contact' },
      { data: 'action' }
    ],
    columnDefs: [
      {
        // For Responsive
        className: 'control',
        searchable: false,
        orderable: false,
        responsivePriority: 2,
        targets: 0,
        render: function (data, type, full, meta) {
          return '';
        }
      },
      {
        // User full name and email
        targets: 1,
        responsivePriority: 4,
        render: function (data, type, full, meta) {
          var $name = full['fullname'],
            $email = full['email'],
            $image = full['avatar_image'];
          if ($image) {
            // For Avatar image
            var $output =
              '<img src="' + assetsPath + 'uploads/avatars/' + $image + '" alt="Avatar" class="rounded-circle">';
          } else {
            // For Avatar badge
            var stateNum = Math.floor(Math.random() * 6);
            var states = ['success', 'danger', 'warning', 'info', 'primary', 'secondary'];
            var $state = states[stateNum],
              $name = full['fullname'],
              $initials = $name.match(/\b\w/g) || [];
            $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
            $output = '<span class="avatar-initial rounded-circle bg-label-' + $state + '">' + $initials + '</span>';
          }
          // Creates full output for row
          var $row_output =
            '<div class="d-flex justify-content-start align-items-center user-name">' +
            '<div class="avatar-wrapper">' +
            '<div class="avatar me-3">' +
            $output +
            '</div>' +
            '</div>' +
            '<div class="d-flex flex-column">' +
            '<a href="' +
            userView +
            '" class="text-body text-truncate"><span class="fw-medium">' +
            $name +
            '</span></a>' +
            '<small class="text-muted">' +
            $email +
            '</small>' +
            '</div>' +
            '</div>';
          return $row_output;
        }
      },
      {
        // User Type
        targets: 2,
        render: function (data, type, full, meta) {
          var $userType = full['user_type'];
          var userTypeBadgeObj = {
            Student:
              '<span class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2"><i class="ti ti-user ti-sm"></i></span>',
            Faculty:
              '<span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2"><i class="ti ti-circle-check ti-sm"></i></span>',
            Staff:
              '<span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2"><i class="ti ti-chart-pie-2 ti-sm"></i></span>'
          };
          return "<span class='text-truncate d-flex align-items-center'>" + userTypeBadgeObj[$userType] + $userType + '</span>';
        }
      },
      {
        // User ID
        targets: 3,
        render: function (data, type, full, meta) {
          var $userID = full['user_id'];
          return '<span class="fw-medium">' + $userID + '</span>';
        }
      },
      {
        // Course
        targets: 4,
        render: function (data, type, full, meta) {
          var $course = full['course'];
          return '<span class="fw-medium">' + $course + '</span>';
        }
      },
      {
        // Contact
        targets: 5,
        render: function (data, type, full, meta) {
          var $contact = full['contact'];
          return '<span class="fw-medium">' + $contact + '</span>';
        }
      },
      {
        // Actions
        targets: -1,
        title: 'Actions',
        searchable: false,
        orderable: false,
        render: function (data, type, full, meta) {
          return (
            '<div class="d-flex align-items-center">' +
<<<<<<< Updated upstream
            '<a href="javascript:;" class="text-body" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEditUser"><i class="ti ti-edit ti-sm me-2"></i></a>' +
=======
            '<a href="form-edit-user.php?id=123"><i class="ti ti-edit ti-sm me-2"></i></a>'
 +
>>>>>>> Stashed changes
            '<a href="javascript:;" class="text-body delete-record"><i class="ti ti-trash ti-sm mx-2"></i></a>' +
            '<a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-sm mx-1"></i></a>' +
            '<div class="dropdown-menu dropdown-menu-end m-0">' +
            '<a href="' +
            userView +
            '" class="dropdown-item">View</a>' +
            '<a href="javascript:;" class="dropdown-item">Suspend</a>' +
            '</div>' +
            '</div>'
          );
        }
      }
    ],
    order: [[1, 'desc']],
    dom:
      '<"row me-2"' +
      '<"col-md-2"<"me-3"l>>' +
      '<"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>' +
      '>t' +
      '<"row mx-2"' +
      '<"col-sm-12 col-md-6"i>' +
      '<"col-sm-12 col-md-6"p>' +
      '>',
    language: {
      sLengthMenu: '_MENU_',
      search: '',
      searchPlaceholder: 'Search..'
    },
      // Buttons with Dropdown
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-label-secondary dropdown-toggle mx-3 waves-effect waves-light',
          text: '<i class="ti ti-screen-share me-1 ti-xs"></i>Export',
          buttons: [
            {
              extend: 'print',
              text: '<i class="ti ti-printer me-2" ></i>Print',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                // prevent avatar to be print
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('user-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              },
              customize: function (win) {
                //customize print view for dark
                $(win.document.body)
                  .css('color', headingColor)
                  .css('border-color', borderColor)
                  .css('background-color', bodyBg);
                $(win.document.body)
                  .find('table')
                  .addClass('compact')
                  .css('color', 'inherit')
                  .css('border-color', 'inherit')
                  .css('background-color', 'inherit');
              }
            },
            {
              extend: 'csv',
              text: '<i class="ti ti-file-text me-2" ></i>Csv',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                // prevent avatar to be display
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('user-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              }
            },
            {
              extend: 'excel',
              text: '<i class="ti ti-file-spreadsheet me-2"></i>Excel',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                // prevent avatar to be display
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('user-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              }
            },
            {
              extend: 'pdf',
              text: '<i class="ti ti-file-code-2 me-2"></i>Pdf',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                // prevent avatar to be display
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('user-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              }
            },
            {
              extend: 'copy',
              text: '<i class="ti ti-copy me-2" ></i>Copy',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                // prevent avatar to be display
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('user-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              }
            }
          ]
        },
        {
          text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Add New User</span>',
          className: 'add-new btn btn-primary waves-effect waves-light',
          attr: {
<<<<<<< Updated upstream
            'data-bs-toggle': 'offcanvas',
            'data-bs-target': '#offcanvasAddUser'
=======
            'onclick': 'window.location.href="form-add-user.php"'
>>>>>>> Stashed changes
          }
        }
      ],
      // For responsive popup
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['fullname'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                    col.rowIndex +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/><tbody />').append(data) : false;
          }
        }
      },
      initComplete: function () {
        // Adding role filter once table initialized
        this.api()
          .columns(2)
          .every(function () {
            var column = this;
            var select = $(
              '<select id="UserRole" class="form-select text-capitalize"><option value=""> Select User Type</option></select>'
            )
              .appendTo('.user_role')
              .on('change', function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                column.search(val ? '^' + val + '$' : '', true, false).draw();
              });
            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append('<option value="' + d + '">' + d + '</option>');
              });
          });
        // Adding plan filter once table initialized
        this.api()
          .columns(4)
          .every(function () {
            var column = this;
            var select = $(
              '<select id="UserCourse" class="form-select text-capitalize"><option value=""> Select Course </option></select>'
            )
              .appendTo('.user_course')
              .on('change', function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                column.search(val ? '^' + val + '$' : '', true, false).draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append('<option value="' + d + '">' + d + '</option>');
              });
          });
        // Adding status filter once table initialized
        this.api()
          .columns(5)
          .every(function () {
            var column = this;
            var select = $(
              '<select id="FilterTransaction" class="form-select text-capitalize"><option value=""> Select Status </option></select>'
            )
              .appendTo('.user_status')
              .on('change', function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                column.search(val ? '^' + val + '$' : '', true, false).draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append(
                  '<option value="' +
                    statusObj[d].title +
                    '" class="text-capitalize">' +
                    statusObj[d].title +
                    '</option>'
                );
              });
          });
      }
    });
  }

  // Delete Record
  $('.datatables-users tbody').on('click', '.delete-record', function () {
    dt_user.row($(this).parents('tr')).remove().draw();
  });

  // Filter form control to default size
  // ? setTimeout used for multilingual table initialization
  setTimeout(() => {
    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .form-select').removeClass('form-select-sm');
  }, 300);
});


(function () {
  const phoneMaskList = document.querySelectorAll('.phone-mask');

  // Phone Number
  if (phoneMaskList) {
    phoneMaskList.forEach(function (phoneMask) {
      new Cleave(phoneMask, {
        phone: true,
        phoneRegionCode: 'US'
      });
    });
  }

  // Function to handle form validation
  const handleFormValidation = (formId) => {
    const form = document.getElementById(formId);

    const fv = FormValidation.formValidation(form, {
      fields: {
        userID: {
          validators: {
            notEmpty: {
              message: 'Please enter a ID Number'
            }
          }
        },
        username: {
          validators: {
            notEmpty: {
              message: 'Please enter a username'
            }
          }
        },
        userFullname: {
          validators: {
            notEmpty: {
              message: 'Please enter your full name'
            }
          }
        },
        password: {
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
                return document.getElementById('add-user-password').value;
              },
              message: 'Passwords do not match'
            }
          }
        },
        userEmail: {
          validators: {
            notEmpty: {
              message: 'Please enter your email'
            },
            emailAddress: {
              message: 'The value is not a valid email address'
            }
          }
        },
        userType: {
          validators: {
            notEmpty: {
              message: 'Please select a user role'
            }
          }
        },
        clsuIdImage: {
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
        clsuAddress: {
          validators: {
            notEmpty: {
              message: 'Please enter a CLSU address'
            }
          }
        },
        avatarImage: {
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
        homeAddress: {
          validators: {
            notEmpty: {
              message: 'Please enter a home address'
            }
          }
        },
        socialLinks: {
          validators: {
            notEmpty: {
              message: 'Please enter social links'
            },
            regexp: {
              regexp: /^((https?:\/\/)?([\w]+\.)+[\w]{2,})(\/[\w-]*)*\/?([\w-.\/?%&=]*)?((#[\w-]*)?)?(,((https?:\/\/)?([\w]+\.)+[\w]{2,})(\/[\w-]*)*\/?([\w-.\/?%&=]*)?((#[\w-]*)?)?)*$/,
              message: 'Please enter valid URLs separated by commas'
            }
          }
        },
        userContact: {
          validators: {
            notEmpty: {
              message: 'Please enter a contact number'
            },
            phone: {
              country: 'US',
              message: 'The value is not a valid phone number'
            }
          }
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          eleValidClass: '',
          rowSelector: function (field, ele) {
            return '.col-sm-6, .col-sm-12';
          }
        }),
        submitButton: new FormValidation.plugins.SubmitButton(),
        autoFocus: new FormValidation.plugins.AutoFocus()
      }
    });
  };

  // Call the function for addNewUserForm
  handleFormValidation('addNewUserForm');

  // Call the function for editUserForm
  handleFormValidation('editUserForm');
})();
