<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - Dashboard</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        /* Header Styles */
        .admin-header {
            background-color: #1e2a3a;
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .admin-header .navbar-brand {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }
        
        .admin-header .nav-link {
            color: rgba(255,255,255,0.8);
        }
        
        .admin-header .nav-link:hover {
            color: white;
        }
        
        /* Sidebar Styles */
        .admin-sidebar {
            background-color: #2c3e50;
            min-height: calc(100vh - 130px);
            padding: 20px 0;
        }
        
        .admin-sidebar .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 12px 20px;
            margin: 2px 0;
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }
        
        .admin-sidebar .nav-link:hover,
        .admin-sidebar .nav-link.active {
            background-color: #34495e;
            color: white;
            border-left-color: #3498db;
        }
        
        .admin-sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
        }
        
        /* Content Area */
        .admin-content {
            padding: 25px;
            min-height: calc(100vh - 130px);
        }
        
        /* Footer Styles */
        .admin-footer {
            background-color: #1e2a3a;
            color: white;
            padding: 15px 0;
            text-align: center;
            margin-top: auto;
        }
        
        /* Card Styles */
        .dashboard-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        .stat-card {
            padding: 20px;
        }
        
        .stat-icon {
            font-size: 2.5rem;
            opacity: 0.8;
        }
        
        /* Breadcrumb */
        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 20px;
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <!-- Header -->
    <header class="admin-header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
                    <i class="bi bi-speedometer2"></i> Admin Panel
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-bell"></i> Notifications
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle"></i> Admin
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content Area -->
    <div class="container-fluid">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-2 p-0 admin-sidebar">
                <nav class="nav flex-column">
                    <a class="nav-link active" href="#">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                    <a class="nav-link" href="#">
                        <i class="bi bi-folder"></i> Catalog
                    </a>
                    <a class="nav-link" href="#">
                        <i class="bi bi-cart"></i> Sales
                    </a>
                    <a class="nav-link" href="#">
                        <i class="bi bi-people"></i> Customers
                    </a>
                    <a class="nav-link" href="#">
                        <i class="bi bi-truck"></i> Extensions
                    </a>
                    <a class="nav-link" href="#">
                        <i class="bi bi-palette"></i> Design
                    </a>
                    <a class="nav-link" href="#">
                        <i class="bi bi-bar-chart"></i> Reports
                    </a>
                    <a class="nav-link" href="#">
                        <i class="bi bi-gear"></i> System
                    </a>
                </nav>
            </div>

            <!-- Content Area -->
            <div class="col-md-10 admin-content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="admin-footer">
        <div class="container-fluid">
            <p class="mb-0">&copy; {{ date('Y') }} Admin Panel. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>
