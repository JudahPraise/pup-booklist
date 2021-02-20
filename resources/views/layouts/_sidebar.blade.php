<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            
        <img src="{{ asset('image/PUPLogo.png')}}" alt="PUPLogo" style= "height: 2.5rem; width: 2.5rem;" >
        </div>
        <div class="sidebar-brand-text mx-2">{{ config('app.name') }}</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home.page') }}">
        <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-book"></i>
            <span>Books</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{ route('book.index') }}">All Book</a>
                <a class="collapse-item" href="{{ route('book.create') }}">Add Book</a>
                
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('recommendation.bsit') }}" >
            <i class="fa fa-list"></i>
            <span>Book Recommendations</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Inventory Report -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('report') }}">
            <i class="far fa-file-pdf"></i>
            <span>Inventory Report</span></a>
    </li>
    <!-- Nav Item - Research Papers -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('research.index') }}" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fa fa-book"></i>
            <span>Research Papers</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{ route('research.index') }}">Research Papers</a>
                <a class="collapse-item" href="{{ route('research.create') }}">Add Research Paper</a>
                
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('archive.index') }}">
            <i class="fas fa-archive"></i>
            <span>Archive</span></a>
    </li>
    
    
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </li>

    <!-- Divider -->
    

    <!-- Heading -->
    

    <!-- Nav Item - Pages Collapse Menu -->
    

    <!-- Nav Item - Charts -->
    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>