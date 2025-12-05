<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'پنل مدیریت') - داشبورد</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    
    <style>
        body {
            font-family: 'Tahoma', 'Segoe UI', Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            direction: rtl;
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
            border-right: 3px solid transparent;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            cursor: pointer;
        }
        
        .admin-sidebar .nav-link:hover,
        .admin-sidebar .nav-link.active {
            background-color: #34495e;
            color: white;
            border-right-color: #3498db;
        }
        
        .admin-sidebar .nav-link i {
            margin-left: 10px;
            width: 20px;
        }
        
        .admin-sidebar .nav-link .bi-chevron-down,
        .admin-sidebar .nav-link .bi-chevron-left {
            margin-left: auto;
            margin-right: 0;
            font-size: 0.8rem;
            transition: transform 0.3s;
        }
        
        .admin-sidebar .nav-link.expanded .bi-chevron-down {
            transform: rotate(180deg);
        }
        
        /* Submenu Styles */
        .submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            background-color: #23313f;
        }
        
        .submenu.show {
            max-height: 2000px;
        }
        
        .submenu .nav-link {
            padding-right: 40px;
            font-size: 0.9rem;
            border-right: none;
        }
        
        .submenu .nav-link:hover {
            background-color: #2c3e50;
        }
        
        /* Third level submenu */
        .submenu .submenu .nav-link {
            padding-right: 60px;
            font-size: 0.85rem;
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
        
        /* RTL specific adjustments */
        .navbar-nav {
            margin-left: 0 !important;
            margin-right: auto !important;
        }
        
        .ms-auto {
            margin-right: auto !important;
            margin-left: 0 !important;
        }
        
        .me-3 {
            margin-left: 1rem !important;
            margin-right: 0 !important;
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
                    <i class="bi bi-speedometer2"></i> پنل مدیریت
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-bell"></i> اعلان‌ها
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle"></i> مدیر
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> پروفایل</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> تنظیمات</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> خروج</a></li>
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
                        <span><i class="bi bi-speedometer2"></i> داشبورد</span>
                    </a>
                    
                    <!-- Catalog with 2 levels -->
                    <a class="nav-link" href="#" data-toggle-submenu="catalogMenu">
                        <span><i class="bi bi-folder"></i> کاتالوگ</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div id="catalogMenu" class="submenu">
                        <a class="nav-link" href="#">
                            <span><i class="bi bi-tags"></i> دسته‌بندی‌ها</span>
                        </a>
                        
                        <!-- Products with 3rd level -->
                        <a class="nav-link" href="#" data-toggle-submenu="productsMenu">
                            <span><i class="bi bi-box"></i> محصولات</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div id="productsMenu" class="submenu">
                            <a class="nav-link" href="#">
                                <span><i class="bi bi-plus-circle"></i> افزودن محصول</span>
                            </a>
                            <a class="nav-link" href="#">
                                <span><i class="bi bi-list-ul"></i> لیست محصولات</span>
                            </a>
                            <a class="nav-link" href="#">
                                <span><i class="bi bi-star"></i> محصولات ویژه</span>
                            </a>
                        </div>
                        
                        <a class="nav-link" href="#">
                            <span><i class="bi bi-percent"></i> تخفیف‌ها</span>
                        </a>
                        <a class="nav-link" href="#">
                            <span><i class="bi bi-card-text"></i> نظرات</span>
                        </a>
                    </div>
                    
                    <!-- Sales with 2 levels -->
                    <a class="nav-link" href="#" data-toggle-submenu="salesMenu">
                        <span><i class="bi bi-cart"></i> فروش</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div id="salesMenu" class="submenu">
                        <a class="nav-link" href="#">
                            <span><i class="bi bi-receipt"></i> سفارشات</span>
                        </a>
                        
                        <!-- Invoices with 3rd level -->
                        <a class="nav-link" href="#" data-toggle-submenu="invoicesMenu">
                            <span><i class="bi bi-file-text"></i> فاکتورها</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div id="invoicesMenu" class="submenu">
                            <a class="nav-link" href="#">
                                <span><i class="bi bi-file-earmark-plus"></i> فاکتور جدید</span>
                            </a>
                            <a class="nav-link" href="#">
                                <span><i class="bi bi-list"></i> لیست فاکتورها</span>
                            </a>
                            <a class="nav-link" href="#">
                                <span><i class="bi bi-printer"></i> چاپ فاکتور</span>
                            </a>
                        </div>
                        
                        <a class="nav-link" href="#">
                            <span><i class="bi bi-arrow-return-left"></i> مرجوعی</span>
                        </a>
                        <a class="nav-link" href="#">
                            <span><i class="bi bi-credit-card"></i> پرداخت‌ها</span>
                        </a>
                    </div>
                    
                    <a class="nav-link" href="#">
                        <span><i class="bi bi-people"></i> مشتریان</span>
                    </a>
                    <a class="nav-link" href="#">
                        <span><i class="bi bi-truck"></i> افزونه‌ها</span>
                    </a>
                    <a class="nav-link" href="#">
                        <span><i class="bi bi-palette"></i> طراحی</span>
                    </a>
                    <a class="nav-link" href="#">
                        <span><i class="bi bi-bar-chart"></i> گزارشات</span>
                    </a>
                    
                    <!-- System with 2 levels -->
                    <a class="nav-link" href="#" data-toggle-submenu="systemMenu">
                        <span><i class="bi bi-gear"></i> سیستم</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div id="systemMenu" class="submenu">
                        <a class="nav-link" href="#">
                            <span><i class="bi bi-gear-fill"></i> تنظیمات</span>
                        </a>
                        
                        <!-- Settings with 3rd level -->
                        <a class="nav-link" href="#" data-toggle-submenu="settingsMenu">
                            <span><i class="bi bi-sliders"></i> پیکربندی</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div id="settingsMenu" class="submenu">
                            <a class="nav-link" href="#">
                                <span><i class="bi bi-shop"></i> تنظیمات فروشگاه</span>
                            </a>
                            <a class="nav-link" href="#">
                                <span><i class="bi bi-envelope"></i> تنظیمات ایمیل</span>
                            </a>
                            <a class="nav-link" href="#">
                                <span><i class="bi bi-shield-check"></i> تنظیمات امنیتی</span>
                            </a>
                        </div>
                        
                        <a class="nav-link" href="#">
                            <span><i class="bi bi-people-fill"></i> کاربران</span>
                        </a>
                        <a class="nav-link" href="#">
                            <span><i class="bi bi-cloud-arrow-up"></i> پشتیبان‌گیری</span>
                        </a>
                    </div>
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
            <p class="mb-0">&copy; {{ date('Y') }} پنل مدیریت. تمامی حقوق محفوظ است.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
    <script>
        // Use event delegation for menu toggling
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.admin-sidebar').addEventListener('click', function(event) {
                const link = event.target.closest('[data-toggle-submenu]');
                if (link) {
                    event.preventDefault();
                    event.stopPropagation();
                    
                    const menuId = link.getAttribute('data-toggle-submenu');
                    const submenu = document.getElementById(menuId);
                    
                    if (submenu) {
                        // Toggle the submenu
                        submenu.classList.toggle('show');
                        
                        // Toggle the expanded class on the link for chevron rotation
                        link.classList.toggle('expanded');
                    }
                }
            });
        });
    </script>
    
    @yield('scripts')
</body>
</html>
