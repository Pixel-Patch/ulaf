 <!-- Menu -->
 <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
     <div class="container-xxl d-flex h-100">
         <ul class="menu-inner">
             <!-- Dashboards -->
             <li class="menu-item">
                 <a href="javascript:void(0)" class="menu-link ">
                     <i class="menu-icon tf-icons ti ti-smart-home"></i>
                     <div data-i18n="Dashboards">Dashboards</div>
                 </a>

             </li>

             <!-- Analytics -->
             <li class="menu-item">
                 <a href="index.php" class="menu-link">
                     <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                     <div data-i18n="Analytics">Analytics</div>
                 </a>
             </li>

             <!-- User -->
             <li class="menu-item">
                 <a href="javascript:void(0)" class="menu-link menu-toggle ">
                     <i class="menu-icon tf-icons ti ti-layout-grid-add"></i>
                     <div data-i18n="Users">Users</div>
                 </a>
                 <ul class="menu-sub">
                     <li class="menu-item">
                         <a href="admin_list.php" class="menu-link">
                             <i class="menu-icon tf-icons ti ti-mail"></i>
                             <div data-i18n="Admin User">Admin User</div>
                         </a>
                     </li>
                     <li class="menu-item">
                         <a href="end-user_list.php" class="menu-link">
                             <i class="menu-icon tf-icons ti ti-messages"></i>
                             <div data-i18n="End-User">End-User</div>
                         </a>
                     </li>
                 </ul>
             </li>

             <!-- Items -->
             <li class="menu-item">
                 <a href="item_list.php" class="menu-link  ">
                     <i class="menu-icon tf-icons ti ti-layout-grid-add"></i>
                     <div data-i18n="Items">Items</div>
                 </a>
             </li>

             <!-- Reports -->
             <li class="menu-item">
                 <a href="javascript:void(0)" class="menu-link menu-toggle">
                     <i class="menu-icon tf-icons ti ti-layout-grid-add"></i>
                     <div data-i18n="Reports">Reports</div>
                 </a>
                 <ul class="menu-sub">
                     <li class="menu-item">
                         <a href="analytics_reports.php" class="menu-link">
                             <i class="menu-icon tf-icons ti ti-mail"></i>
                             <div data-i18n="Analytics Reports">Analytics Reports</div>
                         </a>
                     </li>
                     <li class="menu-item">
                         <a href="item_reports.php" class="menu-link">
                             <i class="menu-icon tf-icons ti ti-messages"></i>
                             <div data-i18n="Item Reports">Item Reports</div>
                         </a>
                     </li>
                     <li class="menu-item">
                         <a href="user_reports.php" class="menu-link">
                             <i class="menu-icon tf-icons ti ti-messages"></i>
                             <div data-i18n="User Reports">User Reports</div>
                         </a>
                     </li>
                 </ul>
             </li>

             <!-- Settings -->
             <li class="menu-item">
                 <a href="javascript:void(0)" class="menu-link menu-toggle">
                     <i class="menu-icon tf-icons ti ti-layout-grid-add"></i>
                     <div data-i18n="Settings">Settings</div>
                 </a>
                 <ul class="menu-sub">
                     <li class="menu-item">
                         <a href="app-user-view-account.php" class="menu-link">
                             <i class="menu-icon tf-icons ti ti-mail"></i>
                             <div data-i18n="Profile Settings">Profile Settings</div>
                         </a>
                     </li>
                     <li class="menu-item">
                         <a href="category_list.php" class="menu-link">
                             <i class="menu-icon tf-icons ti ti-messages"></i>
                             <div data-i18n="Category Settings">Category Settings</div>
                         </a>
                     </li>
                 </ul>
             </li>

             <!-- Help & Support -->
             <li class="menu-item">
                 <a href="javascript:void(0)" class="menu-link menu-toggle">
                     <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                     <div data-i18n="Help & Support">Help & Support</div>
                 </a>
                 <ul class="menu-sub">
                     <!-- Tables -->
                     <li class="menu-item">
                         <a href="knowledge_base.php" class="menu-link">
                             <i class="menu-icon tf-icons ti ti-table"></i>
                             <div data-i18n="Knowledge Base">Knowledge Base</div>
                         </a>
                     </li>
                     <li class="menu-item">
                         <a href="landing-page.php#landingContact" class="menu-link ">
                             <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                             <div data-i18n="Contact Support">Contact Support</div>
                         </a>
                     </li>
                 </ul>
             </li>

             <!-- View -->
             <li class="menu-item">
                 <a href="javascript:void(0)" class="menu-link menu-toggle">
                     <i class="menu-icon tf-icons ti ti-layout-grid-add"></i>
                     <div data-i18n="View">View</div>
                 </a>
                 <ul class="menu-sub">
                     <li class="menu-item">
                         <a href="index2.php" class="menu-link">
                             <i class="menu-icon tf-icons ti ti-mail"></i>
                             <div data-i18n="Profile Settings">Admin Staff View</div>
                         </a>
                     </li>
                     <li class="menu-item">
                         <a href="../user/landing-page.php" class="menu-link">
                             <i class="menu-icon tf-icons ti ti-messages"></i>
                             <div data-i18n="End-User View">End-User View</div>
                         </a>
                     </li>
                     <li class="menu-item">
                         <a href="../user/landing-page.php" class="menu-link">
                             <i class="menu-icon tf-icons ti ti-messages"></i>
                             <div data-i18n="Visitor View">Visitor View</div>
                         </a>
                     </li>
                 </ul>
             </li>


         </ul>
         </li>
         </ul>

         <script>
             // Get the current page URL
             var currentPageUrl = window.location.href;

             // Get all the menu links
             var menuLinks = document.querySelectorAll('.menu-link');

             // Loop through each menu link
             menuLinks.forEach(function(menuLink) {
                 // Get the href attribute of the menu link
                 var menuLinkUrl = menuLink.getAttribute('href');

                 // Define an array of related URLs for each menu link
                 var relatedUrls = [];
                 if (menuLinkUrl === 'end-user_list.php') {
                     relatedUrls = ['form-add-user.php', 'form-edit-user.php'];
                 }

                 // Check if the current page URL matches the menu link URL or any of the related URLs
                 if (currentPageUrl.includes(menuLinkUrl) || relatedUrls.some(function(url) {
                         return currentPageUrl.includes(url);
                     })) {
                     // Find the parent menu-item element
                     var menuItem = menuLink.closest('.menu-item');
                     // Add the 'active' class to the parent menu-item element
                     menuItem.classList.add('active');

                     // Find the parent menu-sub element
                     var menuSub = menuItem.closest('.menu-sub');
                     // Add the 'active' class to the parent menu-sub element
                     if (menuSub) {
                         menuSub.closest('.menu-item').classList.add('active');
                     }
                 }
             });
         </script>
     </div>


 </aside>








 <!-- / Menu -->