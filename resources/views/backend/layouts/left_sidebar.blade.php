@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp

<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    @if(Auth::user()->usertype=='Admin')
    <li class="nav-item {{( $prefix=='/users')? 'menu-open' : ''}}">
      <a href="#" class="nav-link has-treeview">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage User
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('users.view')}}" class="nav-link {{( $route =='users.view')? 'active' : ''}}"> 
            <i class="far fa-circle nav-icon"></i>
            <p>View User</p>
          </a>
        </li>
      </ul>
    </li>
    @endif
    <li class="nav-item {{( $prefix=='/profile')? 'menu-open' : ''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Profile
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('profile.view')}}" class="nav-link {{( $route =='profile.view')? 'active' : ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Your Profile</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('profile.password_view')}}" class="nav-link {{( $route =='profile.password_view')? 'active' : ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Password Change</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- Manage Logo -->
    <li class="nav-item {{( $prefix=='/logos')? 'menu-open' : ''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Logo
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('logos.view')}}" class="nav-link {{( $route =='logos.view')? 'active' : ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Logo</p>
          </a>
        </li>
      </ul>
    </li>

  <!-- /.sidebar-menu -->
    <li class="nav-item {{( $prefix=='/sliders')? 'menu-open' : ''}}
">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Sliders
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('sliders.view')}}" class="nav-link {{( $route =='sliders.view')? 'active' : ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Slider</p>
          </a>
        </li>
      </ul>
    </li>

      <!-- /.Misstions -->
    <li class="nav-item {{( $prefix=='/misstions')? 'menu-open' : ''}}
">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Misstions
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('misstions.view')}}" class="nav-link {{( $route =='misstions.view')? 'active' : ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Misttions</p>
          </a>
        </li>
      </ul>
    </li>
<!-- Vision  -->

    <li class="nav-item {{( $prefix=='/visions')? 'menu-open' : ''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Visions
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('visions.view')}}" class="nav-link {{( $route =='visions.view')? 'active' : ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View visions</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- Manage News & Events  -->
    <li class="nav-item {{( $prefix=='/news_events')? 'menu-open' : ''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage News & Events
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('news_events.view')}}" class="nav-link {{( $route =='news_events.view')? 'active' : ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>NewsEvents view</p>
          </a>
        </li>
      </ul>
    </li>

        <!-- Manage Services  -->
    <li class="nav-item {{( $prefix=='/servics')? 'menu-open' : ''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Services
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('servics.view')}}" class="nav-link {{( $route =='servics.view')? 'active' : ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Services view</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- Manage Contacts  -->
    <li class="nav-item {{( $prefix=='/contacts')? 'menu-open' : ''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Contacts
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('contacts.view')}}" class="nav-link {{( $route =='contacts.view')? 'active' : ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Contacts view</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('contacts.communication.view')}}" class="nav-link {{( $route =='contacts.communication.view')? 'active' : ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Communication view</p>
          </a>
        </li>

      </ul>
    </li>

        <!-- Manage AboutUs  -->
    <li class="nav-item {{( $prefix=='/aboutus')? 'menu-open' : ''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage AboutUs
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('aboutus.view')}}" class="nav-link {{( $route =='aboutus.view')? 'active' : ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>AboutUs view</p>
          </a>
        </li>
      </ul>
    </li>

  </ul>
</nav>

     