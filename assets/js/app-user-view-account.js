/**
 * App User View - Account (jquery)
 */

$(function () {
  'use strict';

  // Variable declaration for table
  var dt_project_table = $('.datatable-project'),
   dt_claims_table = $('.datatable-claims'),
    dt_myclaims_table = $('.datatable-myclaims'),
   statusObj = {
      0: { title: 'Posted', class: 'bg-label-secondary' },
      1: { title: 'Claiming', class: 'bg-label-danger' },
      2: { title: 'Claimed', class: 'bg-label-success' },
      3: { title: 'Returning', class: 'bg-label-warning' },
      4: { title: 'Returned', class: 'bg-label-info' },
      5: { title: 'Retrieving', class: 'bg-label-warning' },
      6: { title: 'Retrieved', class: 'bg-label-info' }
    },
     verifyObj = {
      0: { title: 'Pending', class: 'bg-label-secondary' },
      1: { title: 'Declined', class: 'bg-label-warning' },
      2: { title: 'Approved', class: 'bg-label-success' }
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

 // Project datatable
// --------------------------------------------------------------------
if (dt_project_table.length) {
  var dt_project = dt_project_table.DataTable({
    ajax: assetsPath + 'json/user-item-list.json', // JSON file to add data
    columns: [
      // columns according to JSON
      { data: 'Type' },
      { data: 'Item_Name' },
      { data: 'Category_ID' },
      { data: 'Item_Status' },
      { data: 'Type' }
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
  responsivePriority: 1,
  render: function (data, type, full, meta) {
    var $name = full['Item_Name'],
      $framework = full['Description'],
      $images = full['Image'] ? full['Image'].split(',') : [];

      // Truncate item name to 15 characters with "..." for extras
    if ($name.length > 15) {
      $name = $name.substring(0, 15) + '...';
    }

    // Truncate description to 15 characters with "..." for extras
    if ($framework.length > 15) {
      $framework = $framework.substring(0, 15) + '...';
    }

    var $output = '';
    if ($images.length > 0) {
      // For multiple avatar images
      $images.forEach(function($image) {
        $output +=
          '<img src="' +
          assetsPath +
          'uploads/items/' +
          $image.trim() +
          '" alt="Project Image" class="rounded-circle me-1">';
      });
    } else {
      // For Avatar badge
      var stateNum = Math.floor(Math.random() * 6) + 1;
      var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
      var $state = states[stateNum],
        $name = full['full_name'],
        $initials = $name.match(/\b\w/g) || [];
      $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
      $output = '<span class="avatar-initial rounded-circle bg-label-' + $state + '">' + $initials + '</span>';
    }

    // Creates full output for row
    var $row_output =
      '<div class="d-flex justify-content-left align-items-center">' +
      '<div class="avatar-wrapper">' +
      '<div class="avatar avatar-sm me-3">' +
      $output +
      '</div>' +
      '</div>' +
      '<div class="d-flex flex-column">' +
      '<span class="text-truncate fw-medium">' +
      $name +
      '</span>' +
      '<small class="text-muted">' +
      $framework +
      '</small>' +
      '</div>' +
      '</div>';
    return $row_output;
  }
}
,
      {
        // Category
        targets: 2,
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
        // item_type
        targets: 3,
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
        // Item Status
        targets: 4,
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
        // Actions
        targets: 5,
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
    order: [[1, 'desc']],
    dom:
      '<"d-flex justify-content-between align-items-center flex-column flex-sm-row mx-4 row"' +
      '<"col-sm-4 col-12 d-flex align-items-center justify-content-sm-start justify-content-center"l>' +
      '<"col-sm-8 col-12 d-flex align-items-center justify-content-sm-end justify-content-center"f>' +
      '>t' +
      '<"d-flex justify-content-between mx-4 row"' +
      '<"col-sm-12 col-md-6"i>' +
      '<"col-sm-12 col-md-6"p>' +
      '>',
    displayLength: 7,
    lengthMenu: [7, 10, 25, 50, 75, 100],
    language: {
      sLengthMenu: 'Show _MENU_',
      searchPlaceholder: 'Search Project'
    },
    // For responsive popup
    responsive: {
      details: {
        display: $.fn.dataTable.Responsive.display.modal({
          header: function (row) {
            var data = row.data();
            return 'Details of ' + data['full_name'];
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
    }
  });
}

 // Delete Record project table
    $('.datatable-project tbody').on('click', '.delete-record', function () {
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
  
// Claims datatable
if (dt_claims_table.length) {
  var dt_claims = dt_claims_table.DataTable({
    ajax: assetsPath + 'json/user-item-claims.json', // JSON file to add data
    columns: [
      // columns according to JSON
      { data: 'Type' },
      { data: 'Item_Name' },
      { data: 'Category_ID' },
      { data: 'Verification_Status' },
      { data: 'Type' }
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
        responsivePriority: 1,
        render: function (data, type, full, meta) {
          var $name = full['Item_Name'],
            $framework = full['Proof'],
            $images = full['Image'] ? full['Image'].split(',') : [];

            // Truncate item name to 15 characters with "..." for extras
    if ($name.length > 15) {
      $name = $name.substring(0, 15) + '...';
    }

          // Truncate proof to 15 characters with "..." for extras
          if ($framework.length > 15) {
            $framework = $framework.substring(0, 15) + '...';
          }

          var $output = '';
          if ($images.length > 0) {
            // For multiple avatar images
            $images.forEach(function($image) {
              $output +=
                '<img src="' +
                assetsPath +
                'uploads/items/' +
                $image.trim() +
                '" alt="Project Image" class="rounded-circle me-1">';
            });
          } else {
            // For Avatar badge
            var stateNum = Math.floor(Math.random() * 6) + 1;
            var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
            var $state = states[stateNum],
              $name = full['full_name'],
              $initials = $name.match(/\b\w/g) || [];
            $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
            $output = '<span class="avatar-initial rounded-circle bg-label-' + $state + '">' + $initials + '</span>';
          }

          // Creates full output for row
          var $row_output =
            '<div class="d-flex justify-content-left align-items-center">' +
            '<div class="avatar-wrapper">' +
            '<div class="avatar avatar-sm me-3">' +
            $output +
            '</div>' +
            '</div>' +
            '<div class="d-flex flex-column">' +
            '<span class="text-truncate fw-medium">' +
            $name +
            '</span>' +
            '<small class="text-muted">' +
            $framework +
            '</small>' +
            '</div>' +
            '</div>';
          return $row_output;
        }
      },
      {
        // Category
        targets: 2,
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
        // item_type
        targets: 3,
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
        // Verification Status
        targets: 4,
        render: function (data, type, full, meta) {
          var $status = full['Verification_Status'];

          return (
            '<span class="badge ' +
            verifyObj[$status].class +
            '" text-capitalized>' +
            verifyObj[$status].title +
            '</span>'
          );
        }
      },
      {
        // Actions
        targets: 5,
        title: 'Actions',
        searchable: false,
        orderable: false,
        render: function (data, type, full, meta) {
          var claimData = {
            claimId: full['Claim_ID'],
            itemId: full['Item_ID'],
            claimerId: full['Claimer_ID'],
            claimStatus: full['Claim_Status'],
            proof: full['Proof'],
            proofImage: full['Proof_Image'],
            returnedImage: full['Returned_Image'],
            remarksClaims: full['Remarks'],
            claimDate: full['Claim_Date'],
            verificationStatus: full['Verification_Status'],
            verificationDate: full['Verification_Date'],
            claimAgain: full['Claim_Again'],
            itemNameClaims: full['Item_Name'],
            itemImage: full['Image'],
            itemType: full['Type'],
            categoryId: full['Category_ID'],
            posterId: full['Poster_ID'],
            categoryNameClaims: full['Category_Name']
          };

          return (
            '<div class="d-inline-block text-nowrap">' +
            '<a href="form-edit-claim.php?claim_id=' + full['Claim_ID'] + '"><i class="ti ti-edit ti-sm me-2"></i></a>' +
            '<a href="javascript:;" class="text-body delete-record-claims" data-claim-id="' + full['Claim_ID'] + '"><i class="ti ti-trash ti-sm mx-2"></i></a>' +
            '<button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical me-2"></i></button>' +
            '<div class="dropdown-menu dropdown-menu-end m-0">' +
            '<a href="javascript:;" class="dropdown-item view-modal-trigger" ' +
              'data-claim=\'' + JSON.stringify(claimData) + '\'>' +
              'View' +
            '</a>' +
            '</div>' +
            '</div>'
          );
        }
      }
    ],
    order: [[1, 'desc']],
    dom:
      '<"d-flex justify-content-between align-items-center flex-column flex-sm-row mx-4 row"' +
      '<"col-sm-4 col-12 d-flex align-items-center justify-content-sm-start justify-content-center"l>' +
      '<"col-sm-8 col-12 d-flex align-items-center justify-content-sm-end justify-content-center"f>' +
      '>t' +
      '<"d-flex justify-content-between mx-4 row"' +
      '<"col-sm-12 col-md-6"i>' +
      '<"col-sm-12 col-md-6"p>' +
      '>',
    displayLength: 7,
    lengthMenu: [7, 10, 25, 50, 75, 100],
    language: {
      sLengthMenu: 'Show _MENU_',
      searchPlaceholder: 'Search Claims'
    },
    // For responsive popup
    responsive: {
      details: {
        display: $.fn.dataTable.Responsive.display.modal({
          header: function (row) {
            var data = row.data();
            return 'Details of ' + data['full_name'];
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
    }
  });
}

// Delete Record for claims table
$('.datatable-claims tbody').on('click', '.delete-record-claims', function () {
  var claimId = $(this).data('claim-id');
  $('#claimToDelete').text(claimId);
  $('#deleteClaimsModal').modal('show');

  $('#confirmDeleteClaimsBtn').off('click').on('click', function () {
    $.ajax({
      url: 'delete-claim.php?id=' + claimId,
      type: 'GET',
      success: function (response) {
        if (response.includes('success')) {
          // Close the modal
          $('#deleteClaimsModal').modal('hide');
          // Optionally, you can reload or update your datatable here
          location.reload();
        } else {
          alert('Failed to delete claim.');
        }
        console.log(response);
        $('#deleteClaimsModal .modal-body').append('<p>' + response + '</p>');
      },
      error: function (xhr, status, error) {
        console.error('AJAX Error:', status, error);
        console.error('Response:', xhr.responseText);
        alert('Failed to delete claim.');
      }
    });
  });
});

// Claims datatable
if (dt_myclaims_table.length) {
  var dt_claims = dt_myclaims_table.DataTable({
    ajax: assetsPath + 'json/user-claims.json', // JSON file to add data
    columns: [
      // columns according to JSON
      { data: 'Type' },
      { data: 'Item_Name' },
      { data: 'Category_ID' },
      { data: 'Verification_Status' },
      { data: 'Type' }
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
        responsivePriority: 1,
        render: function (data, type, full, meta) {
          var $name = full['Item_Name'],
            $framework = full['Proof'],
            $images = full['Image'] ? full['Image'].split(',') : [];


            // Truncate item name to 15 characters with "..." for extras
    if ($name.length > 15) {
      $name = $name.substring(0, 15) + '...';
    }

          // Truncate proof to 15 characters with "..." for extras
          if ($framework.length > 15) {
            $framework = $framework.substring(0, 15) + '...';
          }

          var $output = '';
          if ($images.length > 0) {
            // For multiple avatar images
            $images.forEach(function($image) {
              $output +=
                '<img src="' +
                assetsPath +
                'uploads/items/' +
                $image.trim() +
                '" alt="Project Image" class="rounded-circle me-1">';
            });
          } else {
            // For Avatar badge
            var stateNum = Math.floor(Math.random() * 6) + 1;
            var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
            var $state = states[stateNum],
              $name = full['full_name'],
              $initials = $name.match(/\b\w/g) || [];
            $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
            $output = '<span class="avatar-initial rounded-circle bg-label-' + $state + '">' + $initials + '</span>';
          }

          // Creates full output for row
          var $row_output =
            '<div class="d-flex justify-content-left align-items-center">' +
            '<div class="avatar-wrapper">' +
            '<div class="avatar avatar-sm me-3">' +
            $output +
            '</div>' +
            '</div>' +
            '<div class="d-flex flex-column">' +
            '<span class="text-truncate fw-medium">' +
            $name +
            '</span>' +
            '<small class="text-muted">' +
            $framework +
            '</small>' +
            '</div>' +
            '</div>';
          return $row_output;
        }
      },
      {
        // Category
        targets: 2,
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
        // item_type
        targets: 3,
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
        // Verification Status
        targets: 4,
        render: function (data, type, full, meta) {
          var $status = full['Verification_Status'];

          return (
            '<span class="badge ' +
            verifyObj[$status].class +
            '" text-capitalized>' +
            verifyObj[$status].title +
            '</span>'
          );
        }
      },
      {
        // Actions
        targets: 5,
        title: 'Actions',
        searchable: false,
        orderable: false,
        render: function (data, type, full, meta) {
          var claimData = {
            claimId: full['Claim_ID'],
            itemId: full['Item_ID'],
            claimerId: full['Claimer_ID'],
            claimStatus: full['Claim_Status'],
            proof: full['Proof'],
            proofImage: full['Proof_Image'],
            returnedImage: full['Returned_Image'],
            remarksClaims: full['Remarks'],
            claimDate: full['Claim_Date'],
            verificationStatus: full['Verification_Status'],
            verificationDate: full['Verification_Date'],
            claimAgain: full['Claim_Again'],
            itemNameClaims: full['Item_Name'],
            itemImage: full['Image'],
            itemType: full['Type'],
            categoryId: full['Category_ID'],
            posterId: full['Poster_ID'],
            categoryNameClaims: full['Category_Name']
          };

          return (
            '<div class="d-inline-block text-nowrap">' +
            '<a href="form-edit-claim.php?claim_id=' + full['Claim_ID'] + '"><i class="ti ti-edit ti-sm me-2"></i></a>' +
            '<a href="javascript:;" class="text-body delete-record-claims" data-claim-id="' + full['Claim_ID'] + '"><i class="ti ti-trash ti-sm mx-2"></i></a>' +
            '<button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical me-2"></i></button>' +
            '<div class="dropdown-menu dropdown-menu-end m-0">' +
            '<a href="javascript:;" class="dropdown-item view-modal-trigger" ' +
              'data-claim=\'' + JSON.stringify(claimData) + '\'>' +
              'View' +
            '</a>' +
            '</div>' +
            '</div>'
          );
        }
      }
    ],
    order: [[1, 'desc']],
    dom:
      '<"d-flex justify-content-between align-items-center flex-column flex-sm-row mx-4 row"' +
      '<"col-sm-4 col-12 d-flex align-items-center justify-content-sm-start justify-content-center"l>' +
      '<"col-sm-8 col-12 d-flex align-items-center justify-content-sm-end justify-content-center"f>' +
      '>t' +
      '<"d-flex justify-content-between mx-4 row"' +
      '<"col-sm-12 col-md-6"i>' +
      '<"col-sm-12 col-md-6"p>' +
      '>',
    displayLength: 7,
    lengthMenu: [7, 10, 25, 50, 75, 100],
    language: {
      sLengthMenu: 'Show _MENU_',
      searchPlaceholder: 'Search Claims'
    },
    // For responsive popup
    responsive: {
      details: {
        display: $.fn.dataTable.Responsive.display.modal({
          header: function (row) {
            var data = row.data();
            return 'Details of ' + data['full_name'];
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
    }
  });
}

// Delete Record for claims table
$('.datatable-myclaims tbody').on('click', '.delete-record-claims', function () {
  var claimId = $(this).data('claim-id');
  $('#claimToDelete').text(claimId);
  $('#deleteClaimsModal').modal('show');

  $('#confirmDeleteClaimsBtn').off('click').on('click', function () {
    $.ajax({
      url: 'delete-claim.php?id=' + claimId,
      type: 'GET',
      success: function (response) {
        if (response.includes('success')) {
          // Close the modal
          $('#deleteClaimsModal').modal('hide');
          // Optionally, you can reload or update your datatable here
          location.reload();
        } else {
          alert('Failed to delete claim.');
        }
        console.log(response);
        $('#deleteClaimsModal .modal-body').append('<p>' + response + '</p>');
      },
      error: function (xhr, status, error) {
        console.error('AJAX Error:', status, error);
        console.error('Response:', xhr.responseText);
        alert('Failed to delete claim.');
      }
    });
  });
});


  // Filter form control to default size
  // ? setTimeout used for multilingual table initialization
  setTimeout(() => {
    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .form-select').removeClass('form-select-sm');
  }, 300);
});
