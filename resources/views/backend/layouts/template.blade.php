<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.css') }}" />
  </head>
  
  <body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <div class="app-wrapper">
      
      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"><i class="bi bi-list"></i></a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
          </ul>
          
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img src="{{ asset('backend/dist/assets/img/user2-160x160.jpg') }}" class="user-image rounded-circle shadow" alt="User Image" />
                <span class="d-none d-md-inline">Admin System</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <li class="user-header text-bg-primary">
                  <img src="{{ asset('backend/dist/assets/img/user2-160x160.jpg') }}" class="rounded-circle shadow" alt="User Image" />
                  <p>Admin System - Web Developer</p>
                </li>
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                  
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-end" 
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sign out
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
          <a href="#" class="brand-link">
            <img src="{{ asset('backend/dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">AdminLTE 4</span>
          </a>
        </div>
        
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" data-accordion="false">
              
              <li class="nav-item">
                <a href="{{ route('backend.dashboard') }}" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              
              <li class="nav-item menu-open"> <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-briefcase"></i>
                  <p>
                    Riwayat Hidup
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('backend.pengalaman_kerja.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Pengalaman Kerja</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('backend.pendidikan.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Pendidikan</p>
                    </a>
                  </li>
                </ul>
              </li>
              
            </ul>
          </nav>
        </div>
      </aside>
      
      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Backend Dashboard</h3></div>
            </div>
          </div>
        </div>
        
        <div class="app-content">
          @yield('content')
        </div>
      </main>
      
      <footer class="app-footer">
        <strong>Copyright &copy; 2026 AdminLTE.</strong> All rights reserved.
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" crossorigin="anonymous"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector('.sidebar-wrapper');
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: { theme: 'os-theme-light', autoHide: 'leave', clickScroll: true }
          });
        }
      });

      // Grafik & Map (Inisialisasi hanya jika elemen ada)
      if (document.querySelector('#revenue-chart')) {
        const sales_chart = new ApexCharts(document.querySelector('#revenue-chart'), {
          series: [
            { name: 'Digital Goods', data: [28, 48, 40, 19, 86, 27, 90] },
            { name: 'Electronics', data: [65, 59, 80, 81, 56, 55, 40] }
          ],
          chart: { height: 300, type: 'area', toolbar: { show: false } },
          colors: ['#0d6efd', '#20c997'],
          stroke: { curve: 'smooth' },
          xaxis: { type: 'datetime', categories: ['2023-01-01', '2023-02-01', '2023-03-01', '2023-04-01', '2023-05-01', '2023-06-01', '2023-07-01'] },
        });
        sales_chart.render();
      }

      if (document.querySelector('#world-map')) {
        new jsVectorMap({ selector: '#world-map', map: 'world' });
      }
    </script>
    
    @yield('script')
  </body>
</html>