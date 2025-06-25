  <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Punjab Media Link</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-newspaper"></i><span>Manage News</span></a>
              <ul class="dropdown-menu">
                <li class=''><a class="nav-link" href="{{ route('index.news') }}">News</a></li>
                <li><a class="nav-link" href="{{ route('schedule.news') }}">Schedule</a></li>
                <li><a class="nav-link" href="{{ route('draft.news') }}">Draft</a></li>
              </ul>
            </li>

            <li><a class="nav-link" href="{{ route('view.category') }}"><i class="fas fa-list"></i> <span>Categories</span></a></li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Articals</span></a></li>



            {{-- <li class="menu-header">Starter</li> --}}

            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Setting</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="bootstrap-alert.html">Logo</a></li>
                <li><a class="nav-link" href="bootstrap-badge.html">Favicon</a></li>
                <li><a class="nav-link" href="bootstrap-breadcrumb.html">Email Settings</a></li>

              </ul>
            </li>


             <li><a class="nav-link" href="credits.html"><i class="fas fa-user-plus"></i> <span>Subscribers</span></a></li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-bullhorn"></i> <span>Advertisement</span></a></li>

          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        </aside>
      </div>
