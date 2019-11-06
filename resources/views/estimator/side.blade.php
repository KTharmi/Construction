<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
        <div class="sidebar-brand-text mx-3">HAYANY Construction <sup>Estimator</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard-Estimator</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span> Schedule of Rates</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Materials:</h6>
            <a class="collapse-item" href="{{route('estimator.material.create')}}">CREATE</a>
            <a class="collapse-item" href="{{route('estimator.material.view')}}">READ</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Labourers:</h6>
            <a class="collapse-item" href="{{route('estimator.labourer.create')}}">CREATE</a>
            <a class="collapse-item" href="{{route('estimator.labourer.view')}}">READ</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Tasks:</h6>
            <a class="collapse-item" href="{{route('estimator.task.create')}}">CREATE</a>
            <a class="collapse-item" href="{{route('estimator.task.view')}}">READ</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Equipments:</h6>
            <a class="collapse-item" href="{{route('estimator.equipment.create')}}">CREATE</a>
            <a class="collapse-item" href="{{route('estimator.equipment.view')}}">READ</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Cost Estimating</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Material Estimating:</h6>
            <a class="collapse-item" href="{{route('estimator.estimate.material')}}">CREATE</a>
            <h6 class="collapse-header">Labourer Estimating:</h6>
            <a class="collapse-item" href="{{route('estimator.estimate.labourer')}}">CREATE</a>
            <h6 class="collapse-header">Total Estimating:</h6>
            <a class="collapse-item" href="{{route('estimator.estimate.totalcost')}}">CREATE</a>
            <h6 class="collapse-header">Total Estimating:</h6>
            <a class="collapse-item" href="{{route('estimator.estimate.selection')}}">SELECTION</a>
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
            <h6 class="collapse-header">Project Details:</h6> 
            <a class="collapse-item" href="{{route('estimator.project.view')}}">Project List</a>
          </div>
        </div>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bills:</h6> 
            <a class="collapse-item" href="{{route('estimator.bill.labourerCost')}}">labourer cost bill</a>
            <a class="collapse-item" href="{{route('estimator.bill.invoice')}}">Full bill</a>
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