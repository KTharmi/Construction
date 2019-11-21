<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
       
        <div class="sidebar-brand-text mx-3">HAYANY Construction <sup>Owner</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard-Owner</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Employees -CRUD
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Construction</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Users:</h6>
            <a class="collapse-item" href="{{route('admin.user.create')}}">Add User</a>
            <a class="collapse-item" href="{{route('admin.user.view')}}">View Users</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Employees:</h6>
            <a class="collapse-item" href="{{route('admin.employee.create')}}">Add Employee</a>
            <a class="collapse-item" href="{{route('admin.employee.view')}}">View Employees</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Labourer:</h6>
            <a class="collapse-item" href="{{route('admin.labourer.create')}}">Add Labourer</a>
            <a class="collapse-item" href="{{route('admin.labourer.view')}}">View Labourers</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Customers:</h6>
            <a class="collapse-item" href="{{route('admin.customer.create')}}">Add Customer</a>
            <a class="collapse-item" href="{{route('admin.customer.view')}}">View Customers</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Projects:</h6>
            <a class="collapse-item" href="{{route('admin.project.create')}}">Add Project</a>
            <a class="collapse-item" href="{{route('admin.project.view')}}">View Projects</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>PROJECTS</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Material:</h6>
            <a class="collapse-item" href="{{route('admin.material.create')}}">Add Material</a>
            <a class="collapse-item" href="{{route('admin.material.view')}}">View Materials</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Tasks:</h6>
            <a class="collapse-item" href="{{route('admin.task.create')}}">Add Task</a>
            <a class="collapse-item" href="{{route('admin.task.view')}}">View Tasks</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Details
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bills:</h6> 
            <a class="collapse-item" href="404.html">Labourer bill</a>
            <a class="collapse-item" href="{{route('admin.bill.view')}}">Full bill</a>
            <a class="collapse-item" href="blank.html">Invoice</a>
            <h6 class="collapse-header">Reports:</h6> 
            <a class="collapse-item" href="404.html">Project Report</a>
            <a class="collapse-item" href="blank.html">Anual Report</a>
            <h6 class="collapse-header">Salaries:</h6> 
            <a class="collapse-item" href="404.html">Employee</a>
            <a class="collapse-item" href="blank.html">Labourers</a>
            <h6 class="collapse-header">Schedules:</h6> 
            <a class="collapse-item" href="404.html">Work Schedules</a>
            <a class="collapse-item" href="blank.html">Labourers Schedules</a>
          </div>
        </div>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>