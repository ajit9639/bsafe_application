  <aside class="main-sidebar sidebar-light-primary elevation-4" style="font-size: small!important;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!--logo name from tbl_school_setup table-->
      <img src="<?php echo HeadLogo;?>" alt="Kshitij Info Solutions" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Kshitij Info Solutions</span>
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
                <a href="<?php echo ClassSection;?>" class="nav-link">
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
        <li class="nav-header"><span style="font-size: 100%;color: #e83e8c;word-wrap: break-word;font-weight: bold;">Students</span></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Students Detail
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enquiry</p>
                </a>
              </li>
 

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admission
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Admission Detail</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Admission Entry</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Promotion</p>
                </a>
              </li>

            </ul>
          </li>
<!-- =================================================================== -->
        <li class="nav-header"><span style="font-size: 100%;color: #e83e8c;word-wrap: break-word;font-weight: bold;">Staff Detail</span></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Teachers Detail
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teachers Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teachers Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Routine</p>
                </a>
              </li>
            </ul>
          </li>
<!-- =================================================================== -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Staff Detail
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff Attendance</p>
                </a>
              </li>
            </ul>
          </li>
<!-- =================================================================== -->         
        <li class="nav-header"><span style="font-size: 100%;color: #e83e8c;word-wrap: break-word;font-weight: bold;">Examination</span></li>  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Examination
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Time Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marks Allocation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marks Entry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marks Sheet Print</p>
                </a>
              </li>
            </ul>
          </li>
<!-- =================================================================== -->
         
          <li class="nav-header"><span style="font-size: 100%;color: #e83e8c;word-wrap: break-word;font-weight: bold;">Accounts</span></li>
 <!-- =================================================================== -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>Fee
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Fee Head</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Fee Setup</p>
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
              <p>Sallery</p>
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
 
<!-- =================================================================== -->          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>