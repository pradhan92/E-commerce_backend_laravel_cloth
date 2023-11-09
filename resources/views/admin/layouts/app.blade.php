<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="/backend/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/backend/assets/css/style.css">
    <link rel="stylesheet" href="/backend/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="/backend/assets/css/custom.css">
    <link rel="stylesheet" href="/backend/assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="/backend/assets/bundles/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="/backend/assets/bundles/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="/backend/assets/bundles/jquery-selectric/selectric.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel='shortcut icon' type='image/x-icon' href='/backend/assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="/#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="power"></i>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">{{Auth::guard('admin')->user()->name}}</div>
              <a href="#" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <form method="POST" action="{{ route('admin.logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('admin.logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <x-sidebar/>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        {{$slot}}
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <x-setting-sidebar/>
        </div>
      </div>
      <x-footer/>
    </div>
  </div>
 <!-- General JS Scripts -->
 <script src="/backend/assets/js/app.min.js"></script>
 <!-- JS Libraies -->
 <script src="/backend/assets/bundles/apexcharts/apexcharts.min.js"></script>
 <!-- Page Specific JS File -->
 <script src="/backend/assets/js/page/index.js"></script>
 <!-- Template JS File -->
 <script src="/backend/assets/js/scripts.js"></script>
 <!-- Custom JS File -->
 <script src="/backend/assets/js/custom.js"></script>
 <script src="abackend/ssets/js/app.min.js"></script>
 <!-- JS Libraies -->
 <script src="/backend/assets/bundles/summernote/summernote-bs4.js"></script>
 <script src="/backend/assets/bundles/codemirror/lib/codemirror.js"></script>
 <script src="/backend/assets/bundles/codemirror/mode/javascript/javascript.js"></script>
 <script src="/backend/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
 <script src="/backend/assets/bundles/ckeditor/ckeditor.js"></script>
 <!-- Page Specific JS File -->
 <script src="/backend/assets/js/page/ckeditor.js"></script>
 <!-- Template JS File -->
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 {{-- for sub category_select --}}
 <script>
     $(document).ready(function() {
         $('.select2').select2();
     });
 </script>
 <script>
  $('#is_parent').change(function(){
    var is_checked=$('#is_parent').prop('checked');
    // alert(is_checked);
    if(is_checked){
      $('#parent_cat_div').addClass('d-none');
      $('#parent_cat_div').val('');
    }
    else{
      $('#parent_cat_div').removeClass('d-none');
    }
  })
</script>
</body>
</html>
