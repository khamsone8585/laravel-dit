<header class="main-header-top hidden-print">
    <a href="" class="logo"><img class="img-fluid able-logo" src="{{asset('logo.png')}}" alt="Theme-logo"></a>
    <nav class="navbar navbar-static-top">
       <!-- Sidebar toggle button-->
       <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>

       <!-- Navbar Right Menu-->
       <div class="navbar-custom-menu f-right">
          <ul class="top-nav">
             <!--Notification Menu-->
             <!-- User Menu-->
             <li class="dropdown">
                <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                   <span><img class="img-circle " src="{{asset('backend/assets/images/avatar-1.png')}}" style="width:40px;" alt="User Image"></span>
                   <span>{{ Auth::user()->name }}<i class=" icofont icofont-simple-down"></i></span>

                </a>
                <ul class="dropdown-menu settings-menu">
                   <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                   <li><a href="{{route('admin.logout')}}"><i class="icon-logout"></i> Logout</a></li>

                </ul>
             </li>
          </ul>
       </div>
    </nav>
 </header>
