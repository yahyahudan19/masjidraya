<div class="left side-menu">
  <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
      <i class="ion-close"></i>
  </button>

  <!-- LOGO -->
  <div class="topbar-left">
      <div class="text-center bg-logo">
        @if(auth()->user()->role == 'Admin')
          <a href="#" class="logo"><i class="mdi mdi-account text-warning"></i> MRA-Admin </a>
        @else 
          <a href="#" class="logo"><i class="mdi mdi-account text-success"></i> MRA-User </a>
        @endif  
          <!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
      </div>
  </div>
  <div class="sidebar-user">
    <img src="{{asset('images/profile/'.auth()->user()->photo)}}" alt="user" class="rounded-circle img-thumbnail mb-1">
      <h6 class="">{{auth()->user()->name}}</h6> 
      <p class=" online-icon text-dark"><i class="mdi mdi-record text-success"></i>online</p>                    
      <ul class="list-unstyled list-inline mb-0 mt-2">
          <li class="list-inline-item">
              <a href="/admin/profile/{{auth()->user()->id}}" class="" data-toggle="tooltip" data-placement="top" title="Profile"><i class="dripicons-user text-purple"></i></a>
          </li>
          <li class="list-inline-item">
              <a href="#" class="" data-toggle="tooltip" data-placement="top" title="Settings"><i class="dripicons-gear text-dark"></i></a>
          </li>
          <li class="list-inline-item">
              <a href="/logout" class="" data-toggle="tooltip" data-placement="top" title="Log out"><i class="dripicons-power text-danger"></i></a>
          </li>
      </ul>           
  </div>
  @if(auth()->user()->role == 'Admin')
  <div class="sidebar-inner slimscrollleft">

      <div id="sidebar-menu">
          <ul>
              <li class="menu-title">Main</li>

              <li>
                  <a href="/dashboard" class="waves-effect">
                      <i class="dripicons-device-desktop"></i>
                      <span> Dashboard</span>
                  </a>
              </li>
              
              <li class="menu-title">Manajemen</li>
              <li>
                <a href="/admin/kegiatan" class="waves-effect"><i class="dripicons-view-list-large"></i><span> Kegiatan </span></a>
              </li>
              <li>
                <a href="/admin/artikel" class="waves-effect"><i class="dripicons-document"></i><span> Artikel </span></a>
              </li>
              <li>
                <a href="/admin/gallery" class="waves-effect"><i class="dripicons-photo"></i><span> Gallery </span></a>
              </li>
              <li>
                <a href="/admin/user" class="waves-effect"><i class="dripicons-user-group"></i><span> Akun </span></a>
              </li>

              <li class="menu-title">Setting</li>

              <li>
                <a href="/admin/profile/{{auth()->user()->id}}" class="waves-effect"><i class="dripicons-user"></i><span> Profile </span></a>
             </li>

          </ul>
      </div>
      <div class="clearfix"></div>
  </div> <!-- end sidebarinner -->
  @else
  <div class="sidebar-inner slimscrollleft">

    <div id="sidebar-menu">
        <ul>
            <li class="menu-title">Main</li>

            <li>
                <a href="/dashboard" class="waves-effect">
                    <i class="dripicons-device-desktop"></i>
                    <span> Dashboard</span>
                </a>
            </li>
            
            <li class="menu-title">Manajemen</li>
            
            <li>
              <a href="/user/artikel" class="waves-effect"><i class="dripicons-document"></i><span> Artikel </span></a>
            </li>
            <li class="menu-title">Setting</li>
            <li>
              <a href="/user/profile/{{auth()->user()->id}}" class="waves-effect"><i class="dripicons-user"></i><span> Profile </span></a>
           </li>

        </ul>
    </div>
    <div class="clearfix"></div>
</div> <!-- end sidebarinner -->
  @endif
</div>