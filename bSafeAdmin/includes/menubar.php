  <aside class="main-sidebar sidebar-light-primary elevation-4" style="font-size: small!important;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!--logo name from tbl_school_setup table-->
      <img src="<?php echo HeadLogo;?>" alt="bSafe" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">bSafe</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo Avtar;?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="<?php echo Dashboard;?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p>
            </a>
          </li>


          <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Master Setup
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
<!-- =================================================================== -->          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Master Setup
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class & Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Routine</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Type</p>
                </a>
              </li>              
            </ul>
          </li>
<!-- =================================================================== -->          
        <li class="nav-header"><span style="font-size: 100%;color: #e83e8c;word-wrap: break-word;font-weight: bold;">Customers</span></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Parents Detail
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo ParentsInfo;?>" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Parents Info</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo ParentsEnquiryDetail;?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enquiry</p>
                </a>
              </li>
 
              <li class="nav-item">
                <a href="<?php echo VehicleAttn;?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance</p>
                </a>
              </li>    
              <li class="nav-item">
                <a href="<?php echo ReferDetail;?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Referals</p>
                </a>
              </li> 

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Teachers Detail
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo TeachersDetail;?>" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Teachers Info</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo TeachersEnquiryDetail;?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enquiry</p>
                </a>
              </li>
 

              <li class="nav-item">
                <a href="<?php echo TeachersDetail;?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo TeachersDetail;?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Referals</p>
                </a>
              </li> 

            </ul>
          </li>          
<!-- =================================================================== -->
        <li class="nav-header"><span style="font-size: 100%;color: #e83e8c;word-wrap: break-word;font-weight: bold;">Drivers</span></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Drivers Detail
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo DriversDetail;?>" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Drivers Info</p>
                </a>
              </li>              
              <li class="nav-item">
                <a href="<?php echo DriversEnquiryDetail;?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Drivers Enquiry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo DriversDetail;?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo DriversDetail;?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Referals</p>
                </a>
              </li> 
            </ul>
          </li>
 
<!-- =================================================================== -->         
        <li class="nav-header"><span style="font-size: 100%;color: #e83e8c;word-wrap: break-word;font-weight: bold;">Tracking</span></li>  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>Vehicle Tracking</p>
            </a>
          </li>
<!-- =================================================================== -->
         
          <li class="nav-header"><span style="font-size: 100%;color: #e83e8c;word-wrap: break-word;font-weight: bold;">Accounts</span></li>
 <!-- =================================================================== -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-rupee-sign nav-icon"></i>
              <p>Payment Status
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Parents Collection</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Due List</p>
                </a>
              </li>              
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Fee Collection</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Fee Report
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle text-info nav-icon"></i>
                      <p>Collection Report</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle text-danger nav-icon"></i>
                      <p>Due List</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
<!-- =================================================================== -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Sallery to Driver</p>
            </a>
          </li>  
<!-- =================================================================== -->          
          <li class="nav-item">
            <a href="pages/mailbox/mailbox.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Expenses</p>
            </a>
          </li>

<!-- =================================================================== -->
           <li class="nav-item">
            <a href="<?php echo Logout;?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i><p>Logout</p>
            </a>
          </li>
<!-- =================================================================== -->          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>