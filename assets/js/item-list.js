/**
 * app-ecommerce-product-list
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
  var dt_product_table = $('.datatables-products'), 
    statusObj = {
      0: { title: 'Posted', class: 'bg-label-primary' },
  1: { title: 'Claiming', class: 'bg-label-info' },
  2: { title: 'Claimed', class: 'bg-label-success' },
  3: { title: 'Returning', class: 'bg-label-warning' },
  4: { title: 'Returned', class: 'bg-label-danger' }

    },
    typeObj = {
      0: { title: 'Lost', class: 'bg-label-danger' },
  1: { title: 'Found', class: 'bg-label-info' }, 

    },
    categoryObj = {
      0: { title: 'Household' },
      1: { title: 'Office' },
      2: { title: 'Electronics' },
      3: { title: 'Shoes' },
      4: { title: 'Accessories' },
      5: { title: 'Game' }
    }  ;

  // E-commerce Products datatable

  if (dt_product_table.length) {
    var dt_products = dt_product_table.DataTable({
      ajax: assetsPath + 'json/item-list-admin.json', // JSON file to add data
      columns: [
        // columns according to JSON
        { data: 'id' },
        { data: 'item_name' },
        { data: 'item_type' },
        { data: 'category' },
        { data: 'current_location' },
        { data: 'post_date' },
        { data: 'item_status' },
        { data: '' }
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
          // Product name and product_brand
          targets: 1,
          responsivePriority: 1,
          render: function (data, type, full, meta) {
            var $name = full['item_name'],
              $id = full['id'],
              $item_type = full['description'],
              $image = full['image'];
            if ($image) {
              // For Product image
  
              var $output =
                '<img src="' +
                assetsPath +
                'img/items-images/' +
                $image +
                '" alt="Product-' +
                $id +
                '" class="rounded-2">';
            } else {
              // For Product badge
              var stateNum = Math.floor(Math.random() * 6);
              var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
              var $state = states[stateNum],
                $name = full['description'],
                $initials = $name.match(/\b\w/g) || [];
              $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
              $output = '<span class="avatar-initial rounded-2 bg-label-' + $state + '">' + $initials + '</span>';
            }
            // Creates full output for Product name and product_brand
            var $row_output =
              '<div class="d-flex justify-content-start align-items-center product-name">' +
              '<div class="avatar-wrapper">' +
              '<div class="avatar avatar me-2 rounded-2 bg-label-secondary">' +
              $output +
              '</div>' +
              '</div>' +
              '<div class="d-flex flex-column">' +
              '<h6 class="text-body text-nowrap mb-0">' +
              $name +
              '</h6>' +
              '<small class="text-muted text-truncate d-none d-sm-block">' +
              $item_type +
              '</small>' +
              '</div>' +
              '</div>';
            return $row_output;
          }
        },
        
        {
          // item_type
          targets: 2,
          render: function (data, type, full, meta) {
            var $type = full['item_type'];
  
            return (
              '<span class="badge ' +
              typeObj[$type].class +
              '" text-capitalized>' +
              typeObj[$type].title +
              '</span>'
            );
          }
        }, 
        {
          // Category
          targets: 3,
          responsivePriority: 5,
          render: function (data, type, full, meta) {
            var $category = categoryObj[full['category']] ? categoryObj[full['category']].title : 'Unknown';
            var categoryBadgeObj = {
              Household:
                '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-warning me-2 p-3"><i class="ti ti-home-2 ti-xs"></i></span>',
              Office:
                '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-info me-2 p-3"><i class="ti ti-briefcase ti-xs"></i></span>',
              Electronics:
                '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-danger me-2 p-3"><i class="ti ti-device-mobile ti-xs"></i></span>',
              Shoes:
                '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-success me-2"><i class="ti ti-shoe ti-xs"></i></span>',
              Accessories:
                '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-secondary me-2"><i class="ti ti-device-watch ti-xs"></i></span>',
              Game: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-primary me-2"><i class="ti ti-device-gamepad-2 ti-xs"></i></span>'
            };
            return (
              "<span class='text-truncate d-flex align-items-center'>" +
              categoryBadgeObj[$category] +
              $category +
              '</span>'
            );
          }
        },
        {
          // post_date
          targets: 5, // assuming this is the correct column index
          render: function (data, type, full, meta) {
            var $post_date = full['post_date'];
            return '<h12 class="badge bg-label-secondary text-capitalize">' + $post_date + '</h12>';
          }
        },
        {
          // Item Status
          targets: -2,
          render: function (data, type, full, meta) {
            var $status = full['item_status'];
  
            return (
              '<span class="badge ' +
              statusObj[$status].class +
              '" text-capitalized>' +
              statusObj[$status].title +
              '</span>'
            );
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
              '<div class="d-inline-block text-nowrap">' +
              '<button class="btn btn-sm btn-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEditItem"><i class="ti ti-edit"></i></button>' +
              '<button class="btn btn-sm btn-icon delete-record"><i class="ti ti-trash"></i></button>' +
              '<button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical me-2"></i></button>' +
              '<div class="dropdown-menu dropdown-menu-end m-0">' +
              '<a href="javascript:0;" class="dropdown-item">View</a>' +
              '<a href="javascript:0;" class="dropdown-item">Suspend</a>' +
              '</div>' +
              '</div>'
            );
          }
        }
      ],
 
  
      order: [2, 'asc'], //set any columns order asc/desc
      dom:
        '<"card-header d-flex border-top rounded-0 flex-wrap py-2"' +
        '<"me-5 ms-n2 pe-5"f>' +
        '<"d-flex justify-content-start justify-content-md-end align-items-baseline"<"dt-action-buttons d-flex flex-column align-items-start align-items-md-center justify-content-sm-center mb-3 mb-md-0 pt-0 gap-4 gap-sm-0 flex-sm-row"lB>>' +
        '>t' +
        '<"row mx-2"' +
        '<"col-sm-12 col-md-6"i>' +
        '<"col-sm-12 col-md-6"p>' +
        '>',
      lengthMenu: [7, 10, 20, 50, 70, 100], //for length of menu
      language: {
        sLengthMenu: '_MENU_',
        search: '',
        searchPlaceholder: 'Search Product',
        info: 'Displaying _START_ to _END_ of _TOTAL_ entries'
      },
      // Buttons with Dropdown
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-label-secondary dropdown-toggle me-3 waves-effect waves-light',
          text: '<i class="ti ti-download me-1 ti-xs"></i>Export',
          buttons: [
            {
              extend: 'print',
              text: '<i class="ti ti-printer me-2" ></i>Print',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5, 6, 7],
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('product-name')) {
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
                // Customize print view for dark
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
              text: '<i class="ti ti-file me-2" ></i>Csv',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5, 6, 7],
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('product-name')) {
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
              text: '<i class="ti ti-file-export me-2"></i>Excel',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5, 6, 7],
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('product-name')) {
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
              text: '<i class="ti ti-file-text me-2"></i>Pdf',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5, 6, 7],
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('product-name')) {
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
              text: '<i class="ti ti-copy me-2"></i>Copy',
              className: 'dropdown-item',
              exportOptions: {
                columns: [1, 2, 3, 4, 5, 6, 7],
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('product-name')) {
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
          text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Add Product</span>',
          className: 'add-new btn btn-primary ms-2 ms-sm-0 waves-effect waves-light',
          attr: {
            'data-bs-toggle': 'offcanvas',
            'data-bs-target': '#offcanvasAddItem'
          }
        }
      ],
      // For responsive popup
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['item_name'];
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
        // Adding status filter once table initialized
        this.api()
          .columns(-2)
          .every(function () {
            var column = this;
            var select = $(
              '<select id="ProductStatus" class="form-select text-capitalize"><option value="">Status</option></select>'
            )
              .appendTo('.product_status')
              .on('change', function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                column.search(val ? '^' + val + '$' : '', true, false).draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append('<option value="' + statusObj[d].title + '">' + statusObj[d].title + '</option>');
              });
          });
        // Adding category filter once table initialized
        this.api()
          .columns(3)
          .every(function () {
            var column = this;
            var select = $(
              '<select id="ProductCategory" class="form-select text-capitalize"><option value="">Category</option></select>'
            )
              .appendTo('.product_category')
              .on('change', function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                column.search(val ? '^' + val + '$' : '', true, false).draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append('<option value="' + categoryObj[d].title + '">' + categoryObj[d].title + '</option>');
              });
          });
        // Adding stock filter once table initialized
        this.api()
          .columns(2)
          .every(function () {
            var column = this;
            var select = $(
              '<select id="ProductStock" class="form-select text-capitalize"><option value=""> Type </option></select>'
            )
              .appendTo('.product_stock')
              .on('change', function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                column.search(val ? '^' + val + '$' : '', true, false).draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append('<option value="' + typeObj[d].title + '">' + typeObj[d].title + '</option>');
              });
          });
      }
    });
    $('.dataTables_length').addClass('mt-2 mt-sm-0 mt-md-3 me-2');
    $('.dt-buttons').addClass('d-flex flex-wrap');
  }

  // Delete Record
  $('.datatables-products tbody').on('click', '.delete-record', function () {
    dt_products.row($(this).parents('tr')).remove().draw();
  });

  // Filter form control to default size
  // ? setTimeout used for multilingual table initialization
  setTimeout(() => {
    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .form-select').removeClass('form-select-sm');
  }, 300);
});