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
      0: { title: 'Posted', class: 'bg-label-secondary' },
      1: { title: 'Claiming', class: 'bg-label-danger' },
      2: { title: 'Claimed', class: 'bg-label-success' },
      3: { title: 'Returning', class: 'bg-label-warning' },
      4: { title: 'Returned', class: 'bg-label-info' },
      5: { title: 'Retrieving', class: 'bg-label-warning' },
      6: { title: 'Retrieved', class: 'bg-label-info' }
    },
    typeObj = {
      0: { title: 'Lost', class: 'bg-label-danger' },
      1: { title: 'Found', class: 'bg-label-success' }
    },
    categoryObj = {
      1: { title: 'Electronics' },
      10: { title: 'Musical Instruments' },
      11: { title: 'Toys' },
      12: { title: 'Documents' },
      13: { title: 'Cameras' },
      14: { title: 'Wallets' },
      15: { title: 'Headphones' },
      16: { title: 'School Supplies' },
      17: { title: 'Miscellaneous' },
      2: { title: 'Clothing' },
      3: { title: 'Books' },
      4: { title: 'Keys' },
      5: { title: 'Bags' },
      6: { title: 'Water Bottles' },
      7: { title: 'Glasses' },
      8: { title: 'Umbrellas' },
      9: { title: 'Sports Equipment' }
    };

// E-commerce Products datatable
if (dt_product_table.length) {
  var dt_products = dt_product_table.DataTable({
    ajax: assetsPath + 'json/item-list.json', // JSON file to add data
    columns: [
      // columns according to JSON
      { data: 'Item_ID' },
      { data: 'Item_Name' },
      { data: 'Type' },
      { data: 'Category_ID' },
      { data: 'Poster_ID' },
      { data: 'Posted_Date' },
      { data: 'Current_Location' },
      { data: 'Item_Status' },
      { data: 'Pin_Location' }, // Added as a ghost column
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
    var $name = full['Item_Name'],
        $id = full['Item_ID'],
        $description = full['Description'],
        $images = full['Image'].split(','); // Split the images string into an array

    // Truncate description to 25 characters
    if ($description.length > 25) {
      $description = $description.substring(0, 25) + '...';
    }

    var $output;
    var imageAvailable = $images.length > 0 && $images[0].trim() !== '';

    if (imageAvailable) {
      var imageUrl = assetsPath + 'uploads/items/' + $images[0].trim();
      // Use only the first image
      $output = '<img src="' + imageUrl + '" alt="Product Image" class="rounded-2" onerror="this.onerror=null;this.src=\'\';handleImageError(this,\'' + $name + '\');">';
    } else {
      // For Product badge if there are no images
      $output = generateBadge($name);
    }

    // Function to generate badge
    function generateBadge(name) {
      var stateNum = Math.floor(Math.random() * 6);
      var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
      var $state = states[stateNum];
      var $initials = (name.match(/\b\w/g) || []).join('').toUpperCase();
      return '<span class="avatar-initial rounded-2 bg-label-' + $state + '">' + $initials + '</span>';
    }

    // JavaScript function to handle image error
    window.handleImageError = function(img, name) {
      img.outerHTML = generateBadge(name);
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
      $description +
      '</small>' +
      '</div>' +
      '</div>';
    return $row_output;
  }
}

,
      {
        // item_type
        targets: 2,
        render: function (data, type, full, meta) {
          var $type = full['Type'];

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
          var $category = categoryObj[full['Category_ID']] ? categoryObj[full['Category_ID']].title : 'Unknown';
          var categoryBadgeObj = {
            Electronics: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-danger me-2 p-3"><i class="ti ti-device-mobile ti-xs"></i></span>',
            'Musical Instruments': '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-warning me-2 p-3"><i class="ti ti-music ti-xs"></i></span>',
            Toys: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-primary me-2 p-3"><i class="ti ti-horse-toy ti-xs"></i></span>',
            Documents: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-info me-2 p-3"><i class="ti ti-file ti-xs"></i></span>',
            Cameras: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-success me-2 p-3"><i class="ti ti-camera ti-xs"></i></span>',
            Wallets: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-secondary me-2 p-3"><i class="ti ti-wallet ti-xs"></i></span>',
            Headphones: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-dark me-2 p-3"><i class="ti ti-headphones ti-xs"></i></span>',
            'School Supplies': '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-info me-2 p-3"><i class="ti ti-book ti-xs"></i></span>',
            Miscellaneous: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-secondary me-2 p-3"><i class="ti ti-box ti-xs"></i></span>',
            Clothing: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-primary me-2 p-3"><i class="ti ti-shirt ti-xs"></i></span>',
            Books: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-success me-2 p-3"><i class="ti ti-book ti-xs"></i></span>',
            Keys: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-danger me-2 p-3"><i class="ti ti-key ti-xs"></i></span>',
            Bags: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-warning me-2 p-3"><i class="ti ti-briefcase ti-xs"></i></span>',
            'Water Bottles': '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-info me-2 p-3"><i class="ti ti-bottle ti-xs"></i></span>',
            Glasses: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-dark me-2 p-3"><i class="ti ti-eyeglass ti-xs"></i></span>',
            Umbrellas: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-secondary me-2 p-3"><i class="ti ti-umbrella ti-xs"></i></span>',
            'Sports Equipment': '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-primary me-2 p-3"><i class="ti ti-brand-dribbble ti-xs"></i></span>',
            Unknown: '<span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-secondary me-2 p-3"><i class="ti ti-question ti-xs"></i></span>'
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
        // Posted_Date
        targets: 5, // assuming this is the correct column index
        render: function (data, type, full, meta) {
          var $post_date = full['Posted_Date'];
          return '<h12 class="badge bg-label-secondary text-capitalize">' + $post_date + '</h12>';
        }
      },
      {
        // Item Status
        targets: 7,
        render: function (data, type, full, meta) {
          var $status = full['Item_Status'];

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
        // Pin_Location (ghost column)
        targets: 8,
        visible: false
      },
      
   {
        // Actions
        targets: -1,
        title: 'Actions',
        searchable: false,
        orderable: false,
        render: function(data, type, full, meta) {
          var itemData = {
            itemId: full['Item_ID'],
            itemName: full['Item_Name'],
            image: full['Image'],
            categoryName: full['Category_Name'],
            description: full['Description'],
            itemType: full['Type'],
            itemStatus: full['Item_Status'],
            pinLocation: full['Pin_Location'],
            postedDate: full['Posted_Date'],
            currentLocation: full['Current_Location'],
            retrievedBy: full['Retrieved_By'],
            retrievedDate: full['Retrieved_Date']
          };
          return (
            '<div class="d-inline-block text-nowrap">' +
            '<a href="form-edit-item.php?item_id=' + full['Item_ID'] + '"><i class="ti ti-edit ti-sm me-2"></i></a>' +
            '<a href="javascript:;" class="text-body delete-record" data-item-id="' + full['Item_ID'] + '"><i class="ti ti-trash ti-sm mx-2"></i></a>' +
            '<button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical me-2"></i></button>' +
            '<div class="dropdown-menu dropdown-menu-end m-0">' +
            '<a href="javascript:;" class="dropdown-item view-modal-trigger" ' +
              'data-item=\'' + JSON.stringify(itemData) + '\'>' +
              'View' +
            '</a>' +
            '</div>' +
            '</div>'
          );
        }
      }
    ],
    order: [5, 'desc'], //set any columns order asc/desc
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
              columns: [1, 2, 3, 4, 5, 6, 7, 8],
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
              columns: [1, 2, 3, 4, 5, 6, 7, 8],
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
              columns: [1, 2, 3, 4, 5, 6, 7, 8],
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
              columns: [1, 2, 3, 4, 5, 6, 7, 8],
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
              columns: [1, 2, 3, 4, 5, 6, 7, 8],
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
        text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Add New Item</span>',
        className: 'add-new btn btn-primary ms-2 ms-sm-0 waves-effect waves-light',
        attr: {
          'onclick': 'window.location.href="form-add-item.php"'
        }
      }
    ],
    // For responsive popup
    responsive: {
      details: {
        display: $.fn.dataTable.Responsive.display.modal({
          header: function (row) {
            var data = row.data();
            return 'Details of ' + data['Item_Name'];
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
  var api = this.api();

  // Adding status filter once table initialized
  api.columns(-3).every(function () {
    var column = this;
    var select = $('<select id="itemStatus" class="form-select text-capitalize"><option value="">Status</option></select>')
      .appendTo('.item_status')
      .on('change', function () {
        var val = $.fn.dataTable.util.escapeRegex($(this).val());
        column.search(val ? '^' + val + '$' : '', true, false).draw();
      });

    column.data().unique().sort().each(function (d, j) {
      select.append('<option value="' + statusObj[d].title + '">' + statusObj[d].title + '</option>');
    });

    // Initialize Select2 on the new select element
    $('#itemStatus').select2({
      placeholder: 'Select a status',
      allowClear: true,
      width: 'resolve'
    });
  });

  // Adding category filter once table initialized
  api.columns(3).every(function () {
    var column = this;
    var select = $('<select id="itemCategory" class="form-select text-capitalize"><option value="">Category</option></select>')
      .appendTo('.item_category')
      .on('change', function () {
        var val = $.fn.dataTable.util.escapeRegex($(this).val());
        column.search(val ? '^' + val + '$' : '', true, false).draw();
      });

    column.data().unique().sort().each(function (d, j) {
      select.append('<option value="' + categoryObj[d].title + '">' + categoryObj[d].title + '</option>');
    });

    // Initialize Select2 on the new select element
    $('#itemCategory').select2({
      placeholder: 'Select a category',
      allowClear: true,
      width: 'resolve'
    });
  });

  // Adding stock filter once table initialized
  api.columns(2).every(function () {
    var column = this;
    var select = $('<select id="itemType" class="form-select text-capitalize"><option value="">Type</option></select>')
      .appendTo('.item_type')
      .on('change', function () {
        var val = $.fn.dataTable.util.escapeRegex($(this).val());
        column.search(val ? '^' + val + '$' : '', true, false).draw();
      });

    column.data().unique().sort().each(function (d, j) {
      select.append('<option value="' + typeObj[d].title + '">' + typeObj[d].title + '</option>');
    });

    // Initialize Select2 on the new select element
    $('#itemType').select2({
      placeholder: 'Select a type',
      allowClear: true,
      width: 'resolve'
    });
  });

  // Adding current location filter once table initialized
  api.columns(6).every(function () {
    var column = this;
    var select = $('<select id="currentLocation" class="form-select text-capitalize"><option value="">Current Location</option></select>')
      .appendTo('.item_currentLocation')
      .on('change', function () {
        var val = $.fn.dataTable.util.escapeRegex($(this).val());
        column.search(val ? '^' + val + '$' : '', true, false).draw();
      });

    column.data().unique().sort().each(function (d, j) {
      select.append('<option value="' + d + '">' + d + '</option>');
    });

    // Initialize Select2 on the new select element
    $('#currentLocation').select2({
      placeholder: 'Select a location',
      allowClear: true,
      width: 'resolve'
    });
  });

  // Adding posted date filter with date range once table initialized
  api.columns(5).every(function () {
    var column = this;
    var input = $('<input type="text" id="postedDate" class="form-control flatpickr-range" placeholder="Posted Date Range"/>')
      .appendTo('.item_postedDate');

    $('.flatpickr-range').flatpickr({
      mode: 'range',
      dateFormat: 'Y-m-d',
      onClose: function (selectedDates, dateStr, instance) {
        if (selectedDates.length === 2) {
          startDate = moment(selectedDates[0]).startOf('day');
          endDate = moment(selectedDates[1]).endOf('day');
        } else if (selectedDates.length === 1) {
          startDate = moment(selectedDates[0]).startOf('day');
          endDate = moment(selectedDates[0]).endOf('day');
        }

        api.draw();
      }
    });
  });

  var startDate, endDate;

  $.fn.dataTable.ext.search.push(
    function (settings, data, dataIndex) {
      if (startDate && endDate) {
        var postedDate = moment(data[5], 'YYYY-MM-DD').startOf('day');
        return postedDate.isSameOrAfter(startDate) && postedDate.isSameOrBefore(endDate);
      }
      return true;
    }
  );

// Adding pin location filter as a search input once table initialized
// Adding pin location filter as a search input once table initialized
api.columns(8).every(function () {
  var column = this;
  var locations = new Set();
  var pattern = /^[A-Za-z0-9]{4}\+[A-Za-z0-9]{3}$/;

  // Preprocess the data to extract general locations
  column.data().each(function (d, j) {
    var match = d.match(pattern);
    if (match) {
      // If it matches the specific pattern, use the entire value
      locations.add(d);
    } else {
      // Otherwise, extract the general location part
      var generalLocation = d.split(", ").slice(1).join(", ");
      locations.add(generalLocation);
    }
  });

  // Create the select element
  var select = $('<select id="pinLocation" class="form-select text-capitalize"><option value="">Pin Location</option></select>')
    .appendTo('.item_pinLocation')
    .on('change', function () {
      var val = $.fn.dataTable.util.escapeRegex($(this).val());
      column.search(val ? val : '', true, false).draw();
    });

  // Populate the select element with the locations
  locations.forEach(function (value) {
    select.append('<option value="' + value + '">' + value + '</option>');
  });

  // Initialize Select2 on the new select element
  $('#pinLocation').select2({
    placeholder: 'Select a pin location',
    allowClear: true,
    width: 'resolve'
  });
});



  // Function to populate filter from set
  function populateFilterFromSet(set, filterId, filterTitle, className) {
    var select = $('<select id="' + filterId + '" class="form-select text-capitalize"><option value="">' + filterTitle + '</option></select>')
      .appendTo(className)
      .on('change', function () {
        var val = $.fn.dataTable.util.escapeRegex($(this).val());
        api.column($(this).parent().index() + 1).search(val ? '^' + val + '$' : '', true, false).draw();
      });

    set.forEach(function (value) {
      select.append('<option value="' + value + '">' + value + '</option>');
    });

    // Initialize Select2 on the new select element
    $('#' + filterId).select2({
      placeholder: 'Select ' + filterTitle.toLowerCase(),
      allowClear: true,
      width: 'resolve'
    });
  }
}



  });
  $('.dataTables_length').addClass('mt-2 mt-sm-0 mt-md-3 me-2');
  $('.dt-buttons').addClass('d-flex flex-wrap');
}

  // Delete Record
  $('.datatables-products tbody').on('click', '.delete-record', function () {
    var itemId = $(this).data('item-id');
    $('#itemToDelete').text(itemId);
    $('#deleteModal').modal('show');

    $('#confirmDeleteBtn').off('click').on('click', function () {
      $.ajax({
        url: 'delete-item.php?id=' + itemId,
        type: 'GET',
        success: function (response) {
          if (response.includes('success')) {
            // Close the modal
            $('#deleteModal').modal('hide');
            // Optionally, you can reload or update your datatable here
            location.reload();
          } else {
            alert('Failed to delete item.');
          }
          console.log(response);
          $('#deleteModal .modal-body').append('<p>' + response + '</p>');
        },
        error: function (xhr, status, error) {
          console.error('AJAX Error:', status, error);
          console.error('Response:', xhr.responseText);
          alert('Failed to delete item.');
        }
      });
    });
  });
  

  // Filter form control to default size
  setTimeout(() => {
    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .form-select').removeClass('form-select-sm');
  }, 300);
});
