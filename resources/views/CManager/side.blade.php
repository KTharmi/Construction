<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">HAYANY Construction <sup>CONSTRUCTION-MANAGER</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard-Construction Manager</span></a>
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
            <h6 class="collapse-header"> Employees:</h6>
            <a class="collapse-item" href="buttons.html">CREATE</a>
            <a class="collapse-item" href="cards.html">READ</a>
            <a class="collapse-item" href="cards.html">UPDATE</a>
            <a class="collapse-item" href="cards.html">DELETE</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Laborers:</h6>
            <a class="collapse-item" href="buttons.html">CREATE</a>
            <a class="collapse-item" href="cards.html">READ</a>
            <a class="collapse-item" href="cards.html">UPDATE</a>
            <a class="collapse-item" href="cards.html">DELETE</a>
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
            <h6 class="collapse-header">Construction Utilities:</h6>
            <a class="collapse-item" href="buttons.html">CREATE</a>
            <a class="collapse-item" href="cards.html">READ</a>
            <a class="collapse-item" href="cards.html">UPDATE</a>
            <a class="collapse-item" href="cards.html">DELETE</a>
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
            <a class="collapse-item" href="404.html">Labour bill</a>
            <a class="collapse-item" href="blank.html">Full bill</a>
            <a class="collapse-item" href="blank.html">Invoice</a>
            <h6 class="collapse-header">Reports:</h6> 
            <a class="collapse-item" href="404.html">Project Report</a>
            <a class="collapse-item" href="blank.html">Anual Report</a>
            <h6 class="collapse-header">Salaries:</h6> 
            <a class="collapse-item" href="404.html">Employee</a>
            <a class="collapse-item" href="blank.html">Laborers</a>
            <h6 class="collapse-header">Schedules:</h6> 
            <a class="collapse-item" href="404.html">Work Schedules</a>
            <a class="collapse-item" href="blank.html">Laborers Schedules</a>
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