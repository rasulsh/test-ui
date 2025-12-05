# Laravel Admin Panel with Bootstrap 5

A modern admin panel for Laravel inspired by OpenCart's design, featuring a clean dashboard with header, footer, and left sidebar navigation.

## Features

- **Bootstrap 5** - Modern, responsive design
- **OpenCart-style Layout** - Familiar layout with header, footer, and left sidebar
- **Dashboard Page** - Comprehensive dashboard as welcome page after admin login
- **Responsive Design** - Works on all devices
- **Modern UI** - Clean and professional interface

## Structure

```
├── app/
│   └── Http/
│       └── Controllers/
│           └── Admin/
│               └── DashboardController.php
├── resources/
│   └── views/
│       └── admin/
│           ├── layouts/
│           │   └── app.blade.php (Main layout with header, footer, sidebar)
│           └── dashboard/
│               └── index.blade.php (Dashboard view)
├── routes/
│   └── web.php (Admin routes)
└── public/
    └── index.php (Entry point)
```

## Layout Components

### Header
- Navigation bar with logo
- Notifications icon
- User dropdown menu (Profile, Settings, Logout)

### Left Sidebar
- Dashboard
- Catalog
- Sales
- Customers
- Extensions
- Design
- Reports
- System

### Dashboard Features
- **Statistics Cards**: Total Sales, Orders, Customers, Products
- **Recent Orders Table**: Latest orders with status badges
- **Quick Stats**: Progress bars for various metrics
- **Recent Activity**: Timeline of recent events
- **Top Products**: Best-selling products list

### Footer
- Copyright information
- Year display

## Dashboard Sections

1. **Statistics Overview** - Four cards showing key metrics:
   - Total Sales ($45,231)
   - Orders (1,258)
   - Customers (3,567)
   - Products (892)

2. **Recent Orders** - Table displaying latest orders with:
   - Order ID
   - Customer name
   - Product
   - Amount
   - Status (with colored badges)

3. **Quick Stats** - Progress indicators for:
   - Sales Target (75%)
   - Customer Satisfaction (92%)
   - Order Fulfillment (88%)
   - Product Returns (12%)

4. **Recent Activity** - Timeline of recent events:
   - New orders
   - Customer registrations
   - Stock alerts

5. **Top Products** - List of best-selling products with:
   - Product name
   - Category
   - Units sold

## Technologies Used

- **Bootstrap 5.3.2** - CSS Framework
- **Bootstrap Icons 1.11.1** - Icon library
- **PHP** - Backend (Laravel-compatible structure)
- **Blade Templates** - Laravel's templating engine

## Demo

To view the admin panel, simply open `public/index.php` in your web browser or serve it using PHP's built-in server:

```bash
php -S localhost:8000 -t public
```

Then navigate to: `http://localhost:8000`

## Customization

### Changing Colors
Edit the CSS in `resources/views/admin/layouts/app.blade.php`:
- Header: `.admin-header` (currently #1e2a3a)
- Sidebar: `.admin-sidebar` (currently #2c3e50)
- Footer: `.admin-footer` (currently #1e2a3a)

### Adding Menu Items
Edit the sidebar navigation in `resources/views/admin/layouts/app.blade.php`:
```html
<a class="nav-link" href="#">
    <i class="bi bi-icon-name"></i> Menu Item
</a>
```

### Modifying Dashboard Widgets
Edit `resources/views/admin/dashboard/index.blade.php` to add/remove/modify dashboard components.

## Integration with Laravel

This structure is ready to be integrated into a Laravel application:

1. Copy the files to your Laravel project
2. Ensure routes are registered in `routes/web.php`
3. Add authentication middleware to protect admin routes
4. Replace static data with dynamic data from your database

## License

This admin panel template is open source and free to use.
