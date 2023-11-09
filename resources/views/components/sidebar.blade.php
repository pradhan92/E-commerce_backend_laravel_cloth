<aside id="sidebar-wrapper">
    <div class="sidebar-brand py-3">
      <a href="#">
        {{-- <img alt="image" src="/backend/assets/img/shouselogo.jpg" class="header-logo" /> --}}
        <h4>Cloths House</h4>
         <span
          class="logo-name"></span>
      </a>
    </div>
    <ul class="sidebar-menu">
        <li class="dropdown active">
        <a href="{{route('admin.dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Main</li>
       <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="image"></i><span>Banners</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('banner.index')}}">Banners</a></li>
         <li><a class="nav-link" href="{{route('banner.create')}}">Add Banners</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="settings"></i><span>Company</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('company.index')}}">Company</a></li>
         <li><a class="nav-link" href="{{route('company.create')}}">Add Company</a></li>
        </ul>
      </li>
      <li class="menu-header">shop Product</li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="map"></i><span>Category</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('category.index')}}">Categories</a></li>
         <li><a class="nav-link" href="{{route('category.create')}}">Add Category</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="aperture"></i><span>Products</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('product.index')}}">Products</a></li>
         <li><a class="nav-link" href="{{route('product.create')}}">Add Product</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="briefcase"></i><span>Brands</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('brand.index')}}">Brands</a></li>
         <li><a class="nav-link" href="{{route('brand.create')}}">Add Brands</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="briefcase"></i><span>Colors</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('color.index')}}">Colors</a></li>
         <li><a class="nav-link" href="{{route('color.create')}}">Add Colors</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="briefcase"></i><span>Sizes</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('size.index')}}">Sizes</a></li>
         <li><a class="nav-link" href="{{route('size.create')}}">Add Sizes</a></li>
        </ul>
      </li>
      <li class="menu-header">Customers order</li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="airplay"></i><span>Orders</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('order.index')}}">Order Billing</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="briefcase"></i><span>Review</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="#">Review</a></li>
        </ul>
      </li>
       <li class="menu-header">General Setting</li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="clipboard"></i><span>Coupon</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="#">Coupon</a></li>
         <li><a class="nav-link" href="#">Add Coupon</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="user"></i><span>Users</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('users.index')}}">Users</a></li>
        </ul>
      </li>
    </ul>
  </aside>
